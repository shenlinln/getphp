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
Route::match(['get','post'],'login',"LoginController@Login")->name('users_login');//login
Route::get('captcha',"LoginController@captcha");//验证码
Route::post('verificationMessage',"LoginController@verificationMessage");//短信验证码

Route::match(['get','post'],'reg',"LoginController@Registered")->name('users_reg');//注册
Route::match(['get','post'],'mailbox_verification',"LoginController@Mailbox_Verification")->name('mail_verif');//邮箱验证
Route::post('mailbox_code',"LoginController@Mailbox_Code");


Route::get('/',"IndexController@index");
Route::get('detail/{id}.html',"IndexController@detail")->where(['id' => '[0-9]+'])->name('i_detail');//首页内页内容
Route::post('CommitPost',"IndexController@CommitPost");//评论提交
Route::post('ReplyPost',"IndexController@ReplyPost");

Route::get('news_detail/{id}.html',"NewsController@Detail")->where(['id' => '[0-9]+'])->name('n_detail'); //业界资讯详细页




Route::get('php_index',"ApplicationController@Index")->name('p_index');//php应用首页
Route::get('php_detail/{id}.html',"ApplicationController@Detail")->where(['id' => '[0-9]+'])->name('p_detail');//php应用首页
Route::get('news_index',"NewsController@News_Index")->name('n_index');//资讯首页
Route::get('captcha',"NewsController@captcha");//新闻发布验证码
Route::get('Server',"WSController@Server");
Route::get('Chat',"WSController@Chat");



Route::get('personal_index',"PersonalCenterController@index");
Route::get('member_center',"MemberCenterController@index");

});
//后台管理
 Route::namespace('Admin')->group(function () {
   Route::match(['get', 'post'],'admin/gkwbackstage-login',"AdminLoginController@Admin_Login");
   Route::post('admin/users_add',"AdminLoginController@Admin_Users_Add");
        
    });
Route::group(['namespace' => 'Admin','middleware' => ['admin.login']], function(){
     Route::get('admin/main',"AdminMainController@Admin_Main");
     
     Route::get('admin/advertising_list',"AdminAdvertisingController@AdminAdvertisingList")->name('a_advertising_list');
     Route::match(['get', 'post'],'admin/advertising_add',"AdminAdvertisingController@AdminAdvertisingAdd")->name('a_advertising_add');
     Route::get('admin/news_list',"AdminNewsController@Admin_News_List")->name('a_news_list');
     Route::get('admin/release_list',"AdminReleaseController@Admin_Release_List")->name('a_release_list');
     Route::match(['get', 'post'],'admin/news_add',"AdminNewsController@Admin_News_Add")->name('a_news_add');
     Route::post('admin/UploadImageFile',"AdminNewsController@UploadImageFile");
     
     Route::match(['get', 'post'],'admin/release_add',"AdminReleaseController@Admin_Release_Add")->name('a_release_add');
     Route::get('admin/release_edit/{id}',"AdminReleaseController@Admin_Release_Edit")->where(['id' => '[0-9]+'])->name('a_release_edit');
     
     Route::get('admin/release_detail/{id}',"AdminReleaseController@Admin_Release_Detail")->where(['id' => '[0-9]+'])->name('a_release_detail');
     Route::get('admin/application_list',"AdminApplicationController@Admin_Application_List")->name('a_applic_list');
     Route::match(['get', 'post'],'admin/application_add',"AdminApplicationController@Admin_Application_add")->name('a_applic_add');
     
     Route::get('admin/technology_list',"AdminTechnologyController@Admin_Technology_List")->name('a_technology_list');
     Route::match(['get', 'post'],'admin/technology_add',"AdminTechnologyController@Admin_Technology_Add")->name('a_technology_add');
     
     
            
});
