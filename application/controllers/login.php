<?php
class Login extends CI_Controller {
	function index()
	{
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			redirect('site');
		}
		else 
		{
			$data['main_content'] = 'login_form';
			$data['invalid_login'] = false;
			$this->load->view('includes/template_login',$data);	
		}		
	}
	function validate_credentials()
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query)
		{
			$data	= array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true			
			);
			$this->session->set_userdata($data);
			redirect('site');
		}	
		else // incorrect username or password
		{
			$data['main_content'] = 'login_form';
			$data['invalid_login'] = true;
			$this->load->view('includes/template_login',$data);
		}
	}
	function signup ()
	{
		$data['main_content']= 'signup_form';
		$data['invalid_login'] = false;
		$this->load->view('includes/template_login',$data);	
	}
	function new_member()
	{
			$this->load->model('membership_model');
			if ($query = $this->membership_model->new_member())	
			{
				$data['main_content']= 'signup_successful';
				$data['invalid_login'] = false;
				$this->load->view('includes/template_login',$data);
			}
			else
			{
				$data['main_content']= 'signup_form';
				$data['invalid_login'] = false;
				$this->load->view('includes/template_login',$data);	
			}
	}
}
?>