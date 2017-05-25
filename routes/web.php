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
//User Auth
Auth::routes();

// Site route //指定路由名称到控制器动作
Route::get('/',['uses' => 'HomeController@index', 'as' => 'index']);


//Post
Route::get('/blog',['uses' => 'PostController@index', 'as' => 'post.index']);

