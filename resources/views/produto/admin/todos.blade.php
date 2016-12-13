@extends('layouts.app')

@section('title', 'Todos os Produtos')

@section('content')

<div class="container">
    @include('layouts.menu-admin')
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
        <li class="active">Produtos</li>
    </ol>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="#">Editar</a><br>
            <a href="#">Cadastrar</a><br>
            produtos
            
        </div>
    </div>
</div>
@endsection

