@extends('layouts.layout1')
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

    <div class="col-md-12 col-lg-8 mb-5">
        <div class="heading-with-border text-center">
            <h2 class="heading text-uppercase" style="color: black;">Create new<strong> topic</strong></h2>
        </div>
        <form action="/createNewTopic" class="p-5 bg-white" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="sel1">Topic</label>
                    <select class="form-control" id="sel1" name="sel1">
                        <option>1 - Solutions</option>
                        <option>2 - Projects</option>
                        <option>3 - Event</option>
                        <option>4 - Discussion</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <label class="font-weight-bold" for="theme">Theme</label>
                    <input type="text" id="theme" name="theme" class="form-control" placeholder="Theme for topic">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <label class="font-weight-bold" for="srcImage">Source Image</label>
                    <input type="file" class="form-control" id="srcImage" name="srcImage">
                </div>
            </div>



            <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="Create Topic" class="btn btn-primary pill px-4 py-2">
                </div>
            </div>


        </form>
    </div>
            </div>
        </div>

    </div>    @endsection
