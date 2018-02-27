@extends('front-end.layout.main')


@section('main-content')
<div class="container-fluid inner-banner">


    <div class="container">
        <div class="row"><h1>What We Do!</h1>
            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 breadcrumb">
                <ul>
                    <li><a href="{{route('front_home')}}">Home</a> / </li>
                    <li>What We Do!</li>
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
                <h3>What We Do!</h3>
                <p>Guru Gyan Mantra is the leading one-to- one learning platform for professionals and students.
                    All its Online Math Courses and competitive exam videos are live, online and on demand.
                    From peer coaching to homework help, professional training and development, career help,
                    and online tutoring - Guru Gyan Mantra do it all. However, it comes down to our mainstay
                    philosophy that when any student needs aid and support to get their problems solved we get it
                    right by referring them for an experienced expert in the field. You can Learn Mathematics
                    online or access the online competitive exam videos and more right under one platform and
                    this is Guru Gyan Mantra.</p>

                <h3>Tailored Education Live from Confine of your House</h3>
                <p>The core strength of Guru Gyan Mantra is its live tailored education Online Math Videos for
                    Kids and videos of competitive exams. These tutorial videos and online courses ensure that
                    every student gets equal attention of dedicated lecturers and learn at their won convenience
                    and peace. Each communication between students and tutors are monitored technologically
                    for further improvement. Students are encouraged to clear their maths problems with the
                    support of the trained professionals and lecturers.</p>

                <h3>Live Lecturers</h3>
                <p>MOOCs revolution has played a major role in ensuring quality education to all and this has
                    truly solved the maladies that the educational system is suffering from. The live lecturers and
                    education offered by Guru Gyan Mantra is the crucial component of customized education
                    for students. The Free Online Math Courses and online tutorial videos of competitive exams
                    monitor over thousands of students in solving their maths issues. This way of education serve
                    the purpose of knowledge transfer which usual fails in traditional way of learning. Owing to
                    this fact Guru Gyan Mantra has become one of the Best Online Tutoring Websites.</p>

                <h3>Energy and Time Saving Secured Solutions</h3>
                <p>Parents usually don’t prefer or comfortable in sending their young kids to coaching classes as
                    it is simply wastage of time, energy and above all has a higher security risk. Guru Gyan
                    Mantra offers a secured solution to this modern malady. Now students can get superior
                    coaching support from the professional Online Math Courses. Your kids can now bypass the
                    travel time and the energy and above all get the secured solution and coaching from the
                    experts in the field right from the confines of your house.</p>

                <h3>Anytime-Anywhere Learning</h3>
                <p>The traditional classroom education means that education has to be restricted to certain places
                    and constrained by time. But, now you can Learn Mathematics Online from the Best Tutoring
                    Websites like Guru Gyan Mantra. Here there is no limitation as it guarantee anytime-
                    anywhere learning from the comfort of your house. This Online Tutoring Website breaks the
                    shackles of place and time, revolutionizing teaching and learning from the limit of location
                    and time.</p>

                <p>Even late night learning with Mathematics Video is possible with the website of Guru Gyan
                    Mantra. Students can have the liberty to reach out for guidance and support and lecturers are
                    eager to lend their supporting hands to the students to solve their Maths issues.</p>

            </div>


        </div>
    </div>
</div>
@endsection