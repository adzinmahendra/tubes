<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('M_All');
        $this->load->library('pdf');
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

    public function pdf_pesanan()
    {
        $data['pesanan'] = $this->M_All->join_pesanan('pesanan', 'checkout')->result();
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->AddPage('L', 'mm', 'A4');
        $pdf->SetFont('', 'B', 14);
        $pdf->Cell(277, 10, "DAFTAR PESANAN DFARM", 0, 1, 'C');
        $pdf->SetAutoPageBreak(true, 0);
        // Add Header
        $pdf->Ln(10);
        $pdf->SetFont('', 'B', 12);
        $pdf->Cell(20, 8, "No.", 1, 0, 'C');
        $pdf->Cell(50, 8, "Tanggal", 1, 0, 'C');
        $pdf->Cell(120, 8, "Nama Konsumen", 1, 0, 'C');
        $pdf->Cell(50, 8, "Jumlah Harga", 1, 0, 'C');
        $pdf->Cell(37, 8, "Jumlah Barang", 1, 1, 'C');
        $pdf->SetFont('', '', 12);

        $no=0;
        foreach ($data['pesanan'] as $p) {
            $no++;
            $pdf->Cell(20, 8, $no, 1, 0, 'C');
            $pdf->Cell(50, 8, $p->tanggal, 1, 0, 'C');
            $pdf->Cell(120, 8, $p->nama_depan.' '.$p->nama_belakang, 1, 0, 'C');
            $pdf->Cell(50, 8, "Rp. ".number_format($p->jumlah_harga, 2, ",", "."), 1, 0, 'L');
            $pdf->Cell(37, 8, $p->jumlah_item, 1, 1, 'C');
            // code...
        }
        $pdf->SetFont('', 'B', 10);
        $pdf->Cell(277, 10, "Laporan Pdf Menggunakan Tcpdf", 0, 1, 'L');
        $pdf->Output('Laporan-pesanan-dfarm.pdf');
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
