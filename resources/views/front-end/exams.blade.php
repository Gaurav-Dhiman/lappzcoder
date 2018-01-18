@extends('front-end.layout.main')


@section('main-content')
    <div class="container-fluid inner-banner">

        <div class="row">

            <div class="container">
                <h1>Exams</h1>
            </div>


        </div>
    </div>
    <div class="container-fluid service" style="border-bottom:0px;">
        <div class="container">
            <div class="row">
                @foreach($exams as $k=>$exam)
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <img src="{{ asset('uploads/images/chapters/m'.(($k+1)%7).'.jpg') }}" alt="#">
                        <h2 class="class10" onclick="location.href = '#'">{{ $exam->title }}<span>  </span></h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection