@extends('layouts.app')

@section('title', 'Todos os Produtos')

@section('content')
<br>
<div class="container text-center">
    
    <div class="row">
        <div class="col-lg-6"><h3 id="texto-titulo">Todos os produtos</h3></div>
        <div class="col-lg-6">
            <br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Entre com o nome do produto...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Buscar</button>
                </span>
            </div>
        </div>
    </div><hr>
    <div class="row">
        <a href="produto">
            <div class="col-sm-2">
                <center>
                   <img id="produto-foto" src="/img/produto.jpg" class="img-responsive" style="width:100%" alt="Image">
                </center>
                <h3>R$ 90,90</h3>
                <h4>Nome do produto</h4>
                <hr>
            </div>
        </a>
        <a href="produto">
            <div class="col-sm-2">
                <center>
                   <img id="produto-foto" src="/img/produto.jpg" class="img-responsive" style="width:100%" alt="Image">
                </center>
                <h3>R$ 90,90</h3>
                <h4>Nome do produto</h4>
                <hr>
            </div>
        </a>
        <a href="produto">
            <div class="col-sm-2">
                <center>
                   <img id="produto-foto" src="/img/produto.jpg" class="img-responsive" style="width:100%" alt="Image">
                </center>
                <h3>R$ 90,90</h3>
                <h4>Nome do produto</h4>
                <hr>
            </div>
        </a>
    </div>

</div>
@include('layouts.rodape')
@endsection