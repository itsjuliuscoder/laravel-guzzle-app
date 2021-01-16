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
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Subjects</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/publisher/subjects"><i class="fa fa-circle-o"></i> My Subjects</a></li>
              <li class="active"><a href="/publisher/create-subject"><i class="fa fa-circle-o"></i> Create Subjects</a></li>
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
              <li><a href="/publisher/my-topics"><i class="fa fa-circle-o"></i> My Topics</a></li>
              <li><a href="/publisher/create-topic"><i class="fa fa-circle-o"></i> Create a Topic</a></li>
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

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Create New Subject</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form role="form" action="">
              <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="subject_title" placeholder="Enter Subject Name">
                    <p style="margin-top:4px; color:#A9A9A9;">Subject Name makes us know the subject you are creating. Need help? <b> <a href="users/get_started">Using AfriHow to enhance reading experience in Africa.</a> </b></p>
                  </div>
                  <div class="form-group">
                    <label for="">Subject Description</label>
                    <textarea class="form-control" rows="2" name="subject_description" placeholder="Enter Subject Description"></textarea>
                    <p style="margin-top:4px; color:#A9A9A9;">A short description about your subject makes us understand it better. Need help?</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Subject Image</label>
                    <input type="file" id="exampleInputFile" name="subject_img">
                    <p style="margin-top:4px; color:#A9A9A9;">Give a subject a logo type of image so people can easily identity it. Need help? </p>
                  </div>
                  <div class="form-group">
                      <label for="">Subject Category</label>
                      <select name="" id="" class="form-control">
                        @foreach  ($listCategory['data'] as $key => $category)
                          <option value="{{$category['business']}}">{{$category['business']}}</option>
                          <option value="{{$category['education']}}">{{$category['education']}}</option>
                          <option value="{{$category['enterpreneurship']}}">{{$category['enterpreneurship']}}</option>
                          <option value="{{$category['health']}}">{{$category['health']}}</option>
                          <option value="{{$category['sports']}}">{{$category['sports']}}</option>
                        @endforeach
                      </select>
                      <p style="margin-top:4px; color:#A9A9A9;">Select a Category for your subject. Need more details? <b> <a href="/users/get_started">On each categories before creating a SUBJECT</a></b></p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject URL</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="subject_url" placeholder="Enter Subject URL">
                    <p style="margin-top:4px; color:#A9A9A9;">Drop your subject url if you have, so it helps you get traffic to your website. Have a question? <b> <a href="/users/get_started">On why you show create a SUBJECT URL</a>.</b></p>
                  </div>
              </div>
          </form>
        </div>
      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footer')
    @include('includes.footer_publisher')
@endsection