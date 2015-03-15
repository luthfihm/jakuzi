<?php

class Site extends CI_Controller {	
	function index()
	{
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$data['main_content'] = 'homepage';
			$this->load->view('includes/main_template',$data);
		}
		else 
		{
			redirect('login');	
		}
	}
	function subject(){
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$data['main_content'] = 'show_subject';
			$this->load->view('includes/main_template',$data);
		}
		else 
		{
			redirect('login');	
		}
	}
	function add_subject(){
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$data['main_content'] = 'add_subject';
			$this->load->view('includes/main_template',$data);	
		}
		else 
		{
			redirect('login');	
		}
	}
	function save_subject(){
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$this->load->model('subject_model');
			$this->load->model('schedule_model');
			$query1=$this->subject_model->add_subject();
			$query2=$this->schedule_model->save_schedule();
			if($query1&&$query2)
			{
				redirect('site/subject');	
			}
		}
		else 
		{
			redirect('login');	
		}
	}
	function remove_subject(){
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$this->load->model('subject_model');
			$query=$this->subject_model->delete_subject();
			if($query)
			{
				redirect('site/subject');	
			}
		}
		else 
		{
			redirect('login');	
		}
	}
	function schedule()
	{
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$data['main_content'] = 'show_schedule';
			$this->load->view('includes/main_template',$data);
		}
		else 
		{
			redirect('login');	
		}
	}
	function edit_schedule()
	{
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$data['main_content'] = 'edit_schedule';
			$this->load->view('includes/main_template',$data);
		}
		else 
		{
			redirect('login');	
		}
	}
	function save_schedule(){
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$this->load->model('schedule_model');
			$query=$this->schedule_model->save_schedule();
			if($query)
			{
				redirect('site/schedule');	
			}
		}
		else 
		{
			redirect('login');	
		}
	}
	function edit_profile(){
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$data['main_content'] = 'edit_profile';
			$data['edit_success'] = false;
			$this->load->view('includes/main_template',$data);
		}
		else 
		{
			redirect('login');	
		}
	}
	function save_profile(){
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$query=$this->membership_model->edit_data();
			if($query)
			{
				$data['main_content'] = 'edit_profile';
				$data['edit_success'] = true;
				$this->load->view('includes/main_template',$data);	
			}
		}
		else 
		{
			redirect('login');	
		}
	}
	function change_password(){
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$data['main_content'] = 'change_password';
			$this->load->view('includes/main_template',$data);
		}
		else 
		{
			redirect('login');	
		}
	}
	function save_password(){
		$this->load->model('membership_model');
		if($this->membership_model->is_logged_in())
		{
			$valid=$this->membership_model->validate();
			if($valid){
				$query=$this->membership_model->change_password();
				if($query)
				{
					$data['main_content'] = 'change_password';
					$data['edit_success'] = true;
					$this->load->view('includes/main_template',$data);	
				}
			}else{
				$data['main_content'] = 'change_password';
				$data['edit_success'] = false;
				$this->load->view('includes/main_template',$data);	
			}
		}
		else 
		{
			redirect('login');	
		}
	}
}
?>	