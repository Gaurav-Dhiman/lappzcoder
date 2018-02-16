@extends('front-end.layout.main')

@section('extra-css')
    <link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
@endsection

@section('main-content')
    <div class="container-fluid inner-banner">

        <div class="row">

            <div class="container">
                <h1>{{$video['title']}}</h1>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                    <ul>
                        <li><a href="{{route('front_home')}}">Home</a> / </li>
                        <li><a href="{{route('classes')}}">Schooling</a> / </li>
                        <li><a href="{{ route('subjects',$classTitle)}}">{{$classTitle}}</a> / </li>
                        <li><a href="{{ route('chapters',[$classTitle, $subjectTitle])}}">{{$subjectTitle}}</a> / </li>
                        <li><a href="{{ route('tutorials',[$classTitle, $subjectTitle, $chapterName])}}">{{$chapterName}}</a> / </li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="container">
            <div class="row">
                <div class="height30"></div><div class="height30"></div>
                <div class="col-sm-9 col-md-9 col-xs-12 fulvedio">
                    <video id="my-video" class="video-js" controls preload="auto" width="800" height="400"
                           poster="{{$video['thumb_img_path']}}" data-setup="{}">
                        <source src="{{ $video['file_path'].$video['file_name'] }}" type='video/mp4'>
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-12 vediothumb">
                    <ul>
                        @foreach($videos as $video)
                            <li style="list-style: none;">
                                <a href="{{route('video', [$classTitle, $subjectTitle, $chapterName, $video['file_name']])}}">
                                    <span><img src="{{ $video['thumb_img_path'] }}" class="img-responsive" alt="#"></span>
                                    <h3>{{ $video['title'] }}</h3>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>
@endsection
