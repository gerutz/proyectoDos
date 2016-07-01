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



Route::get('/', 'ControllerApp@peliculas');
Route::get('/about', 'ControllerApp@about');
Route::get('/peliculas', 'PeliculaController@ver');
Route::get('/actores', 'ActorController@listar');

Route::get('/actores/buscar', 'ActorController@search');
Route::post('actores/buscar', 'ActorController@post');

Route::get('actores/agregar', 'ActorController@add');
Route::post('actores/agregar', 'ActorController@store');

// el orden del los routes es importante, las mas especificas primero . Esto es primero :
// 'loquesea/loquesea'                                                   Segundo:
// 'loquesea/{loquesea}


Route::get('/actores/{nombre}', 'ActorController@show');

// Edicion de actores

Route::get('/actores/{id}/editar', 'ActorController@edit');
Route::post('/actores/{id}/editar', 'ActorController@update');







