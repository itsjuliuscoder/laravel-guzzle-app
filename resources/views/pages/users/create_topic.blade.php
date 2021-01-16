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
          <li> 
            <a href="/users/home">
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
              <li><a href="/publisher/create-subject"><i class="fa fa-circle-o"></i> Create Subjects</a></li>
            </ul>
          </li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Topics</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/publisher/my-topics"><i class="fa fa-circle-o"></i> My Topics</a></li>
              <li class="active"><a href="/publisher/create-topic"><i class="fa fa-circle-o"></i> Create a Topic</a></li>
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
              <li><a href="/publisher/create-article"><i class="fa fa-circle-o"></i>Write a Story</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Send Feedback</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

  <!-- content-wrapper -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">

      <div class="row">
          <div class="col-md-3">
              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

                  <h3 class="profile-username text-center">Subject Name</h3>

                  <p class="text-muted text-center">Subject Category</p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Topics</b> <a class="pull-right">543</a>
                    </li>
                    <li class="list-group-item">
                      <b>Stories</b> <a class="pull-right">13,287</a>
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
          </div>
          <div class="col-md-9">
            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Create New Topic</h3>
              </div>
              <div class="box-body">
                <form role="form" action="">
                    <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Topic Title</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="topic" placeholder="Enter Topic Name">
                          <p style="margin-top:4px; color:#A9A9A9;">Topic title should be concise and easy to understand. Need help? <b> <a href="/article/get-started-afrihow">Creating a concise Topic title.</a></b></p>
                        </div>
                        <div class="form-group">
                          <label for="">Topic Description</label>
                          <textarea class="form-control" rows="2" name="topic_description" placeholder="Enter Topic Description"></textarea>
                          <p style="margin-top:4px; color:#A9A9A9;">We want to understand this topic better, give us a short description.</p>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Topic Image</label>
                          <input type="file" id="exampleInputFile" name="topic_img">
                          <p style="margin-top:4px; color:#A9A9A9;">Select a banner-like image to represent this topic.</p>
                        </div>
                        <button type="submit" class="mt-3 btn btn-primary">Create Article</button>
                    </div>
                </form>
              </div>
            </div>
            <!-- /.box -->

          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footer')
    @include('includes.footer_publisher')
@endsection