<?php
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "web", "auth" and "admin" middleware groups. Enjoy building your Admin!
|
*/

/**
 * admin url
 */
Route::get('/',['uses' => 'AdminController@index','as' => 'admin.index']);


/**
 * admin uri
 */
Route::get('/posts',['uses' => 'AdminController@posts','as' => 'admin.posts']);
Route::get('/comments', ['uses' => 'AdminController@comments', 'as' => 'admin.comments']);
Route::get('/tags', ['uses' => 'AdminController@tags', 'as' => 'admin.tags']);
Route::get('/users', ['uses' => 'AdminController@users', 'as' => 'admin.users']);
//Route::get('/pages', ['uses' => 'AdminController@pages', 'as' => 'admin.pages']);
Route::get('/categories', ['uses' => 'AdminController@categories', 'as' => 'admin.categories']);
//Route::get('/images', ['uses' => 'ImageController@images', 'as' => 'admin.images']);
//Route::get('/files', ['uses' => 'FileController@files', 'as' => 'admin.files']);