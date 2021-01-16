@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection


@section('bar')
<!-- about banner -->
<div class="abt-banner">
    <div class="about-bar"> 
        <h4>SMEs & MULTINATIONAL COMPANIES</h4>
        <p>Learning and innovation go hand in hand. The arrogance of success is to think that what you did yesterday will be sufficient for tomorrow.</p>
        <h6><strong> - William Pollard</strong></h6>
    </div>
</div>
<div class="clearfix"></div>
<!-- // end of about banner -->
<!-- breadcrumbs goes here -->
@endsection


@section('content')
<section class="why_for bg-default-200">
    <div class="container">
        <h2>Stand tall among your competitors.</h2>
        <p>There are over 300 million brands on the internet, let millions of people know want you do.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="why_for_col">
                    <div class="col_icn">
                        <span class="lnr lnr-sun"></span>
                    </div>
                    <h4>Distinguish Yourself</h4>
                    <p>Let your target audience know you better, let them learn about your Business</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why_for_col">
                    <div class="col_icn">
                        <span class="lnr lnr-bus"></span>
                    </div>
                    <h4>Build Your Network</h4>
                    <p>Get connected to interesting subjects and increase your knowledge.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why_for_col">
                    <div class="col_icn">
                        <span class="lnr lnr-layers"></span>
                    </div>
                    <h4>Big or Small</h4>
                    <p>Whatever stage you are, your business call be the solution we need</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
@endsection


@section('footer')
    @include('includes.footer')
@endsection