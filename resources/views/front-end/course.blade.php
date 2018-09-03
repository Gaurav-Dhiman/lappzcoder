@extends('front-end.layout.main')


@section('main-content')
    <div class="container-fluid inner-banner">

        <div class="row">

            <div class="container">
                <h1>Take a Challange</h1>
            </div>


        </div>
    </div>
    <div class="container-fluid service" style="border-bottom:0px;">
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/1.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('course_detail','mathematics') }}'">Mathematics <span>  </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/2.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('course_detail','science') }}'">Science <span> </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/3.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('course_detail','english') }}'">English <span>  </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/4.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('course_detail','social_science') }}'">social science <span>  </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/5.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('course_detail','sanskrit') }}'">sanskrit <span> </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/6.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('course_detail','hindi') }}'">hindi <span> </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/class10/7.jpg') }}" alt="#">
                    <h2 class="class10" onclick="location.href = '{{ route('course_detail','computer_science') }}'">computer science <span> </span></h2>
                </div>
            </div>
        </div>
    </div>
@endsection