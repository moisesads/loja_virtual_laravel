<!DOCTYPE html>
<html lang="en">
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"><b id="txt-branco">Loja Miss Daisy</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}" id="txt-branco">Home</a></li>
                        <li><a href="{{ url('/produto') }}" id="txt-branco">Produtos</a></li>
                        <li><a href="#" id="txt-branco">Resultados</a></li>
                        <li><a href="#" id="txt-branco">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}" id="txt-branco">Login</a></li>
                        <li><a href="{{ url('/register') }}" id="txt-branco">Cadastro</a></li>
                        @else
                        <li><a>Carrinho</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
    document.getElementById('logout-form').submit();" id="txt-branco">
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
        <footer class="container-fluid text-center" id="menu-superior">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            
        </footer>  
    </body>
</html>
