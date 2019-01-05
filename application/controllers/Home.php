<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{

    public function index()
    {
		
        $this->load->view('home');
    }
	
	 public function event()
    {
        $this->load->view('event');
    }
	 public function privacy()
    {
		
        $this->load->view('privacy');
    }
	 public function terms()
    {
		
        $this->load->view('terms');
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