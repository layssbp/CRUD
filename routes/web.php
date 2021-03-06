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

Route::get('/', function(){
    return view('principal');
});
Route::get('/categorias', 'CategoriaController@index');
Route::get('/categorias/nova', 'CategoriaController@create');
Route::get('/categorias/apagar/{id}', 'CategoriaController@destroy');
Route::get('/categorias/editar/{id}', 'CategoriaController@edit');
Route::post('/categorias/editar/{id}', 'CategoriaController@update');
Route::post('/categorias', 'CategoriaController@store');
Route::get('/categorias/restaurar', 'CategoriaController@indexWithTrashed');
Route::get('/categorias/restaurar/{id}', 'CategoriaController@restore');

Route::get('/produtos', 'ProdutoController@index');
Route::get('/produtos/novo', 'ProdutoController@create');
Route::get('/produtos/editar/{id}', 'ProdutoController@edit');
Route::get('/produtos/apagar/{id}', 'ProdutoController@destroy');
Route::post('/produtos', 'ProdutoController@store');
Route::post('/produtos/editar/{id}','ProdutoController@update');

Route::get('/clientes', 'ClienteController@index');
Route::get('clientes/novo', 'ClienteController@create');
Route::get('/clientes/editar/{id}', 'ClienteController@edit');
//Route::get('/clientes/apagar/{id}', 'ClienteController@destroy');
Route::post('/clientes', 'ClienteController@store');
Route::post('/clientes/editar/{id}','ClienteController@update');