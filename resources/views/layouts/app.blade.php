<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ asset('/css/tema.css') }}">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="menu-superior">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand"  href="{{ url('/') }}"><b id="txt-branco">Loja Miss Daisy</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}" id="txt-branco">Home</a></li>
                        <li><a href="{{ url('/produtos') }}" id="txt-branco">Produtos</a></li>
                        <li><a href="/resultados" id="txt-branco">Resultados</a></li>
                        <li><a href="/contato" id="txt-branco">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a  id="txt-branco" href="/carrinho">
                                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                Meu Carrinho</a>
                        </li>
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}" id="txt-branco">Login</a></li>
                        <li><a href="{{ url('/register') }}" id="txt-branco">Cadastro</a></li>
                        @else                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"  id="txt-branco" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <br><br>
        
        @yield('content')

    </body>
</html>
