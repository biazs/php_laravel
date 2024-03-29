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

Auth::routes();


Route::resource('categoria','CategoriaController')->name('index','categoria')->middleware('auth');
Route::resource('despesa','DespesaController')->name('index','despesa')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('despesa/{categoria}/categoria', 'DespesaController@categoria')->name('despesa.categoria');
