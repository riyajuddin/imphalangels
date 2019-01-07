<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

public function checkout(){
		$rs=52;
		
		$data['amount']=$rs;
		$data['count']=1;
	
		$this->load->view('payment/payment_checkout',$data);
	}

	public function process(){
echo "hello world";
		//Request hash
			$merchantKey="ej6pDHZi";
			$amount="4300";
			$salt="MVpQVkMo1R";
			$txnNo="df79cfccb85ff624b7b606f10800ad26283c6e5e";
			$productInfo="imphalangels";
			$name="IMPHAL";
			$email="mdriya93@gmail.com ";
			$udf5="enterprenure_reg";
				$hash=hash('sha512', $merchantKey.'|'.$txnNo.'|'.$amount.'|'.$productInfo.'|'.$name.'|'.$email.'|||||'.$udf5.'||||||'.$salt);
				$json=array();
				$json['success'] = $hash;
				echo json_encode($json);
		
	}
	public function payment_success(){
		
		$this->session->set_userdata('status','You have successfully registered.');
		$this->load->view('payment/success');
	}
	
	public function payment_fail(){
		$this->load->view('payment/failure');
	}
	public function response(){
		$this->load->view("registration/datafragment/payment_response");
	}

}