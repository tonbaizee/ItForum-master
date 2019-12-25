@extends('layouts.layout1')
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row text-center">
                <div class="heading-with-border text-center w-100 mb-5">
                    <h2 class="heading text-uppercase">{{ $news->name }}</h2>
                </div>
                <div class="text-center w-100 mb-5">
                    <h4 class=" ">{{ $news->text }}</h4>
                </div>
                <div class="heading-with-border w-100 mb-5">
                    <img src="{{url( asset($news->srcImage)) }}" style=" background: #42aaf2; border-radius: 10px; padding: 5px;" alt="Image" class="img-fluid">
                </div>
                <span class="icon-person h4 mr-3"></span>
                <span>{{$news->AuthorName}}</span>
            </div>
        </div>
    </div>
    <hr align="center" width="100%" size="15"  color="#42aaf2" />


    <br />
    @endsection
