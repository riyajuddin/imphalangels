<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:image" content="http://www.mobimp.com/images/career.png" />
	<meta property="og:description" content="AT MOBIMP, WE BELIEVE THAT THE MOST COMPLEX BUSINESS CHALLENGES CAN BE SOLVED
	WITH A UNIQUE AND SIMPLE IT SOLUTIONS. IN SHORT WE SIMPLIFY IT" />
	<meta property="og:url"content="http://www.mobimp.com/" />
  	<meta name="author" content="Mobimp Services Private Limited">
        <title>MOBIMP</title>
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/png"  sizes="48x48">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-icon.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skew.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/owl.theme.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/tabs.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/tabstyles.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/about-tab.css" />
         <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- header section -->
<section class="banner5" role="banner"> 
  <!--header navigation -->
<header id="header">
      <div class="header-content clearfix"> 
        <a class="logo" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo.svg" alt="" style="margin-top: -.6em;"></a>
        <nav class="navigation" role="navigation">
          <ul class="primary-nav" style="margin-top: 15px;">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url();?>home/#pro">Products</a></li>
            <li><a href="<?php echo base_url();?>home/#serv">Services</a></li>
            <li><a href="<?php echo base_url();?>team">Our Team</a></li>
            <li><a href="<?php echo base_url();?>career">Careers</a></li>
            <li><a href="<?php echo base_url();?>about">About Us</a></li>
            <li><a href="<?php echo base_url();?>contact">Contact</a></li>
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a> </div>
      </header>
  <!--header navigation --> 
  <!-- banner text -->

</section>
<!-- header section --> 




<section  style="margin-top: -8em;">
<div class="container">
<div class="row">
  
  <div class="col-md-8 col-md-offset-2 contacthead">
  
      <div class="col-md-12">   
       <h2 id="contactlabelshow" style="font-family: 'Merriweather Sans';font-weight: 800; line-height: 58px; letter-spacing: -4px;  margin-bottom: 12px; font-size: 66px; text-indent: 1.1em;">Get in <span style="color: #00b377">Touch</span> With Us</h2>
       <h2 id="contactlabelhide" style="font-family: 'Merriweather Sans'; display:none; font-weight: 800; line-height: 58px; letter-spacing: -4px;  margin-bottom: 12px; font-size: 50px; text-indent: 1.1em;"></h2>
     </div>

 <hr>

</div>

</div>
</div>

</section>


<section style="margin-top: 5em; margin-bottom: 10em;">
  
  <div class="content-block contact-3">
            <div class="container">
                <div class="row">
		
                    <div class="col-md-6">
                        <div id="contact" class="form-container">
                            <fieldset>
                                <div id="message"></div>
								<label id="msgStatus"style="color: #ea8013;display:none">Sending . . .</label>
								<div class="form-group">
									<label id="errorName" style="color: #f13838; display: none"></label>						
                                        <input maxlength="30" id="txtName" onkeyup="runescape();" onfocus="runescape();" onchange="runescape();" onkeydown="runescape();"onblur="runescape();"   type="text" placeholder="Name" class="form-control" />
										
										<script type="text/javascript">
											function runescape()
											{
											var string = document.getElementById('txtName').value;
											
											document.getElementById('txtName').value= string.replace(/[^a-zA-Z]/g,"");
											if(string=="")
										   {
										   }
										   else
										   {
										    $('#errorName').hide();
										   }
											
											}
										</script>
									
									
									</div>
                                    <div class="form-group">
									<label id="errorEmail" style="color: #f13838; display: none"></label>
									<label id="emailCheck" style=' display:none; color: green;'>Email is Valid.</label>
									<input id="txtEmail"  type="text" placeholder="Email"  onkeyup="runEmailValidation();" onfocus="runEmailValidation();" onchange="runEmailValidation();" onkeydown="runEmailValidation();"onblur="runEmailValidation();" class="form-control" />
                                    </div>
                                    <div class="form-group" >
										<label id="errorMobile" style="color: #f13838; display: none"></label>			
									<label id="mobileCheck" style=' display:none; color: green;'>Mobile Number is Valid.</label>
										<input id="txtPhone"  onkeyup="runMobileValidation();" onfocus="runMobileValidation();" onchange="runMobileValidation();" onkeydown="runMobileValidation();"onblur="runMobileValidation();"  onkeyup="runMobileValidation();"  type="text"  placeholder="Phone" class="form-control" />
										
											
										
										
                                    </div>
                                    <div class="form-group">
							
								                             
									<textarea style="height: 238px;" id="txtComments"  onkeyup="runCommentValidation();" onfocus="runCommentValidation();" onchange="runCommentValidation();" onkeydown="runCommentValidation();"onblur="runCommentValidation();"  onkeyup="runCommentValidation();"   class="form-control" rows="3" placeholder="Message" ></textarea>
									<label id="errorComment" style="color: red; display: none;">Message cannot be empty!</label>          
									   <div class="editContent">
                                            <p class="small text-muted"><span class="guardsman">* All fields are required.</span> Once we receive your message we will respond as soon as possible.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input id="btnSent" onclick="validate()" class="btn btn-primary" type="button" value="Submit"  name="submit"></input>
                                    </div>
                              
                            </fieldset>
                        </div>
                        <!-- /.form-container -->
                    </div>
                    <div class="col-md-6">
                        <h2>MOBIMP SERVICES PRIVATE LIMITED</h2>
                         <p class="mailme" style="font-size: 16px;"><br>
          Mobimp HQ Building, 4th Floor<br/>
          RIMS Road, Imphal<br>
          Manipur - 795001<br/>

          P: +91 8415875120&nbsp;&nbsp;&nbsp; +91 8575226390<br/>

          E: <a href="mailto:#">contact@mobimp.com</a>
        </p>

