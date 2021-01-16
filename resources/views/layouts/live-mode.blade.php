<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../../afrihow.ico">
    <!-- Title -->
    <title>@yield('title', 'Home Page')</title>
    <!-- Meta Tags -->
    <meta name="author" content="Afrihow">
    <meta name="keywords" content="africa, learning, edutech, tech start-up in africa, digital learning"> 
    <meta name="description" content="@yield('description', 'working to digitize, democratize and personalize learning in Africa, making it available to her growing population')">
    <meta content="website" property="og:type">
    <meta content="https://afrihow.com/" property="og:url">
    <meta content="@yield('mtitle')" property="og:title">
    <meta content="https://www.facebook.com/aafrihow/" property="og:see_also">
    @include('includes.public')
</head>
<body class="bg-default-200">

    @section('navbar')
        @include('includes.live_header')
    @show

    @yield('slider')

    @yield('bar')

    
    <div id="section">
        @yield('content')
    </div>
    
    @yield('footer')
    
</body>
</html>