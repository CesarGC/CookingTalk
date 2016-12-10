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

//Storage::disk('uploads')->put('filename', $file_content);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba', ['name' => 'César']);
});

Route::get('/login', function () {
    return view('login', ['name' => 'César']);
});

Route::group(array('before' => 'auth'), function() {

    /*
     | Sign Out (GET)
     | --
     */
    Route::get('/account/sign-out', array(
        'as' => 'account-sign-out',
        'uses' => 'AccountController@getSignOut'
    ));

});

Route::get('/perfil', 'PerfilController@modificarDatos');

/*Route::get('/lobby', function () {
    return view('lobby', ['name' => 'César']);
});*/

Route::get('/lobby', 'BlogController@mostrarLobby');

Route::get('/listadoRecetas', 'BlogController@mostrarListado');

Route::get('/detalleBlog/{detalle}', 'BlogController@mostrarDetalle');

Route::post('/listadoRecetas', 'BlogController@insertarBlog')->middleware('auth');

Route::post('/crearComentario', 'ComentarioController@insertarComment')->middleware('auth');

Route::post('/editarPerfil', 'PerfilController@editarPerfil')->middleware('auth');

Route::delete('/listadoRecetas/{receta}', 'BlogController@borrarBlog');

Route::delete('/borrarReceta/{receta}', 'BlogController@borrarBlog');

Route::put('/listadoRecetas/{receta}', 'BlogController@actualizarBlog');

Route::get('/crearBlogVista', 'BlogController@crearBlogVista');

Route::get('/editarBlogVista/{receta}', 'BlogController@editarDetalle');

Auth::routes();

Route::get('/auth/logout', 'Auth\LoginController@logout');

Route::get('/home', function () {
    return view('lobby', ['name' => 'César']);
});
