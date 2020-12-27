<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_All');
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/user/login"));
		}
	}

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('transaksi/');
		$this->load->view('admin/footer');
	}

	public function Penjualan()
	{
		$data['penjualan'] = $this->M_All->get('pesanan')->result();
		$this->load->view('admin/header');
		$this->load->view('transaksi/penjualan', $data);
		$this->load->view('admin/footer');
	}

	public function Market()
	{
		$data['market'] = $this->M_All->get('market')->result();
		$this->load->view('admin/header');
		$this->load->view('transaksi/market', $data);
		$this->load->view('admin/footer');
	}

	public function tambahMarket()
	{
		$nama_market = $this->input->post('nama_market');
		$alamat_market = $this->input->post('alamat_market');
		$keterangan_market = $this->input->post('keterangan_market');

		$data = array(
			'nama_market' => $nama_market,
			'alamat_market' => $alamat_market,
			'keterangan_market' => $keterangan_market
		);

		$this->M_All->insert('market', $data);
		redirect('transaksi/market');
	}

	public function editMarket()
	{
		$where = array('id_market' => $this->input->post('id_market'), );
		$data = array(
			'nama_market' => $this->input->post('nama_market'),
			'alamat_market' => $this->input->post('alamat_market'),
			'keterangan_market' => $this->input->post('keterangan_market'),
		);
		$this->M_All->update('market', $where, $data);
		redirect('transaksi/market');

	}

	public function hapusMarket($id)
	{
		$where = array('id_market' => $id, );
		$this->M_All->delete($where, 'market');
		redirect('transaksi/market');
	}

	public function Pengadaan()
	{
		$data['barang'] = $this->M_All->get('barang')->result();
		$this->load->view('admin/header');
		$this->load->view('transaksi/pengadaan', $data);
		$this->load->view('admin/footer');
	}

	public function editPengadaan()
	{
		$id = $this->input->post('id_barang');
		$where = array('id_barang' => $id);
		$jumlah = $this->input->post('jumlah');
		$jenis = $this->input->post('jenis');
		$data = array(
			'jumlah' => $jumlah,
			'jenis' => $jenis
		);
		$this->M_All->update('barang', $where, $data);

		redirect('transaksi/pengadaan');

	}

	public function tambahPengadaan($id)
	{
		$where = array('id_barang' => $id);
		$data['barang'] = $this->M_All->view_where('barang', $where)->result();
		$this->load->view('admin/header');
		$this->load->view('transaksi/kuantitas', $data);
		$this->load->view('admin/footer');
	}
}
