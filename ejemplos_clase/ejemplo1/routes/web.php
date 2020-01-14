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
Route::get('/coches','CochesController@index')->name('coches.ver');
Route::get('/coches/{nombre}','CochesController@detalle')->name('coches.detalle');
//-------------------------------------------
// Route::get('/usuario','UserController@index');
// Route::get('/usuario/listado','UserController@listado')->name('listado');
// Route::get('/usuario/detalle/{nombre}','UserController@show')->name('detalle');
// Route::get('/articulo','ArticulosController@index');
// Route::get('/articulo/listado','ArticulosController@listado')->name('listado-Articulos');
// Route::get('/articulo/detalle/{nombre}','ArticulosController@show')->name('detalle-Articulos');