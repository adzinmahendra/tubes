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

    public function pesan()
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

    public function excel()
    {
        $data['pesanan'] = $this->M_All->join_pesanan('pesanan', 'checkout')->result();

		// require(APPPATH. 'vendor/phpoffice/phpexcel/Classes/PHPExcel.php');
		// require(APPPATH. 'phpoffice\phpexcel\Classes\PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Dfarm");
		$object->getProperties()->setLastModifiedBy("Dfarm");
		$object->getProperties()->setTitle("Daftar Pesanan");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1', 'NO');
		$object->getActiveSheet()->setCellValue('B1', 'TANGGAL');
		$object->getActiveSheet()->setCellValue('C1', 'NAMA KONSUMEN');
		$object->getActiveSheet()->setCellValue('D1', 'JUMLAH HARGA');
		$object->getActiveSheet()->setCellValue('E1', 'JUMLAH BARANG');
		// $object->getActiveSheet()->setCellValue('F1', 'SUMBER');
		// $object->getActiveSheet()->setCellValue('G1', 'KETERANGAN');

		$baris = 2;
		$no = 1;

		foreach ($data['pesanan'] as $psn) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $psn->tanggal);
			$object->getActiveSheet()->setCellValue('C'.$baris, $psn->nama_depan.' '.$psn->nama_belakang);
			$object->getActiveSheet()->setCellValue('D'.$baris, 'Rp. '.number_format($psn->jumlah_harga, 2, ",", "."));
			$object->getActiveSheet()->setCellValue('E'.$baris, $psn->jumlah_item);
			// $object->getActiveSheet()->setCellValue('F'.$baris, $psn->nama_sumber);
			// $object->getActiveSheet()->setCellValue('G'.$baris, $psn->keterangan_barang);
			$baris++;
		}

		$filename = "Data_Pesanan".'.xlsx';

		$object->getActiveSheet()->setTitle("Data Pesanan");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');
		exit;
    }

    public function lihatPesanan($id)
    {
        $where = array('pesanan.id_pesanan' => $id, );
        $data['cart'] = $this->M_All->join_cart_admin('db_cart', $where)->result();
        // print_r($data);
        $this->load->view('admin/header');
        $this->load->view('konsumen/detail_pesanan', $data);
        $this->load->view('admin/footer');
    }

    public function lihatPesananUser($id)
    {
        $where = array('pesanan.id_user' => $id, );
        $data['cart'] = $this->M_All->join_cart_admin('db_cart', $where)->result();
        // print_r($data);
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
