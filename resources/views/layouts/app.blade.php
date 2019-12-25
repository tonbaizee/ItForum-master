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

    <!-- Styles -->
    <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500')}}">
    <link rel="stylesheet" href="{{url('/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('/css/animate.css')}}">


    <link rel="stylesheet" href="{{url('/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{url('/css/aos.css')}}">

    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->

<div class="site-navbar-wrap bg-white">
    <div class="site-navbar-top">
        <div class="container py-2">
            <div class="row align-items-center">
                <div class="col-6">
                    <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                    <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                    <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                    <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                </div>
                <div class="col-6">
                    <div class="d-flex ml-auto">
                        <a href="#" class="d-flex align-items-center ml-auto mr-4">
                            <span class="icon-envelope mr-2"></span>
                            <span class="d-none d-md-inline-block">stasispuha@gmail.com</span>
                        </a>
                        <a href="tel://12912830302" class="d-flex align-items-center">
                            <span class="icon-phone mr-2"></span>
                            <span class="d-none d-md-inline-block">+380 67 609 41 12</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-navbar-wrap bg-white">

    <div class="container" style="width: 100%;">
        <div class="site-navbar bg-light">
            <div class="py-1">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h2 class="mb-0 site-logo"><a href="{{ url('/') }}">International<strong>Forum</strong>  </a></h2>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                                <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    <li >
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>

                                    <li  class="active"><a href="{{ url('/forum') }}">Forum</a></li>
                                    <li><a href="{{ url('/news') }}">News</a></li>


                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/loginConfirm') }}">
                    {{ config('app.name', 'Laravel') }}
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
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            @yield('content')
        </main>
    </div>
    <script src="{{url('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{url('/js/jquery-ui.js')}}"></script>
    <script src="{{url('/js/popper.min.js')}}"></script>
    <script src="{{url('/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('/js/jquery.stellar.min.js')}}"></script>
    <script src="{{url('/js/jquery.countdown.min.js')}}"></script>
    <script src="{{url('/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('/js/aos.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}" defer></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js') }}" defer></script>
    <script src="{{url('/js/main1.js')}}" defer></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js')}}" defer></script>
    <script src="{{url('/js/index.js')}}" defer></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js')}}" defer></script>
    <script src="{{url('/js/main.js')}}"></script>


</body>
</html>
