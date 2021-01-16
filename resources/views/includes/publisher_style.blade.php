<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css')}}">

<link rel="stylesheet" href="{{ asset('dist/css/banner.css')}}" type="text/css">

<style>
     .loader {
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background-color: #fff;
     }
     .loader img{
          position: relative;
          /* left: 40%; */
          top: 40%;
     }
</style>

<div class="loader" ><img src="img/preloader.gif" class="img-fluid"></div>
<script>
	window.onload = function() {
		//display loader on page load 
		$('.loader').fadeOut();
	}
</script>
