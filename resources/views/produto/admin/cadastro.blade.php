@extends('layouts.app')

@section('title', 'Cadastrar Produto')

@section('content')

<div class="container">
    @include('layouts.menu-admin')
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
        <li><a href="/admin/produtos">Produtos</a></li>
        <li class="active">Cadastro de produto</li>
    </ol>
    @include('errors.erros-msg')
    <div class="row">
        <form method="POST" action="{{ url('/admin/cadastrar_produto') }}">
            {{ csrf_field() }}
            
            <div  class="col-sm-3" >
                <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                    <label id="texto-titulo" for="nome">Nome</label>
                    <input id="nome" type="nome" class="form-control" name="nome" value="{{ old('nome') }}" autofocus>
                </div>
                <div class="form-group{{ $errors->has('preco_custo') ? ' has-error' : '' }}">
                    <label id="texto-titulo" for="preco_custo">Preço de custo</label>
                    <input id="preco_custo" type="preco_custo" class="form-control" 
                           name="preco_custo" value="{{ old('preco_custo') }}" autofocus>
                </div>
                <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                    <label id="texto-titulo" for="foto">Foto</label>
                    <input id="foto" type="file" name="foto" value="{{ old('foto') }}" autofocus>
                </div>
            </div>
            <div  class="col-sm-3">
                <div class="form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
                    <label id="texto-titulo" for="preco">Preço</label>
                    <input id="preco" type="preco" class="form-control" name="preco" 
                           value="{{ old('preco') }}" autofocus>
                </div>
                <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                    <label id="texto-titulo" for="descricao">Descrição</label>
                    <textarea id="descricao" type="descricao" class="form-control" name="descricao" 
                              value="{{ old('descricao') }}" autofocus></textarea>
                </div>
            </div>
            <div  class="col-sm-3">
                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    <label id="texto-titulo" for="status">Status</label>
                    <input id="status" type="status" class="form-control" name="status" value="{{ old('status') }}" autofocus>
                </div>
                <div class="form-group{{ $errors->has('composicao') ? ' has-error' : '' }}">
                    <label id="texto-titulo" for="composicao" >Composição</label>
                    <textarea id="composicao" type="textarea" class="form-control" 
                              name="composicao" value="{{ old('composicao') }}" autofocus></textarea>
                </div>
            </div>
            <div  class="col-sm-3">
                <div class="form-group{{ $errors->has('categoria') ? ' has-error' : '' }}">
                    <label id="texto-titulo" for="categoria">Categoria</label>
                    <input id="categoria" type="categoria" class="form-control"
                           name="categoria" value="{{ old('categoria') }}" autofocus>
                </div>
                <div class="form-group{{ $errors->has('modo_usar') ? ' has-error' : '' }}">
                    <label id="texto-titulo" for="modo_usar">Modo de usar</label>
                    <textarea id="modo_usar" type="modo_usar" class="form-control" 
                              name="modo_usar" value="{{ old('modo_usar') }}" autofocus></textarea>
                    <br><br><br>
                    <button type="submit" class="btn btn-primary" id="botao">
                        Cadastrar Produto
                    </button>
                </div>
            </div>
        </form>
    </div>
    <hr>
</div>
@endsection

