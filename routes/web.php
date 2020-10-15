<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');});

Route::get('/recolectores','RecolectorController@index');
Route::post('/registroRecolector','RecolectorController@store');
Route::get('/editarRecolector/{id}','RecolectorController@edit');
Route::post('/editarRecolector/update', 'RecolectorController@update');
Route::get('/borrar/{id}', 'RecolectorController@destroy');

Route::get('/puntos','PuntosController@index');
Route::post('/registroPunto','PuntosController@store');
Route::get('/editarPunto/{id}','PuntosController@edit');
Route::post('/editarPunto/update', 'PuntosController@update');
Route::get('/borrar/{id}', 'PuntosController@destroy');
