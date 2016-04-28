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

Route::get('/conocenos', function () {
    return view('conocenos');
});

Route::get('/resultado', function () {
	$aspirantes = array();
    return view('resultado', compact('aspirantes'));
});

Route::get('/registrar', function () {
    return view('registrar');
});

Route::get('estudiantes', [
	'uses' => 'EstudianteController@getList',
	'as' => 'estudiantes'
]);

Route::resource('gestionFormulario', 'FormularioController');

Route::get('/sumar', 'EstudianteController@sumar');
