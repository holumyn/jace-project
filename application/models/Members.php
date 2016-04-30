<?php
class Members extends CI_Model{ 

  public function register(){
	  
	  $new_user_data = array(
	    'name' => $this->input->post('name'),
		'username' => $this->input->post('username'),
		'phone' => $this->input->post('phone'),
		'email' => $this->input->post('email'),
		'password' => md5(sha1($this->input->post('password'))),
		'date' => date("Y-m-d H:i:s")
		);
	  
	  $result = $this->db->insert('users', $new_user_data);
	  return $result;
	  
	  }
	  
	public function login(){
	   
	   $where = "email='".$this->input->post('logintype')."' OR username='".$this->input->post('logintype')."' AND password='".md5(sha1($this->input->post('password')))."'";
	   $this->db->where($where);
	   
	   $query = $this->db->get('users');
	  
		if($query->num_rows() == 1){
		  return True;
		}
	}
	
	public function profile(){
	  $where = "username = '".$this->session->user_id."' OR email = '".$this->session->user_id."'";
	  $this->db->where($where);
	  $query = $this->db->get('users');
	            return $query->row();
	  }
	  
	public function update_profile($field){
	  
	   if($field == 'password'){
		   
		 $this->db->where('username',$this->session->user_id);
	   $query = $this->db->update('users',array($field => md5(sha1($this->input->post($field)))));
	   }else{
	   $where = "username = '".$this->session->user_id."' OR email = '".$this->session->user_id."'";
	   $this->db->where($where);
	   $query = $this->db->update('users',array($field => $this->input->post($field)));
	   }
	  if($query){
		  return True;
		  }
	  }
	  
	public function check_if_username_exists($username){
		
		$this->db->where('username',$username);
		$result = $this->db->get('users');
		
		if($result->num_rows() > 0){
			return FALSE; //Username exists
		}else{
			return TRUE;
		}
	}
	
	public function check_if_email_exists($email){
		
		$this->db->where('email',$email);
		$result = $this->db->get('users');
		
		if($result->num_rows() > 0){
			return FALSE; //Email exists
		}else{
			return TRUE;
		}
	}
}
?>