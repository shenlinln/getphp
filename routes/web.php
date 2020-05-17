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
Route::namespace('Web')->group(function () {
Route::get('/',"IndexController@index");
Route::get('news_detail/{id}.html',"IndexController@Detail")->where(['id' => '[0-9]+'])->name('i_detail'); //首页列表详细页
Route::get('news_index',"NewsController@News_Index")->name('n_index');//资讯首页
});
