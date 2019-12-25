@extends('layouts.layout1')
@section('content')
    <div class="site-blocks-cover inner-page overlay" style="background-color: dodgerblue" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center">
                    <h1 class="mb-5">News &amp; <strong>Updates</strong></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                @foreach($news as $event)
                <div class="col-md-6 col-lg-4 mb-4" >
                    <div class="post-entry bg-white">
                        <div class="image">
                            <img src="{{ $event->srcImage }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="text p-4">
                            <h2 class="h5 text-black"><a href="{{ url('/news/'.$event->id) }}">{{ $event->name }}</a></h2>
                            <span class="text-uppercase date d-block mb-3"><small>By {{ $event->AuthorName }} &bullet; {{ $event->created_at }}</small></span>
                            <p class="mb-0">{{ $event->shortText }}</p>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>


@endsection
