@if ($message = Session::get('success'))
<div class="alert alert-success alert-block animated fadeInDown">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('failed'))
<div class="alert alert-danger alert-block animated fadeInDown">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block animated fadeInDown">
	<!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block animated fadeInDown">
	<!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('confirm'))
	<span class="text-success mt-2 mb-2">{{ $message }}</span>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block animated fadeInDown">
	<!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
	<strong>{{ $message }}</strong>
</div>
@endif
