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

<div class="site-wrap">

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

        <div class="container">
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


    <div class="site-blocks-cover inner-page overlay" style="background-image: url({{ asset('pic/img2.jpg') }}); height: 450px" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center">
                    <h3 class="mb-5" style="color: ivory;">"Do not worry if something is not working. If everything worked, you would be fired."<h3 style="color: ivory"><strong>Mosher’s Law of Software Engineering</strong></h3></h3>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="site-footer">
        <div class="container">


            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-8 mb-5 mb-lg-0">
                            <h3 class="footer-heading mb-4 " style="color: #42aaf2">About</h3>
                            <p>The project will be used to complete the thesis.
                                The project will be used to complete the thesis.
                                The project will be used to complete the thesis.
                                The project will be used to complete the thesis.
                                The project will be used to complete the thesis.
                                The project will be used to complete the thesis.</p>
                            <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                            <h3 class="footer-heading mb-4" style="color: #42aaf2;">Quick Menu</h3>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/news') }}">News</a></li>
                                <li><a href="{{ url('/forum') }}">Forum</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                <li><a href="{{ url('/admin') }}">Admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row mb-5">
                        <div class="col-md-12"><h3 class="footer-heading mb-4" style="color: #42aaf2;">Contact Info</h3></div>
                        <div class="col-md-6">
                            <p>   *   *   *   <br>   *   *   *   </p>
                        </div>
                        <div class="col-md-6">
                            Tel. +380 67 609 41 12 <br>
                            Mail. stasispuha@gmail.com
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12"><h3 class="footer-heading mb-4" style="color: #42aaf2;">Social Icons</h3></div>
                        <div class="col-md-12">
                            <p>
                                <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                                <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                                <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script></script> This website is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://www.instagram.com/tonbaizee/?hl=ru" target="_blank" >Tonbaizee</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </div>
    </footer>

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
