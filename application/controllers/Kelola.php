<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_All');
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/user/login"));
		}
	}

	public function Gudang()
	{
		$this->load->view('admin/header');
		$data['barang'] = $this->M_All->get('barang')->result();
		$data['sumber'] = $this->M_All->get('sumber')->result();
		$data['gudang'] = $this->M_All->get('gudang')->result();
		$this->load->view('pengelolaan/gudang', $data);
		$this->load->view('admin/footer');
	}

	public function TambahBarang()
	{
		$config['upload_path']          = './assets_admin/img/gambar_barang/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']        = true;
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

		$nama_barang = $this->input->post('nama_barang');
		$jenis = $this->input->post('jenis_barang');
		$harga_barang = $this->input->post('harga_barang');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan_barang');
		$gambar = $this->upload->data('orig_name');
		$sumber = $this->input->post('sumber');
		$gudang = $this->input->post('gudang');

		$data = array(
			'nama_barang' => $nama_barang,
			'harga_barang' => $harga_barang,
			'gambar' => $gambar,
			'keterangan_barang' => $keterangan,
			'tanggal' => $tanggal,
			'jenis' => $jenis,
			'id_sumber' => $sumber,
			'id_gudang' => $gudang
		);

		$this->M_All->insert('barang', $data);
		redirect('kelola/gudang');
	}

	public function HapusBarang($id)
	{
		$where = array('id_barang' => $id);
		$this->M_All->delete($where,'barang');
		redirect('kelola/gudang');
	}

	public function EditBarang($id)
	{
		$where = array('id_barang' => $id);
		$data['barang'] = $this->M_All->view_where('barang', $where)->result();
		$data['sumber'] = $this->M_All->get('sumber')->result();
		$data['gudang'] = $this->M_All->get('gudang')->result();
		$data['kategori'] = $this->M_All->get('kategori')->result();
		$this->load->view('admin/header');
		$this->load->view('pengelolaan/barang', $data);
		$this->load->view('admin/footer');
	}

	public function UpdateBarang()
	{
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$harga_barang = $this->input->post('harga_barang');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan_barang');
		$sumber = $this->input->post('sumber');
		$gudang = $this->input->post('gudang');
		$kategori = $this->input->post('kategori');

		$data = array(
			'nama_barang' => $nama_barang,
			'harga_barang' => $harga_barang,
			'keterangan_barang' => $keterangan,
			'tanggal' => $tanggal,
			'id_sumber' => $sumber,
			'id_gudang' => $gudang,
			'id_kategori' => $kategori
		);

		$where = array('id_barang' => $id_barang);
		$this->M_All->update('barang', $where, $data);
		redirect('kelola/gudang');
	}

	public function Barang()
	{
		$this->load->view('admin/header');
		$this->load->view('pengelolaan/barang');
		$this->load->view('admin/footer');
	}

	public function Penjualan()
	{
		$data['barang'] = $this->M_All->get('barang')->result();
		$this->load->view('admin/header');
		$this->load->view('pengelolaan/harga_jual', $data);
		$this->load->view('admin/footer');
	}

	public function Sumber()
	{
		$data['sumber'] = $this->M_All->get('sumber')->result();
		$this->load->view('admin/header');
		$this->load->view('pengelolaan/sumber', $data);
		$this->load->view('admin/footer');
	}

	public function tambahSumber()
	{
		$nama_sumber = $this->input->post('nama_sumber');
		$alamat_sumber = $this->input->post('alamat_sumber');
		$no_telepon = $this->input->post('no_telepon');

		$data = array(
			'nama_sumber' => $nama_sumber,
			'alamat_sumber' => $alamat_sumber,
			'no_telepon' => $$no_telepon
		);

		$this->M_All->insert('sumber', $data);
		redirect('kelola/sumber');
	}

	public function editSumber($id)
	{
		$where = array('id_sumber' => $id);
		$data['sumber'] = $this->M_All->view_where('sumber', $where)->result();
		$this->load->view('admin/header');
		$this->load->view('pengelolaan/edit_sumber', $data);
		$this->load->view('admin/footer');
	}

	public function updateSumber()
	{
		$id_sumber = $this->input->post('id_sumber');
		$nama_sumber = $this->input->post('nama_sumber');
		$alamat_sumber = $this->input->post('alamat_sumber');

		$data = array(
			'nama_sumber' => $nama_sumber,
			'alamat_sumber' => $alamat_sumber
		);

		$where = array('id_sumber' => $id_sumber);
		$this->M_All->update('sumber', $where, $data);
		redirect('kelola/sumber');
	}

	public function hapusSumber($id)
	{
		$where = array('id_sumber' => $id);
		$this->M_All->delete($where,'sumber');
		redirect('kelola/Sumber');
	}

	public function laporanAkhir()
	{
		$jumlah = $this->M_All->count('barang');
		$jumlah_harga = $this->M_All->sum('harga_barang', 'barang')->result();
		$data = array(
			'jumlah' => $jumlah,
			'jumlah_harga' => $jumlah_harga
		);
		$this->load->view('admin/header');
		$this->load->view('pengelolaan/laporan',$data);
		$this->load->view('admin/footer');
	}

	public function Kategori()
	{
		$data['kategori'] = $this->M_All->get('kategori')->result();
		$data['barang'] = $this->M_All->get('barang')->result();
		$this->load->view('admin/header');
		$this->load->view('pengelolaan/kategori', $data);
		$this->load->view('admin/footer');
	}

	public function tambahKategori()
	{
		$data = array(
			'kategori' => $this->input->post('nama_kategori'),
		);
		$this->M_All->insert('kategori', $data);
		
		redirect('kelola/kategori');

	}

	public function cekListKategori()
	{
		
	}

	public function hapusKategori($id)
	{
		$where = array('id_kategori' => $id);
		$this->M_All->delete($where,'kategori');
		redirect('kelola/kategori');
	}
}
