@extends('layouts.publisher_layout')

@section('title')
	{{ $title }}
@endsection

@section('content')
    @include('includes.header_publisher')
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            @if($_COOKIE['profile_img'] == "upload an image")
              <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            @else
                <img src="{{$_COOKIE['profile_img']}}" alt="{{$_COOKIE['fullname']}} . Profile Picture" class="img-circle">
            @endif
          </div>
          <div class="pull-left info">
            <p>{{$_COOKIE['fullname']}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="active"> 
            <a href="/publisher/home">
              <i class="fa fa-home"></i> <span>Dashboard</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Subjects</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/publisher/subjects"><i class="fa fa-circle-o"></i> My Subjects</a></li>
              <li><a href="/publisher/create_subject"><i class="fa fa-circle-o"></i> Create Subjects</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Topics</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/publisher/topics"><i class="fa fa-circle-o"></i> My Topics</a></li>
              <li><a href="/publisher/create_topic"><i class="fa fa-circle-o"></i> Create a Topic</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Stories</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <!-- <li><a href="/users/stories"><i class="fa fa-circle-o"></i>My Stories</a></li> -->
              <li><a href="/publisher/create_story"><i class="fa fa-circle-o"></i>Write a Story</a></li>
            </ul>
          </li>
          <li><a href="/publisher/send_feedback"><i class="fa fa-circle-o text-red"></i> <span>Send Feedback</span></a></li>
          <li><a href="/article/get-started-afrihow"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">

      <!-- Main content -->
      <section class="content">
        
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-8 connectedSortable">

            <div class="banner box box-widget">
                <div class="box-header">
                  <div class="box-tools">
                    <button type="button" style="margin-top:-20px;" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                   <h2>Learn how to use AfriHow to empower people by learning</h2>
                   <p>Creating a Subject is the first step to start the learning process, this will enable you create topic and write a story.</p>
                   <div class="button">
                        <div class="col-md-6">
                            <a class="btn btn-success btn-lg" href="/article/get-started-afrihow" style="color:#fff !important;">Read the guide</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-default btn-lg" href="/publisher/create-subject">
                            Create a Subject
                            </a>
                        </div>
                   </div>
                </div>
            </div>
            <!-- Box Comment -->
            <div class="box box-widget">
              <div class="box-header with-border">
                <div class="user-block">
                  <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                  <span class="username"><a href="#">Subject Name.</a></span>
                  <span class="description">Shared publicly - 7:30 PM Today</span>
                </div>
                <!-- /.user-block -->
                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                    <i class="fa fa-circle-o"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <img class="img-responsive" src="../dist/img/photo2.png" alt="Stories Image">
                <h2>Stories Title</h2>
                <p>I took this photo this morning. What do you guys think?</p>
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                
              </div>
            </div>
            <!-- /.box -->

            <!-- More Articles widget -->
            <div class="box box-widget">
                  <div class="box-header with-border">
                    <div class="user-block">
                      <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                      <span class="username"><a href="#">Subject Name.</a></span>
                      <span class="description">Shared publicly - 7:30 PM Today</span>
                    </div>
                    <!-- /.user-block -->
                    <div class="box-tools">
                      <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                        <i class="fa fa-circle-o"></i></button>
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                    <!-- /.box-tools -->
                  </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="../img/code.jpeg" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h3>I Love Coding </h3>
                            <p>Make coding part of you and you will never regret doing it...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -->

            <!-- More Articles widget -->
            <div class="box box-widget">
                  <div class="box-header with-border">
                    <div class="user-block">
                      <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                      <span class="username"><a href="#">Subject Name.</a></span>
                      <span class="description">Shared publicly - 7:30 PM Today</span>
                    </div>
                    <!-- /.user-block -->
                    <div class="box-tools">
                      <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                        <i class="fa fa-circle-o"></i></button>
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                    <!-- /.box-tools -->
                  </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="../img/code.jpeg" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h3>I Love Coding </h3>
                            <p>Make coding part of you and you will never regret doing it...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-4 connectedSortable">
            <!-- /.widget-user -->
            <div class="box box-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-green-active">
                <h3 class="widget-user-username">{{$_COOKIE['fullname']}}</h3>
                <h5 class="widget-user-desc">Founder &amp; CEO</h5>
              </div>
              <div class="widget-user-image">
              @if($_COOKIE['profile_img'] == "upload an image")
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              @else
                  <img class="img-circle" src="{{$_COOKIE['profile_img']}}" alt="{{$_COOKIE['fullname']}} . Profile Picture">
              @endif
              </div>
              <div class="box-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">0</h5>
                      <span class="description-text">SUBJECTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">0</h5>
                      <span class="description-text">TOPICS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">0</h5>
                      <span class="description-text">STORIES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->

            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Recently Created Topics</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <ul class="products-list product-list-in-box">
                  <li class="item">
                    <div class="product-img">
                      <img src="../dist/img/default-50x50.gif" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Samsung TV
                        <span class="label label-warning pull-right">$1800</span></a>
                        <span class="product-description">
                            Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="../dist/img/default-50x50.gif" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Bicycle
                        <span class="label label-info pull-right">$700</span></a>
                      <span class="product-description">
                            26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                          </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="../dist/img/default-50x50.gif" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Xbox One <span
                          class="label label-danger pull-right">$350</span></a>
                      <span class="product-description">
                            Xbox One Console Bundle with Halo Master Chief Collection.
                          </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="../dist/img/default-50x50.gif" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">PlayStation 4
                        <span class="label label-success pull-right">$399</span></a>
                      <span class="product-description">
                            PlayStation 4 500GB Console (PS4)
                          </span>
                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <a href="" class="uppercase">View More</a>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->

            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Recently Created Stories</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <ul class="products-list product-list-in-box">
                  <li class="item">
                    <div class="product-img">
                      <img src="../dist/img/default-50x50.gif" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Samsung TV
                        <span class="label label-warning pull-right">$1800</span></a>
                      <span class="product-description">
                            Samsung 32" 1080p 60Hz LED Smart HDTV.
                          </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="../dist/img/default-50x50.gif" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Bicycle
                        <span class="label label-info pull-right">$700</span></a>
                      <span class="product-description">
                            26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                          </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="../dist/img/default-50x50.gif" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Xbox One <span
                          class="label label-danger pull-right">$350</span></a>
                      <span class="product-description">
                            Xbox One Console Bundle with Halo Master Chief Collection.
                          </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="../dist/img/default-50x50.gif" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">PlayStation 4
                        <span class="label label-success pull-right">$399</span></a>
                      <span class="product-description">
                            PlayStation 4 500GB Console (PS4)
                          </span>
                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <a href="#" class="uppercase">View More</a>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->

      </section>
      <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
@endsection

@section('footer')
    @include('includes.footer_publisher')
@endsection