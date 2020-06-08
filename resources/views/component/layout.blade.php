<html>
    <head>
        <link rel="shortcut icon" href="{{ url('restaurante.ico') }}" type="image/x-icon">
        <title>Restaurante App</title>
        <link rel="stylesheet" href="{{ url('/css/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('/css/fontawesome\css\all.css') }}">
        <script src="{{ url('/js/jquery.js') }}"></script>
        <script src="{{ url('/css/bootstrap/js/bootstrap.min.js') }}"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">Restaurante</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lista">Lista</a>
                    </li>
                    @if(Session::get('usuario'))
                        <li class="nav-item">
                            <a class="nav-link" href="/adicionar">Adicionar</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-md-auto">
                        <li class="nav-item">
                            <span class="navbar-text">
                                Bem Vindo {{Session::get('usuario')}}
                            </span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sair">Sair</a>
                        </li>
	                </ul>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/registrar">Registrar</a>
                        </li>
                    @endif
                    </ul>
                </div>
            </nav>
        </header>
        <main class="container">
            @yield('conteudo')
        </main>
    </body>
</html>