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

//entrada do site
Route::resource('/', 'IndexController');

Route::resource('/produto', 'ProdutoController@show');

Route::resource('/produtos', 'ProdutoController@todos');

Route::get('/resultados', function () {

    return view('pagina.resultados');
});

Route::get('/carrinho', function () {

    return view('carrinho.carrinho');
});

//contato
Route::get('/contato', function () {
    return view('pagina.contato');
});
Route::resource('/mensagem_contato', 'ContatoController@mensagem');//grava mensagem

//autenticação de usuário
Auth::routes();

Route::get('/home', 'HomeController@index');

//acesso restrito admin

Route::group(['prefix' => 'admin', 'middleware' => 'auth.tipo:Admin'], function () {
    
    Route::resource('/', 'AdminController');

    Route::resource('/produtos', 'ProdutoController');
    
    Route::resource('/cadastrar_produto', 'ProdutoController@store');
});


