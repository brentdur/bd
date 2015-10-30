<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('foo', 'FooController@foo');

Route::get('lists', 'PagesController@lists');

Route::get('/', 'PagesController@home');
Route::get('/', function () {
    return view('welcome');
});


Route::resource('articles', 'ArticlesController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
	]);

Route::get('tags/{tag}', 'TagsController@show')