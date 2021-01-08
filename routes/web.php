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

Route::namespace('App');
Route::get('/', 'Consultant@index');
Route::post('/store', 'Consultant@store');
Route::get('/editar/{id}','Consultant@edit');
Route::post('/update','Consultant@update');
Route::get('/excluir/{id}','Consultant@destroy');

