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
    return view('welcome');
});

Route::get('/roberto', 'RobertoController@index');

Route::get('/alex','AlexController@index');

Route::get('/galoget', 'GalogetController@index');

Route::get('/Linux', 'LinuxControlController@index');

Route::get('/jessa', 'JessaController@index');

Route::get('/josse', 'JosseController@index');

Route::get('/login', 'LoginController@index');
