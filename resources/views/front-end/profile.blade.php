@extends('front-end.layout.main')


@section('main-content')

    <div class="container-fluid inner-banner">



        <div class="container">
            <div class="row"><h1>My Account</h1>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                    <ul><li><a href="{{route('front_home')}}">Home</a> /</li>
                        <li>My Account</li>
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
                <div class="col-sm-6 col-md-6 col-xs-12 ">
                    <div class="col-sm-5 col-md-4 col-xs-12">
                        <img src="{{ asset('front-end-assets/images/profile.png') }}" alt="Profile" width="150" style="border-radius: 75px; padding: 2px; border: 1px solid black;">
                    </div>
                    <div class="col-sm-7 col-xs-12 col-md-8 profile">
                        <h3>{{$user->name}} <br><span>{{$user->email}}</span></h3>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-xs-12 login-page">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12"><h3>Update Account Details</h3></div>

                    <form action="{{ route('update_profile')}}" class="input-group" method="post">
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
                            <input type="text" name="name" placeholder="Enter Your Name" value="{{ old('name', $user->name) }}">
                        </div>
                        <!-- <div class="col-sm-6 col-xs-6 col-md-6">
                            <input name="mobile" type="text" placeholder="Enter Your Mobile Number">
                        </div> -->
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <input name="email" type="email" placeholder="Enter Your Email Address" disabled value="{{ old('email', $user->email) }}">
                        </div>

                        <div class="col-sm-6 col-xs-6 col-md-6">
                            <input name="password" type="password" placeholder="Enter to change your Password">
                        </div>
                        <div class="col-sm-6 col-xs-6 col-md-6">
                            <input name="password_confirmation" type="password" placeholder="Confirm Your Password">
                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <input name="phone_no" type="number" placeholder="Enter Your Phone Number" value="{{ old('phone_no',  $user->phone_no) }}">
                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <select name="class" id="class_id">
                                <option value="">Select a Class</option>
                                @foreach($classOptions as $key=>$class)
                                    <option value="{{ $class }}" @if(old('class', $user->class) == $class) {{ 'selected' }} @endif>{{ $class }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <button type="submit">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection