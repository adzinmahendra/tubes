<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('M_All');
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/user/login"));
		}
	}

    public function kotakSaran()
    {
        $data['saran'] = $this->M_All->get('saran')->result();
        $this->load->view('admin/header');
		$this->load->view('konsumen/kotak_saran', $data);
		$this->load->view('admin/footer');
    }

    public function daftarKonsumen()
    {
        $data['konsumen'] = $this->M_All->get('konsumen')->result();
        $this->load->view('admin/header');
        $this->load->view('konsumen/daftar_konsumen', $data);
        $this->load->view('admin/footer');
    }

    public function laporanKonsumen()
    {
        $data['konsumen'] = $this->M_All->get('konsumen')->result();
        $this->load->view('admin/header');
        $this->load->view('konsumen/laporan_konsumen', $data);
        $this->load->view('admin/footer');

    }

    public function informasiProduk()
    {
        $data['barang'] = $this->M_All->get('barang')->result();
        $this->load->view('admin/header');
        $this->load->view('konsumen/informasi_produk', $data);
        $this->load->view('admin/footer');

    }

    public function Pesanan()
    {
        $data['pesanan'] = $this->M_All->join_pesanan('pesanan', 'checkout')->result();
        $this->load->view('admin/header');
        $this->load->view('konsumen/pesanan', $data);
        $this->load->view('admin/footer');
    }

    public function lihatPesanan($id)
    {
        $where = array('pesanan.id_pesanan' => $id, );
        $data['cart'] = $this->M_All->join_cart_admin('db_cart', 'barang', 'users', 'pesanan', $where)->result();
        $this->load->view('admin/header');
        $this->load->view('konsumen/detail_pesanan', $data);
        $this->load->view('admin/footer');
    }

    public function prosesPesanan($id)
    {
        $data = array('id_pesanan' => $id, );
        $this->M_All->insert('transaksi', $data);
        redirect('transaksi/penjualan');
    }

}
