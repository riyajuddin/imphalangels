<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contactsubmit extends CI_Model
{    
    public function contact($name,$email,$phone,$comments)
	{	   
	$this->load->library('email');
	$list = array('contact@imphalangels.com');
	$this->email->to($list);
    $this->email->from('contact@imphalangels.com','IMPHAL ANGELS CONTACT');
    $this->email->subject($name.' contact from  Imphal Angels website. ');
    
    $data['name']=$name;
    $data['email']=$email;
    $data['phone']=$phone;
    $data['comments']=$comments;
    $msg=$this->load->view("email/contact",$data,TRUE);
    $this->email->message($msg);
    $this->email->set_mailtype("html");
    $this->email->send();
	  
	  
	  //Set flash data 
	$this->session->set_flashdata('message', '<script> swal("Thanks!", "Your message has been sent!", "success");</script>');
	// After that you need to used redirect function instead of load view such as 
	redirect("home");
    
  }
  
  public function pitch_apply($name,$email,$phone,$contactcompanyname,$contactjobtitle,$attachpath)
  {
      $this->load->library('email');
     	$list = array('startups@imphalangels.com');
	$this->email->to($list);
      $this->email->from('contact@imphalangels.com','IMPHAL ANGELS PITCH APPLY');
      $this->email->subject('Pitch apply for '.$name);
      
      $data['name']=$name;
      $data['email']=$email;
      $data['phone']=$phone;
      $data['contactcompanyname']=$contactcompanyname;
      $data['contactjobtitle']=$contactjobtitle;

      $msg=$this->load->view("email/pitch_apply",$data,TRUE);
      
      $this->email->message($msg);
            
      $this->email->attach($attachpath);
      
      $this->email->set_mailtype("html");
      $this->email->send();
   
      
    //Set flash data 
	$this->session->set_flashdata('message', '<script> swal("Thanks!", "Your application has been sent!", "success");</script>');
	// After that you need to used redirect function instead of load view such as 
	redirect("home");
      
      
  }
  
    public function subscribe($email)
  	{	   
	$this->load->library('email');
	$list = array('contact@imphalangels.com');
	$this->email->to($list);
    $this->email->from('contact@imphalangels.com','IMPHAL ANGELS CONTACT');
    $this->email->subject($name.' subscribe for  Imphal Angels website. ');
    
    
    $msg=$email." is subscribed for Imphal Angels website.";
    $this->email->message($msg);
    $this->email->set_mailtype("html");
    $this->email->send();
	  
	  
	  //Set flash data 
	$this->session->set_flashdata('message', '<script> swal("Thanks!", "Your subscription has been sent!", "success");</script>');
	// After that you need to used redirect function instead of load view such as 
	redirect("home");
    
  }
  
  
  
    public function registration($name,$email,$phone)
  	{	   
	$this->load->library('email');
	$list = array('contact@imphalangels.com');
	$this->email->to($list);
    $this->email->from('contact@imphalangels.com','REGISTRATION FOR IMPHAL ANGELS EVENT');
    $this->email->subject($name.' is registered for  Imphal Angels event. ');
    
    
    $msg=$name." is registered for  Imphal Angels event.  Contact No.".$phone ;
    $this->email->message($msg);
    $this->email->set_mailtype("html");
    $this->email->send();
	  
	  
	  //Set flash data 
	$this->session->set_flashdata('message', '<script> swal("Thanks!", "Your registration has been sent!", "success");</script>');
	// After that you need to used redirect function instead of load view such as 
	redirect("home");
    
  }
  
  
   
    public function become_angel($name,$email,$phone,$profession,$contactinterested)
  	{	   
	$this->load->library('email');
	$list = array('membership@imphalangels.com');
	$this->email->to($list);
    $this->email->from('contact@imphalangels.com','REGISTRATION FOR BECOMING IMPHAL ANGELS ');
    $this->email->subject($name.' is registered for becoming Imphal Angels ');
    
    
    $msg=$name." is registered for becoming Imphal Angels. Contact No. :".$phone .", Profession :".$profession.", Interested in ".$contactinterested;
    $this->email->message($msg);
    $this->email->set_mailtype("html");
    $this->email->send();
	  
	  
	  //Set flash data 
	$this->session->set_flashdata('message', '<script> swal("Thanks!", "Your registration for becoming Imphal Angels has been sent!", "success");</script>');
	// After that you need to used redirect function instead of load view such as 
	redirect("home");
    
  }
   
     
}
	