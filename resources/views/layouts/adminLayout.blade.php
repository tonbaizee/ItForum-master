<!DOCTYPE html>
<html lang="en">
<head>
    <title>ItForum &mdash; International It Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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







</head>
<body>
<div class="site-navbar-wrap bg-white">

    <div class="container">
        <div class="site-navbar bg-light">
            <div class="py-1">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h2 class="mb-0 site-logo"><a href="index.html">International<strong>Forum  ADMIN</strong> </a></h2>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                                <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    <li >
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>

                                    <li><a href="{{ url('/forum') }}">Get Users</a></li>
                                    <li><a href="{{ url('/admin/addEvent') }}">Add Event</a></li>

                                    <li class="active"><a href="about.html">....</a></li>
                                    <li><a href="{{ url('/contact') }}">....</a></li>
                                </ul>
                                <!-- Right Side Of Navbar -->
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- Authentication Links -->
                                    @if (Auth::guest())
                                        <li><a href="{{ url('/login') }}">Login</a></li>
                                        <li><a href="{{ url('/register') }}">Register</a></li>
                                    @else
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ url('/logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Logout
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
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')
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
