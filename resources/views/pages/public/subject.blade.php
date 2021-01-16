@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection


@section('bar')
<!-- about banner -->
<div class="abt-banner">
    <div class="about-bar">
        <h4>SUBJECTS</h4>
        <p>Latest subjects on AfriHow</p>
    </div>
</div>
@endsection

@section('content')
<section id="about">
  <div class="subject_page">
      <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="subject_col card">
                    <img src="img/puff.jpeg" alt="Avatar" style="width:100%">
                    <div class="subj_logo">
                      
                    </div>
                    <div class="subj_col_btm">
                        <div class="subj_col_btm_info">
                          <h4>United Bank of Africa</h4>
                          <p>UBA is Pan African Bank, with operations in over 19 countries in Africa as well as in New York, Paris and London. We are focused on revolutionising the Financial Institution</p>
                        </div>
                        <div class="subj_col_btm_icon">
                            <div class="icon_con">
                              <span class="icon-heart5"> 25</span>
                              <span class="icon-comment"> 35</span>
                              <span class="icon-notebook"> 35</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="subject_col card">
                    <img src="img/puff.jpeg" alt="Avatar" style="width:100%">
                    <div class="subj_logo">

                    </div>
                    <div class="subj_col_btm">
                        <div class="subj_col_btm_info">
                          <h4>United Bank of Africa</h4>
                          <p>UBA is Pan African Bank, with operations in over 19 countries in Africa as well as in New York, Paris and London. We are focused on revolutionising the Financial Institution</p>
                        </div>
                        <div class="subj_col_btm_icon">
                            <div class="icon_con">
                              <span class="icon-heart5"> 25</span>
                              <span class="icon-comment"> 35</span>
                              <span class="icon-notebook"> 35</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="subject_col card">
                    <img src="img/code.jpeg" alt="Avatar" style="width:100%">
                    <div class="subj_logo">

                    </div>
                    <div class="subj_col_btm">
                        <div class="subj_col_btm_info">
                          <h4>University of Nairobi</h4>
                          <p>University of Nairobi is a one of the first and largest Education Institution in Kenya. Founded in 1956, it has committed itself to training of World Class Professionals to solve africa' rising problem as well as the world</p>
                        </div>
                        <div class="subj_col_btm_icon">
                            <div class="icon_con">
                              <span class="icon-heart5"> 25</span>
                              <span class="icon-comment"> 35</span>
                              <span class="icon-notebook"> 35</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- featured article -->
        <div class="featured_subject">
            <div class="row">
                <div class="col-md-5">
                  <div class="featured_subj_pro">
                    <img src="img/code.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="featured_subj_note">
                    <h3 class="mt-3"> Featured Subject</h3>
                  </div>
                </div>
            </div>
        </div>
        <!-- // featured article -->
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="subject_col card">
                    <img src="img/puff.jpeg" alt="Avatar" style="width:100%">
                    <div class="subj_logo">
                      
                    </div>
                    <div class="subj_col_btm">
                        <div class="subj_col_btm_info">
                          <h4>United Bank of Africa</h4>
                          <p>UBA is Pan African Bank, with operations in over 19 countries in Africa as well as in New York, Paris and London. We are focused on revolutionising the Financial Institution</p>
                        </div>
                        <div class="subj_col_btm_icon">
                            <div class="icon_con">
                              <span class="icon-heart5"> 25</span>
                              <span class="icon-comment"> 35</span>
                              <span class="icon-notebook"> 35</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="subject_col card">
                    <img src="img/puff.jpeg" alt="Avatar" style="width:100%">
                    <div class="subj_logo">

                    </div>
                    <div class="subj_col_btm">
                        <div class="subj_col_btm_info">
                          <h4>United Bank of Africa</h4>
                          <p>UBA is Pan African Bank, with operations in over 19 countries in Africa as well as in New York, Paris and London. We are focused on revolutionising the Financial Institution</p>
                        </div>
                        <div class="subj_col_btm_icon">
                            <div class="icon_con">
                              <span class="icon-heart5"> 25</span>
                              <span class="icon-comment"> 35</span>
                              <span class="icon-notebook"> 35</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="subject_col card">
                    <img src="img/code.jpeg" alt="Avatar" style="width:100%">
                    <div class="subj_logo">

                    </div>
                    <div class="subj_col_btm">
                        <div class="subj_col_btm_info">
                          <h4>University of Nairobi</h4>
                          <p>University of Nairobi is a one of the first and largest Education Institution in Kenya. Founded in 1956, it has committed itself to training of World Class Professionals to solve africa' rising problem as well as the world</p>
                        </div>
                        <div class="subj_col_btm_icon">
                            <div class="icon_con">
                              <span class="icon-heart5"> 25</span>
                              <span class="icon-comment"> 35</span>
                              <span class="icon-notebook"> 35</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
</section>
@endsection

@section('footer')
    @include('includes.main_footer')
@endsection