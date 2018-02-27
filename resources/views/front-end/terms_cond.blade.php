@extends('front-end.layout.main')


@section('main-content')
<div class="container-fluid inner-banner">


    <div class="container">
        <div class="row"><h1>Terms & Conditions</h1>
            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                <ul>
                    <li><a href="{{route('front_home')}}">Home</a> / </li>
                    <li>Terms & Conditions</li>
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
                <h3>Terms and Conditions</h3>
                <p>Welcome and thank you for showing your interest in the resources available at Guru Gyan
                    Mantra. By browsing and using the resources of the website you signify your agreement to
                    the following terms and conditions and the privacy notice of the website. If you disagree with
                    any of the terms and conditions of the website, it is suggested not to use the resources or
                    browse the website.</p>

                <ul>
                    <li>The resources and videos available on the website is for general information and use
                        and it is subject to change without prior notice.</li>
                    <li>The website not any third parties offer any kind of warranty or guarantee for the
                        timeliness, accuracy, completeness, performance and suitability of the materials and
                        information present on the website for any specific purpose. You agree that these
                        details and information may comprise inaccuracies or errors and also agree to use the
                        material present on the website at your own risk and the website is no responsible to
                        ensure accuracy of the information.</li>
                    <li>The content or the Online Math Courses present on the website is owned by or
                        licensed to us; this includes layout, design, look, graphics and appearance.</li>
                    <li>All the trademarks reproduced by the website which are not actually the property or
                        licensed to, the operator is approved on website</li>
                    <li>Using the website illegally can rise to the claim for damages or criminal offenses.</li>
                    <li>The website may include links of other website for the convenience of the users to
                        provide further information and this doesn’t signifies that the website is endorsing the
                        links and take no responsibility of the linked websites.</li>
                    <li>Users are not allowed to create any link to the website from any other document or
                        website without prior consent from Guru Gyan Mantra</li>
                    <li>While using the website if any dispute arises then the website is subject to the laws of
                        India and other authorities</li>
                    <li>All the services, information, videos and content available in the website are the
                        copyrighted property of Guru Gyan Mantra and the services marks,m trademarks and
                        tarde dress are proprietary to Guru Gyan Mantra.</li>
                    <li>The usages of the products and material on the website is only for your personal and
                        non commercial use and using of Pen Drive or SD Cards or any content for the
                        personal purposes if strictly prohibited.</li>
                    <li>Guru Gyan Mantra or any of the subsidiaries or content partners takes no
                        responsibility for loss or damage caused to your device while browsing the website
                        this may include loss of data or affecting the processing speed of the device resulting
                        from the use of services and products.</li>
                    <li>Guru Gyan Mantra may contact its users through SMS, email and calls to notify them
                        about important updates and latest services included in the website. The users hold the
                        website none liable for any liabilities which include damages, financial penalties and
                        expenses in case of user mobile number is registered in DNC database</li>
                    <li>In the case of breaching of the terms and conditions of Guru Gyan Mantra, the users
                        will be liable to indemnify Guru Gyan Mantra all the losses, costs and damaged
                        caused to the website resulting from such breaching</li>
                </ul>


            </div>


        </div>
    </div>
</div>
@endsection