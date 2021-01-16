@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection


@section('bar')
<!-- about banner -->
<div class="abt-banner">
    <div class="about-bar">
        <h4>CONTACT</h4>
        <p>We want to hear from you, give us a phone call, shoot us an email or pay us a visit. We are on hand to respond to all your needs</p>
    </div>
</div>
<!-- // end of about banner -->
@endsection

@section('content')
<section id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="page_title">Reach us with Ease</h2>
        </div>
        <div class="row contact_row_top">
            <div class="col-md-4">
                <div class="contact_col card">
                    <h4>Reach us by Phone</h4>
                    <p>We want to hear you speak to us, kindly pick up the phone and dial this numbers:-</p>
                    <ul>
                        <li><span class="fa fa-phone"></span>&nbsp; +2349025015566</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_col card">
                    <h4>Shoot us an Email</h4>
                    <p>Kindly send us an email, we are on hand to reply you as soon as possible</p>
                    <ul>
                        <li><span class="fa fa-envelope"></span>&nbsp; contact@afrihow.com </li>
                        <li><span class="fa fa-envelope"></span>&nbsp; hello@afrihow.com </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_col card">
                    <h4>Pay us a visit</h4>
                    <p>Our H.Q is the Internet, but our physical address is in a growing community in Ogun State, Nigeria</p>
                    <ul>
                        <li><span class="fa fa-globe"></span>&nbsp; <a href="https://afrihow.com/" target="_blank" style="color:#004000; font-weight:900;">AfriHow</a></li>
                        <li><span class="fa fa-map-marker"></span>&nbsp; 16, Royal Street, Ileri-Oluwa Estate, Otta, Ogun, Nigeria </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="contact_row card">
                <h4>Connect with Us</h4>
                <div class="contact_social">
                    <ul>
                        <li><a href="https://facebook.com/officialafrihow/" target="_blank"><span class="fa fa-facebook"></span> </a></li>
                        <li><a href="https://twitter.com/officialafrihow/" target="_blank"><span class="fa fa-twitter"></span> </a></li>
                        <li><a href="https://linkedin.com/company/officialafrihow/" target="_blank"><span class="fa fa-linkedin"></span> </a></li>
                        <li><a href="#" target="_blank"><span class="fa fa-instagram"></span> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('includes.footer')
@endsection