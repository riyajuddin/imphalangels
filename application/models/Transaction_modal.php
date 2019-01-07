<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Transaction_modal extends CI_Model{


  function student_form_add($name,$college,$email,$contact,$dinner_attend,$type,$amount)
    {  

    	if($dinner_attend==1)
    	{$amount=500+800;
    	}else{$amount=500;}

        $data = array(
                        'student_name'=>$name,
                        'college_name'=>$college,
						'student_email'=>$email,
                        'student_contact'=>$contact,                        
                        'dinner_attend'=>$dinner_attend,
                        'user_amount'=>$amount
                    );
            $this->db->trans_begin();
            $this->db->insert('student_user',$data);

            $student_id=$this->db->insert_id();


            if($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();                    
                $msg = "Fail to save !";
                $code = false;
            }
            else
            {
                $this->db->trans_commit();

 				$this->session->set_userdata('user_id', $student_id);
 				 $this->session->set_userdata('user_amount', $amount);
 				 $this->session->set_userdata('user_type', $type);

                 $msg = "Save sucessfull!";
                $code = true;
            }
        return array('code' => $code, 'message' =>  $msg);
    }
	
	
	
function AddRegEntrepeneur($company_name,$company_contact,$company_email,$cofounderName,$dinner,$checkbox1,$checkbox2,$uploadFiles,$founder_no)
    {  
     $cofounderName=unserialize($cofounderName);
     $dinner_attend=sizeof(unserialize($dinner));


     if($checkbox1=="on")
     {
      $checkbox1='1';  
     }else
     {
        $checkbox1='0';
     }

     if($checkbox2=="on")
     {
      $checkbox2='1';  
     }else
     {
        $checkbox2='0';
     }
     

        if($dinner_attend > 0)
        {   	
             $diner_amount=$dinner_attend*800;
        }else
        {
             $diner_amount=0;
        }
        if($checkbox1=="1")
        {
            $startup_stall=3000;
        }else
        {
            $startup_stall=0;
        }

        $amount=$diner_amount+$startup_stall+500;

        if($uploadFiles==" ")
        {
            $file_name="";
            $file_ext="";
            $file_size="";
        }
        else{
            $file_name=$uploadFiles[0]['file_name'];
            $file_ext=$uploadFiles[0]['file_ext'];
            $file_size=$uploadFiles[0]['file_size'];
        }
        

       
            $data = array(
                        'company_name'=>$company_name,
                        'co_founder_no'=>$founder_no,
                        'company_email'=>$company_email,
                        'company_contact'=>$company_contact,                        
                        'dinner_attend'=>$dinner_attend,
                        'user_amount'=>$amount,
                        'startup_stall'=>$checkbox1,
                        'file_name'=>$file_name,
                        'file_ext'=>$file_ext,
                        'file_size'=>$file_size,
                        'pitching'=>$checkbox2
            );
                $this->db->trans_begin();
            $this->db->insert('company_details', $data);
            $company_id=$this->db->insert_id();
      
          
         
            foreach($cofounderName as $value) 
            {
            $data = array(
                        'company_id'=>$company_id,
                        'user_name'=>$value,
						
                    );
           
            $this->db->insert('company_user_details',$data);

            }


            if($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();                    
                $msg = "Fail to save !";
                $code = false;
            }
            else
            {
                $this->db->trans_commit();

 				$this->session->set_userdata('company_id', $company_id);
 				 $this->session->set_userdata('user_amount', $amount);
 				 $this->session->set_userdata('user_type', "ent");

                 $msg = "Save sucessfull!";
                $code = true;
            }
        return array('code' => $code, 'message' =>  $msg);
    }

}      