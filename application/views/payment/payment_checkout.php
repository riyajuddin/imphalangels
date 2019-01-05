 <!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>NEROCA FC</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url();?>nero/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
         <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url();?>nero/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>nero/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>nero/css/webslidemenu.css" />

        <!-- font awesome -->
<link rel="stylesheet" href="<?php echo base_url();?>nero/font-awesome/css/font-awesome.min.css" />

<!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url();?>nero/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>nero/assets/css/mbr-additional.css" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>



 <header id="header" class="third-version">
       <div class="container-fluid">
      <div class="header-logo">
      <a href="<?php echo base_url();?>">
        <h4 style="text-align: center;color: #fff;">NEROCA FC</h4>
	</a>
      <!--    
        <div class="triangle-left"></div>
        <div class="triangle-right"></div>-->
      </div>
    </div>
    </header>
        
   
  
  <?php
   $type=$this->session->userdata("TYPE");
   $qty=$this->session->userdata("QTY");
   $Fee=0;
   IF($type=="VIP"){
       $Fee=9;
   }elseif("NOM"){
       $Fee=2;
   }
   
   
$this->session->set_userdata('pay',0);


// Merchant key here as provided by Payu
//$MERCHANT_KEY = "q9THDYq3";
$MERCHANT_KEY = "ej6pDHZi";
// Merchant Salt as provided by Payu
//$SALT = "bcdLBASSRY";
$SALT = "MVpQVkMo1R";
// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
  $hashKey=generateRandomString(50);
//$sql="INSERT INTO `payment`(`amount`, `status`, `tranc_id`, `ref_id`)VALUES ('$amount+2','INCOMPLETE','$txnid','$hashKey')";
  
 //$query=$this->db->query($sql);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}

function generateRandomString($length = 20) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyz981u9unakhkkjhJHJGYFUFGKUGWW';
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}


?>
<html>
  <head>
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
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
 <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
  </head>
  <body onload="submitPayuForm()">
    

    
    <div class="container" style="padding-top: 200px; padding-bottom: 70px;">
    <div class="col-md-10 col-md-offset-1">
    
    
    
  <div id="Checkout" class="inline">
      <h1>Pay Invoice</h1>
      <div class="card-row">
         <img src="https://www.payumoney.com//media/images/payby_payumoney/buttons/213.png" />
      </div>
          <br/>
 
    
        <form action="<?php echo $action; ?>" method="post" name="payuForm">
       
          <div class="form-group">
              <label for="PaymentAmount">Payment amount</label>
              <div class="amount-placeholder">
              <?php if($this->session->userdata("TYPE")=="VIP"){
              $type="VIP Ticket";
              }else{
              $type="Gallery Ticket";
              }?>
                  <span>Rs.</span>
                  <span><?php echo $amount+($Fee*$qty);?>.00 (<?php echo $count; ?> <?php echo $type; ?> - Rs.<?php echo $amount; ?>)+(Internet Handling Fee - Rs.<?php echo ($Fee*$qty) ?>)</span>
              </div>
          </div>
             <?php if($formError) { ?>
      <span style="color:red">Please fill all mandatory fields.</span>   
    <?php } ?>
          <input type="hidden" name="amount" value="<?php echo $amount+($Fee*$qty);?>"/>
           <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
          <div class="form-group">
              <label for="firstname">Name<span style="color:red" >*</span></label>
              <input name="firstname" class="form-control" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" />
            
          </div>
          <div class="form-group">
              <label for="email">Email<span style="color:red" >*</span></label>
              <input class="form-control" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" />
          </div>
          <div class="form-group">
              <label for="phone">Phone<span style="color:red" >*</span></label>
              <input id="phone" class="form-control" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" />
          </div>
         <input type="hidden" name="productinfo" value="<?php echo $count;?>" />
         <input type="hidden"  name="surl" value="<?php echo base_url();?>payment/payment_success" size="64" />
         <input type="hidden" name="furl" value="<?php echo base_url();?>payment/payment_fail" size="64" />
         <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
    		<?php if(!$hash) { ?>
           <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">
              <span class="align-middle">Pay Rs.<?php echo $amount+($Fee*$qty);?>.00</span>
          </button>
          <?php } ?>
          
      </form>
  </div>
  
  
  
  </div>
  
</div>



<!-- Start Footer -->
  <footer id="footer">
  

    <!-- Start Copyrights -->
    <div class="copyrights clearfix text-center">
      <p ><span class="pull-left"> &copy; Copyright 2017. All Rights Reserved,</span><span class="pull-right"> Website Developed & Maintained By <a href="http://www.mobimp.com/"> MOBIMP Services Pvt. Ltd.</a></span></p>
    </div>
    <!-- End Copyrights -->

  </footer>
  <!-- End Footer -->
  
  <!-- Start Back-to-Top -->
  <a href="#" id="back-to-top">
   <i class="fa fa-futbol-o" aria-hidden="true"></i>
  </a>
  <!-- End Back-to-Top -->



  </body>
</html>
