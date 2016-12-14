@extends('layouts.app')

@section('title', $produto->nome)

@section('content')
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 id="texto-titulo">{{ $produto->nome }}</h2>
            <div class="row">
                <div class="col-sm-3 col-md-6 col-lg-4" >
                    <br> 
                    <center>  
                        <img id="produto-foto" src="{{ $produto->foto }}" class="img-rounded" alt="Cinque Terre" width="300" height="200">
                        <h2><b>R$ {{ $produto->preco }}</b></h2>
                        <p><b>6x de {{ $parcela }} sem juros</b></p>

                        <button type="button" class="btn btn-default btn-lg btn-block" id="botao">Comprar</button>
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
            <h4 id="texto-titulo">quem viu este produto, viu também</h4>
            <div class="col-sm-9 col-md-6 col-lg-8">
                <center>
                    <a href="produto">
                        <div class="col-sm-4">
                            <img id="produto-foto" src="{{ $produto->foto }}" class="img-rounded" style="width:100%" alt="Image">
                            <p>R$ 90,00</p>
                            <p>Produto nome completo </p> 
                            <hr>
                        </div>
                    </a>
                </center>
                <center>
                    <a href="produto">
                        <div class="col-sm-4">
                            <img id="produto-foto" src="/img/produto.jpg" class="img-rounded" style="width:100%" alt="Image">
                            <p>R$ 90,00</p>
                            <p>Produto nome completo </p> 
                            <hr>
                        </div>
                    </a>
                </center>
                <center>
                    <a href="produto">
                        <div class="col-sm-4">
                            <img id="produto-foto" src="/img/produto.jpg" class="img-rounded" style="width:100%" alt="Image">
                            <p>R$ 90,00</p>
                            <p>Produto nome completo </p> 
                            <hr>
                        </div>
                    </a>
                </center>
            </div>

        </div>
    </div>
</div>
<br><br>
@include('layouts.rodape')
@endsection



