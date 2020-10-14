<?php


// 后台管理
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){

    // 登录显示admin/login
    Route::get('login','LoginController@index')->name('admin.login.login');
    // 登录处理
    Route::post('login','LoginController@login')->name('admin.login.login');


});

