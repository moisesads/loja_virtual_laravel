@extends('layouts.app')

@section('title', 'Cadastrar Produto')

@section('content')

<div class="container">
    @include('layouts.menu-admin')
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
        <li><a href="/produtos">Produtos</a></li>
        <li class="active">Cadastro</li>
    </ol>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            Cadastro
        </div>
    </div>
</div>
@endsection

