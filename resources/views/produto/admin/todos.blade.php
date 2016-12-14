@extends('layouts.app')

@section('title', 'Todos os Produtos')

@section('content')

<div class="container">
    @include('layouts.menu-admin')
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
        <li class="active">Produtos</li>
    </ol>
    <a href="/admin/produtos/create" class="btn btn-success">Cadastrar Produto</a><br><br>
    @if (count($produtos) > 0)
    <table class="table table-hover">
        <tr>
            <th>
              Nome  
            </th>  
            <th>
               Preço
            </th>  
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>
                <a href="/admin/produtos/{{ $produto->id }}">{{ $produto->nome }}</a>
            </td>
            <td>
                R$ {{ $produto->preco }}
            </td> 
        </tr>
        @endforeach
    </table>    
    @else
        <center>Não extistem produtos cadastrados.</center>
    @endif
</div>
@endsection

