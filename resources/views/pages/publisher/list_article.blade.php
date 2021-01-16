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

@endsection