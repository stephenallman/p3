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

Route::get('/', function () {
    return view('/index');
});

Route::get('/ipsum','ipsumController@getCreate');
Route::get('/ipsum/create','ipsumController@getCreate');
Route::post('/ipsum','ipsumController@postCreate');

Route::get('/user','userController@getCreate');
Route::get('/user/create','userController@getCreate');
Route::post('/user','userController@postCreate');


//
//Route::get('ipsum/create', 'ipsumController@create');
//Route::get('ipsum/{id}', 'ipsumController@show');

if(App::environment('local')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
};



