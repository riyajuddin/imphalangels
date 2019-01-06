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
	
	
	
  function AddRegEntrepeneur($company_name,$company_contact,$company_email,$cofounderName,$dinner)
    {  

    	if($dinner_attend==1)
    	{$amount=500+800;
    	}else{$amount=500;}

        $data = array(
                        'student_name'=>$company_name,
                        'college_name'=>$company_contact,
						'student_email'=>$company_email,
                        'student_contact'=>$cofounderName,                        
                        'dinner_attend'=>$dinner,
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

}      