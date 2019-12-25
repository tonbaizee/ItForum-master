@extends('layouts.layout1')
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">



                    <form action="/createContact" class="p-5 bg-white" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fullname">Full Name</label>
                                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Email</label>
                                <input type="email" id="email" name="mail" class="form-control" placeholder="Email Address">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone #">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="message">Message</label>
                                <input name="message" id="message" name="message"  class="form-control" placeholder="Say hello to us"></input>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary pill px-4 py-2">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3">Contact Info</h3>
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">****</p>

                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">+380 67 609 41 12</a></p>

                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#">stasispuha@gmail.com</a></p>

                    </div>

                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3">More Info</h3>
                        <p>The project will be used to complete the thesis.The project will be used to complete the thesis.The project will be used to complete the thesis.</p>
                        <p><a href="{{url('/')}}" class="btn btn-primary px-4 py-2 text-white pill">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
