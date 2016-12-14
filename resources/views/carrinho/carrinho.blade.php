@extends('layouts.app')

@section('title', 'Carrinho de Compras Miss Daisy')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <img src="/img/logoM.png"/>
            </div>            
        </div>  <br><br>
        <div class="container">
         <center>   
            <div class="alert alert-info" role="alert">
                
                <h4><strong>Página em construção.</strong><br>
                Você já pode comprar pelo Mercado Livre :
                <a id="texto-titulo" target="_blank" href="http://lista.mercadolivre.com.br/produtos-cabelo-em-firmino-alves-bahia/">
                    Produtos Miss Daisy no Mercado Livre</a><br>
                    Aproveite e <a id="texto-titulo" href="/register">cadastre-se</a>, é rapidinho!</h4>
            </div>   
            <a href="{{ url('/produtos') }}">Voltar para Produtos</a><br><br>
            <a class="btn btn-success" href="{{ url('/register') }}">
                Criar Uma Nova Conta
            </a> 
        </center>  
        </div>
                  

    </div>
</div>
</div>
<br><br><br><br>
@include('layouts.rodape')
@endsection

