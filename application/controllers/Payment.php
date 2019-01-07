<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

public function checkout(){
		$rs=52;
		
		$data['amount']=$rs;
		$data['count']=1;
	
		$this->load->view('payment/payment_checkout',$data);
	}

	public function process(){

		//Request hash
			$merchantKey="ej6pDHZi";
			$amount="500";
			$salt="MVpQVkMo1R";
			$txnNo="Txn" . rand(10000,99999999);
			$productInfo="";
			$name="";
			$email="";
			$udf5="";
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