@extends('layouts.adminLayout')
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">



                    <form action="/addEvent" class="p-5 bg-white" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="eventName">Full Event Name</label>
                                <input type="text" id="eventName" name="eventName" class="form-control" placeholder="Event Name">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="text">Message</label>
                                <textarea name="text" id="text" cols="30" rows="5" class="form-control" placeholder="Event Text"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="shortText">Short text</label>
                                <input type="text" id="shortText" name="shortText"  class="form-control" placeholder="Short Event Text">
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
                                <input type="submit" value="Add Event" class="btn btn-primary pill px-4 py-2">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
