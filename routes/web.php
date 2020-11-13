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


Route::get('/materiais','App\Http\Controllers\MateriaisController@index')->name('materiais.index');

Route::get('/materiais/{id}/show','App\Http\Controllers\MateriaisController@show')->name('materiais.show');

Route::get('/requisicoes','App\Http\Controllers\RequisicoesController@index')->name('requisicoes.index');

Route::get('/requisicoes/{id}/show','App\Http\Controllers\RequisicoesController@show')->name('requisicoes.show');