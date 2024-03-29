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

	public function header()
	{
		$this->load->view('admin/header',$data);
		// code...
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

	public function profile()
	{
		$id_user = $this->session->userdata('id_user');
		$where = [
			'id' => $id_user,
		];
		$where2 = [
			'id_user' => $id_user,
		];
		$data['profile'] = $this->M_All->view_where('users', $where)->row();
		$data['admin'] = $this->M_All->view_where('admin', $where2)->row();
		// print_r($data);
		$this->load->view('admin/header');
		$this->load->view('admin/profile', $data);
		$this->load->view('admin/footer');
	}

	public function editProfile()
	{
		$id_user = $this->session->userdata('id_user');
		$where = [
			'id' => $id_user,
		];
		$where2 = [
			'id_user' => $id_user,
		];
		$data['profile'] = $this->M_All->view_where('users', $where)->row();
		$data['admin'] = $this->M_All->view_where('admin', $where2)->row();
		// print_r($data);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_profile', $data);
		$this->load->view('admin/footer');// code...
	}

	public function updateProfile()
	{
		$id = $this->session->userdata('id_user');

		$config['upload_path']          = './assets_admin/img/gambar_user/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']        	= true;
		$config['max_size']             = 1024;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar')){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			$data = array('error' => $this->upload->display_errors());
			// $this->load->view('pengelolaan/gudang', $data);
		}else{
			$this->session->set_flashdata('success', 'Berhasil di Upload');
			$data = array('success' => $this->upload->data('gambar'));
			// $this->load->view('pengelolaan/gudang', $data);
		}

		$gambar = $this->upload->data('orig_name');

		$data = [
			'nama_depan' => $this->input->post('nama_depan'),
			'nama_belakang' => $this->input->post('nama_belakang'),
			'gambar' => $gambar,
			'id_user' => $id,
		];

		$username = $this->input->post('username');
		$role = $this->input->post('role');
		$email = $this->input->post('email');

		$data_user = [
			'email' => $email,
			// 'role' => $role,
			'username' => $username,
			'password' => md5($this->input->post('password')),
		];

		$where = [
			'id' => $id,
		];
		$this->M_All->update('users', $where, $data_user);
		$this->M_All->insert('admin', $data);

		$data_session = array(
			'nama' => $username,
			'status' => "login",
			// 'role' => $role,
			'mail' => $role->email,
			'gambar_user' => $gambar
			);

		$this->session->set_userdata($data_session);
		// menerapkan data session sesuai dengan nama username
		// redirect(base_url("index.php/admin"));

		redirect('admin/profile');
	}
}
