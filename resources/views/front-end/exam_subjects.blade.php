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
                        <li>{{ $examTitle}} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service" style="border-bottom:0;">
        <div class="container">
            <div class="row">
                @forelse($subjects as $k=>$subject)
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <img src="{{ asset('uploads/images/chapters/m'.(($k+1)%7).'.jpg') }}" alt="#">
                        <h2 class="class10" onclick="location.href = '{{ route('exam_chapters', [ $examTitle, $subject->title,  ]) }}'">{{ $subject->title }}<span>  </span></h2>
                    </div>
                @empty
                    <div class="alert alert-info"><p>Sorry, there are no Subjects for this Exam yet! Please check again later.</p></div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
