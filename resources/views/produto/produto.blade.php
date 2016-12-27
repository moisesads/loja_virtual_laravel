@extends('layouts.app')

@section('title', $produto->nome)

@section('content')
<br>

<div class="container-fluid">
    <div class="row">
        @if ($message = Session::get('success'))
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <strong>Adicionado!</strong> {{ $message }}
            </div>
        </div>                   
        @endif
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 id="texto-titulo">{{ $produto->nome }}</h2>
            <div class="row">
                <div class="col-sm-3 col-md-6 col-lg-4" >
                    <br> 
                    <center>  
                        <img id="produto-foto" src="{{ $produto->foto }}" class="img-rounded" alt="{{ $produto->nome }}" width="300" height="200">
                        <h2><b id="preco">R$ {{ $produto->preco }}</b></h2>
                        <p><b>6x de {{ $parcela }} sem juros</b></p>

                    <a href="/add-para-carro/{{ $produto->id }}" 
                       class="btn btn-default btn-lg btn-block" id="botao">
                        Adicionar <span class="glyphicon glyphicon-shopping-cart">
                    </a>
                    </center>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-8">
                    <h2><span class="label label-success">Frete Grátis</span></h2>
                    <h3>Para todo Brasil<br>Só aqui pelo site oficial de fábrica.</h3> 

                    <br>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Descrição</a></li>
                        <li><a data-toggle="tab" href="#menu1">Modo de Usar</a></li>
                        <li><a data-toggle="tab" href="#menu2">Composição</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <h3>Descrição do produto</h3>
                            <p>{{ $produto->descricao }}</p>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3>Modo de usar</h3>
                            {{ $produto->modo_usar }} </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Composição</h3>
                            {{ $produto->composicao }}</div>
                    </div>  
                    <br><br>
                    <a href="{{ url('/produtos') }}">Ver outros produtos</a>
                </div>   

            </div><hr>
            <h4 id="texto-titulo">quem viu este produto, viu também</h4><br>
            <div class="row">
               
                    @foreach ( $produtos_rl as $produto_rl )
                    <!-- verifica se é o produto citado acima-->
                    @if ( $produto_rl->id != $produto->id ) 
                    <center>
                        <a href="/produto/{{$produto_rl->id }}?page=3">
                            <div class="col-sm-6 col-md-3">
                                <img id="produto-foto" src="{{ $produto_rl->foto }}" class="img-rounded" width="100" height="100" alt="{{ $produto_rl->nome }}">
                                <p>R$ {{ $produto_rl->preco }}<br>
                                    {{ $produto_rl->nome }}<br><br>
                                </p>
                            </div>
                        </a>
                    </center>
                    @endif
                    @endforeach
            </div>
           
        </div>
    </div>
</div>
<br><br>
@include('layouts.rodape')
@endsection



