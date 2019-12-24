@extends('layouts.userlayout')
@section('title')
ACM NMAMIT | Home
@endsection

@section('content')
<section id="acm_anim">
    <div class="container">
        <div class="intro animated fadeInLeft" style="animation-delay: 2s">NMAMIT</div>
        <div class="intro-vert animated fadeInDown" style="animation-delay: 3s">C</div>
        <div class="intro-vert intro-vert-two animated fadeInDown" style="animation-delay: 3s">M
        </div>
        <div class="intro-vert intro-vert-right animated fadeInLeft" style="animation-delay: 4s">
            HAPTER
        </div>
        <div class="wave">
            <div class="text-center text-white">
                <a href="#about" class="text-white">SCROLL DOWN <div class="text-center"><i class="fa fa-angle-down"
                            style="font-size: 42px"></i></div></a>
            </div>
        </div>
    </div>
</section>

<!--about-->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 color="#12114a" class="underline">About us</h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <p style="text-align : justify ">
                    ACM, the world’s largest educational and scientific computing society, delivers resources
                    that
                    advance computing as a science and a profession. NMAMIT ACM Student Chapter was chartered in
                    May
                    2015. Since then many technical events have been conducted. We as a team of ACM Student
                    Chapter
                    members, which includes CSE, ISE & MCA departments work towards the fulfilment of the vision
                    of ACM.
                </p>
            </div>
            <div class="col-md-5 offset-1 col-sm-12">
                <img src="/images/about.jpg">
            </div>
        </div>
    </div>
</section>
<!--end of about-->
<div style="margin-top: 5em"></div>

<div class="bgimg-1">
</div>

<!--features-->
<section style="padding : 9em;">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <div data-aos="fade-up" style="animation-delay: 1s">
                    <div class="h-caption">
                        <img class="text-center" src="{{asset('/images/users.png')}}"><br><br>
                        <h4>PROGRAM</h4>
                    </div><br>
                    <div class="h-body text-center">
                        <p>Organizing various ACM events effectively and efficiently and
                            giving Wide
                            Publicity
                            to all the events
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 ">
                <div data-aos="fade-up" style="animation-delay: 2s">
                    <div class="h-caption">
                        <img class="text-center" src="{{asset('/images/barchart.png')}}"><br><br>
                        <h4>CREATIVITY AND DESIGN</h4>
                    </div>
                    <div class="h-body text-center">
                        <p>Planning for new creative and innovative ACM events and
                            designing
                            event
                            posters,
                            brochures, etc.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 ">
                <div data-aos="fade-up">
                    <div class="h-caption">
                        <img class="text-center" src="{{asset('/images/technical.png')}}"><br><br>
                        <h4>TECHNICAL</h4>
                    </div><br>
                    <div class="h-body text-center">
                        <p>Preparing contents for various Technical Events, evaluation and
                            formulating
                            various
                            Special Interest
                            Groups (SIG).</p>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 ">
                <div data-aos="fade-up">
                    <div class="h-caption">
                        <img class="text-center" src="{{asset('/images/docs.png')}}"><br><br>
                        <h4>DOCUMENTATION</h4>
                    </div><br>
                    <div class="h-body text-center">
                        <p>Taking photographs of various events and preparing
                            documents/reports</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end of features-->




<div class="bgimg-3">
    <div class="caption">
        <span class="border" style="background-color:transparent;font-size:25px;color: white;">SNEAK
            PEAK</span>
    </div>
</div>

<!--sneak peak-->
<section id="peak">
    <div class="container">
        <div class="card-columns">
            <div class="card p-3" data-aos="flip-up" style="animation-delay: 2s">
                <blockquote class="blockquote mb-0 card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card  text-center p-3" data-aos="flip-right" style="animation-delay: 3s">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                    <footer class="blockquote-footer">
                        <small>
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card text-center" data-aos="flip-up" style="animation-delay: 4s">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to
                        additional
                        content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card p-3 text-right" data-aos="flip-down" style="animation-delay: 5s">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card" data-aos="flip-left" style="animation-delay: 5s">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural
                        lead-in to
                        additional
                        content.
                        This card has even longer content than the first to show that equal height action.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end of sneek peak-->





@endsection