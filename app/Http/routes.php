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
Route::get('/actores/{nombre}', 'ActorController@show');
Route::get('/actores/buscar', 'ActorController@search');
Route::post('actores/buscar', 'ActorController@post');
Route::get('actores/agregar', 'ActorController@add');



