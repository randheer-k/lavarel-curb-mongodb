<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::to('user');
});

Route::resource('network', 'NetworkController');
Route::resource('hostname', 'HostnameController');
Route::resource('user', 'UserController');  
Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@logout'));