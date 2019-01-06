<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contactform extends CI_Controller
{    
        function __construct(){
        parent::__construct();
        $this->load->model('contactsubmit','data');
    }

    
    public function contact()
    {
        $name=trim($this->input->post('contactName',true));
		$name=substr($name,0,30);
        $email=trim($this->input->post('contactEmail',true));
        $phone=trim($this->input->post('contactSubject',true));
		$phone=substr($phone,0,10);				
        $comments=trim($this->input->post('contactMessage',true));
       
        $this->data->contact($name,$email,$phone,$comments);
    } 
    
    public function subscribe()
    {
        $email=trim($this->input->post('email',true));
        $this->data->subscribe($email);
    } 
	
	   public function registration()
    {
        $name=trim($this->input->post('contactName',true));
		$name=substr($name,0,30);
        $email=trim($this->input->post('contactEmail',true));
        $phone=trim($this->input->post('contactPhone',true));
		$phone=substr($phone,0,10);	
		
        $this->data->registration($name,$email,$phone);
    } 
       public function become_angel()
    {
        $name=trim($this->input->post('contactName',true));
		$name=substr($name,0,30);
        $email=trim($this->input->post('contactEmail',true));
        $phone=trim($this->input->post('contactPhone',true));
		$phone=substr($phone,0,10);				
        $profession=trim($this->input->post('contactProfession',true));
        $contactinterested=trim($this->input->post('$contactInterested',true));
     
       
        $this->data->become_angel($name,$email,$phone,$profession,$contactinterested);
    } 
	
	
    public function pitch_apply()
    {    
        $name=trim($this->input->post('contactName',true));
		$name=substr($name,0,30);
        $contactcompanyname=trim($this->input->post('contactCompanyName',true));
        $contactjobtitle=trim($this->input->post('contactJobTitle',true));
	    $phone=trim($this->input->post('contactPhone',true));
		$phone=substr($phone,0,10);	
		$email=trim($this->input->post('contactEmail',true));
		
		
		$contactFileUpload=$_FILES["contactFileUpload"];
        $fileName=$_FILES["contactFileUpload"]["name"];
        $output_dir = "assets/uploadedfiles/"; 
        move_uploaded_file($_FILES["contactFileUpload"]["tmp_name"],$output_dir.$fileName);
        $attachpath=$output_dir.$fileName;
	
	
        $this->data->pitch_apply($name,$email,$phone,$contactcompanyname,$contactjobtitle,$attachpath);
        
        
    }
    

}
	