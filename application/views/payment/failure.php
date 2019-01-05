<?php $this->load->view('global_header.php');?>
<style>
.card-base > .card-icon {
        text-align: center;
        position: relative;
    }

.imagecard { 
    z-index: 2;
    display: block;
    positioN: relative;
    width: 88px;
    height: 88px;
    border-radius: 50%;
    border: 5px solid white;
    box-shadow: 1px 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin: 0 auto;
    color: white;
}
.card-base > .card-icon > .card-data {
    min-height: 250px !important;
    margin-top: -24px;
    background: ghostwhite;
    border: 1px solid #e0e0e0;
    padding: 40px 0 10px 0;
     box-shadow: 1px 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    min-height: 215px;
    }
    #widgetCardIcon {
        background: #0E703F !important;
        font-size: 28px;
        line-height: 78px;
    }
    </style>

<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="MVpQVkMo1R";
//$salt="bcdLBASSRY";


$sql="UPDATE `payment` SET

`status`='FAILED'
WHERE tranc_id='$txnid'";
$query=$this->db->query($sql);
If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   }
	   else {
?>
	   	<html>
	   	<body>
	   	
	   	<div class="container">
<div class = "row">
    <div class = "col-md-6 col-md-offset-3">
          	   	<div class="card-base">
<div class="card-icon"><a href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><span class="glyphicon glyphicon-remove"></span></a>
<div class="card-data widgetCardData">
<h2 class="box-title" style="color: #0E703F;">Payment Failed!</h2>
<p style="font-family: arial" class="card-block text-center">Your transaction id for this transaction is <?php echo $txnid;?></p>
<a href="<?php echo base_url();?>home/ticket" title="Style Builder" class="anchor btn btn-default" style="background: #000; border: #bb7824; color: whitesmoke;"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Try Again</a></div>
</div>
</div>
</div>
</div>
	
</div>

						<div class="container">
						<div class="row">
						<div class="col-md-12">						
						<div class="alert alert-success" style="text-align:center; font-size:12px; border-top:1px solid #277D0E; border-bottom:1px solid #277D0E; background-color: #fff; color:#ff5722">For any queries call us at <b>+91-9402459468</b>&nbsp;&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp; mail us at <b>complaint@nerocaimphalfc.com</b></div>
						</div>
						</div>
						</div>
	   	
	   
	   		</body>
	   	</html>
          <?php
		 } 
?>
