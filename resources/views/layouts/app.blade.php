<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Yeblo Pups') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">  


<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand for_logo" href="{{ url('/') }}">
                    {{ config('app.name', 'Yeblo Pup') }}<span><i class="fas fa-paw"></i></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                     
                    </ul>

                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <ul class="navbar-nav justify-content-center">
                            <a class="nav-link" href="/cartlist">Cart<span><i class="fas fa-shopping-cart" style="font-size:20px"></i></span></a> 
                         </ul>
                        
                        @endauth
                    </div>
                @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                         {{-- <a class="nav-link" href="/cartlist"><span><i class="fas fa-shopping-cart"></i>{{'('.$total.')'}}</span></a>  --}}
                        {{-- <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="nav-link" href="#"><span><i class="fas fa-shopping-cart"></i></span></a>
                            
                        </li> --}}
                        <form action="/search">
                        <div class="input-group">
                            <div class="form-outline">
                              <input type="search" id="form1" class="form-control" name="forsearch" placeholder="search" />
                             
                            </div>
                            {{-- <button type="button" class="btn btn-primary">
                              <i class="fas fa-search" style="font-size:8px"></i>
                            </button> --}}
                          </div>
                        </form>
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

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
                        @endguest
                    </ul>
                    
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer>
        <div class="text-center">Yeblo Paws Copyrights 2021</div>
    </footer>
</body>
</html>
