<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // 登录界面展示
    public function index() {
        return view('admin.login.index');
    }
    
    // 登录处理
    public function login(LoginRequest $request) {
        if((new User())->login($request->all())){
            dd(session('admin.user'));
        }else{
            return redirect()->back()->with('error','登录失败请重新登录');
        }
    }
}
