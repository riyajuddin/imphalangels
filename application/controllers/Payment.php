<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('contactsubmit','data');
    }



	public function process(){



		//Request hash
			$merchantKey="ej6pDHZi";
			$amount=$this->session->userdata('amount');
			$salt="MVpQVkMo1R";
			$txnNo=$_POST['txnid'];
			$productInfo=$_POST['pinfo'];
			$name= $_POST['fname'];
			$email=$_POST['email'];
			$udf5=$_POST['udf5'];
				$hash=hash('sha512', $merchantKey.'|'.$txnNo.'|'.$amount.'|'.$productInfo.'|'.$name.'|'.$email.'|||||'.$udf5.'||||||'.$salt);
				$json=array();
				$json['success'] = $hash;
				echo json_encode($json);
		
	}

	
	public function payment_fail(){
		$this->load->view("payment/payment_failure");
	}
	
	public function payment_success(){

			$phone=$this->session->userdata('company_contact');
			$comments=$this->session->userdata('message_content');
			$email=$this->session->userdata('company_email');
			$name=$this->session->userdata('name');
			
			$this->data->reg_contact($name,$email,$phone,$comments);

  				 $data = array(
                        'payment_status'=>"SUCCESS"
                       
           			 );
                $this->db->trans_begin();
				if($this->session->userdata('type')=="student")
				{
					$this->db->where('user_id',$this->session->userdata('student_id'));
				}else
				{
					$this->db->where('company_id',$this->session->userdata('company_id'));
				}
                 
	            $this->db->update('payment', $data);
				 $this->db->trans_commit();


			
			//CONFIRMATION SMS SEND START HERE
			//Your authentication key
			$authKey ="163609AHM614wRj9595a0088";

			//Multiple mobiles numbers separated by comma
			$mobileNumber = $this->session->userdata('company_contact');

			//Sender ID,While using route4 sender id should be 6 characters long.
			$senderId ="IANGEL";

			//Your message to send, Add URL encoding here.

			$message = $this->session->userdata('message_content');

			//Define route 
			$route = "4";

			//Prepare you post parameters
			$postData = array(
			    'authkey' => $authKey,
			    'mobiles' => $mobileNumber,
			    'message' => $message,
			    'sender' => $senderId,
			    'route' => $route
			);

			//API URL
			$url="http://control.msg91.com/api/sendhttp.php";

			// init the resource
			$ch = curl_init();
			curl_setopt_array($ch, array(
			    CURLOPT_URL => $url,
			    CURLOPT_RETURNTRANSFER => true,
			    CURLOPT_POST => true,
			    CURLOPT_POSTFIELDS => $postData
			    //,CURLOPT_FOLLOWLOCATION => true
			));


			//Ignore SSL certificate verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

			//get response
			$output = curl_exec($ch);

			//Print error if any
			if(curl_errno($ch))
			{
			    echo 'error:' . curl_error($ch);
			}

			curl_close($ch);

			//CONFIRMATION SMS SEND END HERE

   



		$this->load->view("payment/payment_success");
	}

}