@extends('front-end.layout.main')


@section('main-content')
    <div class="container-fluid inner-banner">
        <div class="row">
            <div class="container">
                <h1>Exams</h1>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                    <ul>
                        <li><a href="{{route('front_home')}}">Home</a> / </li>
                        <li><a href="{{route('exams')}}">Exams</a> / </li>
                        <li><a href="{{route('exam_subjects', [$examTitle])}}">{{$examTitle}}</a> / </li>
                        <li>{{ $subjectTitle}} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service" style="border-bottom:0;">
        <div class="container">
            <div class="row">
                @foreach($chapters  as $k=>$chapter)
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <img src="{{ asset('uploads/images/chapters/m'.(($k+1)%7).'.jpg') }}" alt="#">
                        <h2 class="class10" onclick="location.href = '{{ route('exam_videos', [ $examTitle, $subjectTitle, $chapter->title,  ]) }}'">{{ $chapter->title }}<span>  </span></h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
