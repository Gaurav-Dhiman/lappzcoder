
<div class="right-btn">
    <span><img src="{{ asset('front-end-assets/images/querry-btn.png') }}" alt="#"></span>
    <div class="rightbox">
        <ul>
            <li><input type="text" placeholder="Name"></li>
            <li><input type="text" placeholder="Email"></li>
            <li><textarea placeholder="Message"></textarea></li>
            <li>

                <input type="button" name="Submit" value="Submit"/>

            </li>
        </ul>
        <p>We Will<br>
            <strong>get back to you<br>
                soon!</strong></p>
    </div>
</div>
<!-- navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{ asset('front-end-assets/images/logo.jpg') }}" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown active">
                    <a href="{{ route('front_home') }}">Home</a></li>
                <li class="dropdown">
                    <a href="{{ route('front_about_us') }}"> About Us</a></li>
                <li class="dropdown">
                    <a href="{{ route('front_challenge') }}">Take a Challenge</a></li>
                <li class="dropdown">
                    <a href="#">Send a Query</a></li>
                <li class="contactus">
                    <a href="{{ route('front_contact_us') }}">Contact Us</a></li>
                <li class="login">
                    <button onclick="location.href='{{ route('front_login')}}'" >Login</button>
                    <button onclick="location.href='{{ route('front_register')}}'" >Register</button>
                </li>

                <!-- <li class="dropdown active">
                  <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <!--<span class="caret"></span></a>
               <ul class="dropdown-menu">
                      <li><a href="#">About The Company</a></li>
                    <li><a href="#">  Company Highlights </a></li>
                   <li><a href="#">	News & Views </a></li>
                   <li><a href="#">	Mission & Vision </a></li>
                   <li><a href="#">	Company Information </a></li>
                   <li><a href="#">	Ownership & Management </a></li>
                   <li><a href="#">	Key Personnel </a></li>
                   <li><a href="#">	Our Team </a></li>
                   <li><a href="#">	Our Associates </a></li>

                  </ul>
              </li>--></ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container -->
</nav><!--/nav -->