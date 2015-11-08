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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('suitecrm/connect', 'SuiteCrmAuth@Auth');

Route::get('admin', 'AdminController@index');
Route::get('admin/connector', 'AdminController@connector');
Route::post('admin/connector', 'AdminController@store_connector');

Route::get('admin/users', 'UserController@index');
Route::get('admin/users/create', 'UserController@create');
Route::post('admin/users/create', 'UserController@store');

Route::get('admin/users/edit/{id}', 'UserController@edit');
Route::get('admin/users/remove/{id}', 'UserController@destroy');
Route::patch('admin/users/updateUser/{id}', 'UserController@updateUser');

Route::get('cases', 'CasesController@index');
Route::get('cases/create', 'CasesController@create');
Route::get('cases/read', 'CasesController@read');

Route::post('cases/store', 'CasesController@store');

Route::get('meetings', 'MeetingsController@index');
Route::get('meetings/create', 'MeetingsController@create');
Route::post('meetings/create', 'MeetingsController@store');
Route::get('meetings/read', 'MeetingsController@show');

Route::get('profile', 'UserController@profile');
Route::get('profile/chpass', 'UserController@chpass');
Route::post('profile/chpass', 'UserController@chpassMethod');

Route::resource('rest', 'RestController');
Route::get('quotes', 'QuotesController@index');
