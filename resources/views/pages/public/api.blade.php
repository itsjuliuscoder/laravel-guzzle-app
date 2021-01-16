@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection

@section('slider')
<!-- API Banner -->
<div class="api-banner">
    <div class="container">
        <div class="api-text">
            <h2>Building a thriving developers community that empower people to learn</h2>
            <p>Every once in a while, a new technology, an old problem, and a big idea turn into an innovation</p>
            <p><b>Dean Kamen</b></p>
        </div>
    </div>
</div>
<!--//-- API Banner ends -->
@endsection

@section('content')
<section id="api">
    <div class="container-fluid mt-4 mb-5">
        <div class="text-center">
            <h2>Empowering People to Learn</h2>
            <p>We are committed to building a developers' community that empower people to learn in Africa</p>
        </div>
    </div>
    <div class="api_docs bg-default-100 mt-4">
        <div class="api_docs_left">
            <img src="img/api_docs.jpg" class="img-fluid" alt="">
        </div>
        <div class="api_docs_right bg-default-400">
            <div class="text-center pt-4">
                <h3>COMING SOON</h3>    
                <p></p>
            </div>   
        </div>
    </div>
</section>
<div class="clearfix"></div>
@endsection

@section('footer')
    @include('includes.footer')
@endsection

