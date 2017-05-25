<?php

//entrada do site
Route::resource('/', 'IndexController');

Route::resource('/produto', 'ProdutoController@show');

Route::resource('/produtos', 'ProdutoController@todos');

Route::get('/resultados', function () {

    return view('pagina.resultados');
});

//carrinho

Route::get('/add-para-carro/{id}', 'CarrinhoController@AddParaCarro');

Route::get('remover_do_carrinho/{id}', 'CarrinhoController@RemoverItemCarrinho');

Route::get('add_mais_um/{id}', 'CarrinhoController@AddMaisUm');

Route::get('remover_menos_um/{id}', 'CarrinhoController@RemoverMenosUm');

Route::resource('carrinho', 'CarrinhoController');

Route::resource('limpar_carrinho', 'CarrinhoController@limpar');

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


