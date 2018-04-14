<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'homeController@create');
Route::post('/', 'homeController@store');
Route::get('/listado', 'listadoController@index');
Route::get('/listado/{nombre}', 'listadoController@index');