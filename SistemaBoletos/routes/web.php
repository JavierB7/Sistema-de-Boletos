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
    return view('/index');
});

Route::resources([
    'usuario' => 'UsuariosController',
    'admin' => 'UsuariosController'
]);


Route::resource('admin', 'BoletosController');

Route::get('/','UsuariosController@index');
Route::get('index','UsuariosController@index');
Route::get('create', 'UsuariosController@create');
Route::get('iniciar', 'UsuariosController@iniciar');
Route::post('login','UsuariosController@login');
Route::post('inicio', 'BoletosController@create');
Route::get('detalles', 'UsuariosController@mostrar');
Route::get('edit', 'UsuariosController@edit');
Route::get('edit', 'UsuariosController@update');
Route::get('ini', 'UsuariosController@inicio');
Route::get('detallesBoleto', 'BoletosController@mostrar');
Route::get('editarBoleta', 'BoletosController@edit');
Route::get('editarBoleta', 'BoletosController@update');
