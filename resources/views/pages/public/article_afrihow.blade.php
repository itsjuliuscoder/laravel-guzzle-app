@extends('layouts.article')

@section('title')
	{{ $title }}
@endsection


@section('bar')
<!-- about banner -->
<div class="abt-banner">
    <div class="about-bar">
        <h4>{{ $subj_title }}</h4>
        <p>{{ $subj_desc }}</p>
    </div>
</div>
<div class="clearfix"></div>
<!-- // end of about banner -->
@endsection

@section('content')
<section id="topic_page">
    <!-- Abtt -->
    <div class="abtt">
		<div class="container">
		    <!-- main articles comes here -->
		   	<div class="main_article">
				<div class="row">
                    <article class="col-md-8">
                        <div class="bg-default-100 main_article_left">
                            <figure class="figure">
                                    <img src="../img/code.jpeg" alt="" class="img-fluid mx-auto d-block">
                                    <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
                            </figure>
                            <p>This <b>AfriHow Get Started Guide</b> helps starters like you on AfriHow, get use to our well tailored and organised learning platform. This article closes the following:-</p>
                            <ul>
                                <li>Creating a Subject</li>
                                <li>Creating a Topic</li>
                                <li>Writing a Story</li>
                                <li>Share it.</li>
                            </ul>
                            <h2>What is AFRIHOW?</h2>
                            <p>AfriHow is digital learning platform for Africa's growing population. It is working to make learning easier and accesible for Africa's growing population.</p>
                            <p>This tutorial teaches you the essentials on AfriHow like subjects, topics and stories/articles. You will have to create your own subject before creating any topic and writing a story under each created topic.</p>
                            <h4><b>Built to be simple</b></h4>
                            <p>You do not have to be a genius or an internet wizard to use AfriHow, all you need is an <a href="/register">AfriHow Account</a> and Internet Connection. </p>
                            <blockquote>
                                <b>Helpful Tip: We recommend that you open this in a separate window (or tab) so you can implement the steps in this guide.</b>
                            </blockquote>
                            <h2>Step 1. Create a Subject</h2>
                            <p>A <b>Subject</b> serves as a container for storing created topics and stories on AFRIHOW. It helps identity who created topics and written stories belong. When creating a subject we recommend that you make use of a short and concise name that can easily be remembered.</p>
                            <p>We will name our subject <i>Digital Trends</i> which will serve as a container for we to store and identity any of our topics and stories.</p>
                            <h4>To create a new subject</h4>
                            <ol>
                                <li>In the sidebar by the left side, click on the link subject then select <b>create subject.</b></li>
                                <li>Give your subject name <i>Digital Trends</i>.</li>
                                <li>Write a short description for the subject.</li>
                                <li>Select an image for people to easily identity the subject.</li>
                                <li>Select a category for the subject</li>
                                <li>Enter a subject URL (optional).</li>
                            </ol>
                            <p>Click <b>Create Subject</b></p>
                            <h2>Step 2. Create a Topic</h2>
                            <p>A <b>Topic</b>. is more like a header that is created to inspire the writing of a great story.</p>
                            <h2>Step 3. Write a Story</h2>
                            <p>A <b>Story</b> is written to draw more light on an already created topic.</p>
                            <h2>Step 4. Share it</h2>
                            <p>A <b>subject</b> helps us identity where created topics and stories belong.</p>
                        </div>
                    </article>
                    <aside class="col-md-4">
                            <div class="bg-default-100 main_article_right">
                                    <div class="subj_profile">
                                            <div class="subj_profile_img">
                                                    <img src="../img/code.jpeg" alt="" class="img-fluid mx-auto d-block rounded-circle">
                                            </div>
                                            <div class="subj_profile_info">
                                                    <h3>{{$subj_name}}</h3>
                                                    <h5>Education</h5>
                                                    <ul class="subj_connect pr-5">
                                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                                    </ul>
                                                    <p>{{$subj_desc}}</p>
                                            </div>
                                    </div>
                                    <div class="">

                                    </div>
                            </div>
                    </aside>
				</div>
			</div>
			<!-- // related articles ends here -->
			<div class="clearfix"></div>
		    <!-- trending articles comes here -->
            <div class="trnd-article">
                <!-- <h2><a href="#">Trending Topics&nbsp;<span class="fa fa-arrow-right"></span></a></h2>-->
                <div class="row">
                    <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.12s">
                        <div class="article">
                            <img src="../img/relationship.jpeg" style="width: 300px;height: 180px !important;">
                            <a href="#"><div class="p">
                            <h5>Motor360</h5>
                            <p>How to drive a car</p>
                            </div></a>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.16s">
                    <div class="article">
                        <img src="../img/api_docs.jpg" style="width: 300px;height: 180px !important;">
                        <a href="#"><div class="p">
                        <h5>Aso Ebi</h5>
                        <p>Where to buy african attires</p>
                        </div></a>
                    </div>
                    </div>
                    <div class="col-md-3 wow fadeInRight" data-wow-delay="0.20s">
                    <div class="article">
                        <img src="../img/travel.jpeg" style="width: 300px;height: 180px !important;">
                        <a href="#"><div class="p">
                        <h5>Learn Anything</h5>
                        <p>African beauty</p>
                        </div></a>
                    </div>
                    </div>
                    <div class="col-md-3 wow fadeInRight" data-wow-delay="0.24s">
                    <div class="article">
                        <img src="../img/register.jpeg" style="width: 300px;height: 180px !important;">
                        <a href="#"><div class="p">
                        <h5>Learn Anything</h5>
                        <p>African beauty</p>
                        </div></a>
                    </div>
                    </div>
                </div>
            </div>
			<!-- // trending articles ends here -->
			<div class="clearfix"></div>
			<!-- coments goes here -->
            <div class="comment_bar">
                <div class="row">
                    <h4>What People are saying</h4>
                    <div class="write_comment">
                           <form action="/create_comment" class="col-12 settings">
                                <div class="row">
                                    
                                    <div class="form-group col-xl-12 col-md-8 col-sm-12">
                                    <label for="exampleInputEmail1"></label>
                                    <div class="form-group inner-addon left-addon">
                                        <!--<i class="fa fa-file-text-o"></i>-->
                                        <textarea name="" required="" id="" cols="30" rows="40" height="120" placeholder=""></textarea>
                                        <label alt='Enter Your Comment Here' placeholder='Enter Your Comment Here'></label>
                                    </div>
                                    <button type="submit" class="btn btn-success btn_share col-md-2 mt-2" data-toggle="tooltip" data-placement="bottom" title="By Clicking Create You Have Decided To Create A Topic">Create <i data-feather="arrow-right-circle"></i></button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="display_comment">
                    </div>
                </div>
            </div>
            <!-- // coments goes here -->
		</div>
	</div>
	<!-- // - End of abtt -->
</section>
@endsection

@section('footer')
    @include('includes.main_footer')
@endsection