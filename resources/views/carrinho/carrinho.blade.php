@extends('layouts.app')

@section('title', 'Carrinho de Compras Miss Daisy')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-lg-6">
                <center>
                    <img src="/img/logoM.png"/>
                </center> 
            </div>
            <div class="col-lg-6">
                <h3 id="texto-titulo">Carrinho de Compras</h3>            
            </div>
            <hr>
        </div> 
        
        <div class="row">
            @if ( $carrinho )
            <a href="{{ url('limpar_carrinho') }}">Limpar Carrinho</a><br>
            <h2>Total de Itens: {{ $carrinho->totalQtd }}</h2>  <br>
            <h2>Total: {{ $carrinho->totalPreco }}</h2>
            @else
            <h2>O carrinho está vasio</h2>
            @endif
        </div>
    </div>
</div>
<br><br><br><br>
@include('layouts.rodape')
@endsection

