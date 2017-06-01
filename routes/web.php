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
Route::get('/blog/{id}',['uses' => 'PostController@show','as' => 'post.show']);


//category
Route::get('/category/{name}',['uses' => 'CategoryController@show','as' => 'category.show']);

//tag
Route::get('/tag/{name}',['uses' => 'TagController@show', 'as' => 'tag.show']);


//user
Route::get('/user/{name}',['uses' => 'UserController@show','as' => 'user.show']);