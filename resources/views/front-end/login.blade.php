@extends('front-end.layout.main')


@section('main-content')
    <div class="container-fluid inner-banner">



        <div class="container">
            <div class="row"><h1>Login</h1>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                    <ul><li>Home /</li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>

    <div class="container-fluid">

        <div class="container">
            <div class="row">
                <div class="height30"></div>
                <div class="height30"></div>

                <div class="col-sm-6 col-md-6 col-xs-12">
                    <h3>What is Lorem Ipsum?</h3>
                    <div class="listing">
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Suspendisse et dui nec nibh cursus tincidunt nec ac diam.</li>
                            <li>Donec vestibulum tortor ut nisl malesuada, a tincidunt ante rutrum.</li>
                            <li>Vivamus non augue sed mauris ornare mollis.</li>
                            <li>Nunc sit amet nibh ut purus placerat bibendum.</li>
                            <li>Fusce blandit enim blandit velit gravida imperdiet.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12 login-page">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12"><h3>Enter your Email &amp; Password</h3></div>
                    <form method="post" action="{{ route('front_login',$params)  }}" class="input-group">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-danger"><p>{!! Session::get('flash_message')  !!} </p></div>
                        @endif
                         @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{csrf_field()}}
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <input type="email" name="email" value="{{old('email')}}"  placeholder="Enter Your Email">
                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <input type="password" name="password" placeholder="Enter Your Password">
                        </div>
                        <div class="col-sm-6 col-xs-12 col-md-6">
                            <!-- <input type="checkbox"><span>Remember Me </span> -->
                        </div>
                        <div class="col-sm-6 col-xs-12 col-md-6 text-right">
                            <a href="{{ url('password/reset') }}">Forgot Password ?</a>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection