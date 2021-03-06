<?php
	/* Model ini digunakan untuk membuat modul dalam proses penambahan dan penghapusan Mata Kuliah
	*/
	//Nama Kelas subject_model
	class subject_model extends CI_Model {
		function add_subject()//Fungsi untuk menambah Mata Kuliah
		{
			//Array Data input
			$new_subject_data=array(
				'kode' => $this->input->post('kode'),
				'username' => $this->session->userdata('username'),
				'nama' => $this->input->post('nama'),
				'sks' => $this->input->post('sks'),
				'dosen' => $this->input->post('dosen')
			);
			//Proses masuk ke Database
			$insert=$this->db->insert('subject',$new_subject_data);
			return $insert;
		}
		//Fungsi untuk menghapus mata kuliah
		function delete_subject(){
			//Array data input
			$id = $this->input->post('id');
			$sum=count($id);
			for($i=0;$i<$sum;$i++){
				$subject_data=array(
					'id' => $id[$i]
				);	
				//Proses penghapusan dari database
				$delete=$this->db->delete('subject',$subject_data);	
			}
			return $delete;
		}	
	}
?>