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
                        'user_amount'=>$amount,
                        'isActive'=>1
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

    	if($dinner_attend==1)
    	{$amount=500+800;
    	}else{$amount=500;}


        
       
            $data = array(
                        'company_name'=>$company_name,
                        'co_founder_no'=>$co_founder_no,
                        'company_email'=>$company_email,
                        'company_contact'=>$company_contact,                        
                        'dinner_attend'=>$dinner,
                        'startup_stall'=>$checkbox1,
                        'pitching'=>$checkbox2
            );
                $this->db->trans_begin();
            $this->db->insert('company_details', $data);
            $company_id=$this->db->insert_id();
      
            $records = count($_POST['founder_no']);
            for($i=0; $i<$records; $i++) 
            {
            $data = array(
                        'company_id'=>$company_id,
                        'user_name'=>$cofounderName[$i],
						'user_amount'=>$amount,
                        'dinner_attend'=>$dinner_attend, 
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