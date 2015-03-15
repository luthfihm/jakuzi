<?php
	class Schedule_model extends CI_Model {
		function save_schedule()
		{
			$data=array(
				'day1' => serialize($this->input->post('day1')),
				'day2' => serialize($this->input->post('day2')),
				'day3' => serialize($this->input->post('day3')),
				'day4' => serialize($this->input->post('day4')),
				'day5' => serialize($this->input->post('day5')),
				'place1' => serialize($this->input->post('place1')),
				'place2' => serialize($this->input->post('place2')),
				'place3' => serialize($this->input->post('place3')),
				'place4' => serialize($this->input->post('place4')),
				'place5' => serialize($this->input->post('place5'))			
			);	
			$this->db->where('username',$this->session->userdata('username'));
			$save=$this->db->update('schedule',$data);
			return $save;
		}	
	}
?>