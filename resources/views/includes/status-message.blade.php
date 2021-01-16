@if ($message = Session::get('subject'))
<div class="confirmation_body" style="margin: 1em auto !important;">
	<div class="container">
		<div class="text-center">
			<img src="../img/about-us/subject.png" style="width:50; height:80px;" class="img-fluid" alt="Subjecct Created Successfully">
			<h3>Subject Created Successfully!</h3>
			<p>{{$message}}</p>
			<p>Click <a href="/publisher/my-subject" data-toggle="tooltip" data-placement="top" title="Click to View this Subject">View Subject</a> to create a topic and an article</p>
		</div>
	</div>
</div>
@endif

@if ($message = Session::get('subject_update'))
<div class="confirmation_body" style="margin: 1em auto !important;">
	<div class="container">
		<div class="text-center">
			<img src="../img/about-us/subject.png" style="width:50; height:80px;" class="img-fluid" alt="Subjecct Created Successfully">
			<h3>Subject Update Successfully!</h3>
			<p>{{$message}}</p>
		</div>
	</div>
</div>
@endif


@if ($message = Session::get('topic'))
<div class="confirmation_body" style="margin: 1em auto !important;">
	<div class="container">
		<div class="text-center">
			<img src="../img/about-us/topic.png" style="width:50; height:80px;" class="img-fluid" alt="Subjecct Created Successfully">
			<h3>Topic Created Successfully!</h3>
			<p>{{$message}}</p>
			<p>Click <a href="/publisher/my-topics">View Topic</a> to create a topic and an article</p>
		</div>
	</div>
</div>
@endif

@if ($message = Session::get('topic_update'))
<div class="confirmation_body" style="margin: 1em auto !important;">
	<div class="container">
		<div class="text-center">
			<img src="../img/about-us/topic.png" style="width:50; height:80px;" class="img-fluid" alt="Subjecct Created Successfully">
			<h3>Topic Updated Successfully!</h3>
			<p>{{$message}}</p>
		</div>
	</div>
</div>
@endif

@if ($message = Session::get('article'))
<div class="confirmation_body" style="margin: 1em auto !important;">
	<div class="container">
		<div class="text-center">
			<img src="../img/about-us/topic.png" style="width:50; height:80px;" class="img-fluid" alt="Subjecct Created Successfully">
			<h3>Article Created Successfully!</h3>
			<p>{{$message}}</p>
			<p>Click <a href="/publisher/my-subject" data-toggle="tooltip" data-placement="bottom" title="Click to View the Topic You Just Created">Live View</a> to view this article you just created.</p>
		</div>
	</div>
</div>
@endif

@if ($message = Session::get('article_update'))
<div class="confirmation_body" style="margin: 1em auto !important;">
	<div class="container">
		<div class="text-center">
			<img src="../img/about-us/topic.png" style="width:50; height:80px;" class="img-fluid" alt="Subjecct Created Successfully">
			<h3>Article Created Successfully!</h3>
			<p>{{$message}}</p>
			<p>Click <a href="/publisher/my-subject" data-toggle="tooltip" data-placement="bottom" title="Click to View the Topic You Just Created">Live View</a> to view this article you just created.</p>
		</div>
	</div>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block fadeInUp">
	<!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('user_update'))
<div class="alert alert-success alert-block fadeInUp mt-3">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('confirm'))
	<span class="text-success mt-2 mb-2">{{ $message }}</span>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block fadeInUp">
	<!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger fadeInUp">
	<!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
	Something went wrong, check carefully
</div>
@endif