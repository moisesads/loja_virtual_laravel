@extends('layouts.app')

@section('title', 'Administração da Loja Miss Daisy')

@section('content')

<div class="container">
    @include('layouts.menu-admin')
    <ol class="breadcrumb">
        <li class="active">Home</li>
    </ol>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            Bem vindo à adiministração da Loja Miss Daisy
        </div>
    </div>
</div>
@endsection

