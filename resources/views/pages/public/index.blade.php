@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection


@section('slider')
<section class="home-slider owl-carousel">
    <div class="slider-item">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 wrap col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4 mt-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Digitized Learning in Africa</h1>
                <p class="mb-4 mb-md-5 sub-p" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">As we thrive towards a digital economy in Africa, we believe that digitizied learning will be central to achieving it.</p>
                <a href="/register" class="btn btn-primary p-3 px-xl-5 py-xl-3">Get started</a> 
                </div>
                <div class="col-md-6 ftco-animate">
                    <img src="img/slider/banner3_edited.png" class="img-fluid" alt="Slider Image 3">
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection

@section('content')
<section id="section">
    <div class="container">
        <!-- latest design 2 [testing] -->
        <div class="afri_1 mt-2">
            <div class="row">
                <div class="col-md-7">
                    <!-- top article goes here -->
                    <div class="afri_1_grid">
                        <!-- bg image goes here -->
                        <div class="afri_grid_img">
                            <img data-src="img/puff.jpeg" alt="" class="img-fluid lazyload">
                        </div>
                        <div class="afri_1_info">
                            <h2>TODAY'S NUMBER ONE TOPIC</h2>
                            <h4>Opening a UBA Account with #0.00</h4>
                            <ul>
                                <li><span class="lnr lnr-cloud"></span>&nbsp; United Bank of Africa</li>
                                <li><span class="icon-calendar"></span>&nbsp; June 12, 2018</li>
                                <li><span class="lnr lnr-bookmark"></span>&nbsp; 550 </li>
                                <li class="mr-9"><span class="lnr lnr-bookmark "></span>&nbsp; 550 </li>
                            </ul>
                        </div>
                    </div>
                    <!-- //-- top article goes here -->
                </div>
                <div class="col-md-5">
                    <div class="afri_latest">
                        <!-- bg image goes here -->
                        <div class="afri_latest_row">
                            <h5>Post on 18 Aug 2019 / United Bank of Africa</h5>
                            <h2>Corporate Account for Everyone</h2>
                            <p>We digitize daily routines of million of people through our trusted and verified platform. With afrihow.com you become limitless.</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="afri_latest_row mt-2">
                            
                        </div>
                        <div class="clearfix"></div>
                        <div class="afri_latest_row mt-2">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- JUST IN TOPICS -->
            <div class="card just_in">
                <h5><span class="just_in_text">JUST IN:-</span> <span id="js-rotating">Preparing to perform your civic responsibilites in 2019, The fight against climate change, How start-up are having positive impact in Africa growing community</span> </h5>
            </div>
            <!-- //  JUST IN TOPICS -->
        </div>
        <!-- // -- latest design 2 [testing]  -->
        <div class="clearfix"></div>
        <!-- latest subject -->
        <div class="subj_row" style="margin-top:5em;">
            <!-- row number 1 -->
            <div class="row">
                <div class="col-md-3 ftco-animate">
                        <div class="subj_col">
                            <div class="subj_title"><h4>Slatecube</h4><a href="#"><span class="lnr lnr-bookmark"></span></a></div>
                            <div class="subj_col_main">
                                    <img data-src="img/code.jpeg" alt="Slatecube" class="img-fluid lazyload">
                            </div>
                            <div class="subj_col_list">
                                    <ul>
                                        <li><a href="#">How to meet the world <span class="fa fa-chevron-right"></span> </a> </li>
                                        <li><a href="#">How to meet the world <span class="fa fa-chevron-right"></span> </a> </li>
                                        <li><a href="#">How to meet the world <span class="fa fa-chevron-right"></span> </a> </li>
                                        <li><a href="#">How to meet the world <span class="fa fa-chevron-right"></span> </a> </li>
                                    </ul>
                            </div>
                        </div>
                </div>
                <div class="col-md-3 ftco-animate">
                        <div class="subj_col">
                        <div class="subj_title"><h4>88.9 Brila FM </h4><a href="#"><span class="lnr lnr-bookmark"></span></a></div>
                            
                            <div class="subj_col_main">
                                    <img data-src="img/sports.jpeg" class="img-fluid lazyload" alt="">
                            </div>
                            <div class="subj_col_list">
                                    <ul>
                                        <li><a href="#">How to treat the girl child&nbsp;<span class="fa fa-chevron-right"></span> </a> </li>
                                    </ul>
                            </div>
                        </div>
                </div>
                <div class="col-md-3 ftco-animate">
                        <div class="subj_col">
                            <div class="subj_title"><h4>Techpoint</h4><a href="#"><span class="lnr lnr-bookmark"></span></a></div>
                            <div class="subj_col_main"> 
                                    <img data-src="img/mobile.jpeg" class="img-fluid lazyload" alt="">
                            </div>
                            <div class="subj_col_list">
                                    <ul>
                                        <li><a href="#">How to treat the girl child&nbsp;<span class="fa fa-chevron-right"></span> </a> </li>
                                    </ul>
                            </div>
                        </div>
                </div>
                <div class="col-md-3 ftco-animate">
                        <div class="subj_col">
                            <div class="subj_title"><h4>Relationship talks</h4><a href="#"><span class="lnr lnr-bookmark"></span></a></div>
                            <div class="subj_col_main">
                                <img data-src="img/relationship.jpeg" class="img-fluid lazyload" alt="">
                            </div>
                            <div class="subj_col_list">
                                    <ul>
                                        <li><a href="#">How to treat the girl child&nbsp;<span class="fa fa-chevron-right"></span> </a> </li>
                                    </ul>
                            </div>
                        </div>
                </div>
            </div>
            <!-- row number 2 -->
            <div class="clearfix" style="margin-top:4em;"></div>
            <div class="row">
                <div class="col-md-3">
                        <div class="subj_col">
                        <div class="subj_title"><h4>United Bank of Africa</h4><a href="#"><span class="lnr lnr-bookmark"></span></a></div>
                                
                                <div class="subj_col_main">
                                        <img data-src="img/code.jpeg" alt="Slatecube" class="img-fluid lazyload">
                                </div>
                                <div class="subj_col_list">
                                        <ul>
                                            <li><a href="#">How to meet the world <span class="fa fa-chevron-right"></span> </a> </li>
                                        </ul>
                                </div>
                        </div>
                </div>
                <div class="col-md-3">
                        <div class="subj_col">
                            <div class="subj_title"><h4>University of Lagos</h4><a href="#"><span class="lnr lnr-bookmark"></span></a></div>
                            <div class="subj_col_main">
                                    <img data-src="img/puff.jpeg" class="img-fluid lazyload" alt="">
                            </div>
                            <div class="subj_col_list">
                                    <ul>
                                        <li><a href="#">How to treat the girl child&nbsp;<span class="fa fa-chevron-right"></span> </a> </li>
                                    </ul>
                            </div>
                        </div>
                </div>
                <div class="col-md-3">
                        <div class="subj_col">
                            <div class="subj_title"><h4>Naij.com</h4><a href="#"><span class="lnr lnr-bookmark"></span></a></div>
                            
                            <div class="subj_col_main">
                                    <img data-src="img/mobile.jpeg" class="img-fluid lazyload" alt="">
                            </div>
                            <div class="subj_col_list">
                                    <ul>
                                        <li><a href="#">How to treat the girl child&nbsp;<span class="fa fa-chevron-right"></span> </a> </li>
                                    </ul>
                            </div>
                        </div>
                </div>
                <div class="col-md-3">
                        <div class="subj_col">
                            <div class="subj_title"><h4>Nigeria Info 99.3</h4> <a href="#"><span class="lnr lnr-bookmark"></span></a>  </div>
                            
                            <div class="subj_col_main">
                                    <img data-src="img/puff.jpeg" class="img-fluid lazyload" alt="">
                            </div>
                            <div class="subj_col_list">
                                    <ul>
                                        <li><a href="#">How to treat the girl child&nbsp;<span class="fa fa-chevron-right"></span> </a> </li>
                                    </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- // - end of subject -->
        <div class="clearfix"></div>
        <!-- GET STARTED CONTAINER -->
        <div class="get_started mt-2">
            <h2 class="text-center">WHAT WILL YOU LEARN TODAY?</h2>
            <div class="row">
                <div class="col-md-5">
                    <div class="get_started_left">
                        
                        <img data-src="img/learn.jpg" alt="Sign Up" class="img-fluid lazyload">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="get_started_right">
                        <p>With 65% of her population under 35 and a median age of 18, africans are welling to learn new things.</p>
                        <a href="/register" class="btn btn-default get_start_link">Get Started &nbsp;<span class="fa fa-arrow-right wow animated infinite flash" data-wow-delay="0.8s"></span></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- trending articles comes here -->
        <div class="trnd-article mt-2">
            <div class="heading">
                <h2>Learn by Category</h2>
            </div>
            <?php //var_dump($posts["data"]["subject"]); ?>
            
            
            
            <div class="row">
               
            </div>
        </div>
        <!-- // trending articles ends here -->
        <div class="clearfix"></div>
        <!-- most read articles comes here -->
        <div class="most_read mt-2">
            <div class="row">
                <div class="col-md-8">
                    <div class="heading">
                        <h2>Interesting Topics</h2>
                    </div>
            
                    <div class="row">
                        <div class="col-md-6">
                            <div class="most_read_img_lower">
                                    <img data-src="img/code.jpeg" alt="" class="img-fluid lazyload">
                            </div>
                            <div class="most_read_info_lower">
                                <h4>What the world is expecting in 2019</h4>
                                <h5><span class=""></span> </h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="most_read_img_lower">
                                    <img data-src="img/code.jpeg" alt="" class="img-fluid lazyload">
                            </div>
                            <div class="most_read_info_lower">
                                <h4>What the world is expecting in 2019</h4>
                                <h5><span class=""></span> </h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="most_read_img_lower">
                                    <img data-src="img/code.jpeg" alt="" class="img-fluid lazyload">
                            </div>
                            <div class="most_read_info_lower">
                                <h4>What the world is expecting in 2019</h4>
                                <h5><span class=""></span> </h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="most_read_img_lower">
                                    <img data-src="img/code.jpeg" alt="" class="img-fluid lazyload">
                            </div>
                            <div class="most_read_info_lower">
                                <h4>What the world is expecting in 2019</h4>
                                <h5><span class=""></span> </h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="heading">
                        <h4>Must Learn on AfriHow</h4>
                    </div>
                    <div class="most_read_item">
                        <div class="most_read_item_img">
                            <img src="img/code.jpeg" alt="" class="img-fluid lazyload">
                        </div>
                        <div class="most_read_body">
                            <a href=""><h4>BUILDING A PLATFORM FOR LUCK</h4></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="most_read_item mt-2">
                        <div class="most_read_item_img">
                            <img data-src="img/map_02.jpg" alt="" class="img-fluid lazyload">
                        </div>
                        <div class="most_read_body">
                            <a href=""><h4>BUILDING A PLATFORM FOR LUCK</h4></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="most_read_item mt-2">
                        <div class="most_read_item_img">
                            <img data-src="img/puff.jpeg" alt="" class="img-fluid lazyload">
                        </div>
                        <div class="most_read_body">
                            <a href=""><h4>BUILDING A PLATFORM FOR LUCK</h4></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="most_read_item mt-2">
                        <div class="most_read_item_img">
                            <img data-src="img/mobile.jpeg" alt="" class="img-fluid lazyload">
                        </div>
                        <div class="most_read_body">
                            <a href=""><h4>BUILDING A PLATFORM FOR LUCK</h4></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="heading mt-2">
                        <h4>Keep up with Happenings</h4>
                    </div>
                    <div class="newsletter_widget">
                        <p>Subscribe to our newsletter to get notification about new updates, information, discount, etc..</p>
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
        <!-- // most read ends here -->
    </div>
</section>
@endsection

@section('footer')
    @include('includes.main_footer')
@endsection