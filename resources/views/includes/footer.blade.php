<!-- footer starts -->
<div class="clearfix"></div>
<footer id="footer">
	<div class="container">
		<div class="footer_inner">
			<div class="row">
				<div class="col-md-4 abt_footer">	
						<!--<form>
							<input type="text" name="" placeholder="Enter Your Email Address">
							<input type="submit" name="submit" value="Sign Up">
						</form><br><hr>-->
						<!--<img src="img/afrihow.jpg" alt="" class="img-fluid">-->
						<h6>AfriHow is focused on building an online learning community for Africa's growing population.</h6>
						<ul class="social-icons">
							<li> <a href="https://facebook.com/officialafrihow/" target="_blank"><span class="fa fa-facebook"></span></a> </li>
							<li> <a href="https://twitter.com/officialafrihow/" target="_blank"><span class="fa fa-twitter"></span></a> </li>
							<li> <a href="https://linkedin.com/company/officialafrihow" target="_blank"><span class="fa fa-linkedin"></span></a> </li>
							<li> <a href="#" target="_blank"><span class="fa fa-instagram"></span></a> </li>
						</ul>
				</div>
				<div class="col-md-8 col-sm-8 footer_info">
					<div class="row">
						<div class="col-md-4">
							<h4>Company</h4>
							<ul>
								<li><a href="/about">About Us</a></li>
								<li><a href="/contact">Contact Us</a></li>
								<li><a href="/terms-privacy-policies">Terms & Privacy Policies</a></li>
								<li><a href="/faqs">FAQs</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h4>Developers</h4>
							<ul>
								<li><a href="/api-overview">API Overview</a></li>
								<li><a href="api-docs">Documentation</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h4>Why Afrihow</h4>
							<ul>
								<li><a href="/for-students">For Students</a></li>
								<li><a href="/for-professionals">For Professionals</a></li>
								<li><a href="/for-business">For Business</a></li>
								<li><a href="/for-government">For Government Organisation</a></li>
								<li><a href="/for-corporate-bodies">For Corporates Bodies</a></li>
								<li><a href="/for-international-companies">For International Companies</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="row">
				<div class="copyright_info">
					<div class="text-center">
						<p>&copy; AfriHow <?php echo date('Y'); ?>. All rights reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--// footer ends -->
<div class="clearfix"></div>

<script type="text/javascript" src="{{ asset('js/morphext.js') }}"></script>
<script type="text/javascript">
	$("#js-rotating").Morphext({
		animation: "bounceIn",
		complete: function () {
			console.log("This is called after a phrase is animated in! Current phrase index: " + this.index);
		}
	});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="{{ asset('js/jquery.min.js')}} "></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/aos.js')}}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
<!-- <script src="js/bootstrap-datepicker.js"></script> -->
<script src="{{ asset('js/scrollax.min.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>