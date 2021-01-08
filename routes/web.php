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

Route::get('/materiais/create', 'App\Http\Controllers\MateriaisController@create')->name('materiais.create');

Route::post('/materiais', 'App\Http\Controllers\MateriaisController@store')->name('materiais.store');





Route::get('/requisicoes','App\Http\Controllers\RequisicoesController@index')->name('requisicoes.index');

Route::get('/requisicoes/{id}/show','App\Http\Controllers\RequisicoesController@show')->name('requisicoes.show');

Route::get('/requisicoes/create', 'App\Http\Controllers\RequisicoesController@create')->name('requisicoes.create');

Route::post('/requisicoes', 'App\Http\Controllers\RequisicoesController@store')->name('requisicoes.store');






Route::get('/requisitantes','App\Http\Controllers\RequisitantesController@index')->name('requisitantes.index');

Route::get('/requisitantes/{id}/show','App\Http\Controllers\RequisitantesController@show')->name('requisitantes.show');

Route::get('/requisitantes/create', 'App\Http\Controllers\RequisitantesController@create')->name('requisitantes.create');

Route::get('/requisitantes', 'App\Http\Controllers\RequisitantesController@store')->name('requisitantes.store');




Route::get('/tiposequipamentos','App\Http\Controllers\TiposequipamentosController@index')->name('tiposequipamentos.index');

Route::get('/tiposequipamentos/{id}/show','App\Http\Controllers\TiposequipamentosController@show')->name('tiposequipamentos.show');

Route::get('/tiposequipamentos/create', 'App\Http\Controllers\TiposequipamentosController@create')->name('tiposequipamentos.create');

Route::get('/tiposequipamentos', 'App\Http\Controllers\TiposequipamentosController@store')->name('tiposequipamentos.store');






Route::get('/tiposrequisitantes','App\Http\Controllers\TiposrequisitantesController@index')->name('tiposrequisitantes.index');

Route::get('/tiposrequisitantes/{id}/show','App\Http\Controllers\TiposrequisitantesController@show')->name('tiposrequisitantes.show');

Route::get('/tiposrequisitantes/create', 'App\Http\Controllers\TiposrequisitantesController@create')->name('tiposrequisitantes.create');

Route::get('/tiposrequisitantes', 'App\Http\Controllers\TiposrequisitantesController@store')->name('tiposrequisitantes.store');