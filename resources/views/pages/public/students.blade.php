@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection


@section('bar')
<!-- about banner -->
<div class="abt-banner">
    <div class="about-bar">
        <h4>STUDENTS</h4>
        <p>Develop a passion for learning. If you do, you will never cease to grow.</p>
        <h6><strong> - Anthony J. D'Angelo</strong></h6>
    </div>
</div>
<!-- // end of about banner -->
@endsection


@section('content')
<section class="why_for bg-default-200">
    <div class="container">
        <h2>Platform built to make you a better student</h2>
        <p>How inquisitive are you? Get an experience of being an up to date students.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="why_for_col">
                    <div class="col_icn">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <h4>Feel at Home</h4>
                    <p>We have developed a learning platform for your interest, just get a cup of coffee and relax</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why_for_col">
                    <div class="col_icn">
                        <span class="lnr lnr-pencil"></span>
                    </div>
                    <h4>Be an Impact</h4>
                    <p>There are millions of people who are willing to learn from you, will you be of help?</p>
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
                    <img src="img/login_img.jpg" class="img-fluid" alt="">
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
