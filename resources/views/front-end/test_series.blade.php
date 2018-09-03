@extends('front-end.layout.main')


@section('main-content')
    <div class="container-fluid inner-banner">
        <div class="row">
            <div class="container">
                <h1>Test Series</h1>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                    <ul>
                        <li><a href="{{route('front_home')}}">Home</a> / </li>
                        <li>Test Series </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service" style="border-bottom:0;">
        <div class="container">
            <div class="row">
                @forelse($test_series as $k=>$t)
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <img src="{{ asset('uploads/images/chapters/m'.(($k+1)%7).'.jpg') }}" alt="#">
                        <h2 class="class10" onclick="location.href = '{{ route('test_series_detail', [ $t->title ]) }}'">{{ $t->title }}<span>  </span></h2>
                    </div>
                @empty
                    <div class="alert alert-info"><p>Sorry, there are no test series yet! Please check again later.</p></div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
