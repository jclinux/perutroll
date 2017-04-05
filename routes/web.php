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


Route::match(['get', 'post'],'deploy', 'DeployController@index');
Route::get('deploy', 'DeployController@index');



Route::get('/reactjs',function(){
	return File::get(public_path() . '/canvas/index.html');
});