@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection


@section('bar')
<!-- about banner -->
<div class="abt-banner">
    <div class="abt-text">
        <h3>{{ $subj_title }}</h3>
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
                                    <img src="img/code.jpeg" alt="" class="img-fluid mx-auto d-block">
                                    <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
                            </figure>

                            <h2>Article goes here.....</h2>
                            <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure   </p>
                        </div>
                    </article>
                    <aside class="col-md-4">
                            <div class="bg-default-100 main_article_right position-sticky">
                                    <div class="subj_profile">
                                            <div class="subj_profile_img">
                                                    <img src="img/code.jpeg" alt="" class="img-fluid mx-auto d-block rounded-circle">
                                            </div>
                                            <div class="subj_profile_info">
                                                    <h3>United Bank of Africa</h3>
                                                    <h5>Financial Institution</h5>
                                                    <ul class="subj_connect pr-5">
                                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                                    </ul>
                                                    <p>UBA is known as a Pan-Africa Financial Institution in Africa, active in over 15 countries across the continent of Africa </p>
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
                            <img src="img/relationship.jpeg" style="width: 300px;height: 180px !important;">
                            <a href="#"><div class="p">
                            <h5>Motor360</h5>
                            <p>How to drive a car</p>
                            </div></a>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.16s">
                    <div class="article">
                        <img src="img/api_docs.jpg" style="width: 300px;height: 180px !important;">
                        <a href="#"><div class="p">
                        <h5>Aso Ebi</h5>
                        <p>Where to buy african attires</p>
                        </div></a>
                    </div>
                    </div>
                    <div class="col-md-3 wow fadeInRight" data-wow-delay="0.20s">
                    <div class="article">
                        <img src="img/travel.jpeg" style="width: 300px;height: 180px !important;">
                        <a href="#"><div class="p">
                        <h5>Learn Anything</h5>
                        <p>African beauty</p>
                        </div></a>
                    </div>
                    </div>
                    <div class="col-md-3 wow fadeInRight" data-wow-delay="0.24s">
                    <div class="article">
                        <img src="img/register.jpeg" style="width: 300px;height: 180px !important;">
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