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

// Site route //指定路由名称到控制器动作
Route::get('/',['uses' => 'HomeController@index', 'as' => 'index']);

Auth::routes();