<!-- FACEBOOK LINK-->
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmobimpsoftware%2F&tabs=timeline&width=340&height=200px&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="200px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

                    </div>


                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
</section>


      <!-- FOOTER-->

<section style="background-color: #202136;">
  <div class="copyright">
    <div class="container-fluid">
      <div class="col-md-6">
        <p>© 2017. MOBIMP SERVICES PVT LTD, All Rights Reserved</p>
      </div>
      <div class="col-md-6">

         <ul class="list-unstyled social-links list-inline">
                
                     <li>
                        <a href="https://www.facebook.com/mobimpservices" target="_blank"><i class="fa fa-facebook" style="color: white;"></i><span style="color: white;">&nbsp;&nbsp;&nbsp;FACEBOOK</span></a>
                    </li>
                   
                </ul>
      </div>
    </div>
  </div>
</section>


<!-- JS FILES --> 
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.flexslider-min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.fancybox.pack.js"></script> 
<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script> 

<script src="<?php echo base_url();?>assets/js/modernizr.js"></script> 
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="<?php echo base_url();?>assets/js/service.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<script type="text/javascript">
 $('.statistic-counter_two, .statistic-counter, .count-number').counterUp({
                delay: 10,
                time: 2000
            });
</script>

<script type="text/javascript">
    $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        margin:10,
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
</script>



<script type="text/javascript">
    $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>

<script src="<?php echo base_url();?>assets/js/cbpFWTabs.js"></script>
        <script>
            (function() {

                [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                    new CBPFWTabs( el );
                });

            })();
        </script>



        <!--FILTERABLE GALLERY -->

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mixitup.min.js"></script>
    
    <script type="text/javascript">
    $(function () {
        
        var filterList = {
        
            init: function () {
            
                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixItUp({
                selectors: {
                  target: '.portfolio',
                  filter: '.filter' 
              },
              load: {
              filter: '.app'  
            }     
                });                             
            
            }

        };
        
        // Run the show!
        filterList.init();
        
        
    }); 
    </script>





<script type="text/javascript">

function validate(){
	
	
    var name=document.getElementById('txtName').value;
    var email=document.getElementById('txtEmail').value;
    var phone=document.getElementById('txtPhone').value;
    var comments=document.getElementById('txtComments').value;
    if(name==""){
 		document.getElementById('errorName').innerHTML="Name cannot be empty!";
    	$('#errorName').show();
    	$('#txtName').focus();
    	return;
		}else{
			$('#errorName').hide();
			}
	 if(!checkEmail(email))
	    {
	    	$('#txtEmail').addClass('has-error');
	    	document.getElementById('errorEmail').innerHTML="Email cannot be empty !";
	    	$('#errorEmail').show();
			$('#emailCheck').hide();
	    	$('#txtEmail').focus();
			document.getElementById("errorEmail").style.display = "block";
	    	return;
	    	
	    }else{
	    	$('#errorEmail').hide();
	    	$('#txtEmail').removeClass('has-error');
			$('#emailCheck').show();
		
	    }
 if(!mobileCheck(phone))
	    {
	    	$('#txtPhone').addClass('has-error');
	    	document.getElementById('errorMobile').innerHTML="Mobile cannot be empty !";
	    	$('#errorMobile').show();
	    	$('#mobileCheck').hide();
	    	$('#txtPhone').focus();
			document.getElementById("errorMobile").style.display = "block";
	    	return;
	    	
	    }else{
	    	$('#errorMobile').hide();
	    	$('#txtPhone').removeClass('has-error');
	    	$('#mobileCheck').show();
	    }
		if(comments==""){
			document.getElementById('errorComment').innerHTML="Message cannot be empty!";
	    	$('#errorComment').show();
	    	$('#txtComments').focus();
	    	return;
			}else{
				$('#errorComment').hide();
				} 
         SendContact(name,email,phone,comments);
}
function mobileCheck(age){
	if (/^\d{10}$/.test(age)) {
		 return true;
	} else {
	 
	    return false
	}
}

