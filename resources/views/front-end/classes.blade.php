@extends('front-end.layout.main')


@section('main-content')
    <div class="container-fluid inner-banner">

        <div class="row">

            <div class="container">
                <h1>Schooling</h1>
            </div>


        </div>
    </div>
    <div class="container-fluid service" style="border-bottom:0px;">
        <div class="container">
            <div class="row">
                @foreach($classes as $class)
                    <div class="col-sm-2 col-md-2 col-xs-12">
                        <img src="{{ asset('uploads/images/classes/'.$class->title.'.jpg') }}" alt="#">
                        <h2 class="class10" onclick="location.href = '{{ route('subjects',$class->title) }}'">{{ $class->title }} Class TUTORIALS <span>  </span></h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection