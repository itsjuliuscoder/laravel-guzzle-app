@extends('layouts.publisher')

@section('title')
	{{ $title }}
@endsection

@section('content')
<body id="page-top" class="bg-default-200">
    
    @include('includes.publisher_header')
    
    <div id="wrapper">
      <!-- Sidebar -->
        
        @include('includes.publisher_nav')
         <div id="content-wrapper">
            <div class="dashboard_header box-effect1 pt-3">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                      <h6>Home &nbsp;/  <span class="text-muted">Dashboard</span></h6>
                  </div>
                  <div class="col-md-8">
                    <h6 class="text-right">Hi, &nbsp; <b>{{$_COOKIE['fullname']}}</b> <span class="stats">ONLINE</span> Today is <b><?php echo date('d, M Y');?></b></h6>                           
                  </div>
                </div>  
              </div>
            </div>
           
            <div class="container-fluid mb-1">
              <!-- Icon Cards-->
              <div class="row mt-5">
                  <div class="col-xl-4 col-sm-6">
                    <div class="card-box bg-success">                     
                      <i class="lnr lnr-book float-right text-white"></i>
                      <h6 class="text-white text-uppercase m-b-20">ARTICLES</h6>
                      <h1 class="m-b-20 text-white counter">25</h1>
                      <span class="text-white">8 New Articles</span>
                    </div>
                  </div>
                  <div class="col-xl-4 col-sm-6">
                    <div class="card-box bg-danger">
                        <i class="lnr lnr-pencil float-right text-white"></i>
                        <h6 class="text-white text-uppercase m-b-20">SUBJECTS</h6>
                        <h1 class="m-b-20 text-white counter">12</h1>
                        <span class="text-white">4 New Subjects</span>
                    </div>
                  </div>
                  <div class="col-xl-4 col-sm-6">
                    <div class="card-box bg-info">
                        <i class="lnr lnr-bubble float-right text-white"></i>
                        <h6 class="text-white text-uppercase m-b-20">TOPICS</h6>
                        <h1 class="m-b-20 text-white counter">20</h1>
                        <span class="text-white">10 New Topics</span>
                    </div>
                  </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-8">
                    <div class="row box-effect1 bg-default-100">
                        @include('includes.status-message')
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 box-effect1">
                      <div class="wallpaper">
                          <img src="../images/banner2.jpeg" class="img-fluid" alt="">
                      </div>
                      <div class="sm_profile_info">
                        <div class="profile_img">
                          <img src="" alt="">
                        </div>
                        <div class="description">
                          <h2>{{$_COOKIE['fullname']}}</h2>
                          <h6>{{$_COOKIE['email']}}</h6>
                          @if($_COOKIE['about'] == "write about yourself")
                              <p>{{$_COOKIE['about']}} <a href="/publisher/profile"><span class="fa fa-pencil"></span></a> </p>
                          @else 
                            <p>{{$_COOKIE['about']}}</p>
                          @endif
                        </div>
                        <div class="socials col-md-12">
                          <ul>
                            <li>
                              <a target="_blank" href="#" class="icon icon-facebook"></a>
                            </li>
                            <li>
                              <a target="_blank" href="#" class="icon icon-instagram"></a>
                            </li>
                            <li>
                              <a target="_blank" href="#" class="icon icon-twitter"></a>
                            </li>
                          </ul>
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