<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {
	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->load->view('v_form');
	}
	function jumlah()
	{
		$angka1=$this->input->post('angka1');
		$angka2=$this->input->post('angka2');
		$hasil=$angka1+$angka2;
		echo "Hasil nya adalah : $hasil";
		echo "<br />".anchor("form/index","Kembali");
	}
}
?>