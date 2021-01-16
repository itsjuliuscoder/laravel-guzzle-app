@extends('layouts.publisher')

@section('title')
	{{ $title }}
@endsection

@section('content')
    
    @include('includes.publisher_header_update')
    
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
                            <h5>Update Topic</h5>
                          </div>
                          <div class="col related box-effect1">
                            <div class="write_article">
                              <form action="{{ url('publisher/update_topic') }}/{{$body['_id']}}" class="col-12 settings mt-4" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
								                  <input type="hidden" name="_method" value="PUT">
                                  <div class="form-group col-sm-12">
                                    <label for=""></label>
                                    <div class="form-group inner-addon left-addon">
                                      <!--<i class="fa fa-file-o"></i>-->
                                      <input type="text" name="topic" value="{{$body['topic']}}" required="" data-toggle="tooltip" title="Update Topic!" class="border-green border-lg" id="" placeholder="">
                                      <label alt='Enter New Topic' placeholder='Your Topic'></label> 
                                    </div>
                                    <label for=""></label>
                                    <div class="form-group inner-addon left-addon">
                                      <!--<i class="fa fa-list-alt"></i>-->
                                      <input type="text" name="topic_description" value="{{$body['topic_description']}}" required="" data-toggle="tooltip" title="Update Your Topic Description" class=" border-green border-lg" id="" placeholder="">
                                      <label alt='Enter New Topic Description' placeholder='Topic Description'></label> 
                                    </div>
                                    
                                  </div>
                                </div>
                                <button type="submit" id="update" class="btn btn-success btn_share col-md-2" data-toggle="tooltip" data-placement="bottom" title="By Clicking Update, This Topic Will Be Updated">Update <i class="fa fa-arrow-circle-o-right"></i></button>
                              </form>
                            </div>  
                          </div>
                          <script type="text/javascript">
                              $("button#update").click(function(){
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
                          <img src="../../images/banner2.jpeg" class="img-fluid" alt="">
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