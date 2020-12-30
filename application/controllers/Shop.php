<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_All');
	}

	public function index()
	{
		$data['barang'] = $this->M_All->get('barang')->result();
		$this->load->view('template/header');
		$this->load->view('shop/home', $data);
		$this->load->view('template/footer');
	}

	public function search()
	{
		// Ambil data namaBarang yang dikirim via ajax post
		$keyword = $this->input->post('keyword');
		$barang = $this->M_All->search($keyword);
		
		// Kita load file view.php sambil mengirim data barang hasil query function search di M_All
		$hasil = $this->load->view('shop/find', array('barang'=>$barang), true);
		
		// Buat sebuah array
		$callback = array(
		  'hasil' => $hasil, // Set array hasil dengan isi dari find.php yang diload tadi
		);
		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

	public function info($id_barang)
	{
		$where = array('id_barang' => $id_barang);
		$data['barang'] = $this->M_All->view_where('barang', $where)->result();
		$this->load->view('template/header');
		$this->load->view('shop/info', $data);
		$this->load->view('template/footer');
	}

	public function cart()
	{
		$data['cart'] = $this->M_All->join_cart('barang', 'cart')->result();
		$this->load->view('template/header');
		$this->load->view('shop/cart', $data);
		$this->load->view('template/footer');
	}

	public function addCart($cart)
	{
		// $where = array('id_barang' => $id_barang);

		$keterangan_cart = "beli";
		$jumlah_bayar = 1;
		$jumlah_barang = 1;
		$id_transaksi = 1;
		$id_barang = $cart;
		$email = 'guest';

		$data = array(
			'keterangan_cart' => $keterangan_cart,
			'jumlah_bayar' => $jumlah_bayar,
			'jumlah_barang' => $jumlah_barang,
			'id_transaksi' => $id_transaksi,
			'id_barang' => $id_barang,
			'email' => $email
		);

		$this->M_All->insert('cart', $data);
		redirect('shop/index');
	}

	public function delCart($cart)
	{
		$where = array('id_barang' => $cart);
		$this->M_All->delete($where,'cart');
		redirect('shop/cart');
	}

	public function wishlist()
	{
		$data['wishlist'] = $this->M_All->join_wishlist('barang', 'wishlist')->result();
		$this->load->view('template/header');
		$this->load->view('shop/wishlist', $data);
		$this->load->view('template/footer');
	}

	public function addWishlist($id)
	{
		$keterangan_wishlist = "simpan";
		$jumlah_barang = 1;
		$id_barang = $id;

		$where = array('id_barang' => $id_barang );
		$data = array(
			'keterangan_wishlist' => $keterangan_wishlist,
			'total' => $jumlah_barang,
			'id_barang' => $id_barang
		);

		$this->M_All->insert('wishlist', $data);
		redirect('shop/index');
	}

	public function delWish($id)
	{
		$where = array('id_barang' => $id);
		$this->M_All->delete($where,'wishlist');
		redirect('shop/wishlist');
	}

	public function saveCheckout()
	{
		// $cart = $this->M_All->join_cart('barang', 'cart')->result();
		$mail = array(
			'id_user' => $this->session->userdata('id_user'),
			'email' => $this->session->userdata('email'),
		);
		$where = array('email' => 'guest');
		$this->M_All->update('cart', $where, $mail);

		$cart = $this->M_All->get('cart')->result();
		foreach ($cart as $c) {
			$this->db->insert('db_cart', $c);
		}

		$jumlah_harga = $this->input->post('jumlah_harga');
		$date = date('Y-m-d');
		$data = array(
			'email' => $this->session->userdata('mail'),
			'tanggal' => $date,
			'id_pesanan' => '0',
			'jumlah_harga' => $jumlah_harga,
			'id_user' => $this->session->userdata('id_user'),
			'id_pembayaran' => '0'
		);

		$this->M_All->insert('checkout', $data);
		redirect('shop/checkout');

	}

	function Checkout()
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/user/LoginCheckout"));
		}
		$mail = $this->session->userdata('mail');
		$where = array('email' => $mail);
		$data['user'] = $this->M_All->view_where('konsumen', $where)->row();
		$data['checkout'] = $this->M_All->select('*', 'checkout', 'id_checkout', 'DESC')->row();
		// $data['user'] = $this->M_All->view_where('konsumen', $where)->row();
		$this->load->view('template/header');
		$this->load->view('shop/checkout', $data);
		$this->load->view('template/footer');
	}

	public function simpanOrderan()
	{
		$nama_depan = $this->input->post('nama_depan');
		$nama_belakang = $this->input->post('nama_belakang');
		$negara = $this->input->post('negara');
		$alamat = $this->input->post('alamat');
		$alamat_lengkap = $this->input->post('alamat_lengkap');
		$kota = $this->input->post('kota');
		$kode_pos = $this->input->post('kode_pos');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$jenis_pembayaran = $this->input->post('jenis_pembayaran');
		$konfirmasi = $this->input->post('setuju');
		$jumlah_bayar = $this->input->post('jumlahbayar');
		$jumlah_barang = $this->input->post('jumlahbarang');

		$data = array(
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'alamat_konsumen' => $alamat_lengkap,
			'kota' => $kota,
			'kode_pos' => $kode_pos,
			'no_telepon_konsumen' => $no_telp,
			'id_user' => $this->session->userdata('id_user'),
			'email' => $email,
		);

		$data2 = array(
			'email' => $email,
			'id_user' => $this->session->userdata('id_user'),
			'jumlah_bayar' => $jumlah_bayar,
			'jumlah_barang' => $jumlah_barang,
		);


		$where = array('email' => $email);
		$this->M_All->update('konsumen', $where, $data);
		$this->M_All->insert('pesanan', $data2);

		$data_kosong = array('id_pesanan' => 0, );
		$pemesanan = $this->M_All->select('id_pesanan', 'pesanan', 'id_pesanan', 'DESC')->row();
		$data_pesanan = array('id_pesanan' => $pemesanan->id_pesanan, );
		$this->M_All->update('checkout', $data_kosong, $data_pesanan);

		$this->M_All->empty('cart');

		redirect('shop/');
	}

	public function updateCart()
	{
		$id_cart = $this->input->post('id_cart');
		$jumlah = $this->input->post('quantity');
		$data = array(
			'id_cart' => $id_cart,
			'jumlah_barang' => $jumlah
		);
		$where = array('id_cart' => $id_cart);
		$this->M_All->update('cart', $where, $data);
		redirect('shop/cart');
	}

	public function Order()
	{
		$mail = $this->session->userdata('mail');
		$where = array('email' => $mail);
		$data['checkout'] = $this->M_All->view_where('checkout', $where)->row();
		$this->load->view('template/header');
		$this->load->view('shop/order', $data);
		$this->load->view('template/footer');
	}

	public function Saran()
	{
		// fungsi yang menampilkan kotak saran pada halaman pengguna
		$this->load->view('template/header');
		$this->load->view('shop/saran');
		$this->load->view('template/footer');
	}

	public function berikanSaran()
	{
		// penyimpanan pesan saran yang disimpan pada database
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$pesan = $this->input->post('pesan');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'subject' => $subject,
			'isi_saran' => $pesan
		);

		$this->M_All->insert('saran', $data);
		redirect('shop/saran');
	}

	public function Category()
	{
		$data['category'] = $this->M_All->get('kategori')->result();
		$this->load->view('template/header');
		$this->load->view('shop/category', $data);
		$this->load->view('template/footer');
	}

	public function isiKategori($id)
	{
		$where = array(
			'id_kategori' => $id,
		);
		$data['barang'] = $this->M_All->view_where('barang', $where)->result();
		$this->load->view('template/header');
		$this->load->view('shop/home', $data);
		$this->load->view('template/footer');
	}
}
