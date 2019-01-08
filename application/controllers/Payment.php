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
			$amount=$_POST['amount'];
			$salt="MVpQVkMo1R";
			$txnNo=$_POST['txnid'];
			$productInfo=$_POST['pinfo'];
			$name= ""$_POST['fname']"";
			$email=$_POST['email'];
			$udf5=$_POST['udf5'];
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