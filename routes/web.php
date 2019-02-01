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

Route::resource('garcoms','GarcomController');
Route::resource('produtos','ProdutoController');
Route::resource('item_pedidos','Item_pedidoController');
Route::resource('pedidos','PedidoController');
Route::resource('mesas','MesaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
