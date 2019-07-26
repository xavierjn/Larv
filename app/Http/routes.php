<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|post,get,put,delete
*/

Route::get('control','pruebaController@index');
Route::get('nombre/{nombre}','pruebaController@nombre');



Route::get('prueba', function(){
	return "Hola desde routes.php :)";
});
Route::get('nombre/{nombre}', function($nombre){
	return "Hola, ".$nombre;
});
Route::get('edad/{edad?}', function($edad=22){
	return "su edad es: ".$edad;
});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
