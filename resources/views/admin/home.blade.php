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
        </center>
    </div>
</div>
@endsection

