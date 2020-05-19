<?php

use Illuminate\Support\Facades\Route;

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
//web前台
Route::namespace('Web')->group(function () {
Route::get('login',"LoginController@Login")->name('users_login');//login
Route::get('reg',"LoginController@Registered")->name('users_reg');//login
Route::get('/',"IndexController@index");
Route::get('detail/{id}.html',"IndexController@detail")->where(['id' => '[0-9]+'])->name('i_detail');;//首页内页内容
Route::get('news_detail/{id}.html',"NewsController@Detail")->where(['id' => '[0-9]+'])->name('n_detail'); //首页列表详细页
Route::get('news_index',"NewsController@News_Index")->name('n_index');//资讯首页

});
//后台管理
 Route::namespace('Admin')->group(function () {
   Route::match(['get', 'post'],'admin/login',"AdminLoginController@Admin_Login");
   Route::post('admin/users_add',"AdminLoginController@Admin_Users_Add");
        
    });
Route::group(['namespace' => 'Admin','middleware' => ['admin.login']], function(){
     Route::get('admin/main',"AdminMainController@Admin_Main");
     Route::get('admin/news_list',"AdminNewsController@Admin_News_List")->name('a_news_list');
     Route::get('admin/release_list',"AdminReleaseController@Admin_Release_List")->name('a_release_list');
     Route::match(['get', 'post'],'admin/news_add',"AdminNewsController@Admin_News_Add")->name('a_news_add');
     Route::match(['get', 'post'],'admin/release_add',"AdminReleaseController@Admin_Release_Add")->name('a_release_add');
     Route::get('admin/release_detail/{id}',"AdminReleaseController@Admin_Release_Detail")->where(['id' => '[0-9]+'])->name('a_release_detail');
            
});
