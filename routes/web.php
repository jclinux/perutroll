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

//Route::get('/','MemeController@index');


Route::match(['get', 'post'],'deploy', 'DeployController@index');
Route::get('deploy', 'DeployController@index');
Route::get('/', 'PerutrollController@index');
Route::get('reactjs',function(){
	return view('react');
});

Route::get('/login/callback', 'PerutrollController@callback');
Route::get('/logout', 'PerutrollController@logout');
Route::get('/politicaprivacidad', 'PerutrollController@politicaprivacidad');
