@extends('layouts.app')

@section('title', 'Carrinho de Compras Miss Daisy')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="container">
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
            @if ( $carrinho )
            <div class="row">             
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default dropdown-toggle pull-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Apagar do Carrinho <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Apagar Selecionados</a></li>
                        <li><a href="{{ url('limpar_carrinho') }}">Limpar Carrinho</a></li>                        
                    </ul>
                </div>               
            </div>
            <br>
            <div class="row">
                <table class="table table-responsive">
                    <tr>

                        <th>Produto</th>
                        <th>Qtd</th>
                        <th>Valores</th>
                        <th>Ação</th>
                    </tr>
                    @foreach ($carrinho->all() as $p=>$item)
                    <tr>

                        <td>
                            <div class="col-md-2">
                                <img src="{{ $item['item']['foto'] }}" style="width: 50px; height:50px;">
                            </div>

                            <div class="col-md-6">
                                <a href="produto/{{ $p }}">{{ $item['item']['nome'] }}</a>
                            </div>
                        </td>
                        <td>   
                            <a class="btn btn-default btn-sm" href="add_mais_um/{{ $p }}">
                                + 
                            </a>
                            <label> {{ $item['qtd'] }} </label> 
                            <a class="btn btn-default btn-sm" href="remover_menos_um/{{ $p }}">
                                - 
                            </a>                                         
                    </td>
                    <td>
                        <div class="col-md-6">
                            Preço UND<br>
                            <b>R${{ $item['item']['preco'] }}</b>
                        </div> 
                        <div class="col-md-6">
                            Total<br>
                            <b>R${{ number_format($item['preco'], 2) }}</b> 
                        </div>
                    </td>
                    <td>
                        <a href="remover_do_carrinho/{{ $p }}">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </td>
                    </tr>
                    @endforeach
                    <th colspan="4">
                    <h3 class="pull-right"><b id="texto-titulo">Total R$ {{ number_format($carrinho->totalPreco, 2) }}</b></h3>
                    </th>
                </table>
            </div>

            @else
            <br><br>
            <center>
                <div class="alert alert-info" role="alert">
                    <h4><strong>Carrinho vasio.</strong><br>
                        Aproveite e adicione <a id="texto-titulo" href="/produtos">
                            produtos</a> sem compromisso, é rapidinho!
                    </h4>
                </div>
                <center><br>
                    <a id="botao" class="btn btn-primary" href="{{ url('/produtos') }}">Voltar para Produtos</a><br><br>
                    <a class="btn btn-success" href="{{ url('/register') }}">
                        Criar Nova Conta
                    </a> 
                </center> 

            </center>
            <br><br><br><br><br><br>

            @endif
        </div>
    </div>
</div>
<br><br><br><br>
@include('layouts.rodape')
@endsection

