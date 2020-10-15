# JWT

> JSON Web Token（JWT）是目前最流行的跨域身份验证解决方案 
>
> JWT的原则是在服务器身份验证之后，将生成一个JSON对象并将其发送回用户 



### 通过composer安装

运行以下命令以获取最新版本：

```
composer require tymon/jwt-auth
```

------

### 添加服务提供商（Laravel 5.4或更低版本）

将服务提供程序添加到配置文件中的`providers`数组，`config/app.php`如下所示：

```
'providers' => [

    ...

    Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
]
```

------

### 发布配置

运行以下命令以发布程序包配置文件：

```
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
```

您现在应该有一个`config/jwt.php`文件，允许您配置此程序包的基础知识。

------

### 生成密钥

我已经包含了一个帮助器命令来为您生成一个键：

```
php artisan jwt:secret
```

这将`.env`使用类似的内容更新您的文件`JWT_SECRET=foobar`

它是用于签署令牌的密钥。具体如何发生取决于您选择使用的算法。





### 更新您的用户模型

首先，您需要`Tymon\JWTAuth\Contracts\JWTSubject`在User模型上实现合同，这需要您实现2个方法`getJWTIdentifier()`和`getJWTCustomClaims()`。

下面的例子可以让你了解它的外观。显然，您应该根据自己的需要进行必要的更改。

```
<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
```

### 配置Auth防护

*注意：这仅适用于使用Laravel 5.2及更高版本的情况。*

在`config/auth.php`文件内部，您需要进行一些更改以配置Laravel以使用`jwt`防护来为您的应用程序身份验证提供支持。

对文件进行以下更改：

```
'defaults' => [
    'guard' => 'api',
    'passwords' => 'users',
],

...

'guards' => [
    'api' => [
        'driver' => 'jwt',
        'provider' => 'users',
    ],
],
```

在这里，我们告诉`api`警卫使用`jwt`驱动程序，我们将`api`防护设置为默认值。

我们现在可以使用Laravel内置的Auth系统，jwt-auth在幕后工作！

### 添加一些基本认证路由

首先让我们添加一些路由`routes/api.php`如下：

```
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
```

### 创建AuthController

然后`AuthController`手动或通过运行artisan命令创建：

```
php artisan make:controller AuthController
```

然后添加以下内容：

```
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
```

您现在应该能够`http://example.dev/auth/login`使用一些有效的凭据POST到登录端点（例如），并看到如下响应：

```
{
    "access_token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiYWRtaW4iOnRydWV9.TJVA95OrM7E2cBab30RMHrHDcEfxjoYZgeFONFh7HgQ",
    "token_type": "bearer",
    "expires_in": 3600
}
```

然后，此令牌可用于向您的应用程序发出经过身份验证的请求。

### 经过身份验证的请

有很多方法可以通过http发送令牌：

**授权标头**

`Authorization: Bearer eyJhbGciOiJIUzI1NiI...`

**查询字符串参数**

`http://example.dev/me?token=eyJhbGciOiJIUzI1NiI...`