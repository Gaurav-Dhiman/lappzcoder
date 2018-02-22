@extends('front-end.layout.main')


@section('main-content')


    <div class="container-fluid inner-banner">



        <div class="container">
            <div class="row"><h1>Contact Us</h1>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                    <ul><li>Home /</li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>

    <div class="container-fluid">

        <div class="container">
            <div class="row">
                <div class="height30"></div>
                <div class="col-sm-3 col-md-3 col-xs-12 left-section">
                    <h3>Cyfuture India Pvt Ltd.</h3>
                    <p>Plot No. 197-198<br>
                        Noida Special Economic Zone (NSEZ)<br>
                        Phase II, Noida 201 305</p>
                    <p>Ph: 0120-6277700
                        E-mail: <a href="mailto:sales@cyfuture.com">sales@cyfuture.com</a></p>
                </div>

                <div class="col-sm-9 col-md-9 col-xs-12">
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success"><p>{!! Session::get('flash_message')  !!} </p></div>
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
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12"> <h3>General Enquiry</h3></div>
                    <form class="input-group" action="{{ route('submit_query') }}" method="post">
                        {{csrf_field()}}
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <input type="text" name="name" placeholder="Enter Your Name" value="{{ old('name') }}">

                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <input name="phone_no" type="number" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"  placeholder="Phone Number" value="{{ old('phone') }}">
                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <textarea name="msg" placeholder="Write Your Message">{{ old('msg') }}</textarea>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                    <div class="height30"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
