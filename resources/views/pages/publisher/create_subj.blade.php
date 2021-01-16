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
                            <h5>Create Subject</h5>
                          </div>
                          <div class="col related box-effect1">
                            @include('includes.flash_message')
                            <div class="write_article">
                              <form action="{{ url('publisher/create_subj') }}" class="col-12 settings mt-4" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                  <div class="form-group col-sm-12">
                                    <label for=""></label>
                                    <div class="form-group inner-addon left-addon">
                                      <!--<i class="fa fa-file-o"></i>-->
                                      <input type="text" name="subject_title" required="" data-toggle="tooltip" title="Type in Subject Name" class="border-green border-lg" id="" placeholder="">
                                      <label alt='Enter Subject Name' placeholder='Subject Name'></label> 
                                    </div>
                                    <label for=""></label>
                                    <div class="form-group inner-addon left-addon">
                                      <!--<i class="fa fa-list-alt"></i>-->
                                      <input type="text" name="subject_description" required="" data-toggle="tooltip" title="Write a short description about your subject" class=" border-green border-lg" id="" placeholder="">
                                      <label alt='Enter Subject Description' placeholder='Subject Description'></label> 
                                    </div>
                                    <label for=""></label>
                                    <div class="form-group mt-1">
                                      <input type="file" name="subject_img" data-toggle="tooltip" title="Select an Image for the Subject">
                                    </div>
                                    <label for=""></label>
                                    <div class="form-group">
                                        <select name="category" data-toggle="tooltip" title="Select a category for the Subject">
                                            @foreach  ($listCategory['data'] as $key => $category)
                                              <option value="{{$category['business']}}">{{$category['business']}}</option>
                                              <option value="{{$category['education']}}">{{$category['education']}}</option>
                                              <option value="{{$category['enterpreneurship']}}">{{$category['enterpreneurship']}}</option>
                                              <option value="{{$category['health']}}">{{$category['health']}}</option>
                                              <option value="{{$category['sports']}}">{{$category['sports']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for=""></label>
                                    <div class="form-group inner-addon left-addon">
                                      <!--<i class="fa fa-globe"></i>-->
                                      <input type="text" name="subject_url" required="" data-toggle="tooltip" title="Enter your subject url" class=" border-green border-lg" placeholder="" id="">
                                      <label alt='Enter Subject URL if available ' placeholder='Enter Subject URL'></label> 
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-success btn_share col-md-6" data-toggle="tooltip" data-placement="bottom" title="By Clicking Create You Have Decided To Create A Subject">CREATE SUBJECT <i data-feather="arrow-right-circle"></i></button>
                              </form>
                            </div>  
                          </div>
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