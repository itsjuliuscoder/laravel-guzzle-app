@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection


@section('bar')
<!-- about banner -->
<div class="abt-banner">
    <div class="about-bar">
        <h4>PROFESSIONALS</h4>
        <p>There is no end to education. It is not that you read a book, pass an examination, and finish with education. The whole of life, from the moment you are born to the moment you die, is a process of learning.</p>
        <h6> <b>Jiddu Krishnamurti</b> </h6>
    </div>
</div>
<!-- // end of about banner -->
@endsection


@section('content')
<section class="why_for bg-default-200">
    <div class="container">
        <h2>Take Your Career to the Next Level</h2>
        <p>Get acquinated with changes in your chosen career, and be up to date with the right skillsets</p>
        <div class="row">
            <div class="col-md-4">
                <div class="why_for_col">
                    <div class="col_icn">
                        <span class="lnr lnr-database"></span>
                    </div>
                    <h4></h4>
                    <p>We have developed a learning platform for your interest, just get a cup of coffee and relax</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why_for_col">
                    <div class="col_icn">
                        <span class="lnr lnr-users"></span>
                    </div>
                    <h4>Build Your Network</h4>
                    <p>Get connected to interesting subjects and increase your knowledge.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why_for_col">
                    <div class="col_icn">
                        <span class="lnr lnr-laptop"></span>
                    </div>
                    <h4>Learn with Ease</h4>
                    <p>Personalise learning built for your convinence at any given time.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="why_getting_started bg-default-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="why_getting_started_img">
                    <img src="img/login_img.jpg" class="img-fluid" alt="Login Image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="why_getting_started_text">
                    <h5>Try Afrihow Now</h5>
                    <h2>Let make learning fun</h2>
                    <a href="/register" class=" mt-3 btn btn-default bg-success text-default-100">GET STARTED &nbsp;<span class="fa fa-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('includes.footer')
@endsection
