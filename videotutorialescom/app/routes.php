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
	return View::make('hello');
});

Route::get('prueba', function() {
	$user = new User;

	$user->email = "prueba@prueba.com";
	$user->real_name = "nombre prueba";
	$user->password = Hash::make("prueba");

	$user->save();

	return "El usuario de prueba se ha guardado en la base de datos";
});

Route::controller('users','UserController');
