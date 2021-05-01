<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div id="page-container">
        <header>
            <a id="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <nav>
                <ul id="nav_list">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
    
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li id="btn-item">
                            <a id="btn-ajout-etabl" href="{{ route('ajout-etabl-form') }}"><button class="btn-etabl" type="button"><b>Ajoutez un établissement</b></button></a>
                        </li>
                    @endguest
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <div class="flex-wrapper">
                <div>
                    <h4>Suivez nous :</h4>
                    <p><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></p>
                    <p><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></p>
                    <p><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></p>
                </div>
                <div>
                    <h4>Nous contacter :</h4>
                    <p>Email : japadvisor@gmail.com</p>
                    <p>Téléphone : 01 12 34 45 67</p>
                </div>
                <div>
                    <h4>Liens utiles</h4>
                    <p><a href="{{ url('/') }}">Page d'accueil</a><p>
                    <p><a href="">About us</a><p>
                    <p><a href="">Administration Page</a></p>
                </div>
            </div>
            <hr id="footer-hr">
            <p id="copyright">© 2021 Syou-P'heng Do</p>
        </footer>
    </div>
</body>
</html>
