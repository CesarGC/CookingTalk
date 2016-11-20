<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba', ['name' => 'César']);
});

Route::get('/listadoRecetas', 'BlogController@mostrarListado');

Route::post('/listadoRecetas', 'BlogController@insertarBlog');

Route::get('/crearBlogVista', 'BlogController@crearBlogVista');

Auth::routes();

Route::get('/home', 'HomeController@index');
