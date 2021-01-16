<!-- Bootstrap core CSS-->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/fontawesome.min.css">

<!-- Page level plugin CSS-->
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('publisher_css/publisher.css')}}" rel="stylesheet">

<link href="{{ asset('publisher_css/responsive.css')}}" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

<!-- Colour styles for the publisher's platform -->
<link rel="stylesheet" href="{{ asset('publisher_css/colours.css')}}" type="text/css">

<!-- Effects styles for the publisher's platform -->
<link rel="stylesheet" href="{{ asset('publisher_css/effects.css')}}">

<link rel="stylesheet" href="{{ asset('icomoon/styles.css')}}">

<link rel="stylesheet" href="{{ asset('publisher_css/profile.css')}}">

<link rel="stylesheet" href="{{ asset('assets/css/extras/animate.min.css')}}">

<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://unpkg.com/feather-icons"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<script>
  $(function(){
    if ($('#card').length) {
      var el = $('#card');
      var stickyTop = $('#card').offset().top;
      var stickyHeight = $('#card').height();

      $(window).scroll(function(){
        var limit = $('#footer').offset().top - stickyHeight - 20;

        var windowTop = $(window).scrollTop();

        if (stickyTop < windowTop) {
          el.css({
            position: 'fixed',
            top: 0
          });
        } else{
          el.css('position', 'static');
        }

        if (limit < windowTop) {
          var diff = limit - windowTop;
          el.css({
            top: diff
          });
        }
      });
    }
  });
</script>

<style>
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #ffffffcf;
}
.loader img{
    position: relative;
    left: 40%;
    top: 40%;
}
</style>

<div class="loader" ><img src="img/preloader.gif" class="img-fluid"></div>

<script>
  window.onload = function() 
  {
    //display loader on page load 
    $('.loader').fadeOut();
  }
</script>