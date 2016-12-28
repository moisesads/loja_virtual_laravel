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
                <div class="pull-left"> 
                    <a class="btn btn-default" href="{{ url('/produtos') }}">
                        Ver Produtos
                    </a> 
                </div>
                <div class="btn-group pull-right">
                    <a href="{{ url('limpar_carrinho') }}" 
                       class="btn btn-default dropdown-toggle pull-right" >
                        Limpar Carrinho
                    </a>                    
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
                                <a href="produto/{{ $p }}">
                                <img src="{{ $item['item']['foto'] }}" style="width: 50px; height:50px;">
                                </a>
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
                    <h3 >
                        @if ($parcela = $carrinho->totalPreco /6 )
                        <div id="texto-titulo"> 6 x de {{ number_format($parcela, 2) }} sem juros + frete grátis</div>
                        @endif
                        <b id="texto-titulo" class="pull-right">
                            Total R$ {{ number_format($carrinho->totalPreco, 2) }}
                        </b>
                    </h3>
                    </th>
                </table>
            </div>
            <div class="container">
                <a class="btn btn-success pull-right" href="#">Finalizar Compra</a>
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

