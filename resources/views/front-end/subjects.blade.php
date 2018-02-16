@extends('front-end.layout.main')


@section('main-content')
    <div class="container-fluid inner-banner">

        <div class="row">

            <div class="container">
                <h1>{{ $classTitle }} Class TUTORIALS</h1>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                    <ul>
                        <li><a href="{{route('front_home')}}">Home</a> / </li>
                        <li><a href="{{route('classes')}}">Schooling</a> / </li>
                        <li>{{$classTitle}} </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
    <div class="container-fluid service" style="border-bottom:0;">
        <div class="container">
            <div class="row">
                @forelse($subjects as $subject)
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <img src="{{ asset('uploads/images/subjects/'.$subject->title.'.jpg') }}" alt="#">
                        <h2 class="class10" onclick="location.href = '{{ route('chapters',[$classTitle, $subject->title]) }}'">{{ $subject->title }}<span>  </span></h2>
                    </div>
                @empty
                    <div class="alert alert-info"><p>Sorry, No subjects have been added for this class yet! Please check again later.</p></div>
                @endforelse
            </div>
        </div>
    </div>
@endsection