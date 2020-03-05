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
    return view('index');
})->name('index');

Route::get('/install/modelo/{modelo}','InstallController@makeModel')->name('install.model');
Route::get('/install/migrate','InstallController@migration')->name('install.migrate');
Route::get('/install/reset','InstallController@migrateReset')->name('install.reset');
Route::get('/install/request/{request}','InstallController@makeRequest')->name('install.request');
Route::get('/install/migration/{migration}','InstallController@addTable')->name('install.migration');

Route::resource('clientes','ClienteController');
Route::resource('alojamientos','AlojamientoController');
