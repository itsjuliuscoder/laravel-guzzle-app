{{-- bootstrap  CSS files --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }} ">
{{-- @Font Styles & files --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('icomoon/styles.css') }} ">


{{-- Google fonts --}}
<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Pacifico|Patua+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

{{-- JS files --}}
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js"></script>

<script type="text/javascript">
    $(function(){
        $(window).scroll(function(){
            if ($(window).scrollTop()) {
                $('header').addClass('scrolled');
            }
            else{
                $('header').removeClass('scrolled');
            }
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>
.loader {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #fff;
    background-position: center;
    background-repeat: no-repeat;
    background-image: url('../img/preloader.gif');
}
</style>
