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

Route::get('/inicio', function () {
    return view('layouts.mi-tema');
});

Route::get('/sobre', function () {
    return view('sobre'); 
});

Route::get('/sobre_nosotros', function () {
    return view('sobre_nosotros'); 
});

Route::get('/home', function () {
    return view('home'); 
});

Route::get('/compra', function () {
    return view('compra'); 
});


Route::resource('pelicula', 'PeliculaController');
Route::resource('promociones', 'PromocionesController');

Auth::routes();