function checkEmail(email) {
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test(email)){
   return false;
 }else{
		return true;
     }
}
function runEmailValidation()
{

	   var email=document.getElementById('txtEmail').value;

		if(email=="")
	   {
	   $('#errorEmail').hide();
		$('#emailCheck').hide();
	   }
	   else{
	   if(!checkEmail(email))
	    {
	    	$('#txtEmail').addClass('has-error');
	    	document.getElementById('errorEmail').innerHTML="This is not a valid email!";
	    	$('#errorEmail').show();
			$('#emailCheck').hide();
	    }
		else
		{
	    	$('#errorEmail').hide();
	    	$('#txtEmail').removeClass('has-error');
			$('#emailCheck').show();
	    }

		   }	

}



function runMobileValidation(){
	   var mobile=document.getElementById('txtPhone').value;
	  
	if(mobile=="")
	   {
	   $('#errorMobile').hide();
		$('#mobileCheck').hide();
	   }
	else
	{
	  if(!mobileCheck(mobile))
	    {
	    	$('#txtPhone').addClass('has-error');
	    	document.getElementById('errorMobile').innerHTML="This is not a valid mobile!";
	    	$('#errorMobile').show();
	    	$('#mobileCheck').hide();
	    	
	    }else{
	    	$('#errorMobile').hide();
	    	$('#txtPhone').removeClass('has-error');
	    	$('#mobileCheck').show();
	    }
	}
		
}



function runCommentValidation(){
  var comments=document.getElementById('txtComments').value;
if(comments=="")
{
}
else{  $('#errorComment').hide();}		
}

function SendContact(name,email,phone,comments) {
	$('#msgStatus').show();
	document.getElementById('msgStatus').innerHTML="Sending . . .";
	$('#btnSent').hide();
	var url = '<?php echo base_url();?>contactform/contact?name='+name+'&email='+email+'&phone='+phone+'&comments='+comments;

	callServiceToFetchData(url,statusresponse);
}
function statusresponse(response){
	$('#btnSent').show();

	var sqlresponse = JSON.parse(response);
	if(sqlresponse.status === "validationError"){
			$('#msgStatus').hide();
		switch(sqlresponse.name){
		case "name":
			document.getElementById('errorName').innerHTML="Name cannot be empty!";
			$('#errorName').show();
			break;
		case "email":
			document.getElementById('errorEmail').innerHTML="This is not a valid email!";
			$('#errorEmail').show();
			break;
		case "phone":
			document.getElementById('errorMobile').innerHTML="This is not a valid mobile!";
			$('#errorMobile').show();
			break;
		case "comment":
			document.getElementById('errorComment').innerHTML="Message cannot be empty";
			$('#errorComment').show();
			
			break;
			
			
		}
	}else{

		if(sqlresponse.status === "success"){

			document.getElementById('msgStatus').innerHTML="Your message has been sent.";
			document.getElementById("msgStatus").style.color = "green";
			var name= sqlresponse.name;
			
			document.getElementById('contactlabelhide').innerHTML="Thank you <span style='color: #00b377'>"+name+"</span> ";
			$('#contactlabelhide').show();
			$('#contactlabelshow').hide();
			$('#mobileCheck').hide();
			$('#emailCheck').hide();
			
			document.getElementById('txtName').value="";
		    document.getElementById('txtEmail').value="";
		    document.getElementById('txtPhone').value="";
		    document.getElementById('txtComments').value="";

			
		}else{
			if(sqlresponse.status === "fail")
			{
				document.getElementById('msgStatus').innerHTML="Something went wrong.";
				document.getElementById("msgStatus").style.color = "red";
				}
		}
		
	}
	
}
</script>



</body>
</html>
