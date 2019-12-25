@extends('layouts.layout1')
@section('content')
    <div class="site-blocks-cover inner-page overlay" style="background-color: dodgerblue" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center heading-with-border">
                    <h1 class="mb-5">It<strong>Forum</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="block-schedule overlay site-section" style="background-image: url({{ asset('pic/img4.jpg') }});">
        <div class="container">

            <h2 class="text-white display-4 mb-5">Topics</h2>

            <ul class="nav nav-pills tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-sunday-tab" data-toggle="pill" href="#pills-sunday" role="tab" aria-controls="pills-sunday" aria-selected="true">Solutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-monday-tab" data-toggle="pill" href="#pills-monday" role="tab" aria-controls="pills-monday" aria-selected="true">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tuesday-tab" data-toggle="pill" href="#pills-tuesday" role="tab" aria-controls="pills-tuesday" aria-selected="false">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-wednesday-tab" data-toggle="pill" href="#pills-wednesday" role="tab" aria-controls="pills-wednesday" aria-selected="false">Discussions</a>
                </li>
                <li class="nav-item">
                    <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="{{url('/forum/createNewTopic')}}" class="btn btn-primary pill px-4 mt-3 mt-md-0">Create new topic</a></div>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">
                    @foreach($solutions as $solution)
                    <div class="row-wrap">
                        <div class="row bg-white p-4 align-items-center">
                            <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">{{$solution->Name}}</h3></div>
                            <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>{{ $solution->created_at }}</div>
                            <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span>{{$solution->AuthorName}}</div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="{{ url('/forum/solution/'.$solution->id) }}" class="btn btn-primary pill px-4 mt-3 mt-md-0">Join Now</a></div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="tab-pane fade" id="pills-monday" role="tabpanel" aria-labelledby="pills-monday-tab">

                    @foreach($projects as $project)
                        <div class="row-wrap">
                            <div class="row bg-white p-4 align-items-center">
                                <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">{{$project->Name}}</h3></div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>{{ $project->created_at }}</div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span>{{$project->AuthorName}}</div>
                                <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="{{ url('/forum/project/'.$project->id) }}" class="btn btn-primary pill px-4 mt-3 mt-md-0">Join Now</a></div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="tab-pane fade" id="pills-tuesday" role="tabpanel" aria-labelledby="pills-monday-tab">

                    @foreach($events as $event)
                        <div class="row-wrap">
                            <div class="row bg-white p-4 align-items-center">
                                <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">{{$event->Name}}</h3></div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>{{ $event->created_at }}</div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span>{{$event->AuthorName}}</div>
                                <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="{{ url('/forum/project/'.$event->id) }}" class="btn btn-primary pill px-4 mt-3 mt-md-0">Join Now</a></div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="tab-pane fade" id="pills-wednesday" role="tabpanel" aria-labelledby="pills-monday-tab">

                    @foreach($discussions as $discussion)
                        <div class="row-wrap">
                            <div class="row bg-white p-4 align-items-center">
                                <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">{{$discussion->Name}}</h3></div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>{{ $discussion->created_at }}</div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span>{{$discussion->AuthorName}}</div>
                                <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="{{ url('/forum/project/'.$discussion->id) }}" class="btn btn-primary pill px-4 mt-3 mt-md-0">Join Now</a></div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>



        </div>
    </div>
    @endsection
