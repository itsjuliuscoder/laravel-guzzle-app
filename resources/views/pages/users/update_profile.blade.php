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
                    <div class="row">
                        <!-- Trending Articles -->
                        <div class="col-md-12">
                          <!--Related Article -->
                          <div class="relate col-md-5 mt-2">
                            <h5>Update Profile</h5>
                          </div>
                          <div class="col related box-effect1">
                            @include('includes.status-message')
                            <div class="write_article">
                              <form action="{{ url('publisher/update_profile') }}/{{$_COOKIE['id']}}" class="col-12 settings mt-4" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                <input type="hidden" name="_method" value="PUT">
                                  <div class="form-group col-sm-12">
                                    <label for=""></label>
                                    <div class="form-group inner-addon left-addon">
                                      <!--<i class="fa fa-file-o"></i>-->
                                      <input type="text" name="fullname" value="{{$_COOKIE['fullname']}}" required="" data-toggle="tooltip" title="Update Your Fullname!" class="border-green border-lg" id="" placeholder="">
                                      <label alt='Enter New Fullname' placeholder='Your Fullname'></label> 
                                    </div>
                                    <label for=""></label>
                                    <div class="form-group inner-addon left-addon">
                                      <!--<i class="fa fa-list-alt"></i>-->
                                      <input type="text" name="about" value="{{$_COOKIE['about']}}" required="" data-toggle="tooltip" title="Update Your About Description" class=" border-green border-lg" id="" placeholder="">
                                      <label alt='Enter About' placeholder='About You'></label> 
                                    </div>
                                    <label for=""></label>
                                    <div class="form-group mt-1">
                                      <input type="file" name="profile_img" data-toggle="tooltip" title="Select an Image for the Subject">
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-success btn_share col-md-2" data-toggle="tooltip" data-placement="bottom" title="By Clicking Update, Your Profile Details will be Updated">Update <i class="fa fa-arrow-circle-o-right"></i></button>
                              </form>
                            </div>  
                          </div>
                          <script type="text/javascript">
                              $("button.btn").click(function(){
                                  $('i').removeClass('fa-arrow-circle-o-right');
                                  $('i').addClass('fa-sync');
                                  $('i').addClass('fa-spin');
                              }); 
                          </script>
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
                    
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 box-effect1">
                      <div class="wallpaper">
                          <img src="../images/banner2.jpeg" class="img-fluid" alt="">
                      </div>
                      <div class="sm_profile_info">
                        <div class="profile_img">
                          @if($_COOKIE['profile_img'] == "upload an image" || "NULL")
                              <img src="../images/avatar/admin2.png" alt="Default Profile Image" class="avatar-rounded"><a href="/publisher/profile"><span class="fa fa-pencil"></span></a>
                          @else
                              <img src="{{$_COOKIE['profile_img']}}" alt="{{$_COOKIE['fullname']}} . Profile Picture">
                          @endif
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