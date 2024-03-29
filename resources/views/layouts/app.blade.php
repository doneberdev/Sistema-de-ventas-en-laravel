<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>        
        Proyecto 281
    </title>
    <!--{{ config('app.name', 'Laravel') }} -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                @if(auth()->user())
                    @if(auth()->user()->admin)
                        <a class="navbar-brand" href="{{ url('/home') }}">
                    @else
                        <a class="navbar-brand" href="{{ url('/') }}">
                    @endif
                @endif
                   <!--{{ config('app.name', 'Laravel') }} --> 
                   Proyecto 281 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(auth()->user()->admin)
                                        <a class="dropdown-item" href="{{ url('/admin/products') }}">
                                            {{ __('Ver y Gestionar Productos') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ url('/admin/categories') }}">
                                            {{ __('Ver y Gestionar Categorias') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ url('/admin/providers') }}">
                                            {{ __('Ver y Gestionar Proveedores') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ url('/admin/sales') }}">
                                            {{ __('Ver Ventas') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ url('/admin/purchases') }}">
                                            {{ __('Ver mis compras (pedidos al proveedor)') }}
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                </div>


                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <center>
            @yield('content')
            </center>
        </main>
    </div>
</body>
</html>
