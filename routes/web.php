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

Route::get('/produto', function (){

    return view('produto.produto');
});

Route::get('/produtos', function (){

    return view('produto.todos');
});

Route::get('/resultados', function (){

    return view('pagina.resultados');
});

Route::get('/contato', function (){

    return view('pagina.contato');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
