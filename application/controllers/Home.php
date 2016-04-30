<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'Jace Technologies';
		$data['message'] = 'Welcome to jace';
		$this->load->view('home',$data);
	}
	
	public function contact($send_message = False){
		
		if($send_message == True){
			
			//validaton rules
			$this->form_validation->set_rules('email','Email','trim|required');
			$this->form_validation->set_rules('subject','Subject','trim|required');
			$this->form_validation->set_rules('message','Message','trim|required');
		
			if($this->form_validation->run() === FALSE){
			
				$data['title'] = 'Contact Us';
				$this->load->view('contact',$data);
				
			}
			else{
				
				$headers   = array();
				$headers[] = "MIME-Version: 1.0";
				$headers[] = "Content-type: text/plain; charset=iso-8859-1";
				$headers[] = "From: ".$this->input->post('name')." <".$this->input->post('email').">";
				$headers[] = "Bcc:  If any<bcc@domain2.com>";
				$headers[] = "Reply-To: ".$this->input->post('name')." <".$this->input->post('email').">";
				$headers[] = "Subject: ".$this->input->post('subject')."";
				$headers[] = "X-Mailer: PHP/".phpversion();
				
				$recipient = 'holumynwealthinz@gmail.com';
				$subject = $this->input->post('subject');
				$message = $this->input->post('message') . "\n\n" .
							'Sender\'s name: '. $this->input->post('name') . "\n" .
							'Sender\'s email: '. $this->input->post('email');
				
				mail($recipient, $subject, $message, implode("\r\n", $headers));
				
				$data['title'] = 'Contact Us';
				$data['success'] = 'Message Sent Succesfully';
				$this->load->view('contact',$data);
			}
			
		}
		else{
			
		$data['title'] = 'Contact Us';
		$this->load->view('contact',$data);
		}
	}
	
	public function about(){
		
		$data['title'] = 'About Us';
		$this->load->view('about',$data);
	}
	
	public function profile(){
		
		$this->load->model('members');
			
			$data['title'] = 'Profile';
			$data['profile'] = $this->members->profile();
			
			$this->load->view('profile',$data);
	}
	
	public function register(){
		
		//validaton rules
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required|callback_check_if_username_exists');
		$this->form_validation->set_rules('phone','Phone','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|callback_check_if_email_exists');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[5]');
		
		if($this->form_validation->run() === FALSE){
			
			$data['title'] = 'Jace Technologies';
			$data['signup_msg'] = 'form validation prob';
			$this->load->view('home',$data);
		}else{
			$this->load->model('members');
			
			if($query = $this->members->register()){
				
				$data = array(
						
						'user_id' => $this->input->post('username')
						 ,'is_logged_in' => True
				);
				$this->session->set_userdata($data);
	           redirect('home/profile');
			}else{
				$data['title'] = 'Jace Technologies';
				$data['signup_msg'] = 'db query prob';
				$this->load->view('home',$data);
				
			}
			
		}
	  
	}
	
	public function check_if_email_exists($requested_email){
		
		$this->load->model('members');
		
		$email_available = $this->members->check_if_email_exists($requested_email);
		
		if($email_available){
			return TRUE;
			}else{
				return FALSE;
				}
		}
		
	public function check_if_username_exists($requested_username){
		
		$this->load->model('members');
		
		$username_available = $this->members->check_if_username_exists($requested_username);
		
		if($username_available){
			return TRUE;
			}else{
				return FALSE;
				}
		}
	
	public function login(){
		
		//validaton rules
		$this->form_validation->set_rules('logintype','Email or Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		
		if($this->form_validation->run() === FALSE){
			
			$data['title'] = 'Jace Technologies';
			$data['login_msg'] = 'Form validation error';
			$this->load->view('home',$data);
		
		}else{
			
			$this->load->model('members');
			if($query = $this->members->login()){
				
				$data = array(
						
						'user_id' => $this->input->post('logintype')
						 ,'is_logged_in' => True
				);
				$this->session->set_userdata($data);
	           redirect('home/profile');
			   			
				}else{
		
					$data['title'] = 'Jace Technologies';
					$data['login_msg'] = 'Wrong Username/Email and Password Combination';
					$this->load->view('home',$data);
					}
			}
	}
	
	public function update($field){
		
		//validaton rules
		if($field == 'password'){
			
			$this->form_validation->set_rules('password','Password','trim|required|min_length[5]');
			$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[password]');
		
		}elseif($field == 'email'){
			
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		
		}else{
			
		$this->form_validation->set_rules(''.$field.'',''.ucfirst($field).'','trim|required');
		}
		
		if($this->form_validation->run() === FALSE){
		
		$this->session->set_flashdata('message', 'Update not successfully!');	
		redirect('home/profile');
			
			}else{
			
			$this->load->model('members');
			
			$query = $this->members->update_profile($field);
			
			if($query){
				
				$this->session->set_flashdata('message', 'Updated successfully!');
	          redirect('home/profile');
			   			
				}else{
		
		$this->session->set_flashdata('message', 'Update not successfully!');	
		redirect('home/profile');
					}
			
			}
		}
		
	public function logout(){
		
		$this->session->unset_userdata('user_id');
		
		redirect(base_url());
	}
	
}
