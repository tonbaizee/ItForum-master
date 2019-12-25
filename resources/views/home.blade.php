@extends('layouts.layout1')

@section('content')

    <div id="page-wrapper">
        <div class="container1">
            <div class="card1">
                <div class="front1 side1">
                    <h1 class="logo1">Our project</h1>
                </div>
                <div class="back1 side1">
                    <div class="info1">
                        <h1 class="text-center" style="color: white">
                            The project will be used to complete the thesis.
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5 mb-5 mb-lg-0">
                    <h2 class="mb-3 text-uppercase">All About <strong class="text-black font-weight-bold">Us</strong></h2>
                    <p class="lead">The International Forum for programmers in Development (Forum). Forum exists to share information,
                        develop good practice and enhance cooperation across the international network of prigrammists and development sectors.
                        It promotes the value of coders for a lot of projects,
                        mutual learning and by sharing innovative and good practices.
                        Forum is a ‘virtual’ network.</p>
                    <p class="mb-4">Created and developed on the laravel framework.</p>
                    <ul class="site-block-check">
                        <li>Permanent online</li>
                        <li>No spam</li>
                        <li>No ads</li>
                        <li>Constant events</li>
                    </ul>
                    <p><a href="{{ url('/') }}" class="btn btn-primary pill px-4">Join us</a></p>
                </div>
                <div class="col-md-12 col-lg-6 ml-auto">
                    <img src="{{ url('/pic/img2.jpg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover inner-page overlay" style="background-image: url({{ asset('pic/img4.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="featured-classes py-5 block-13">
                    <div class="container">

                        <div class="heading-with-border">
                            <h2 class="heading text-uppercase" style="color: white">Abo<strong>ut</strong></h2>
                        </div>

                        <div class="nonloop-block-13 owl-carousel">

                            <div class="block-media-1 heading-with-border bg-white"  style="height: 470px">
                                <img src="pic/img1.jpg" alt="Image" class="img-fluid">
                                <div class="p-4">
                                    <h3 class="h5 heading">
                                        Permanent online
                                    </h3>
                                    <p style="color: #1b1e21">
                                        Moderators always follow news updates.
                                    </p>
                                    <span class="d-flex align-items-center">
                                        <span class="icon-person h4 mr-3"></span>
                                        <span>Tonbaizee</span>
                                    </span>
                                </div>
                            </div>

                            <div class="block-media-1 heading-with-border bg-white" style="height: 470px">
                                <img src="pic/img2.jpg" alt="Image" class="img-fluid">
                                <div class="p-4">
                                    <h3 class="h5 heading">No spam</h3>
                                    <p style="color: #1b1e21">Spam is prohibited and severely penalized.</p>
                                    <span class="d-flex align-items-center">
                                         <span class="icon-person h4 mr-3"></span>
                                         <span>Tonbaizee</span>
                                    </span>
                                </div>
                            </div>

                            <div class="block-media-1 heading-with-border bg-white"  style="height: 470px">
                                <img src="pic/img3.jpg" alt="Image" class="img-fluid">
                                <div class="p-4">
                                    <h3 class="h5 heading">
                                        Constant events
                                    </h3>
                                    <p style="color: #1b1e21">All sorts of events are constantly appearing on the site.</p>
                                    <span class="d-flex align-items-center">
                                        <span class="icon-person h4 mr-3"></span>
                                        <span>Tonbaizee</span>
                                    </span>
                                </div>
                            </div>

                            <div class="block-media-1 heading-with-border bg-white"  style="height: 470px">
                                <img src="pic/img4.jpg" alt="Image" class="img-fluid">
                                <div class="p-4">
                                    <h3 class="h5 heading">Welcome</h3>
                                    <p style="color: #1b1e21">
                                        We are always glad to see you.
                                    </p>
                                    <span class="d-flex align-items-center">
                                        <span class="icon-person h4 mr-3"></span>
                                        <span>Tonbaizee</span>
                                    </span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

