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

/*Route::get('/', function () {  // A laravel podem retornar directament la vista amb el seu nom (i ruta si està en subcarpeta dins de views)
    return view('welcome');
});*/


Route::get('/', 'WelcomeController@index'); // Cridem a pàgina estàtica tal i com surt als laracasts, invocant controlador i acció

// Model Controlador-Vista simple que passa variables
Route::get('about', 'PagesController@about');

// Model Controlador-Vista que passa variables i utilitza plantilla app.blade.php per generar la vista 
Route::get('contact', 'PagesController@contact');
