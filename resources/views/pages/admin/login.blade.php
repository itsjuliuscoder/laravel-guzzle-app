@extends('layouts.admin')

@section('title')
	{{ $title }}
@endsection

@section('content')
<body class="navbar-bottom login-container">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Advanced login -->
				<form action="/login_admin" method="post">
					<div class="panel panel-body login-form">
						<div class="text-center">
							<img src="../img/afrihow.jpg" class="img-fluid" alt="AfriHow's Logo">
							<h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" placeholder="Username">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" placeholder="Password">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group login-options">
							<div class="row">
								<div class="col-sm-6">
									<label class="checkbox-inline">
										<input type="checkbox" class="styled" checked="checked">
										Remember
									</label>
								</div>

								<div class="col-sm-6 text-right">
									<a href="reset-password/">Forgot password?</a>
								</div>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
						</div>

					</div>
				</form>
				<!-- /advanced login -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom footer">
		<ul class="nav navbar-nav visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="footer">
			<div class="navbar-text">
				&copy; 2015. <a href="#" class="navbar-link">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" class="navbar-link" target="_blank">Eugene Kopyov</a>
			</div>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="#">About</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /footer -->

</body>
@endsection