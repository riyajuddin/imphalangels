<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

public function checkout(){
		$rs=52;
		
		$data['amount']=$rs;
		$data['count']=1;
	
		$this->load->view('payment/payment_checkout',$data);
	}

	public function payment_success(){
		
		$this->session->set_userdata('status','You have successfully registered.');
		$this->load->view('payment/success');
	}
	
	public function payment_fail(){
		$this->load->view('payment/failure');
	}

}