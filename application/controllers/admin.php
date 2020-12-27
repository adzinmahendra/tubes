<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();

		// memuat model yang bertujuan tuntuk mendapatkan data admin
		$this->load->model('M_All');
		$this->load->model('M_User');

			// if($this->session->userdata('status') != "login"){
			// 	// redirect(base_url("index.php/"));
			// }
		if($this->session->userdata('role') != "admin"){
			redirect(base_url("index.php/"));
		}
	}

	public function index()
	{
		$data['pesanan'] = $this->M_All->count('pesanan');
		$data['barang'] = $this->M_All->count('barang');
		$data['saran'] = $this->M_All->count('saran');
		$this->load->view('admin/header');
		$this->load->view('admin/home', $data);
		$this->load->view('admin/footer');

	}

	public function FunctionName($value='')
	{
		// code...
	}
}
