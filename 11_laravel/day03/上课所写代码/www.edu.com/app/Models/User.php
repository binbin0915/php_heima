<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// 引入hash门面
use Hash;

class User extends Model {

    protected $guarded = [];

    /**
     * 用户登录
     * @param array $data
     * @return bool
     */
    public function login(array $data) {
        // 根据用户名来查询用户是否存在
        $info = self::where('username', $data['username'])->first();
        // 此用户不存在
        if (!$info) {
            return false;
        }
        // 密码不正确
        if (!Hash::check($data['password'], $info->password)) {
            return false;
        }

        // 写入session
        session(['admin.user' => $info]);
        return true;
    }

}
