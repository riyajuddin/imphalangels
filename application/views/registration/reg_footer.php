	
			
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
			<div class="container">
				<div class="mu-footer-area">
					<div class="mu-footer-top">
						<div class="mu-social-media">
							<a href="https://www.facebook.com/ImphalAngels/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/ImphalAngels"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
					<div class="mu-footer-bottom">
						<p class="mu-copy-right">&copy; Copyright 2019 <a rel="nofollow" href="https://imphalangels.com/">Imphal Angels</a>. All right reserved.</p>
					</div>
				</div>
			</div>

	</footer>
	<!-- End footer -->

	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/registration_assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/registration_assets/js/slick.min.js"></script>
    <!-- Event Counter -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/registration_assets/js/jquery.countdown.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/registration_assets/js/app.js"></script>
  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
    <!-- Custom js -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/registration_assets/js/custom.js"></script>
	
	<!-- Validation -->
	<script src="<?php echo base_url();?>assets/js/parsleyFormValidator/parsley.js"></script>


	<script>
// Validation start here



$('.name').keypress(function (e) {
    var regex = new RegExp("^[a-z A-Z\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});

$('.number').keypress(function (e) {
    var regex = new RegExp("^[0-9\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});

$('.address').keypress(function (e) {
    var regex = new RegExp("^[0-9 a-z A-Z -- . ,\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});

$('.text_number').keypress(function (e) {
    var regex = new RegExp("^[0-9 a-z A-Z -- . ,\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});
$('.percentage').keypress(function (e) {
    var regex = new RegExp("^[0-9 .\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});
$('.email').keypress(function (e) {
    var regex = new RegExp("^[0-9 a-z A-Z -- . @\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});

// Validation end here
</script>