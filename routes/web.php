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


Route::view('/','welcome');

Route::resource('/blog', 'RutaController');

Route::get('/leer', 'EjemploController@index');
Route::get('/insertar', 'EjemploController@store');
Route::get('/actualizar', 'EjemploController@update');
Route::get('/delete', 'EjemploController@delete');
Route::get('/softdelete', 'EjemploController@softdelete');
Route::get('/buscar', 'EjemploController@buscar');
Route::get('/restore', 'EjemploController@restore');


Route::get('/cliente/{id}/articulo','EjemploController@cliente' );
Route::get('/articulo/{id}/cliente','EjemploController@articulo' );
Route::get('/articulos/{id}','EjemploController@articulos' );
Route::get('/cliente/{id}/perfil','EjemploController@perfil' );
Route::get('/calificaciones','EjemploController@calificaciones' );


Route::resource('productos', 'ProductoController');