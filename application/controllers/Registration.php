<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Registration extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('transaction_modal', 'transaction');
        $this->load->helper ( 'security' );
    }

    public function index()
    {	
       $this->load->view ( 'registration/home');
    }
	
public function payment_checkout()
{
$this->load->view ( 'registration/payment_checkout');
}

 public function student_form() 
    {                             
      // $_POST = json_decode(trim(file_get_contents('php://input')), true);
      $errorMSG ='';
      // print_r($_POST["name"]); die();   
    try {
        if (empty($_POST["name"])) {
            $errorMSG = "Name is required";
        }
        elseif (empty($_POST["college"])) {
            $errorMSG = "University/College name is required";
        }
        elseif (empty($_POST["email"])) {
            $errorMSG = "Email is required";
        } 
        elseif (empty($_POST["contact"])) {
            $errorMSG = "Mobile number is required !";
        } 
           
   

        $status = array("success"=>false,"msg"=>$errorMSG);
        if(empty($errorMSG)){

            $name = $this->input->post('name', TRUE); 
            $college =$this->input->post('college', TRUE); 
            $email = $this->input->post('email', TRUE); 
            $contact = $this->input->post('contact', TRUE); 
            $dinner_attend = $this->input->post('dinner_attend', TRUE); 
            if($dinner_attend=='')
            {

              $dinner_attend="0";
            }
            $amount = "500"; 
            $type="stuent";

            $datas['name'] = $name;
            $datas['college'] = $college;
            $datas['email'] = $email;
            $datas['contact'] = $contact;
            $datas['type']='stuent';
            $datas['dinner_attend']=$dinner_attend;
            $datas['amount']="800";

            $result = $this->transaction->student_form_add($name,$college,$email,$contact,$dinner_attend,$type,$amount); 

           
           
            );
        }else{
              $status = array("success" => false,"msg" => $errorMSG); 
            }
        } catch (Exception $ex) {
            $status = array("success" => false,"msg" => $ex->getMessage());
        }

      echo json_encode($status); 
    }

    private function payment_checkout(){
        
// Merchant key here as provided by Payu
$MERCHANT_KEY = "ej6pDHZi";

// Merchant Salt as provided by Payu
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
//$sql="INSERT INTO `payment`(`amount`, `status`, `tranc_id`, `ref_id`)VALUES ('$amount','INCOMPLETE','$txnid','$hashKey')";
  
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

    }

    public function ent_form() 
    {   
        
        $errorMSG ='';
        
        try {
            if (empty($_POST["company_name"])) {
                $errorMSG = "Company name is required";
            }
            elseif (empty($_POST["company_contact"])) {
                $errorMSG = "Company contact is required";
            }
            elseif (empty($_POST["company_email"])) {
                $errorMSG = "Company email is required";
            }
            elseif (empty($_POST["cofounderName"])) {
                $errorMSG = "Co-founder name is required";
            }
           
			
            //***********END OF MULTIPLE FILE UPLOAD*****************************************
            
            
            $status = array("success"=>false,"msg"=>$errorMSG);
            if(empty($errorMSG)){
                $company_name = trim(xss_clean($this->input->post('company_name')));
                $company_contact = trim(xss_clean($this->input->post('company_contact')));                
                $company_email = trim(xss_clean($this->input->post('company_email')));
                $cofounderName = trim(xss_clean(serialize($this->input->post('cofounderName'))));
                $founder_no = trim(xss_clean(serialize($this->input->post('founder_no'))));
                
                $dinner = trim(xss_clean(serialize($this->input->post('dinner'))));
                $checkbox1 = trim(xss_clean($this->input->post('checkbox1')));
                $checkbox2 = trim(xss_clean($this->input->post('checkbox2')));
             
         

         if($checkbox2=="on"){     // **********************MULTIPLE FILE UPLOAD START *****************************************
          
            $file_path = "./uploads/file/";
            $uploadFiles = array();
            $is_file_error = FALSE;
            
            if (isset($_FILES['files'])) {
                if (!is_dir('uploads/file')) {
                    mkdir('./uploads/file/', 0777, TRUE);
                }
                
                // Count total files
                $countfiles = count($_FILES['files']['name']);
                
                // Looping all files
                for($i=0;$i<$countfiles;$i++){
                    
                    if(!empty($_FILES['files']['name'][$i])){
                        
                        // Define new $_FILES array - $_FILES['file']
                        $new_name = time().$_FILES['files']['name'][$i];
                        
                        $_FILES['file']['name'] = $new_name;
                        $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                        
                        // Set preference
                        $config['upload_path'] = $file_path;
                        $config['allowed_types'] = 'jpg|jpeg|png|gif|zip|rar|avi|flv|wmv|mp3|wav|mp4|pdf|doc|docx|txt|xlsx|';
                        $config['max_size'] = '100000'; // max_size in kb
                        $config['file_name'] = $new_name;
                        
                        // Load upload library
                        $this->load->library('upload',$config);
                        
                        // File upload
                        if($this->upload->do_upload('file')){
                            // Get data about the file
                            $uploadFiles[$i] = $this->upload->data();
                        }
                        else {
                            $is_file_error = TRUE;
                        }
                    }
                    
                }
            }
            
            // There were errors, we have to delete the uploaded files
            if ($is_file_error) {
                for ($i = 0; $i < count($uploadFiles); $i++) {
                    $file = $file_path . $uploadFiles[$i]['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
                $errorMSG = "File upload Error !!! Please try again later ...";
            }
        }else
        {
            $uploadFiles=" ";
        }


                $result = $this->transaction->AddRegEntrepeneur($company_name,$company_contact,$company_email,$cofounderName,$dinner,$checkbox1,$checkbox2,$uploadFiles,$founder_no);

                if($result['code']){
                    $status = array('success' => true,
                        'msg'=> $result['message']);
                    
                }else{
                    $status = array("success" => false,"msg" => $result['message']);
                }
            }
        } catch (Exception $ex) {
            $status = array("success" => false,"msg" => $ex->getMessage());
        }
        
        echo json_encode($status) ;
    }




	
 public function send_email(){
    	$this->load->library('email');
    	
		/*
		email: contact@skoolsync.com
		Password: Skoolcontact@2018#sync

		*/
		
    	//SMTP & mail configuration
    	$config = array(
    			'protocol'  => 'smtp',
    			'smtp_host' => 'smtp.gmail.com',
    			'smtp_port' => 587,
    			'smtp_user' => 'contact@skoolsync.com',
    			'smtp_pass' => 'Skoolcontact@2018#sync',
    			'mailtype'  => 'html',
    			'charset'   => 'utf-8'
    	);
    	$this->email->initialize($config);
    	$this->email->set_mailtype("html");
    	$this->email->set_newline("\r\n");
    	
    	//Email content
    			$from = $_POST['email']; // this is the sender's Email address
				$subject =$_POST['subject'];
				$message = $_POST['message'];
		
    	$this->email->to('contact@skoolsync.com');
    	$this->email->from($from,'skoolsync website');
    	$this->email->subject($subject);
    	$this->email->message($message);
    	
    	//Send email
    	$this->email->send();
				
				$msg_status="
						<!-- Modal -->
						  <div class='modal fade new_modal ' id='myModal' role='dialog'>
							<div class='modal-dialog modal-sm new_small_modal' id='small_modal'>
							  <div class='modal-content'>
								<div class='modal-body'>
								 
								  <div class='response-message'>
												<div class='section-heading'>
												   <i class='fa-thumbs-o-up font-lg mb-2'></i>
												   <h2 class='bold'>Thank you!!!</h2>
												   <p class='response'>Your message has been send, we will contact you as soon as possible.</p>
												</div>
											 </div>
								 
								</div>
								<div class='modal-footer'>
								  <button type='button' class='btn btn-accent btn-rounded' data-dismiss='modal' onclick='hide_modal()' >Close</button>
								</div>
							  </div>
							</div>
						  </div>
					";
		// MESSAGE SECTION
		$this->session->set_flashdata('msg_status', $msg_status);

		//redirect to some function
		redirect("home");
    	
    }
	 public function send_email_normal()
	{
				$to = "mdriya93@gmail.com"; // this is your Email address
				$from = $_POST['email']; // this is the sender's Email address
				$subject =$_POST['subject'];
				$message = $_POST['message'];
				
				$headers = "From:" . $from;
				
				mail($to,$subject,$message,$headers);
							
						
				 $msg_status="
						<!-- Modal -->
						  <div class='modal fade new_modal ' id='myModal' role='dialog'>
							<div class='modal-dialog modal-sm new_small_modal' id='small_modal'>
							  <div class='modal-content'>
								<div class='modal-body'>
								 
								  <div class='response-message'>
												<div class='section-heading'>
												   <i class='fa-thumbs-o-up font-lg mb-2'></i>
												   <h2 class='bold'>Thank you!!!</h2>
												   <p class='response'>Your message has been send, we will contact you as soon as possible.</p>
												</div>
											 </div>
								 
								</div>
								<div class='modal-footer'>
								  <button type='button' class='btn btn-accent btn-rounded' data-dismiss='modal' onclick='hide_modal()' >Close</button>
								</div>
							  </div>
							</div>
						  </div>
					";
		// MESSAGE SECTION
		$this->session->set_flashdata('msg_status', $msg_status);
							redirect("home");
		
		
	}
	
	
	
   
   }