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
Route::get('/produits', 'ProduitController@index');
Route::post('/produits', 'ProduitController@store');
Route::get('/produits/{id}', 'ProduitController@show');
Route::put('/produits/{id}', 'ProduitController@update');
Route::delete('/produits/{id}', 'ProduitController@destroy');
