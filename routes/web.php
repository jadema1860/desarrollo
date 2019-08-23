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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/menu', 'HomeController@menu')->name('menu');
Route::resource('student','studentController');
//Route::resource('departamentos','departamentosController');
Route::get('/municipios/{id}','studentController@mostrar');
Route::get('/documentos/{id}','studentController@mostrarDoc');

Route::get('/genero/{id}','studentController@mostrarGenero');
Route::get('/search','Controller@search')->name('search');
	
Route::get('/buscar', 'Controller@buscar')->name('buscar');