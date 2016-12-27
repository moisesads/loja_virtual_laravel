@extends('layouts.app')

@section('title', 'Erro 404 Página não encontrada')

@section('content')
<br>
<div class="container text-center">
    <div class="row"><br><br>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div >
                    <img src="/img/logoM.png" /><br>
                    <h4><strong>Página não encontrada.</strong><br>
                        Desculpe, a url solicitada não é válida.
                    </h4>
                    <img src="/img/404.png"/><br><br>
                    Falha com link quebrado, entre em 
                    <a href="{{ url('/contato') }}"> contato com a nossa equipe.</a><br><br>
                </div>
            </div>
            
        </div> <br><br><br><br>
    </div>
</div>


@include('layouts.rodape')
@endsection
