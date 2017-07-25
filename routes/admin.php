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

Route::get('/',['uses' => 'AdminController@index','as' => 'admin.index']);
