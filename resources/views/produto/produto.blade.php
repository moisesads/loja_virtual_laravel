@extends('layouts.app')

@section('title', 'Nome do produto')

@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Nome Completo do produto mais letras no nome</h1>
            <div class="row">
                <div class="col-sm-3 col-md-6 col-lg-4" >
                    <br>
                    <img src="/img/produto.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                    <h1><b>R$ 90,00</b></h1>
                    <p>3 X R$ 30,00</p>
                    <button type="button" class="btn btn-default btn-lg btn-block" id="botao">Comprar</button>
                   
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3>Modo de usar</h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Composição</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                    </div>  
                    <br><br><br>
                <a href="produtos">Ver outros produtos</a>
                </div>   
                
            </div>
            <h3>Produtos Relacionados</h3>
                <div class="col-sm-9 col-md-6 col-lg-8">
                    <a href="produto">
                        <div class="col-sm-4">
                        <img src="/img/produto.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <p>R$ 90,00</p>
                        <p>Produto nome completo </p> 
                        <hr>
                    </div>
                    </a>
                    <a href="produto">
                        <div class="col-sm-4">
                        <img src="/img/produto.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <p>R$ 90,00</p>
                        <p>Produto nome completo </p> 
                        <hr>
                    </div>
                    </a>
                    <a href="produto">
                        <div class="col-sm-4">
                        <img src="/img/produto.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <p>R$ 90,00</p>
                        <p>Produto nome completo </p> 
                        <hr>
                    </div>
                    </a>
                </div>
            
        </div>
    </div>
</div>
<br><br>
 @include('layouts.rodape')
@endsection



