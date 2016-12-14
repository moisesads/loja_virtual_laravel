@extends('layouts.app')

@section('title', 'Bem Vindo Cliente')

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
            <h3 id="texto-titulo">Bem Vindo(a) {{ Auth::user()->name }}!</h3>            
        </div>
        <hr>
    </div>
    <div class="row"><br><br>
       <div class="container">
            <div class="alert alert-info" role="alert">
                <h4><strong>Página em construção.</strong><br>
                    Enquanto nossa loja não fica pronta 
                    <a id="texto-titulo" target="_blank" href="http://lista.mercadolivre.com.br/produtos-cabelo-em-firmino-alves-bahia/">
                        compre Miss Daisy no Mercado Livre</a></h4>
            </div>
           <br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div> 
    </div>
</div>

 @include('layouts.rodape')
@endsection
