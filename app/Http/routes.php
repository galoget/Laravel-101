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

<<<<<<< HEAD
Route::get('/alex','AlexController@index');
=======
Route::get('/galoget', 'GalogetController@index');
>>>>>>> 76b891ca8a1118503b09a3464e19f6bd6c2ae500
