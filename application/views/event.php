<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
   
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #39b54a; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
   border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
    position: fixed;
    width: 100%;
    z-index: 9;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
	  Imphal Angels
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">WHO</a></li>
        <li><a href="#">WHAT</a></li>
        <li><a href="#">WHERE</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-3 text-center">
  <img src="<?php echo base_url();?>assets/images/new_submit_2018.jpg" class="img-responsive  " style="display:inline" alt="Bird" >
 
</div>


<!-- Second Container -->
<div class="container ">
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      
	  
          <form method="get" action="">
            <form  class="form-horizontal" method="post" >
              <div class="form-group">
                <label for="ques"  class="col-md-12"> Are you a student or an entrepreneur?</label>
                <div class="controls col-md-12 "  style="margin-bottom: 10px">
                  <label class="radio-inline"><input type="radio" name="ques" value="student" onclick="showblockstu()" style="margin-bottom: 10px">Student</label>
                  <label class="radio-inline"><input type="radio" name="ques" value="entre" onclick="showblockent()"style="margin-bottom: 10px">Entrepreneur</label>
                  </div>
              </div>

						  <div id="stusection" style="display: none">
							  <div class="form-group">
                  <label class="control-label col-md-5">Your Name </label>
                  <div class="col-md-7 ">
                    <input class="form-control" style="margin-bottom: 10px" type="text" />
                  </div>
							  </div>
							  <div class="form-group required">
								  <label class="control-label col-md-5">College/University Name </label>
								  <div class="col-md-7 ">
									  <input class="form-control" style="margin-bottom: 10px" type="text" />
								  </div>
							  </div>
						  </div>

						  <div id="entresection" style="display: none">
							  <div id="div_id_username" class="form-group">
                  <label class="col-md-5">Company's Name </label>
                  <div class="col-md-7 ">
                    <input class="form-control" style="margin-bottom: 10px" type="text" />
                  </div>
							  </div>
							  <div class="form-group required">
								  <label class="col-md-5">Number of Co-founders </label>
								  <div class="controls col-md-2 ">
									  <input class="form-control" id="num" type="number" min="1" onchange="viewDetail()" style="margin-bottom: 10px" type="number"/>
							  	</div>
							  </div>
						  	<div class="alert alert-danger col-md-12">
								  <strong>Note:</strong> Rs.1000 for the first Co-founder and Rs.500 for the additionals.
							  </div>
							  <div id="entrepreneurFounder">

							  </div>
						  </div>

              <div id="secondques" class="form-group">
                <label class="control-label col-md-12  requiredField">Are you interested in showing your startup with a Staff? (Rs.5000)</label>
                <div class="controls col-md-12 "  style="margin-bottom: 10px">
                  <label class="radio-inline"> <input type="radio" name="choice" value="yes" style="margin-bottom: 10px">Yes</label>
                  <label class="radio-inline"> <input type="radio" name="choice" value="no" style="margin-bottom: 10px">No</label>
                </div>
              </div>

  						<div id="thirdques" class="form-group">
                <label class="control-label col-md-12">Are you interested in attending dinner and net? (Rs.800/person)</label>
                <div class="col-md-12 "  style="margin-bottom: 10px">
                  <label class="radio-inline"> <input type="radio" name="third" value="yes" style="margin-bottom: 10px">Yes</label>
                  <label class="radio-inline"> <input type="radio" name="third" value="no" style="margin-bottom: 10px">No</label>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                  <input type="submit" name="Register" value="Register" class="btn btn-primary"/>
                </div>
              </div>
            </form>
          </form>
     
    </div>
  </div>
  
<div class="container bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="bird.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>I'm an adventurer</h3>
</div>

<!-- Third Container (Grid) -->
<div class="container bg-3 text-center">    
  <h3 class="margin">Where To Find Me?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
</footer>

</body>
</html>
