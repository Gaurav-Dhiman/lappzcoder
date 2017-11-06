@extends('front-end.layout.main')


@section('main-content')
    <div class="container-fluid inner-banner">

        <div class="row">

            <div class="container">
                <h1>Class 10th Mathematics Tutorials</h1>
            </div>


        </div>
    </div>

    <div class="container-fluid service" style="border-bottom:0px;">

        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/m1.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('videos','number_system') }}'">Number Systems <span>  </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/m2.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('videos','algebra') }}'">Algebra <span> </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/m3.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('videos','trignometry') }}'">Trigonometry <span>  </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/m4.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('videos','coordinate_geometry') }}'">Coordinate Geometry <span>  </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/m5.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('videos','geometry') }}'">Geometry <span> </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/m6.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('videos','mensuration') }}'">Mensuration <span> </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/m7.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('videos','statics_probablity') }}'">Statistics &amp; Probability <span> </span></h2>
                </div>
            </div>
        </div>
    </div>
@endsection