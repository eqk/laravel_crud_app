<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'], 'as' => 'admin.'], function()
{
	Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);  
	Route::get('/crud/', ['as' => 'crud', 'uses' => 'HomeController@crud']);  
	Route::resource('posts', 'PostsController');
    
});
