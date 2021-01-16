@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection


@section('bar')
<!-- about banner -->
<div class="abt-banner">
    <div class="about-bar">
    <h4>LATEST</h4>
    <p>I love nature and enjoy learning new skills.</p>
	<h6><b> - Leona Lewis</b></h6>
    </div>
</div>
<!-- // end of about banner -->
@endsection

@section('content')
<div id="about">
    <div class="latest_page">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="latest_row">
                        <div class="latest_header">
                            <h4>Latest News</h4>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row" style="margin-top: 3em;">
                            <div class="col-md-4">
								<div class="latest_img">
									<img src="img/puff.jpeg" alt="" class="img-fluid">
								</div>
                            </div>
                            <div class="col-md-8">
                                <div class="latest_inner_info">
									<h6>MAY 8, 2018 / Entrepreneurship</h6>
									<h4> <a href="">How to make Puff Puff</a> </h4>
									<ul>
										<li><span class="icon-user"></span> Jude Olajumoke</li>
										<li><span class="icon-thumbs-up2"></span>13</li>
										<li><span class="icon-eye2"></span> 100 </li>
									</ul>
									<p>Making puff puff is a really nice thing you can use it to make money or for refreshment.</p>
                                </div>
                            </div>
                        </div><hr>
						<div class="clearfix"></div>
						<div class="row" style="margin-top: 3em;">
                            <div class="col-md-4">
								<div class="latest_img">
									<img src="img/mobile.jpeg" alt="" class="img-fluid">
								</div>
                            </div>
                            <div class="col-md-8">
                                <div class="latest_inner_info">
									<h6>MAY 8, 2018 / Entrepreneurship</h6>
									<h4> <a href="#">How to make Puff Puff</a></h4>
									<ul>
										<li><span class="icon-user"></span> Jude Olajumoke</li>
										<li><span class="icon-calendar52"></span> Jude Olajumoke</li>
										<li><span class="icon-eye2"></span> 100 </li>
									</ul>
									<p>Making puff puff is a really nice thing you can use it to make money or for refreshment.</p>
                                </div>
                            </div>
                        </div><hr>
                        <div class="clearfix"></div>
						<div class="row" style="margin-top: 3em;">
                            <div class="col-md-4">
								<div class="latest_img">
									<img src="img/mobile.jpeg" alt="" class="img-fluid">
								</div>
                            </div>
                            <div class="col-md-8">
                                <div class="latest_inner_info">
									<h6>MAY 8, 2018 / Entrepreneurship</h6>
									<h4> <a href="#">How to make Puff Puff</a></h4>
									<ul>
										<li><span class="icon-user"></span> Jude Olajumoke</li>
										<li><span class="icon-calendar52"></span> Jude Olajumoke</li>
										<li><span class="icon-eye2"></span> 100 </li>
									</ul>
									<p>Making puff puff is a really nice thing you can use it to make money or for refreshment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="latest_side">
						<div class="latest_header">
							<h4>Categories</h4>
						</div>
						<div class="list_cat mb-3">
                            <ul class="list">
                                <li><a href="#"><span class="cat_name">Technology</span> <span class="cat_total">50</span>	</a> </li>
                                <li><a href="#"><span class="cat_name">Business</span> <span class="cat_total">10</span>	</a> </li>
                                <li><a href="#"><span class="cat_name">Education</span> <span class="cat_total">10</span>	</a> </li>
                            </ul>
						</div>
						<div class="clearfix"></div><br>
						<div class="latest_header mt-4">
                          <h4>Newsletter</h4>
                      	</div>
						<div class="newsletter_widget">
							<p class="text-left">Subscribe to our newsletter to get notification about new subjects, latest topics, trending articles, etc..</p>
							<div class="form-group d-flex flex-row">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
									</div>
									<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
								</div>
								<a href="#" class="bbtns">Subcribe</a>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('includes.main_footer')
@endsection