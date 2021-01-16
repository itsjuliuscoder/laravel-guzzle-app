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
                            <h5>Send a Feedback</h5>
                          </div>
                          <div class="col related box-effect1">
                            <div class="write_article">

                              <h3>WHY DO WE NEED YOUR FEEDBACK?</h3>
                              <p><b>AFRIHOW</b> is working on building an online community for learning focusing on Africa's growing population. This is just our <b>MINIMUM VIABLE PRODUCT</b>, which just has limited features on how we want to digitizied the learning process in Africa. The true reality of every product is its <b>USERS</b>, for this kindly fill in the feedback form below so we will build a product that you will be super excited using.</p>
                              <form action="{{ url('publisher/send-feedback') }}" class="col-12 settings mt-4" method="POST" enctype="multipart/form-data">
                                  {{ csrf_field() }} 
                                  @if ($errors->has('article_img'))
                                      <span class="text-danger">{{ $errors->first('article_img') }}</span>
                                  @endif
                                  <div class="form-group">
                                    <div class="row">
                                        @foreach  ($listReaction['data'] as $key => $reaction)
                                        <div class="col-md-3">
                                          <label alt='Excellent' placeholder='Enter Subject URL'></label>
                                          <input type="radio" name="reaction_status" value="{{$reaction['excellent']}}"/>
                                        </div>
                                        <div class="col-md-3">
                                          <label alt='Very Good' placeholder='Excellent'></label>
                                          <input type="radio" name="reaction_status" value="{{$reaction['very_good']}}" placeholder="Excellent"/>
                                        </div>
                                        <div class="col-md-3">
                                          <label alt='Good' placeholder='Excellent'></label>
                                          <input type="radio" name="reaction_status" value="{{$reaction['good']}}"/>
                                        </div>
                                        <div class="col-md-3">
                                          <label alt='Fair' placeholder='Excellent'></label>
                                          <input type="radio" name="reaction_status" value="{{$reaction['fair']}}"/>
                                        </div>
                                        @endforeach
                                    </div>
                                  </div>
                                  @if ($errors->has('description'))
                                      <span class="text-danger">{{ $errors->first('description') }}</span>
                                  @endif
                                  <textarea name="details" class="form-control my-editor"></textarea>
                                  <button type="submit" class="mt-3 btn btn-success btn_share col-md-3" data-toggle="tooltip" data-placement="bottom" title="Clicking Create Article, creates an Article">Create Article</button>
                              </form>
                            </div>
                            <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                            <script>
                                var editor_config = {
                                path_absolute : "/",
                                selector: "textarea.my-editor",
                                plugins: [
                                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                                    "searchreplace wordcount  code fullscreen",
                                    " media nonbreaking save contextmenu ",
                                    "emoticons template paste textcolor textpattern"
                                ],
                                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media emoticons",
                                relative_urls: false,
                                file_browser_callback : function(field_name, url, type, win) {
                                    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                    var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                                    var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                                    if (type == 'image') {
                                    cmsURL = cmsURL + "&type=Images";
                                    } else {
                                    cmsURL = cmsURL + "&type=Files";
                                    }

                                    tinyMCE.activeEditor.windowManager.open({
                                    file : cmsURL,
                                    title : 'AfriHow FileManager',
                                    width : x * 0.8,
                                    height : y * 0.8,
                                    resizable : "yes",
                                    close_previous : "no"
                                    });
                                }
                                };

                                tinymce.init(editor_config);
                            </script>  
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