<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Registration extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('transaction_modal', 'transaction');
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

           
            $status = array('success' => true,
                             'html'=>$this->load->view('registration/datafragment/payment_form',$datas, true),
                            'msg'=> "Page successfully generated"
            );
        }else{
              $status = array("success" => false,"msg" => $errorMSG); 
            }
        } catch (Exception $ex) {
            $status = array("success" => false,"msg" => $ex->getMessage());
        }

      echo json_encode($status); 
    }


    public function ent_form() 
    {                             
            

        $company_name = $_POST["company_name"];
        $company_contact = $_POST["company_contact"];
        $company_email = $_POST["company_email"];
        $founder_no = $_POST["founder_no"];

        $this->form_validation->set_rules('company_name', 'Company Name', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('company_contact', 'Company contact', 'trim|required|numeric|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('company_email', 'Company email', 'trim|required|valid_email');
        $this->form_validation->set_rules('founder_no', 'Co-founder no.', 'trim|required'); 

         if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('myform');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        
           
 
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