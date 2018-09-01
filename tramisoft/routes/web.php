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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('solicitante','SolicitanteControlador');
Route::resource('tramite','TramitesControlador');


/* El recurso tramites es un nombre de una ruta dada  para poder acceder a los recursos del controlador*/