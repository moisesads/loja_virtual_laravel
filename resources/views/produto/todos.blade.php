@extends('layouts.app')

@section('title', 'Produtos Miss Daisy| Nossa linha completa para salões de beleza.')

@section('content')
<br>
<div class="container text-center">

    <div class="row">
        <div class="col-lg-6" id="texto-titulo" >
            <div class="row">
                <img src="/img/logoM.png"/>
            </div>            
        </div>
        <div class="col-lg-6">
            <br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Entre com o nome do produto...">
                <span class="input-group-btn">
                    <button id="texto-titulo" class="btn btn-default" type="button">Buscar</button>
                </span>
            </div>
        </div>
    </div><hr>
    <div class="row">
        @if (count($produtos) > 0)
        @foreach ($produtos as $produto)
        <a href="produto/{{ $produto->id }}?page=2">
            <div class="col-sm-6 col-md-3" >
                <div class="thumbnail" id="produto">
                    <center>
                        <img id="produto-foto" src="{{ $produto->foto }}" class="img-rounded" width="100" height="100" alt="{{ $produto->nome }}">
                        <p>{{ $produto->nome }}</p>
                        <h4 id="preco">R$ {{ $produto->preco }}</h4>
                    </center>
                </div>
            </div>
        </a>
        @endforeach   

        @else
        <br><br><br><br><center>Não extistem produtos cadastrados.</center><br><br><br><br>
        @endif

    </div>
    <div class="row">
        <div class="container">
            @if (count($produtos) > 0)   
            {!! $produtos->render() !!}
            @endif
        </div>
    </div>
</div>
@include('layouts.rodape')
@endsection