                            <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                         
<?php
echo $this->session->userdata('user_id');
echo $this->session->userdata('user_amount');
echo $this->session->userdata('user_type');







//

// Merchant key here as provided by Payu
$MERCHANT_KEY = "ej6pDHZi";
 
// Merchant Salt as provided by Payu
$SALT = "MVpQVkMo1R";
 
// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://test.payu.in";
 
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

?>
                           <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />


                                <input type="hidden" name="service_provider" value="payu_paisa" size="64" />

                                    <div class="form-group">
                                        <label>University/College</label>
                                        <input type="text" class="form-control name" readonly="" id="college" value="<?php echo $college;?>" maxlength="20"  required="">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="name">Name</label>
                        <input type="text" class="form-control name" readonly="" id="name" value="<?php echo $name;?>"  required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control number" readonly="" id="contact"  value="<?php echo $contact;?>" maxlength="10"  required="">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control email" readonly="" id="email" value="<?php echo $email;?>"  maxlength="50"  required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                            *Access to all sessions Include light lunch
                                        <br>*You are allowed to attend dinner and net
                                        <br>*Limited to only 1 person

                                    </p>
                                </div>

                               

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-danger btn-lg btn-block" data-dismiss="modal" id="payment_canceled">Cancel</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" id="PayButton" class="btn btn-success btn-lg btn-block">Pay Rs.<?php echo $this->session->userdata('user_amount');?> </button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    <!-- /form card cc payment -->