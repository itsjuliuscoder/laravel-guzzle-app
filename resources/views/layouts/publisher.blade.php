<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../afrihow.ico">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Author Meta -->
    <meta name="author" content="Afrihow">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Publisher Platform')</title>
    @include('includes.style_publisher')
</head>
<body>
   @yield('content')
   @yield('nav')
   @yield('footer')
</body>
</html>