@extends('layouts.app')

@section('title', 'Minha Conta Miss Daisy')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <img src="/img/logoM.png"/>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" id="texto-titulo">Login Minha Miss Daisy
                </div>
                <div class="panel-body">
                    @include('errors.erros-msg')
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label id="texto-titulo" for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label id="texto-titulo" for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Lembrar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="botao">
                                    Entrar
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <center>
                <a class="btn btn-success" href="{{ url('/register') }}">
                    Criar Uma Nova Conta
                </a>
            </center>

        </div>
    </div>
</div>
<br><br><br><br>
@include('layouts.rodape')
@endsection
