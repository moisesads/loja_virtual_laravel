@extends('layouts.app')

@section('title', 'Resultados dos produtos Miss Daisy')

@section('content')
<br>
<div class="container text-center">
    <div class="row">
        <div class="col-lg-6">
            <center>
                <img src="/img/logoM.png"/>
            </center> 
        </div>
        <div class="col-lg-6">
            <h3 id="texto-titulo">Resultados</h3>            
        </div>
        <hr>
    </div>
    <div class="row"><br><br>
       <div class="container">
            <div class="alert alert-info" role="alert">
                <h4><strong>Página em construção.</strong><br>
                Aproveite e <a id="texto-titulo" href="/register">cadastre-se</a>, é rapidinho!
                </h4>
            </div>
            <center>
                <a href="{{ url('/produtos') }}">Voltar para Produtos</a><br><br>
                <a class="btn btn-success" href="{{ url('/register') }}">
                    Criar Uma Nova Conta
                </a> 
            </center>   <br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div> 
    </div>
</div>


@include('layouts.rodape')
@endsection
