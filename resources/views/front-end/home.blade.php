@extends('front-end.layout.main')


@section('main-content')

    <div class="container-fluid">

        <div class="row">

            <div class="slider-container" id="slider-container">
                <div class="slider">
                    <div>
                        <img src="{{ asset('front-end-assets/images/slider1.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('front-end-assets/images/slider2.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('front-end-assets/images/slider1.jpg') }}" alt="">
                    </div>
                </div>

                <div class="switch" id="prev"><span></span></div>
                <div class="switch" id="next"><span></span></div>
            </div>


        </div>
    </div>
    <div class="container-fluid service">
        <div class="height30 clearfix"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/schooling.jpg') }}" alt="#">
                    <h2 class="schooling" onclick="location.href = '{{ route('classes') }}'">Schooling <span>  </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/competative.jpg') }}" alt="#">
                    <h2 class="competative" onclick="location.href = '{{ route('exams') }}'">Competetive <span>  </span></h2>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <img src="{{ asset('front-end-assets/images/series.jpg') }}" alt="#">
                    <h2 class="series">Test Series <span> </span></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid vdsection">
        <div class="container">
            <h2 class="heading">Video Tutorials</h2>
            <div class="height20"></div>
            <div id="demo">
                <div class="container">
                    <div class="row">
                        <div class="span12">

                            <div id="owl-demo" class="owl-carousel">
                                @foreach($classes as $class)
                                    <div class="item">
                                        <span class="exbox1">
                                            <a href="{{ route('subjects',$class->title) }}">
                                                <img src="{{ asset('uploads/images/classes/'.$class->title.'.jpg') }}" alt="#">
                                                <span class="vedia-text">
                                                    <strong class="vdlink" style="background:#1e90c5">VIDEO</strong><br>
                                                    <p><strong>{{$class->title}} Class<br></strong>
                                                        TUTORIALS</p>
                                                </span>
                                            </a>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                            <div class="customNavigation">
                                <a class="btn prev fa fa-angle-left"></a>
                                <a class="btn next fa fa-angle-right"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid video-box">
        <div class="container">
            <h2 class="heading">Latest Video Lecture</h2>
            <div class="row">
                <div class="marquee-with-options">
                    <div class="col-sm-3 col-md-3 col-xs-12 UpcomingSessions-box">
                        <span><img src="{{ asset('front-end-assets/images/first-vd.jpg') }}" alt="#"></span>
                        <h3>Lorem Ipsum is<br>
                            simply dummy text </h3>
                        <p>Lorem Ipsum is simply dummy text of<br>
                            the printing and typesetting industry. </p>
                        <a href="#">Read More</a>
                    </div>
                    <div class="col-sm-3 col-md-3 col-xs-12 UpcomingSessions-box">
                        <span><img src="{{ asset('front-end-assets/images/sec-vd.jpg') }}" alt="#"></span>
                        <h3>Lorem Ipsum is<br>
                            simply dummy text </h3>
                        <p>Lorem Ipsum is simply dummy text of<br>
                            the printing and typesetting industry. </p>
                        <a href="#">Read More</a>
                    </div>
                    <div class="col-sm-3 col-md-3 col-xs-12 UpcomingSessions-box">
                        <span><img src="{{ asset('front-end-assets/images/third-vd.jpg') }}" alt="#"></span>
                        <h3>Lorem Ipsum is<br>
                            simply dummy text </h3>
                        <p>Lorem Ipsum is simply dummy text of<br>
                            the printing and typesetting industry. </p>
                        <a href="#">Read More</a>
                    </div>
                    <div class="col-sm-3 col-md-3 col-xs-12 UpcomingSessions-box">
                        <span><img src="{{ asset('front-end-assets/images/forth-vd.jpg') }}" alt="#"></span>
                        <h3>Lorem Ipsum is<br>
                            simply dummy text </h3>
                        <p>Lorem Ipsum is simply dummy text of<br>
                            the printing and typesetting industry. </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="height30"></div>
    <div class="container-fluid event">
        <div class="container">
            <h2>Blog</h2>
            <div class="row">
                <div class="whtbg">
                    <div class="col-sm-8 col-md-8 col-xs-12" style="padding-left:0;">
                        <img src="{{ asset('front-end-assets/images/upcom-evt.jpg') }}" alt="#">

                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <h3>Lorem Ipsum is<br>
                            simply dummy text </h3>
                        <p><i>24 July 2017</i></p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p></div>


                </div>
            </div>
            <div class="row blog-btm">
                <div class="col-sm-12 col-md-12 col-xs-12 blog-btm">
                    <div class="span12">

                        <div id="owl-demo1" class="owl-carousel" style="position:relative">

                            <div class="item">
                                <div class="col-sm-3 col-xs-12 col-md-3"><img
                                            src="{{ asset('front-end-assets/images/blog1.jpg') }}"></div>
                                <div class="col-sm-3 col-xs-12 col-md-3"><img
                                            src="{{ asset('front-end-assets/images/blog2.jpg') }}"></div>
                                <div class="col-sm-3 col-xs-12 col-md-3"><img
                                            src="{{ asset('front-end-assets/images/blog3.jpg') }}"></div>
                                <div class="col-sm-3 col-xs-12 col-md-3"><img
                                            src="{{ asset('front-end-assets/images/blog4.jpg') }}"></div>
                            </div>
                            <div class="item">
                                <div class="col-sm-3 col-xs-12 col-md-3"><img
                                            src="{{ asset('front-end-assets/images/blog1.jpg') }}"></div>
                                <div class="col-sm-3 col-xs-12 col-md-3"><img
                                            src="{{ asset('front-end-assets/images/blog2.jpg') }}"></div>
                                <div class="col-sm-3 col-xs-12 col-md-3"><img
                                            src="{{ asset('front-end-assets/images/blog3.jpg') }}"></div>
                                <div class="col-sm-3 col-xs-12 col-md-3"><img
                                            src="{{ asset('front-end-assets/images/blog4.jpg') }}"></div>
                            </div>
                        </div>
                        <div class="customNavigation">
                            <a class="btn prev1 fa fa-angle-left"></a>
                            <a class="btn next1 fa fa-angle-right"></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="height30"></div>
    <div class="height30"></div>
    @if(count($testimonials))
    <div class="container-fluid othersay">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12"><h2>See What Others Say</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. </p></div>
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="jcarousel-wrapper">
                        <div class="jcarousel">
                            <ul>
                                @foreach($testimonials as $testimonial)
                                    <li>
                                        <div class="othersaybox-main">
                                            <div class="othersaybox"><p>{{ $testimonial->description }} </p>
                                                <h3><img src="{{ asset('storage/'. $testimonial->image) }}" width="50" style="border-radius:50px;" alt="#">{{ $testimonial->name }}</h3></div>
                                            <a href="javascript:void(0);">{{ $testimonial->designation }}</a></div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                        <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                        <p class="jcarousel-pagination"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection