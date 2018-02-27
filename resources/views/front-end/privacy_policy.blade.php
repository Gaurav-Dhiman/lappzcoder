@extends('front-end.layout.main')


@section('main-content')
<div class="container-fluid inner-banner">


    <div class="container">
        <div class="row"><h1>Privacy Policy</h1>
            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                <ul>
                    <li><a href="{{route('front_home')}}">Home</a> / </li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
        </div>


    </div>
</div>
<div class="container-fluid service" style="border-bottom:0px;">

    <div class="container">
        <div class="row">

            <div class="col-sm-3 col-md-3 col-xs-12 left-section">
                <ul>
                    <li><a href="{{ route('subjects', ['6th']) }}">Class 6<sup>th</sup></a></li>
                    <li><a href="{{ route('subjects', ['7th']) }}">Class 7<sup>th</sup></a></li>
                    <li><a href="{{ route('subjects', ['8th']) }}">Class 8<sup>th</sup></a></li>
                    <li><a href="{{ route('subjects', ['9th']) }}">Class 9<sup>th</sup></a></li>
                    <li><a href="{{ route('subjects', ['10th']) }}">Class 10<sup>th</sup></a></li>
                    <li><a href="{{ route('subjects', ['11th']) }}">Class 11<sup>th</sup></a></li>
                    <li><a href="{{ route('subjects', ['12th']) }}">Class 12<sup>th</sup></a></li>

                </ul>
            </div>

            <div class="col-sm-9 col-md-9 col-xs-12">
                <h3>Privacy Policy</h3>
                <p>The privacy policy of the website signifies what information is gathered from the visitors of
                    the website, why these details are collected and how the information is used. The privacy
                    policy also tell you about the user options for managing and accessing the information, the
                    security measures opted by the website and other matters.</p>

                <h3>Why Information is Collected?</h3>
                <p>Only the personal information is collected from the visitors so as to identify the real users and
                    to provide them with the information required for delivering services, thereby ensuring the
                    visitors to offer precise feedback regarding the performance of the users in different exams
                    and to help the website deliver supreme quality educational experience. The information
                    gathered from visitors enables the website to provide the convenience of accessing the
                    service offerings and its products and aid in tailoring the educational experience.</p>

                <h3>The Type of Information Collected and How it is Used?</h3>
                <p>Information is collected so as to provide the users with effective services. This includes the
                    email address, name, and other personal details while registering with the website to use
                    certain features. Other information may also be collected when the users take part in contests
                    and promotions.</p>

                <h3>Cookies</h3>
                <p>The website of Guru Gyan Mantra makes use of cookies and sends it to the computer of users
                    to identify the browser. Cookies are mainly used to track down the preferences, help visitors
                    login faster and determine the user trends. This collected data is further used to improvise the
                    offers like providing content in Maths and more..</p>

                <h3>Login Information</h3>
                <p>When you agree to browse the website, the servers record the information automatically
                    which the browser sends whenever you visit the website. This includes the server logs like
                    web request, browser type, internet protocol, date and time, browser language and one or
                    more cookies which may identify your browser uniquely.</p>

                <h3>User Communications</h3>
                <p>The emails and other communications send to the website are recorded by server and retain it
                    for further inquiries, improve the services and respond to the request.</p>

                <h3>Links</h3>
                <p>The website may have links in a format that allows the website to keep track of whether the
                    links have been followed or not. This information is used to improvise the tailored content.
                    Taping on this link may redirect you to other sites outside the domain and Guru Gyan Mantra
                    takes no liability for privacy practices of the other sites.</p>

                <h3>Alerts</h3>
                <p>Guru Gyan Mantra may alert the users through phone and email to inform the users about the
                    new services and offerings and update you about other information which may be useful for
                    you.</p>

                <h3>Data Security</h3>
                <p>If you use any features where payment option is required, it is suggested that transactions
                    must be done using credit cards of verified banks for faster and safer processing. If any issue
                    is faced during the payment, it will be reviewed with the users and bank to resolve it. The
                    website never share or disclose any of the credit card information or personal details of users.
                    No information is shared with any third party marketers.</p>

            </div>


        </div>
    </div>
</div>
@endsection