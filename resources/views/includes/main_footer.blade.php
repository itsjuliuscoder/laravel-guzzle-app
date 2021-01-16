<!-- footer goes here -->
<footer id="main_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="footer_list">
                    <li>&copy; AfriHow <?php echo date('Y'); ?>. All rights reserved&nbsp;&nbsp;| </li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/terms-privacy-policies">Terms & Privacy Policies</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="main_footer_social">
                    <li><a href="https://facebook.com/officialafrihow/" target="_blank"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="https://twitter.com/officialafrihow/" target="_blank"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="https://linkedin.com/company/officialafrihow" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

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
<script src="{{ asset('js/scrollax.min.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>