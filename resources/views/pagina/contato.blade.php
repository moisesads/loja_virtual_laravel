@extends('layouts.app')

@section('title', 'Entre em contato com a equipe Miss Daisy')

@section('content')

<div class="container">

    <div class="row"><br><br>
        <div class="col-md-9 col-md-offset-2">
            <img src="/img/logoM.png"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading" id="texto-titulo">Seu contato é muito importante
                </div>
                <div class="panel-body">
                    @include('errors.erros-msg')

                    @if ($message = Session::get('success'))
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <strong>Mensagem enviada!</strong> {{ $message }}
                        </div>
                    </div>
                    <center>
                        <img src="/img/contato-sucesso.png"/><br><br><br><br>
                    </center>
                    @else
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/mensagem_contato') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label id="texto-titulo" for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('assunto') ? ' has-error' : '' }}">
                            <label id="texto-titulo" for="assunto" class="col-md-4 control-label">Assunto</label>

                            <div class="col-md-6">

                                <input id="email" class="form-control" name="assunto" value="{{ old('assunto') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mensagem') ? ' has-error' : '' }}">
                            <label id="texto-titulo" for="mensagem" class="col-md-4 control-label">Mensagem</label>

                            <div class="col-md-6">
                                <textarea name="mensagem"  class="form-control" name="mensagem"  value="{{ old('mensagem') }}" autofocus></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="botao">
                                    Enviar Mensagem
                                </button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>


@include('layouts.rodape')
@endsection
