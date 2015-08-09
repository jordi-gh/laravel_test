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

/*Route::get('/', function () {  // A laravel 5.1.9 retornem directament la vista
    return view('welcome');
});*/

/*Route::get('/', function () {  
 return view('landing');
});
*/

Route::get('/', 'WelcomeController@index'); // tal i com surt als laracasts, invocant controlador i acció
//Route::get('/', 'Auth\AuthController@validator'); // Compte: contrabarra per entrar a folders!
//
