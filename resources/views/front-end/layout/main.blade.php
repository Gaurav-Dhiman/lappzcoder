<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Maths Video Tuorials : Gurugyanmantra</title>
    <meta name="description"">
    <meta name="keywords"">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="{{ asset('front-end-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end-assets/css/style.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
          <link rel="canonical" href="https://www.gurugyanmantra.com.com/" />
      </head>
      <body>
        <div class="right-btn">
            <span><img src="{{ asset('front-end-assets/images/querry-btn.png') }}" alt="#"></span>
            <div class="rightbox">
                <ul>
                    <li><input type="text" placeholder="Name"></li>
                    <li><input type="text" placeholder="Email"></li>
                    <li><textarea placeholder="Message"></textarea></li>
                    <li>

                      <input type="button" name="Submit" value="Submit" />

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
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="{{ asset('fron-end-assets/images/logo.jpg') }}" alt=""></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown active">
                                <a href="index.php">Home</a></li>
                                <li class="dropdown">
                                    <a href="about-us.php"> About Us</a></li>
                                    <li class="dropdown">
                                        <a href="#">Take a Challenge</a></li>
                                        <li class="dropdown">
                                            <a href="#" >Send a Query</a></li>
                                            <li class="contactus">
                                                <a href="contact-us.php">Contact Us</a></li>
                                                <li class="login">
                                                    <button>Login</button>
                                                    <button>Register</button></li>

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
                <img src="{{ asset('fron-end-assets/images/schooling.jpg') }}" alt="#">
                <h2 class="schooling">Schooling <span>  </span></h2>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12">
                <img src="{{ asset('fron-end-assets/images/competative.jpg') }}" alt="#">
                <h2 class="competative">Competetive <span>  </span></h2>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12">
                <img src="{{ asset('fron-end-assets/images/series.jpg') }}" alt="#">
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

                    <div class="item"> <span class="exbox1">
                        <a href="#"><img src="{{ asset('fron-end-assets/images/vd1.jpg') }}" alt="#">
                            <span class="vedia-text">
                                <strong class="vdlink" style="background:#1e90c5">VIDEO</strong><br>
                                <p><strong>6<sup>th</sup> Class<br></strong>
                                    TUTORIALS</p>
                                </span>
                            </a>
                        </span></div>

                        <div class="item"> <span class="exbox1">
                            <a href="#"><img src="{{ asset('fron-end-assets/images/vd2.jpg') }}" alt="#">
                                <span class="vedia-text">
                                    <strong class="vdlink">VIDEO</strong><br>
                                    <p><strong>7<sup>th</sup> Class<br></strong>
                                        TUTORIALS</p>
                                    </span>
                                </a>
                            </span></div>

                            <div class="item"> <span class="exbox1">
                                <a href="#"><img src="{{ asset('fron-end-assets/images/v3.jpg') }}" alt="#">
                                    <span class="vedia-text">
                                        <strong class="vdlink" style="background:#ff7800">VIDEO</strong><br>
                                        <p><strong>8<sup>th</sup> Class<br></strong>
                                            TUTORIALS</p>
                                        </span>
                                    </a>
                                </span></div>

                                <div class="item"> <span class="exbox1">
                                    <a href="#"><img src="{{ asset('fron-end-assets/images/vd4.jpg') }}" alt="#">
                                        <span class="vedia-text">
                                            <strong class="vdlink" style="background:#10a17d">VIDEO</strong><br>
                                            <p><strong>9<sup>th</sup> Class<br></strong>
                                                TUTORIALS</p>
                                            </span>
                                        </a>
                                    </span></div>

                                    <div class="item"> <span class="exbox1">
                                        <a href="#"><img src="{{ asset('fron-end-assets/images/vd5.jpg') }}" alt="#">
                                            <span class="vedia-text">
                                                <strong class="vdlink" style="background:#ed3560">VIDEO</strong><br>
                                                <p><strong>10<sup>th</sup> Class<br></strong>
                                                    TUTORIALS</p>
                                                </span>
                                            </a>
                                        </span></div>

                                        <div class="item"> <span class="exbox1">
                                            <a href="#"><img src="{{ asset('fron-end-assets/images/vd1.jpg') }}" alt="#">
                                                <span class="vedia-text">
                                                    <strong class="vdlink" style="background:#1e90c5">VIDEO</strong><br>
                                                    <p><strong>6<sup>th</sup> Class<br></strong>
                                                        TUTORIALS</p>
                                                    </span>
                                                </a>
                                            </span></div>

                                            <div class="item"> <span class="exbox1">
                                                <a href="#"><img src="{{ asset('fron-end-assets/images/vd2.jpg') }}" alt="#">
                                                    <span class="vedia-text">
                                                        <strong class="vdlink">VIDEO</strong><br>
                                                        <p><strong>7<sup>th</sup> Class<br></strong>
                                                            TUTORIALS</p>
                                                        </span>
                                                    </a>
                                                </span></div>

                                                <div class="item"> <span class="exbox1">
                                                    <a href="#"><img src="{{ asset('fron-end-assets/images/v3.jpg') }}" alt="#">
                                                        <span class="vedia-text">
                                                            <strong class="vdlink" style="background:#ff7800">VIDEO</strong><br>
                                                            <p><strong>8<sup>th</sup> Class<br></strong>
                                                                TUTORIALS</p>
                                                            </span>
                                                        </a>
                                                    </span></div>

                                                    <div class="item"> <span class="exbox1">
                                                        <a href="#"><img src="{{ asset('fron-end-assets/images/vd4.jpg') }}" alt="#">
                                                            <span class="vedia-text">
                                                                <strong class="vdlink" style="background:#10a17d">VIDEO</strong><br>
                                                                <p><strong>9<sup>th</sup> Class<br></strong>
                                                                    TUTORIALS</p>
                                                                </span>
                                                            </a>
                                                        </span></div>

                                                        <div class="item"> <span class="exbox1">
                                                            <a href="#"><img src="{{ asset('fron-end-assets/images/vd5.jpg') }}" alt="#">
                                                                <span class="vedia-text">
                                                                    <strong class="vdlink" style="background:#ed3560">VIDEO</strong><br>
                                                                    <p><strong>10<sup>th</sup> Class<br></strong>
                                                                        TUTORIALS</p>
                                                                    </span>
                                                                </a>
                                                            </span></div>





                                                        </div>
                                                        <div class="customNavigation">
                                                            <a class="btn prev fa fa-angle-left"></a>
                                                            <a class="btn next fa fa-angle-right"></a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div>


                                    <div class="container-fluid video-box">
                                        <div class="container">
                                            <h2 class="heading">Latest Video Lecture</h2>
                                            <div class="row"><div class="marquee-with-options">
                                                <div class="col-sm-3 col-md-3 col-xs-12 UpcomingSessions-box">
                                                    <span><img src="{{ asset('fron-end-assets/images/first-vd.jpg') }}" alt="#"></span>
                                                    <h3>Lorem Ipsum is<br>
                                                        simply dummy text </h3>
                                                        <p>Lorem Ipsum is simply dummy text of<br>
                                                            the printing and typesetting industry. </p>
                                                            <a href="#">Read More</a>
                                                        </div>
                                                        <div class="col-sm-3 col-md-3 col-xs-12 UpcomingSessions-box">
                                                            <span><img src="{{ asset('fron-end-assets/images/sec-vd.jpg') }}" alt="#"></span>
                                                            <h3>Lorem Ipsum is<br>
                                                                simply dummy text </h3>
                                                                <p>Lorem Ipsum is simply dummy text of<br>
                                                                    the printing and typesetting industry. </p>
                                                                    <a href="#">Read More</a>
                                                                </div>
                                                                <div class="col-sm-3 col-md-3 col-xs-12 UpcomingSessions-box">
                                                                    <span><img src="{{ asset('fron-end-assets/images/third-vd.jpg') }}" alt="#"></span>
                                                                    <h3>Lorem Ipsum is<br>
                                                                        simply dummy text </h3>
                                                                        <p>Lorem Ipsum is simply dummy text of<br>
                                                                            the printing and typesetting industry. </p>
                                                                            <a href="#">Read More</a>
                                                                        </div>
                                                                        <div class="col-sm-3 col-md-3 col-xs-12 UpcomingSessions-box">
                                                                            <span><img src="{{ asset('fron-end-assets/images/forth-vd.jpg') }}" alt="#"></span>
                                                                            <h3>Lorem Ipsum is<br>
                                                                                simply dummy text </h3>
                                                                                <p>Lorem Ipsum is simply dummy text of<br>
                                                                                    the printing and typesetting industry. </p>
                                                                                    <a href="#">Read More</a>
                                                                                </div></div>
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
                                                                                        <img src="{{ asset('fron-end-assets/images/upcom-evt.jpg') }}" alt="#">

                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-4 col-xs-12">
                                                                                        <h3>Lorem Ipsum is<br>
                                                                                            simply dummy text </h3>
                                                                                            <p><i>24 July 2017</i></p>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                                                                            </p></div>







                                                                                        </div></div>
                                                                                        <div class="row blog-btm">
                                                                                            <div class="col-sm-12 col-md-12 col-xs-12 blog-btm">
                                                                                                <div class="span12">

                                                                                                  <div id="owl-demo1" class="owl-carousel" style="position:relative">

                                                                                                    <div class="item">
                                                                                                        <div class="col-sm-3 col-xs-12 col-md-3"><img src="{{ asset('fron-end-assets/images/blog1.jpg') }}"></div>
                                                                                                        <div class="col-sm-3 col-xs-12 col-md-3"><img src="{{ asset('fron-end-assets/images/blog2.jpg') }}"></div>
                                                                                                        <div class="col-sm-3 col-xs-12 col-md-3"><img src="{{ asset('fron-end-assets/images/blog3.jpg') }}"></div>
                                                                                                        <div class="col-sm-3 col-xs-12 col-md-3"><img src="{{ asset('fron-end-assets/images/blog4.jpg') }}"></div>
                                                                                                    </div>
                                                                                                    <div class="item">
                                                                                                        <div class="col-sm-3 col-xs-12 col-md-3"><img src="{{ asset('fron-end-assets/images/blog1.jpg') }}"></div>
                                                                                                        <div class="col-sm-3 col-xs-12 col-md-3"><img src="{{ asset('fron-end-assets/images/blog2.jpg') }}"></div>
                                                                                                        <div class="col-sm-3 col-xs-12 col-md-3"><img src="{{ asset('fron-end-assets/images/blog3.jpg') }}"></div>
                                                                                                        <div class="col-sm-3 col-xs-12 col-md-3"><img src="{{ asset('fron-end-assets/images/blog4.jpg') }}"></div>
                                                                                                    </div></div>
                                                                                                    <div class="customNavigation">
                                                                                                        <a class="btn prev1 fa fa-angle-left"></a>
                                                                                                        <a class="btn next1 fa fa-angle-right"></a>
                                                                                                    </div>


                                                                                                </div>
                                                                                            </div></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="height30"></div>
                                                                                <div class="height30"></div>
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

                                                                                                                   <li>
                                                                                                                       <div class="othersaybox-main">
                                                                                                                           <div class="othersaybox"><p>Lorem Ipsum is simply dummy text of
                                                                                                                            the printing and typesetting industry. </p>
                                                                                                                            <h3><img src="{{ asset('fron-end-assets/images/vp.png') }}" alt="#">Daniel Cliff</h3></div>
                                                                                                                            <a href="#">Vice President - Business Development</a></div>
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                           <div class="othersaybox-main">
                                                                                                                               <div class="othersaybox"><p>Lorem Ipsum is simply dummy text of
                                                                                                                                the printing and typesetting industry. </p>
                                                                                                                                <h3><img src="{{ asset('fron-end-assets/images/vp.png') }}" alt="#">Daniel Cliff</h3></div>
                                                                                                                                <a href="#">Vice President - Business Development</a></div>
                                                                                                                            </li>
                                                                                                                            <li>
                                                                                                                               <div class="othersaybox-main">
                                                                                                                                   <div class="othersaybox"><p>Lorem Ipsum is simply dummy text of
                                                                                                                                    the printing and typesetting industry. </p>
                                                                                                                                    <h3><img src="{{ asset('fron-end-assets/images/vp.png') }}" alt="#">Daniel Cliff</h3></div>
                                                                                                                                    <a href="#">Vice President - Business Development</a></div>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                   <div class="othersaybox-main">
                                                                                                                                       <div class="othersaybox"><p>Lorem Ipsum is simply dummy text of
                                                                                                                                        the printing and typesetting industry. </p>
                                                                                                                                        <h3><img src="{{ asset('fron-end-assets/images/vp.png') }}" alt="#">Daniel Cliff</h3></div>
                                                                                                                                        <a href="#">Vice President - Business Development</a></div>
                                                                                                                                    </li>
                                                                                                                                    <li>
                                                                                                                                       <div class="othersaybox-main">
                                                                                                                                           <div class="othersaybox"><p>Lorem Ipsum is simply dummy text of
                                                                                                                                            the printing and typesetting industry. </p>
                                                                                                                                            <h3><img src="{{ asset('fron-end-assets/images/vp.png') }}" alt="#">Daniel Cliff</h3></div>
                                                                                                                                            <a href="#">Vice President - Business Development</a></div>
                                                                                                                                        </li>
                                                                                                                                        <li>
                                                                                                                                           <div class="othersaybox-main">
                                                                                                                                               <div class="othersaybox"><p>Lorem Ipsum is simply dummy text of
                                                                                                                                                the printing and typesetting industry. </p>
                                                                                                                                                <h3><img src="{{ asset('fron-end-assets/images/vp.png') }}" alt="#">Daniel Cliff</h3></div>
                                                                                                                                                <a href="#">Vice President - Business Development</a></div>
                                                                                                                                            </li>

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
                                                                                                                <div class="height30"></div>
                                                                                                                <div class="height30"></div>
                                                                                                                <footer>
                                                                                                                    <div class="container-fluid">
                                                                                                                        <div class="container">
                                                                                                                            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-3">
                                                                                                                                <h3>About gurugyanmantra</h3>
                                                                                                                                <ul>
                                                                                                                                    <li><a href="#">About Us</a></li>
                                                                                                                                    <li><a href="#">Our Team</a></li>
                                                                                                                                    <li><a href="#">What We Do</a></li>
                                                                                                                                    <li><a href="#">Blog</a></li>
                                                                                                                                    <li><a href="#">Privacy Policy</a></li>
                                                                                                                                    <li><a href="#">Terms & Condition</a></li></ul>
                                                                                                                                </div>
                                                                                                                                <div class="col-lg-3 col-sm-3 col-xs-12 col-md-3">
                                                                                                                                    <h3>Support</h3>

                                                                                                                                    <ul>

                                                                                                                                        <li><a href="#">Login / Register</a></li>
                                                                                                                                        <li><a href="#">Forum</a></li>
                                                                                                                                        <li><a href="#">Contact Us</a></li>
                                                                                                                                        <li><a href="#">Sitemap</a></li>
                                                                                                                                        <li><a href="#">Our Client</a></li>
                                                                                                                                    </ul>
                                                                                                                                </div>

                                                                                                                                <div class="col-lg-6 col-sm-6 col-xs-12 col-md-6 text-right">
                                                                                                                                    <h3 style="padding:0 116px 10px 0">News</h3>
                                                                                                                                    <ul>
                                                                                                                                        <li><img src="{{ asset('fron-end-assets/images/footer-social.jpg') }}"></li>

                                                                                                                                    </ul>
                                                                                                                                </div>


                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </footer>
                                                                                                                    <div class="container-fluid btm-footer">
                                                                                                                        <div class="container">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-sm-12 col-md-12 col-xs-12 text-center" style="border-bottom:1px solid #ddd;padding:20px 0">
                                                                                                                                    <h2 style="font-size:18px;color:#333;padding:10px 0">Stay Connected with GuruGyanMantra</h2>
                                                                                                                                    <img src="{{ asset('fron-end-assets/images/gplaystore.png') }}" alt="#">
                                                                                                                                    <img src="{{ asset('fron-end-assets/images/app-store.png') }}" alt="#">
                                                                                                                                </div>
                                                                                                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center">
                                                                                                                                    <p>Copyright © 2017 all rights reserved. guru gyan mantra</p></div></div>
                                                                                                                                </div>
                                                                                                                                <!-- jQuery -->
                                                                                                                                <script src="{{ asset('fron-end-assets/js/jquery.min.js') }}"></script>

                                                                                                                                <script src="{{ asset('fron-end-assets/js/bootstrap.min.js') }}"></script>
                                                                                                                                <script src="{{ asset('fron-end-assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
                                                                                                                                <script type="text/javascript" src="{{ asset('fron-end-assets/js/jquery.jcarousel.min.js') }}"></script>

                                                                                                                                <script type="text/javascript" src="{{ asset('fron-end-assets/js/jcarousel.responsive.js') }}"></script>

                                                                                                                                <script src="{{ asset('fron-end-assets/js/slider.js') }}"></script>
                                                                                                                                <script src="{{ asset('fron-end-assets/js/slick.js') }}" type="text/javascript" charset="utf-8"></script>
                                                                                                                                <script src="{{ asset('fron-end-assets/js/jquery.marquee.js') }}" type="text/javascript"></script>
                                                                                                                                <script src="{{ asset('fron-end-assets/js/marquee.js') }}" type="text/javascript"></script>


                                                                                                                                <script>
                                                                                                                                 $("#slider-container").sliderUi({
                                                                                                                                  speed: 700,
                                                                                                                                  cssEasing: "cubic-bezier(0.285, 1.015, 0.165, 1.000)"
                                                                                                                              });
                                                                                                                                 $("#caption-slide").sliderUi({
                                                                                                                                  caption: true
                                                                                                                              });
                                                                                                                          </script>
                                                                                                                          <!--page template scripts-->
                                                                                                                          <script>
                                                                                                                            $(document).ready(function() {
                                                                                                                              var owl = $("#owl-demo");
                                                                                                                              owl.owlCarousel({
                                                                                                                                 rtl:true,	
      items : 5, //10 items above 1000px browser width
      slidesToScroll: 1,
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
  });
      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
    })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
    })
  });
</script>
<script>
    $(document).ready(function() {
      var owl = $("#owl-demo1");
      owl.owlCarousel({
         rtl:true,	
      items : 1, //10 items above 1000px browser width
      slidesToScroll: 1,
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //1 items between 600 and 0;
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
  });
      // Custom Navigation Events
      $(".next1").click(function(){
        owl.trigger('owl.next');
    })
      $(".prev1").click(function(){
        owl.trigger('owl.prev');
    })
  });
</script>

<script>
    $(function(){
     var $mwo = $('.marquee-with-options');
     $('.marquee').marquee();
     $('.marquee-with-options').marquee({
		//speed in milliseconds of the marquee
		speed: 8000,
		//gap in pixels between the tickers
		
		//gap in pixels between the tickers
		delayBeforeStart: 0,
		//'left' or 'right'
		direction: 'left',
		//true or false - should the marquee be duplicated to show an effect of continues flow
		duplicated: true,
		//on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
		pauseOnHover: true
	});
 });


</script>

</body>
</html>