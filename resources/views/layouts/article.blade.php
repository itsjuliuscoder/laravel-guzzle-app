<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../afrihow.ico">
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
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "url": "https://afrihow.com",
        "name": "AfriHowTech Solutions.",
        "logo": "http://afrihow.com/images/logo.png"
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+234-902-501-5566",
            "contactType": "Customer service"
        },
        "image" : [
            
        ],
        "sameAs": [
            "https://facebook.com/officialafrihow/",
            "https://twitter.com/officialafrihow/",
            "https://linkedin.com/company/officialafrihow",
        ]
    }
    </script>
    @include('includes.public')
</head>
<body>
    
    @if ($navbar === 'Article')
        @section('navbar')
            @include('includes.nav')
        @show
    @else 
        @section('navbar')
            @include('includes.header')
        @show
    @endif

    @yield('slider')

    @yield('bar')

    
    <div id="section">
        @yield('content')
    </div>
    
    @yield('footer')

</body>
</html>