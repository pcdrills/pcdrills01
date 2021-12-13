<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <!-- Scripts -->
    <script src=""></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <script text="text/javascript" src="{{ asset('js/costumjs/main.js') }}" defer></script>
    <script text="text/javascript" src="{{ asset('js/costumjs/1script.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">   
    <link href="{{ asset('css/costumcss/maincss.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">

        <!--Header for all pages-->
        <div >
            <header id="header" class="header fixed-top">
                <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            
                <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                    <img src="{{asset('img/logo.png')}}" alt="">
                    <span>{{ config('app.name', 'Laravel') }}</span>
                </a>
            
                <nav id="navbar " class="navbar  ">
                    <ul>
                    <li><a class="nav-link scrollto  active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto " href="/about">About</a></li>
                    <li><a class="nav-link scrollto " href="/services">Services</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a class="nav-link  scrollto" href="/contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="/register">Join Us</a></li>
                    <li>
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
                    </li>
                    
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle "></i>
                </nav>
                <!-- .navbar -->
            
                </div>
            </header>
        </div>
        <!-- End Header -->

        <!-- Start of Main Section of the page -->
        <main class="pb-2">
            <div>
                <div class="container pt-5 pb-2 mb-5 mt-7"></div>
                @yield('content')
            </div>
            <!-- End of Main Section of the page -->
            

            <!-- Start of Footer -->
            <div>
                @include('layouts.footer')
            </div>
            <!-- End of Footer -->
        </main>        

    </div>
</body>
</html>
