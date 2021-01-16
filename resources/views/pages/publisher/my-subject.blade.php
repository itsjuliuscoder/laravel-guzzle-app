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
              
              <div class="row mb-2">
                <div class="col-md-8">
                  <div class="subject_row">
                    @include('includes.status-message')
                    <div class="row">
                        @foreach  ($subject_by_user['subjects'] as $key => $subjects)
                          <div class="col-md-6 mt-3">
                              <div class="subject_col_left box-effect1 bg-default-100">
                                <img src="../img/sports.jpeg" alt="" class="img-fluid">
                                <div class="p-2">
                                  <a href="/publisher/my-topics" data-toggle="tooltip" data-placement="bottom" title="Click Subject Name to Create an Article"><h4>{{$subjects['subject_title']}}</h4></a>
                                  <p>{{$subjects['subject_description']}}</p>
                                </div>
                                <div class="subject_stats">
                                    <ul>
                                      <li data-toggle="tooltip" data-placement="left" title="Total Number of Topics Created"><span class="fa fa-folder"></span>32 Topics</li>
                                      <li data-toggle="tooltip" data-placement="bottom" title="Total Number of Articles Written"><span class="fa fa-folder-open"></span>32 Articles</li>
                                      <li data-toggle="tooltip" data-placement="right" title="Click, to Edit Subject Details"><a href="/publisher/update-subject/{{$subjects['_id']}}"><span class="fa fa-pencil"></span>Edit</a></li>
                                    </ul>
                                </div>
                              </div>
                          </div>
                        @endforeach
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
                              <img src="../images/avatar/avatar2.jpg" alt="Default Profile Image" class="avatar-rounded"><a href="/publisher/update-profile"><span class="fa fa-pencil"></span></a>
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