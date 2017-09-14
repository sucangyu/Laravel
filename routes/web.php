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
// Auth::routes();

// Route::get('/home', 'HomeController@index');
Route::get('/login','SessionsController@create');//登录路由
Route::post('/login','SessionsController@store');//用户点击登录后，路由分发该请求：
Route::get('/logout','SessionsController@destroy');//登出
Route::get('/register','RegistrationController@create');//注册路由
Route::post('/register','RegistrationController@store');//注册提交
Route::get('/posts','PostsController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});


