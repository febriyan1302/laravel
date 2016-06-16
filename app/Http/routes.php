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
    //return view('welcome');
    //print_r(app()->make('redis'));
    $redis = app()->make('redis');
    $redis->set("key1", "testValue");
    return $redis->get("key1");
});


Route::get('/user', 'User_c@index');

Route::get('/model','BelajarModelController@index');

