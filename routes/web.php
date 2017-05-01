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

/*
	Root Web
*/

Route::get('/', 'HomeController@index');

Route::get('/post', 'PostsController@index');

Route::get('/post/{id}', 'PostsController@show');

// Route::get('/post/{slug}', 'PostsController@slug');