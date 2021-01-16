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
            
            <div class="container-fluid mb-1">
              <!-- Icon Cards-->
              
              <div class="row">
                <div class="col-md-8">
                  @include('includes.status-message')
                  <div class="topic_row">
                    @foreach  ($listTopic['topics'] as $key => $topic)
                        <div class="row mt-1 box-effect1 bg-default-100 pt-3 pb-3">
                            <div class="col-md-3">
                                <img src="../img/sports.jpeg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-9">
                                <div class="topic_tool">
                                    <ul>
                                    <li><span class="fa fa-calendar"></span>&nbsp;&nbsp;December 12th, 2019</li>
                                    <li><span class="fa fa-folder"></span>&nbsp;&nbsp;EDUCATION</li>
                                    <li><a href="/publisher/update-topic/{{$topic['_id']}}">Edit&nbsp;<span class="fa fa-pencil"></span></a></a></li>
                                    </ul>
                                </div>
                                <a href="#"><h3>{{$topic['topic']}}</h3></a>
                                <p>{{$topic['topic_description']}}</p>
                            </div>
                        </div>
                    @endforeach
                        <div class="clearfix"></div>
                        <div class="row mt-1 box-effect1 bg-default-100 pt-3 pb-3">
                            <div class="col-md-3">
                                <img src="../img/sports.jpeg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-9">
                                <div class="topic_tool">
                                    <ul>
                                    <li><span class="fa fa-calendar"></span>&nbsp;&nbsp;December 12th, 2019</li>
                                    <li><span class="fa fa-folder"></span>&nbsp;&nbsp;EDUCATION</li>
                                    <li><a href="#">Edit&nbsp;<span class="fa fa-pencil"></span></a></a></li>
                                    </ul>
                                </div>
                                <a href="#"><h3>Building a formidable system with AfriHow</h3></a>
                                <p>We are building an online formidable system for Africa's for learn</p>
                            </div>
                        </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 box-effect1">
                      <div class="wallpaper">
                          <img src="../images/banner2.jpeg" class="img-fluid" alt="">
                      </div>
                      <div class="sm_profile_info">
                        <div class="profile_img">
                            @if($_COOKIE['profile_img'] == "upload an image" || "NULL")
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