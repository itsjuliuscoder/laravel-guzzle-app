@extends('layouts.publisher')

@section('title')
	{{ $title }}
@endsection

@section('content')
    
    @include('includes.publisher_header')
    
    <div id="wrapper">
      <!-- Sidebar -->
        
        @include('includes.publisher_nav')
         <div id="content-wrapper">
            <div class="dashboard_header box-effect1 pt-3">
              <div class="container">
                <div class="dashboard_stats">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Home &nbsp;/  <span class="text-muted">Dashboard</span></h6>
                        </div>
                        <div class="col-md-6">
                            <div class="dashboard_inner">
                                <div class="row">
                                    <h6 class="text-right">Hi, &nbsp; <b>{{$_COOKIE['fullname']}}</b>&nbsp;<span class="stats">ONLINE</span>
                                    Today is <b><?php echo date('d, M Y');?></b></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="container-fluid mb-3">
                <ul class="progressbar">
                    <li>Create a Subject</li>
                    <li>Create a Topic</li>
                    <li>Write an Article</li>
                    <li>Go live</li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="container-fluid mb-3">
                <!-- <div class="publisher_steps">
                    <div class="publisher_steps_one">
                        <div class="row">
                            <div class="publisher_step_left">
                                <span class="step_no">
                                    1
                                </span>
                            </div>
                            <div class="publisher_step_right">
                                <h4>Create a Subject</h4>
                            </div>
                        </div>
                    </div>
                    <div class="publisher_steps_one">
                        <div class="row">
                            <div class="publisher_step_left">
                                <span class="step_no">
                                    2
                                </span>
                            </div>
                            <div class="publisher_step_right">
                                <h4>Create a Topic</h4>
                            </div>
                        </div>
                    </div>
                    <div class="publisher_steps_one">
                        <div class="row">
                            <div class="publisher_step_left">
                                <span class="step_no">
                                    3
                                </span>
                            </div>
                            <div class="publisher_step_right">
                                <h4>Write an Article</h4>
                            </div>
                        </div>
                    </div>
                    <div class="publisher_steps_one">
                        <div class="row">
                            <div class="publisher_step_left">
                                <span class="step_no">
                                    4
                                </span>
                            </div>
                            <div class="publisher_step_right">
                                <h4>Go Live</h4>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="clearfix"></div>
            <div class="container-fluid mt-3">              
              <div class="clearfix"></div>
              <div class="row mt-3 mb-2">
                <div class="col-md-8">
                    <div class="row">
                        <!-- Trending Articles -->
                        <div class="col-md-12">
                          <!--Related Article -->
                          <div class="relate col-md-5">
                            <h5>Articles By You</h5>
                          </div>
                          <div class="col related box-effect1">
                              <div class="container">
                                    
                              </div>
                          </div>
                          <a href="related.php"><button class="btn btn-danger btn_share col-md-2 mt-1 float-right">See More</button></a>   
                          <!-- End of Related Article -->

                          <!-- Main Article -->                          
                          <div class="col article_here box-effect1">
                            <div class="articles">
                              
                            </div>
                          </div>
                        </div>
                        <!-- End of Main Article -->
                    </div>
                    <div class="clearfix"></div>
                    <div class="row" style="padding:3px;" >
                      @foreach  ($listSubj['data'] as $key => $subjects)
                        <div class="col-md-6 mt-2">
                            <div class="box-effect1 bg-default-100">
                              <div class="p-2">
                                <div class="p-0" style="font-size: 10px; font-weight: 900;">
                                    <h6 style="font-weight: 900;"><span class="text-left">United Bank of Africa</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-right"><?php echo date('M d,Y'); ?></span></h6>
                                </div>
                                <img src="" alt="" class="img-fluid">
                              </div>
                              <div class="p-2">
                                <h5>{{$subjects["subject_title"]}}</h5>
                                <p>{{$subjects["subject_description"]}}</p>
                                <a href="#" style="text-decoration: none; color: #004000;">Read More <span class="icon icon-arrow-right8"></span></a>
                              </div>
                              
                            </div>
                        </div>
                      @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 box-effect1">
                      <div class="wallpaper">
                          <img src="../images/banner2.jpeg" class="img-fluid" alt="">
                      </div>
                      <div class="sm_profile_info">
                        <div class="profile_img">
                        @if($_COOKIE['profile_img'] == "upload an image")
                            <img src="../images/avatar/admin2.png" alt="Default Profile Image" class="avatar-rounded"><a href="/publisher/update-profile"><span class="fa fa-pencil"></span></a>
                        @else
                            <img src="{{$_COOKIE['profile_img']}}" alt="{{$_COOKIE['fullname']}} . Profile Picture">
                        @endif
                        </div>
                        <div class="description">
                          <h2>{{$_COOKIE['fullname']}}</h2>
                          <h6>{{$_COOKIE['email']}}</h6>
                          @if($_COOKIE['about'] == "write about yourself")
                              <p>{{$_COOKIE['about']}} <a href="/publisher/update-profile"><span class="fa fa-pencil"></span></a> </p>
                          @else 
                            <p>{{$_COOKIE['about']}}</p>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="card box-effect1">
                      <div class="card-header">
                        <i data-feather="message-circle"></i> Created Topics
                      </div>
                      <div class="card-body">
                        
                          <a href="">Topic Title</a>
                          <a href="">Topic Title</a>
                          <a href="">Topic Title</a>
                          <a href="">Topic Title</a>
                          <a href="">Topic Title</a> 
                      </div>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- /.container-fluid -->
@endsection

@section('footer')
    @include('includes.publisher_footer')
@endsection