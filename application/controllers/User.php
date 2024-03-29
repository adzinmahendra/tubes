<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct(){
		parent::__construct();
        $this->load->model('M_User');
		$this->load->model('M_All');
        // memuat model user

	}

	public function Login()
	{
		$this->load->view('form/login');
        // menampilkan halaman login
	}

    public function LoginCheckout()
	{
		$this->load->view('form/login_check');
        // menampilkan halaman login
	}

	public function ActionLogin()
	{
        $username = $this->input->post('username');
        // mendapatkan variabel username dari halaman login
		$password = $this->input->post('password');
        // mendapatkan variabel password dari halaman login
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
            // ditampung di array
		$cek = $this->M_User->cek_login("users",$where)->num_rows();
        // cek apabila data yang dimasukan ada dalam database

        $role = $this->M_User->get_role('users',$where)->row();
        // $mail = $this->M_User->get_mail('users',$where)->row();
        // cek role yang terdapat pada database
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login",
                'role' => $role->role,
                'id_user' => $role->id,
                'mail' => $role->email
				);

			$this->session->set_userdata($data_session);
            // menerapkan data session sesuai dengan nama username
			redirect(base_url("index.php/admin"));
            // apabila berhasil maka akan langsung ke halaman welcome
		}else{
			echo "Username atau password salah !";
		}
    }

    public function ActionLoginCheck()
	{
        $username = $this->input->post('username');
        // mendapatkan variabel username dari halaman login
		$password = $this->input->post('password');
        // mendapatkan variabel password dari halaman login
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
            // ditampung di array
		$cek = $this->M_User->cek_login("users",$where)->num_rows();
        // cek apabila data yang dimasukan ada dalam database

        $role = $this->M_User->get_role('users',$where)->row();
        $mail = $this->M_User->get_mail('users',$where)->row();
        // cek role yang terdapat pada database
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login",
                'id_user' => $role->id,
                'role' => $role->role,
                'mail' => $mail->email
				);

			$this->session->set_userdata($data_session);
            // menerapkan data session sesuai dengan nama username
			redirect(base_url("index.php/shop/cart"));
            // apabila berhasil maka akan langsung ke halaman welcome
		}else{
			echo "Username atau password salah !";
		}
    }

    public function register()
    {
        $this->load->view('form/register');
    }

    public function actionRegister()
    {
        $data = array(
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'alamat_konsumen' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'no_telepon_konsumen' => $this->input->post('no_telepon_konsumen'),
            'email' => $this->input->post('email'),
        );
        $data_user = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'role' => 'user',
            'email' => $this->input->post('email')
        );

        $this->M_All->insert('konsumen', $data);
        $this->M_All->insert('users', $data_user);
        redirect('/user/login');
    }

    function Logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/welcome'));
    }

    public function ForgotPassword()
    {
        $this->load->view('form/forgotpassword');

    }

    public function confirmForgetPassword($username)
    {
        if ($username != null) {
            // echo $username;
            $data = array(
                'username' => $username
            );
            $this->load->view('form/newpassword', $data);
        }else{
            redirect(base_url('index.php/user/login'));
        }
    }

    public function actionConfirmForgetPassword()
    {
        $password = $this->input->post('password');
        $cpassword = $this->input->post('cpassword');
        $username = $this->input->post('username');
        if ($password == $cpassword) {
            $data = array('password' => md5($password));
            $where = array('username' => $username);
            if ($this->M_All->update('users', $where, $data)) {
                // redirect(base_url('index.php/user/login'));
                echo "<script>
                    alert('
                    password telah diubah
                    ');
                    </script>";
                $this->Login();
            }
        }else{
            $this->confirmForgetPassword($username);
            echo "<script>
              alert('
              password tidak sama
              ');
              </script>";
            // redirect(base_url('index.php/user/ForgotPassword'));
        }
    }

    public function actionForgetPassword()
    {
        $where = array(
            'username' => $this->input->post('username'),
        );
		$cek = $this->M_User->cek_login("users",$where)->num_rows();
        if ($cek > 0) {
            $this->confirmForgetPassword($where['username']);
        }else {
            $this->ForgotPassword();
            echo "<script>
              alert('Anda Belum memiliki akun');
              </script>";
            // redirect(base_url('index.php/user/ForgotPassword'));
        }
    }

    public function pesanan()
    {
        if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/user/login"));
		}
        $where = [
            'pesanan.id_user' => $this->session->userdata('id_user')
        ];
        $data['pesanan'] = $this->M_All->join_pesanan_where('pesanan', 'checkout', $where)->result();

        $this->load->view('template/header');
		$this->load->view('transaksi/pesanan', $data);
		$this->load->view('template/footer');
    }

    public function uploadBukti($id)
    {
        $where = ['pesanan.id_pesanan' => $id];
        $data['pesanan'] = $this->M_All->join_pesanan_where('pesanan', 'checkout', $where)->row();

        $this->load->view('template/header');
		$this->load->view('transaksi/upload_bukti', $data);
		$this->load->view('template/footer');
    }

    public function actionUploadBukti()
    {
        // code...
        $config['upload_path']          = './assets_admin/img/gambar_bukti_bayar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']        	= true;
		$config['max_size']             = 1024;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('bukti_bayar')){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			$data = array('error' => $this->upload->display_errors());
			// $this->load->view('pengelolaan/gudang', $data);
		}else{
			$this->session->set_flashdata('success', 'Berhasil di Upload');
			$data = array('success' => $this->upload->data('bukti_bayar'));
			// $this->load->view('pengelolaan/gudang', $data);
		}

        $gambar = $this->upload->data('orig_name');

        $data = [
            'bukti_transaksi'=> $gambar,
        ];

        $data2 = [
            'grup_pesanan'=> 2,
        ];

        $where = [
            'id_pesanan' => $this->input->post('id_pesanan'),

        ];

        $this->M_All->update('transaksi', $where, $data);
        $this->M_All->update('pesanan', $where, $data2);

        redirect('user/pesanan');
    }
    public function cekPesanan($id)
    {
        $where = ['pesanan.id_pesanan' => $id];
        $data['pesanan'] = $this->M_All->join_pesanan_where('pesanan', 'checkout', $where)->row();
        $where2 = ['id_pesanan' => $id,];
        $data['transaksi'] = $this->M_All->view_where('transaksi', $where2)->row();

        $this->load->view('template/header');
		$this->load->view('transaksi/cekPesanan', $data);
		$this->load->view('template/footer');
    }

    public function pesananDiterima()
    {

        $data2 = [
            'grup_pesanan'=> $this->input->post('setuju'),
        ];

        $where = [
            'id_pesanan' => $this->input->post('id_pesanan'),

        ];

        // $this->M_All->update('transaksi', $where, $data);
        $this->M_All->update('pesanan', $where, $data2);

        redirect('user/pesanan');
    }
}
