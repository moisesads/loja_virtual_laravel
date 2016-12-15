@extends('layouts.app')

@section('title', 'Administração da Loja Miss Daisy')

@section('content')

<div class="container">
    @include('layouts.menu-admin')
    <ol class="breadcrumb">
        
        <li class="active">Home</li>
    </ol>
    <div class="row">
        <center >
            <h3 id="texto-titulo"> Bem vindo à administração da Loja Miss Daisy</h3>
             <h5>Versão Beta</h5>
            <h5>Loja Desenvolvida por Moisés Rocha de Oliveira @2016/2017</h5>
        </center>
    </div>
</div>
@endsection

