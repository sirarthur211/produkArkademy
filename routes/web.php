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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', 'App\Http\Controllers\produkController@index');
Route::post('/produk/create', 'App\Http\Controllers\produkController@create');
Route::get('/produk.{id}/edit', 'App\Http\Controllers\produkController@edit');
Route::post('/produk/{id}/update', 'App\Http\Controllers\produkController@update');
Route::get('/produk.{id}/delete', 'App\Http\Controllers\produkController@delete');
