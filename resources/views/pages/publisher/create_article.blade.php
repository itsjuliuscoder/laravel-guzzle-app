@extends('layouts.publisher')

@section('title')
	{{ $title }}
@endsection

@section('content')    
    @include('includes.publisher_header')
    <!--// navbar goes here -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('includes.publisher_nav')

        <div id="content-wrapper">

            <div class="container-fluid">
                <!-- Icon Cards-->
                <div class="row mt-3 mb-3">
                    <div class="col-md-8">
                        <div class="write box-effect1">
                        <div class="write_art">
                            <h3>Write An Article</h3>
                        </div>
                        <div class="clearfix"></div>
                        <div class="write_article">
                            
                            <form action="{{ url('publisher/create_article') }}" class="col-12 mt-4" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }} 
                                @if ($errors->has('article_img'))
                                    <span class="text-danger">{{ $errors->first('article_img') }}</span>
                                @endif
                                <div class="form-group mt-1">
                                    <label for=""></label>
                                    <input type="file" name="article_img">
                                </div>
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                                <textarea name="description" class="form-control my-editor"></textarea>
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
                                "searchreplace wordcount visualblocks visualchars code fullscreen",
                                "insertdatetime media nonbreaking save table contextmenu directionality",
                                "emoticons template paste textcolor colorpicker textpattern"
                            ],
                            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
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
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 box-effect1">
                            <div class="wallpaper">
                                <img src="../images/banner2.jpeg" class="img-fluid" alt="">
                            </div>
                            <div class="sm_profile_info">
                                <div class="profile_img">
                                    <img src="../images/avatar/avatar2.jpg" alt="">
                                </div>
                                <div class="description">
                                    <h2>{{$_COOKIE['fullname']}}</h2>
                                    <h6>{{$_COOKIE['email']}}</h6>
                                    <p>{{$_COOKIE['about']}}</p>
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