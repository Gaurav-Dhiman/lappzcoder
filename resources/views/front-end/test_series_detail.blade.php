@extends('front-end.layout.main')


@section('main-content')
    <div class="container-fluid inner-banner">
        <div class="row">
            <div class="container">
                <h1>Test Series</h1>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                    <ul>
                        <li><a href="{{route('front_home')}}">Home</a> / </li>
                        <li><a href="{{route('test_series')}}">Test Series</a> / </li>
                        <li>{{ $test_series_title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service" style="border-bottom:0;">
        <div class="container">
            <div class="row">
                @forelse($test_series as $k=>$t)
                    <div class="col-sm-2 col-md-2 col-xs-12">
                        <img src="{{ asset('img/pdf_download.png') }}" class="img-responsive" alt="#" style="width: 100%">
                        <h2 class="class10" onclick="location.href = '{{ route('test_series_download', [ $test_series_title ,$t['file_name'] ]) }}'">{{ $t['title'] }}<span>  </span></h2>
                    </div>
                @empty
                    <div class="alert alert-info"><p>Sorry, there are no Test Series for this test yet! Please check again later.</p></div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
