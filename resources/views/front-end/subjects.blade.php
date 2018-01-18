@extends('front-end.layout.main')


@section('main-content')
    <div class="container-fluid inner-banner">

        <div class="row">

            <div class="container">
                <h1>{{ $classTitle }} Class TUTORIALS</h1>
            </div>


        </div>
    </div>
    <div class="container-fluid service" style="border-bottom:0;">
        <div class="container">
            <div class="row">
                @foreach($subjects as $subject)
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <img src="{{ asset('uploads/images/subjects/'.$subject->title.'.jpg') }}" alt="#">
                        <h2 class="class10" onclick="location.href = '{{ route('chapters',[$classTitle, $subject->title]) }}'">{{ $subject->title }}<span>  </span></h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection