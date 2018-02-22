
<div class="height30"></div>
<div class="height30"></div>
<footer>
    <div class="container-fluid">
        <div class="container">
            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-3">
                <h3>About Guru Gyan Mantra</h3>
                <ul>
                    <li><a href="{{ route('front_about_us') }}">About Us</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">What We Do</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="{{ route('front_privacy_policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('front_tc') }}">Terms & Condition</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-3">
                <h3>Support</h3>

                <ul>

                    <li><a href="{{ route('front_login') }}">Login</a></li>
                    <li><a href="{{ route('front_register') }}">Register</a></li>
                    <li><a href="{{ route('front_contact_us') }}">Contact Us</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Our Client</a></li>
                </ul>
            </div>

            <div class="col-lg-6 col-sm-6 col-xs-12 col-md-6 text-left">
                <h3 style="padding:0 116px 10px 0">News</h3>
                <ul class="social-link">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
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
                <a href="#"><img src="{{ asset('front-end-assets/images/gplaystore.png') }}" alt="#"></a>
                <a href="#"><img src="{{ asset('front-end-assets/images/app-store.png') }}" alt="#"></a>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center">
                <p>Copyright © 2017 all rights reserved. guru gyan mantra</p></div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="{{ asset('front-end-assets/js/jquery.min.js') }}"></script>

<script src="{{ asset('front-end-assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front-end-assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front-end-assets/js/jquery.jcarousel.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('front-end-assets/js/jcarousel.responsive.js') }}"></script>
<script src="{{ asset('front-end-assets/js/slider.js') }}"></script>
<script src="{{ asset('front-end-assets/js/slick.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('front-end-assets/js/jquery.marquee.js') }}" type="text/javascript"></script>
<script src="{{ asset('front-end-assets/js/marquee.js') }}" type="text/javascript"></script>


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
    $(document).ready(function () {
        var owl = $("#owl-demo");
        owl.owlCarousel({
            rtl: true,
            items: 5, //10 items above 1000px browser width
            slidesToScroll: 1,
            itemsDesktop: [1000, 5], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0;
            itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
        });
        // Custom Navigation Events
        $(".next").click(function () {
            owl.trigger('owl.next');
        })
        $(".prev").click(function () {
            owl.trigger('owl.prev');
        })
    });
</script>
<script>
    $(document).ready(function () {
        var owl = $("#owl-demo1");
        owl.owlCarousel({
            rtl: true,
            items: 1, //10 items above 1000px browser width
            slidesToScroll: 1,
            itemsDesktop: [1000, 4], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //1 items between 600 and 0;
            itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
        });
        // Custom Navigation Events
        $(".next1").click(function () {
            owl.trigger('owl.next');
        })
        $(".prev1").click(function () {
            owl.trigger('owl.prev');
        })
    });
</script>

<script>
    $(function () {
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
