
<div class="right-btn">
    <span><img src="{{ asset('front-end-assets/images/querry-btn.png') }}" alt="#"></span>
    <div class="rightbox">
        <form action="{{ route('submit_query') }}" method="post" id="contact_frm">
            {{csrf_field()}}
            <ul>
                <li><input type="text" name="name" placeholder="Enter Your Name"></li>
                <li><input type="emailq"  name="email" placeholder="Email Address"></li>
                <li><input name="phone_no" type="number" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"  placeholder="Phone Number"></li>
                <li><textarea name="msg"  placeholder="Write Your Message"></textarea></li>
                <li><input type="button" onclick="this.form.submit();" name="Submit" value="Submit"/></li>
            </ul>
        </form>
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
            <a class="navbar-brand" href="{{route('front_home')}}"><img src="{{ asset('front-end-assets/images/logo.jpg') }}" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown {{ Request::path() == '/' ? 'active' : '' }}">
                    <a href="{{ route('front_home') }}">Home</a></li>
                <li class="dropdown {{ Request::path() == 'about_us' ? 'active' : '' }}">
                    <a href="{{ route('front_about_us') }}"> About Us</a></li>
                <li class="dropdown {{ Request::path() == 'challenge' ? 'active' : '' }}">
                    <a href="{{ route('front_challenge') }}">Take a Challenge</a></li>
                <!--<li class="dropdown">
                    <a href="#">Blog</a></li>-->
                <li class="contactus  {{ Request::path() == 'contact_us' ? 'active' : '' }}">
                    <a href="{{ route('front_contact_us') }}">Contact Us</a></li>

                <li class="login">
                    @if(Auth::guest())
                        <button onclick="location.href='{{ route('front_login')}}'" >Login</button>
                        <button onclick="location.href='{{ route('front_register')}}'" >Register</button>
                    @else
                        <button onclick="location.href='{{ route('profile')}}'" >Profile</button>
                        <button onclick="event.preventDefault();document.getElementById('logout-form').submit();" >Logout</button>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                            {{csrf_field()}}
                            <input type="submit" value="logout" style="display: none;">
                        </form>
                    @endif
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