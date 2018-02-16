@extends('front-end.layout.main')


@section('main-content')
    <div class="container-fluid inner-banner">

        <div class="row">

            <div class="container">
                <h1>{{ $examTitle }} Videos</h1>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                    <ul>
                        <li><a href="{{route('front_home')}}">Home</a> / </li>
                        <li><a href="{{route('exams')}}">Exams</a> / </li>
                        {{--<li><a href="{{route('exam_videos',$examTitle)}}">{{$examTitle}}</a> / </li>--}}
                        <li>{{$examTitle}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service" style="border-bottom:0;">
        <div class="container">
            <div class="row vedio-detail">
                @forelse($videos as $video)
                    <div class="col-sm-3 col-md-3 col-xs-12">
                        <a href="{{ route('exam_video', [$video['file_name']]) }}">
                            <span><img src="{{ $video['thumb_img_path'] }}" alt="#"></span>
                            <h3>{{$video['title']}} </h3>
                        </a>
                    </div>
                @empty
                    <div class="alert alert-info"><p>Sorry, No Videos have been added for this chapter yet! Please check again later.</p></div>
                @endforelse
            </div>
        </div>
    </div>
@endsection