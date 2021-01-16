@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection


@section('bar')
<!-- about banner -->
<div class="abt-banner">
    <div class="about-bar">
        <h4>TOPICS</h4>
        <p>Latest topics on AfriHow</p>
    </div>
</div>
@endsection

@section('content')
<section id="about">
    <!-- Abtt -->
    <div class="abtt bg-default-100">
        <div class="container">
            <!-- number one topic of the day -->
            <div class="topic_first">
                <div class="row">
                    <div class="col-md-7">
                        <div class="topic_img">
                            <img src="img/relationship.jpeg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="topic_info">
                            <h3>Topic Title</h3>
                            <ul class="topic_info_list">
                                <li><span class="lnr lnr-user"></span>&nbsp; AfriHow Tutors</li>
                                <li><span class="fa"></span>&nbsp; </li>
                                <li><span class="lnr lnr-clock">&nbsp;<?php echo date('Y');?></span></li>
                            </ul>
                            <p>What do we learn form the cat that held the ball in the basket, we learnt that they are keeping a watch on us. What do we learn form the cat that held the ball in the basket, we learnt that they are keeping a watch on us.What do we learn form the cat that held the ball in the basket, we learnt that they are keeping a watch on us.What do we learn form the cat that held the ball in the basket, we learnt that they are keeping a watch on us. What do we learn form the cat that held the ball in the basket, we learnt that they are keeping a watch on us. What do we learn form the cat that held the ball in the basket, we learnt that they are keeping a watch on us.</p>
                            <button type="submit" class="mt-2 btn btn-success btn_share col-md-5" data-toggle="tooltip" data-placement="bottom">Read More <i class="lnr lnr-arrow-right" style="font-weight: 900;"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More topics goes here  -->
            <div class="ftco-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                                <a href="/article" class="block-5" style="background-image: url('img/travel.jpeg');">
                                    <div class="text">
                                        <div class="subheading">Travel</div>
                                        <h3 class="msubj_heading">Why the British Embassy refuses most Visa applicationS from Nigerians</h3>
                                        <div class="post-meta">
                                            <span>Wellie Clark</span>
                                            <span>March 20, 2018</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                <a href="/article" class="block-5" style="background-image: url('img/mobile.jpeg');">
                                    <div class="text">
                                        <div class="subheading">Technology</div>
                                        <h3 class="msubj_heading">Why do Africans browse mostly with their Mobile phone</h3>
                                        <div class="post-meta">
                                            <span>Wellie Clark</span>
                                            <span>March 20, 2018</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                <a href="/article" class="block-5" style="background-image: url('img/relationship.jpeg');">
                                    <div class="text">
                                        <div class="subheading">Relationship</div>
                                        <h3 class="msubj_heading">The Beauty of making Family Planning with your Spouses</h3>
                                        <div class="post-meta">
                                            <span>Wellie Clark</span>
                                            <span>March 20, 2018</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>	
            <!-- // More topics ends here -->

        </div>
    </div>
    <!-- // - End of abtt -->  
</section>
@endsection

@section('footer')
    @include('includes.main_footer')
@endsection