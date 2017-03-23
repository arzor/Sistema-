<!DOCTYPE html>
<html lang="en">
<head>
 <style>
            @media  print {
                .encabezado,#encabezado *{
                    visibility: visible;
                    position: relative !important;
                }
                #dataTable, #dataTable * {
                    visibility: visible;
                }
                .no-pdf, .no-pdf *{
                    display: none !important;
                }
                #dataTable {
                    position: relative ;
                    left: 0;
                    top: 0;
                }
        }
    </style>    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tecnology Generations</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/init.css') !!}">
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"/>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Tecnology Generations
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/regis') }}">Registrarse</a></li>
                        <li><a href="{{ url('/contactenos/create') }}">Contactenos</a></li>
                        <li><a href="{{ url('/ayuda') }}">Ayuda</a></li>
                    @else
                        @if(Auth::user()->rol_user == 1 and Auth::user()->rol_tec == 1)
                            @include('layouts.barras.tecuser')
                        @elseif (Auth::user()->rol_tec == 1)
                            @include('layouts.barras.tec')
                        @elseif(Auth::user()->rol_user == 1)
                            @include('layouts.barras.user')
                        @else
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Registrarse</a></li>
                            <li><a href="{{ url('/tecnico') }}">Tecnicos</a></li>
                            <li><a href="{{ url('/books') }}">Solicitar</a></li>
                            <li><a href="{{ url('/operador/create') }}">Contactenos</a></li>
                            <li><a href="{{ url('/search') }}">Busqueda</a></li>
                        @endif
                    @endif    
                </ul>
            </div>
        </div>
    </nav>
<script>
        function pdf()
        {
                $( "th:contains('Opciones')" ).attr("style", "display: none !important");
                $( "th:contains('Imagen')" ).attr("style", "display: none !important");
                window.print();

                $( "th:contains('Opciones')" ).removeAttr("style");
                $( "th:contains('Imagen')" ).removeAttr("style");
        }
        
    </script>
    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')

    @yield('scripts')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script>
        $(document).ready(function() {
            src = "{{ route('searchajax') }}";
            $("#search").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: src,
                        dataType: "json",
                        data: {
                            term : request.term
                        },
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                min_length: 1,
                appendTo: "#container"
            });
        });
    </script>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
