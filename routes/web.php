<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::any('login',"Admin\AdminController@login");//登陆
//用户登录状态下可以访问的页面
Route::group(['middleware' => 'check.login'], function(){
    Route::any('exit',"Admin\AdminController@login_out");//退出
    Route::any('index',"Admin\AdminController@index");//跳转首页
    Route::any('welcome',"Admin\AdminController@welcome");//首页桌面
});
