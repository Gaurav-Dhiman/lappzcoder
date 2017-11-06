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
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12"> <h3>General Enquiry</h3></div>
                    <form class="input-group">
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <input type="text" placeholder="Enter Your Name">

                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <input type="text" placeholder="Email Address">
                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <input type="text" placeholder="Phone Number">
                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-12">
                            <textarea placeholder="Write Your Message"></textarea>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <button>Submit</button>
                        </div>
                    </form>
                    <div class="height30"></div>
                </div>



            </div>
        </div>
    </div>
@endsection
