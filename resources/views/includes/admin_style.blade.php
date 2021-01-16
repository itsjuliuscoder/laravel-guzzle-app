<!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

	<script type="text/javascript" src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js')}}"></script>

	<script type="text/javascript" src="{{ asset('assets/js/pages/datatables_basic.js')}}"></script>
	
	<script type="text/javascript" src="{{ asset('assets/js/pages/login.js')}}"></script>

	<script type="text/javascript" src="{{ asset('assets/js/plugins/ui/ripple.min.js')}}"></script>


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
		left: 40%;
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