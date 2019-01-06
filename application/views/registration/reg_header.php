<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Imphal Angels</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url();?>assets/registration_assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/registration_assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="<?php echo base_url();?>assets/registration_assets/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url();?>assets/registration_assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="<?php echo base_url();?>assets/registration_assets/css/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

 

  </head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  <body >
  	
  	<!-- Start Header -->
	<header id="mu-hero" class="" role="banner">
		<!-- Start menu  -->
		<nav class="navbar navbar-fixed-top navbar-default mu-navbar">
		  	<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>

			      <!-- Logo -->
			      <a class="navbar-brand" href="index.html">Imphal Angels</a>

			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      	<ul class="nav navbar-nav mu-menu navbar-right">
			      		<li><a href="#mu-hero">Home</a></li>
				        <li><a href="#mu-about">About Us</a></li>
				        <li><a href="#mu-schedule">Schedule</a></li>
			            <li><a href="#mu-speakers">Speakers</a></li>
			            <li><a href="#mu-pricing">Price</a></li>
			            <li><a href="#mu-register">Register</a></li>
			            <li><a href="#mu-sponsors">Sponsors</a></li>
			            <li><a href="#mu-contact">Contact</a></li>
			      	</ul>
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container-fluid -->
		</nav>
		<!-- End menu -->