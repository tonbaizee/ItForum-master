@extends('layouts.layout1')
@section('content')
    <style>
        .col {
             /* Цвет фона */
            width: auto; /* Ширина блока */
            padding: 10px; /* Поля */
            font-size: 1.5em; /* Размер шрифта */
            word-wrap: break-word; /* Перенос слов */
        }

    </style>
    <div id="postlist" class="postlist restrain" style="margin: 100px; border: #42aaf2 20px;">
        <div class="heading-with-border">
            <h2 class="heading text-uppercase" style="color: #1b1e21">{{ $currentTopic->Name }}</h2>
        </div>
        <ol> {{$currentTopic->theme}}</ol>
        <div class="post-entry bg-white">
        @if($currentTopic->postImage != 1)

                <div class="heading-with-border w-100 mb-5 text-center">
                    <img src="{{url( asset($currentTopic->postImage)) }}" style=" background: #42aaf2; border-radius: 10px; padding: 5px; height: 450px;width: 800px;" alt="Image" class="img-fluid">
                </div>

            @endif
        </div>
        <br><br><br>
        <span class="icon-person h4 mr-3"></span>
        <span>{{$currentTopic->AuthorName}}</span>
    </div>
    <hr align="center" width="100%" size="15"  color="#42aaf2" />
    @foreach($allMessages as $message)
        <div id="postlist" class="postlist restrain" style="margin: 100px; border: #42aaf2 20px;">
        <div class="col">
            <p> {{$message->Message}}</p>
        </div>
            <div class="post-entry bg-white">
                @if($message->postImage != 1)


                    <div class="text-center">
                        <img src="{{url( asset($message->postImage)) }}" style=" background: #42aaf2; border-radius: 10px; padding: 5px; height: 450px; width: 800px;" alt="Image" class="img-fluid">
                    </div>


                @endif
            </div>
            <br><br><br>
            <span class="icon-person h4 mr-3"></span>
            <span>{{$message->AuthorName}}</span>
        </div>
        <hr align="center" width="100%" size="15"  color="#42aaf2" />
    @endforeach
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">
                    <form action="/sendMessage/{{ $TopicId }}" class="p-5 bg-white" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say something"></textarea>
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
                                <input type="submit" value="Send Message" class="btn btn-primary pill px-4 py-2">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
