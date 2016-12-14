@extends('layouts.app')

@section('title', 'Miss Daisy|Linha completa para salões de beleza.')

@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/img/banner/banner1.jpg" alt="Image">
            <div class="carousel-caption">
            </div>      
        </div>

        <div class="item">
            <img src="/img/banner/banner2.jpg" alt="Image">
            <div class="carousel-caption">
                <h2>Sua loja de fábrica.</h2>
            </div>      
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">  
    <div class="row">
        <div class="col-lg-6">
            <img id="logoM" src="/img/logoM.png"/>
        </div>
        <br>
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Entre com o nome do produto...">
                <span class="input-group-btn">
                    <button id="texto-titulo" class="btn btn-default" type="button">Buscar</button>
                </span>
            </div>
        </div>

    </div>
    <hr>
    <div class="row">
      @if (count($produtos) > 0)
        @foreach ($produtos as $produto)
        <a href="produto/{{ $produto->id }}">
            <div class="col-sm-6 col-md-3">
                <center>
                   <img id="produto-foto" src="{{ $produto->foto }}" class="img-rounded" style="width:100%" alt="Image">
                </center>
                <h4>{{ $produto->nome }}</h4>
                <h3>R$ {{ $produto->preco }}</h3>
                <h5>6x de sem juros</h5>
                <hr>
            </div>
        </a>
        @endforeach   
        @else
        <br><br><br><br><center>Não extistem produtos cadastrados.</center><br><br><br><br>
        @endif
        
        <div class="col-sm-6 col-md-3">
            <a  href="{{ url('/produtos') }}">
                Ver todos os produtos
            </a><br><br>
            <div class="well">
                <center>
                    <a class="btn btn-success" href="{{ url('/register') }}">
                        Criar Uma Nova Conta
                    </a> 
                </center>  
            </div>
            <div class="well">
                <center>
                    <a class="btn btn-warning" href="{{ url('/register') }}">
                        Confira os resultados
                    </a> 
                </center>
            </div>

        </div>
    </div>
</div><br>
@include('layouts.rodape')
@endsection
