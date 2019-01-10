


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PayUmoney BOLT PHP7 Kit</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- this meta viewport is required for BOLT //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
<!-- BOLT Sandbox/test //-->
<!--script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script //-->
<!-- BOLT Production/Live //-->

<script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<style type="text/css">
	.main {
		margin-left:30px;
		font-family:Verdana, Geneva, sans-serif, serif;
	}
	.text {
		float:left;
		width:180px;
	}
	.dv {
		margin-bottom:5px;
	}
</style>
<body>
<div class="main">
	 <div class="col-md-6 col-md-offset-3">
	<div>
    	<img width="200px" style="margin-top: 20px;"src="<?php echo base_url();?>assets/registration_assets/images/money_logo.jpg" />
    </div>
    <div>
    	<h3>Payment Checkout</h3>
    	<h5>Registratioin fee payment for Northeast Startup Summit by Imphal Angels 2019</h5>
    </div>
   
	<form action="#" id="payment_form">
    <input type="hidden" id="udf5" name="udf5" value="<?php echo $this->session->userdata('udf5');?>" />
    <input type="hidden" id="surl" name="surl" value="<?php echo base_url();?>payment/payment_success" />
     <input type="hidden" id="furl" name="furl" value="<?php echo base_url();?>payment/payment_fail" />
   <div class="dv" hidden>
    <span class="text"><label>Merchant Key:</label></span>
    <span class="form-group"><input type="text" id="key" name="key" class="form-control" placeholder="Merchant Key" value="<?php echo $this->session->userdata('merchantKey'); ?>" /></span>
    </div>
    
    <div class="dv" hidden>
    <span class="text"><label>Merchant Salt:</label></span>
    <span class="form-group"><input type="text" id="salt" name="salt" class="form-control" placeholder="Merchant Salt" value="<?php echo $this->session->userdata('salt'); ?>" /></span>
    </div>
    
    <div class="dv"hidden>
    <span class="text"><label>Transaction/Order ID:</label></span>
    <span class="form-group"><input type="text" id="txnid" name="txnid" class="form-control" placeholder="Transaction ID" value="<?php echo $this->session->userdata('txnNo'); ?>" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Amount:</label></span>
    <span class="form-group"><input type="text" id="amount" class="form-control" name="amount" placeholder="Amount" value="<?php echo $this->session->userdata('amount'); ?>" /></span>    
    </div>
    
    <div class="dv"hidden>
    <span class="text"><label>Product Info:</label></span>
    <span class="form-group"><input type="text" id="pinfo" class="form-control" name="pinfo" placeholder="Product Info" value="<?php echo $this->session->userdata('productInfo'); ?>" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Name:</label></span>
    <span class="form-group"><input type="text" id="fname" class="form-control" name="fname" placeholder="Name" value="<?php echo $this->session->userdata('name'); ?>" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Email ID:</label></span>
    <span class="form-group"><input type="text" id="email" class="form-control" name="email" placeholder="Email ID" value="<?php echo $this->session->userdata('company_email'); ?> " /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Mobile/Cell Number:</label></span>
    <span class="form-group"><input type="text" id="mobile" class="form-control" name="mobile" placeholder="Mobile/Cell Number" value="<?php echo $this->session->userdata('company_contact'); ?>" /></span>
    </div>
    
    <div class="dv"hidden>
    <span class="text"><label>Hash:</label></span>
    <span class="form-group"><input type="text" id="hash" class="form-control"   name="hash" placeholder="Hash" value="<?php  //$this->session->userdata('hash');?>" /></span>
    </div>
    
    
    <br>

    <div class="col-md-3 col-md-offset-3" align="center">
    <a href="<?php echo base_url()?>registration" style="width: 100%; margin-bottom: 10px;" class="btn btn-danger">Cancel</a>
    	
    </div>
    <div class="col-md-3"><input type="submit" value="Pay <?php echo "Rs.".$this->session->userdata('amount'); ?>" class="form-control btn btn-success"  onclick="launchBOLT(); return false;" /></div>
    <br><br>
	</form>
	</div>
</div>
<script type="text/javascript"><!--
function launchBOLT()
{
	bolt.launch({
	  key: $('#key').val(),
	txnid: $('#txnid').val(), 
	hash: $('#hash').val(),
	amount: $('#amount').val(),
	firstname: $('#fname').val(),
	email: $('#email').val(),
	phone: $('#mobile').val(),
	productinfo: $('#pinfo').val(),
	udf5: $('#udf5').val(),
	surl : $('#surl').val(),
	furl: $('#furl').val(),
	mode: 'dropout'	
},{ responseHandler: function(BOLT){
	console.log( BOLT.response.txnStatus );		
	if(BOLT.response.txnStatus != 'CANCEL')
	{
		//Salt is passd here for demo purpose only. For practical use keep salt at server side only.
		var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +
		'<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
		'<input type=\"hidden\" name=\"salt\" value=\"'+BOLT.response.salt+'\" />' +
		'<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
		'<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
		'<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
		'<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
		'<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
		'<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
		'<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
		'<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
		'<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
		'</form>';
		var form = jQuery(fr);
		jQuery('body').append(form);								
		form.submit();
	}
},
	catchException: function(BOLT){
 		alert( BOLT.message );
	}
});
}



function hash_val(){
		  
		   var dataString = new FormData($('#payment_form')[0]);
		         $.ajax({
		          type: "post",
		          url: "<?php echo site_url() . 'index.php/payment/process'; ?>",
		          data: dataString,
		          processData: false,
		          contentType: false,
		          dataType: 'json',
		          success: function(response){   
		          try{       
		               if (response.success)
		               {

		               	$("#hash").val(response.success);

		                    	                    
		               } else
		               { 
		                   alert(response.msg);
		               }
		          }catch(e) {  
		              alert(e);
		          }  
		          },
		          error: function(){      
		              alert('Error while request..');
		          }
		         });
		     }
		
		hash_val();
//--
</script>	



</body>
</html>
	
