@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection


@section('bar')
<!-- about banner -->
<div class="abt-banner">
    <div class="about-bar">
        <h4>Learning Platform Built For Africa's Growing Population</h4>
        <p>AfriHow is a Technology Company working on making learning, anywhere at anytime easier and accessible for Africa's growing population.</p>
    </div>
</div>
<!-- // end of about banner -->
@endsection


@section('content')
<section id="about">
    <!-- Abtt -->
        <div class="abtt">
            <!-- div for problem & solution -->
            <div class="about_grid">
                <div class="container">

                    <div class="row">
                        <div class="col-md-7 about_grid_left">
                            <h3>Rising Problem</h3>
                            <p>Times have proven that the Times have proven that theTimes have proven that the </p>
                        </div>
                        <div class="col-md-5 about_grid_right bgimg">
                            <!-- img illustration for solution goes here -->
                            <img src="img/stats.png" alt="Africa Demographic Population" class="img-fluid" data-aos="fade-down" data-aos-delay="300">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-5 about_grid_left bgimg2">
                            <!-- img illustration goes here -->
                            <img src="img/about-us/sol.jpeg" alt="Africa Demographic Population" class="img-fluid" data-aos="fade-down" data-aos-delay="300">
                        </div>
                        <div class="col-md-7 about_grid_right">
                            <h3>Proven Solution</h3>
                            <p>Africa's average population is the youngest amongst all the continents; the median age in 2012 was 19.7, when the worldwide median age was 30.4. This shows the energy in the continent to drive innovation and development in the continent. </p>
                        </div>
                    </div>
                    <!-- <div class="clearfix"></div> -->
                </div>
            </div>
            <!-- // end of problem & solution -->
            <div class="clearfix"></div>
            <!-- how to use afrihow -->
            <div class="how_afrihow">
                <div class="container">
                    <div class="text-center">
                        <h2 class="page_title">HOW AFRIHOW WORKS</h2>
                        <p>It isn't difficult! Just follow these simple steps</p>
                    </div>
                    <div class="how_afrihow_row">
                        <div class="row">
                            <div class="how_afrihow_col">
                                <img src="img/about-us/subject.png" alt="" class="rounded-circle img-fluid" data-aos="fade-left" data-aos-delay="100">
                                <h4>Create a Subject</h4>
                                <p>E.g Afrihow, University of Lagos, Government of Nigeria, etc. </p>
                                <div class="style-agile-border">
                                    <img src="img/about-us/sty1.png" alt="" />
                                </div>
                            </div>
                            <div class="how_afrihow_col">
                                <img src="img/about-us/categories.png" alt="" class="rounded-circle img-fluid" data-aos="fade-left" data-aos-delay="200">
                                <h4>Select a Category</h4>
                                <p>E.g Education, Business, Health, Entrepreneurship.</p>
                                <div class="style-agile-border2">
                                    <img src="img/about-us/sty2.png" alt="" />
                                </div>
                            </div>
                            <div class="how_afrihow_col">
                                <img src="img/about-us/topic.png" alt="" class="rounded-circle img-fluid" data-aos="fade-down" data-aos-delay="300">
                                <h4>Create a Topic</h4>
                                <p>E.g Registering a Business in Nigeria without third-party</p>
                                <div class="style-agile-border3">
                                    <img src="img/about-us/sty1.png" alt="" />
                                </div>
                            </div>
                            <div class="how_afrihow_col">
                                <img src="img/about-us/article.png" alt="" class="rounded-circle img-fluid" data-aos="fade-right" data-aos-delay="400">
                                <h4>Write a article</h4>
                                <p>Article are related to already created topic</p>
                                <div class="style-agile-border4">
                                    <img src="img/about-us/sty2.png" alt="" />
                                </div>
                            </div>
                            <div class="how_afrihow_col">
                                <img src="img/about-us/publish.png" alt="" class="rounded-circle img-fluid" data-aos="fade-right" data-aos-delay="500">
                                <h4>Publish article</h4>
                                <p>Make it live, the world is waiting</p>
                                <p></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- // end of how to use afrihow -->
            <div class="clearfix"></div>
            <!-- div for about_why -->
            <div class="about_why">
                <div class="container">
                    <div class="text-center">
                        <h2 class="page_title">LEARNING HAS NO BOUNDARIES</h2>
                        <p>Learning has no boundaries, so does AfriHow.</p>
                    </div>
                    <div class="row about_why_row">
                        <div class="col-md-4">
                            <div class="about_why_col bg-default-100">
                                <!-- icon goes here -->
                                <span class="icn">
                                    <img src="img/about-us/student.png" alt="Student's Icon" class="img-fluid">
                                </span>
                                <div class="about_why_col_desc">
                                    <h4>For Students</h4>
                                    <p>Stay updated in today's rapidly changing world</p>
                                    <a href="/for-students" class="" role="button">Learn More <span class="fa fa-arrow-circle-right"></span></a>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about_why_col bg-default-100">
                                <!-- icon goes here -->
                                <span class="icn">
                                    <img src="img/about-us/business.png" alt="Student's Icon" class="img-fluid">
                                </span>
                                <div class="about_why_col_desc">
                                    <h4>For Business</h4>
                                    <p>We want to know your business, from SMEs to multinational Companies.</p>
                                    <a href="/for-business" class="" role="button">Learn More <span class="fa fa-arrow-circle-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about_why_col bg-default-100">
                                <!-- icon goes here -->
                                <span class="icn">
                                    <img src="img/about-us/professionals.png" alt="Student's Icon" class="img-fluid">
                                </span>
                                <div class="about_why_col_desc">
                                    <h4>For Professionals</h4>
                                    <p>We are building</p>
                                    <a href="/for-professionals" class="" role="button">Learn More <span class="fa fa-arrow-circle-right"></span></a>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row about_why_row">
                        <div class="col-md-4">
                            <div class="about_why_col bg-default-100">
                                <!-- icon goes here -->
                                <span class="icn">
                                    <img src="img/about-us/corporate.png" alt="Student's Icon" class="img-fluid">
                                </span>
                                <div class="about_why_col_desc">
                                    <h4>For Corporate Bodies</h4>
                                    <p>Be it an </p>
                                    <a href="#" class="" role="button">Learn More <span class="fa fa-arrow-circle-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about_why_col bg-default-100">
                                <!-- icon goes here -->
                                <span class="icn">
                                    <img src="img/about-us/government.png" alt="Student's Icon" class="img-fluid">
                                </span>
                                <div class="about_why_col_desc">
                                    <h4>For Government Organisation</h4>
                                    <p>We want Africans to know how government organization works for their benefit</p>
                                    <a href="/for-government" class="" role="button">Learn More <span class="fa fa-arrow-circle-right"></span></a>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about_why_col bg-default-100">
                                <!-- icon goes here -->
                                <span class="icn">
                                    <img src="img/about-us/international.png" alt="Student's Icon" class="img-fluid">
                                </span>
                                <div class="about_why_col_desc">
                                    <h4>For International Organisation</h4>
                                    <p>We are building</p>
                                    <a href="for-international-companies" class="" role="button">Learn More <span class="fa fa-arrow-circle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <!-- // end about_why -->
            <div class="clearfix"></div>
            <div class="afrihow_values">
                <div class="container">
                    <div class="text-center">
                        <h2 class="page_title">Our Values</h2>
                        <p><b>AfriHow</b> is driven by our PILOT core tenants which serve as a propelant for us achieving our mission and vision for Africa's growing population.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/planting.jpg" alt="AfriHow core values" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <div class="row mt-3">
                                <div class="afrihow_values_row">
                                    <h3><span>P</span>assion</h3>
                                    <!-- <p>Passion drivens us to go the </p> -->
                                </div>
                                <div class="afrihow_values_row">
                                    <h3><span>I</span>ntegrity</h3>
                                </div>
                                <div class="afrihow_values_row">
                                    <h3><span>L</span>earn</h3>
                                </div>
                                <div class="afrihow_values_row">
                                    <h3><span>O</span>penness</h3>
                                </div>
                                <div class="afrihow_values_row">
                                    <h3><span>T</span>hink</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AFRIHOW Stories -->
            <div id="work" class="work">
                <div class="container">
                    <div class="text-center">
                        <h2 class="text-center page_title">HOW FAR WE HAVE COME</h2>
                        <p class="text-center">This is the AfriHow story</p>
                    </div>
                    <div class="work-info">
                        <div class="row">
                            <div class="col-md-6 work-left">
                                <h4>March 2019</h4>
                            </div>
                            <div class="col-md-6 work-right">
                                <h5><span class="fa fa-user"> </span>AfriHow is founded</h5>
                                <p>Julius Olajumoke and 4 of his friends founded AfriHow. </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--// AFRIHOW Stories -->
            <div class="clearfix"></div>
        </div>
	<!-- // - End of abtt -->
</section>
@endsection

@section('footer')
    @include('includes.footer')
@endsection
