<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_All extends CI_Model{
    public function get($table)
    {
        return $this->db->get($table);
    }

    public function select($select, $from, $with, $order)
    {
        $this->db->select($select);
        $this->db->from($from);
        $this->db->order_by($with, $order);
        $this->db->limit(1);
        return $this->db->get();
    }

    public function view_where($table,$where)
	{
		return $this->db->get_where($table,$where);
    }

    // public function update_where($table, $data, $where)
    // {
    //     $this->db->update($table, $data, $where);
    //     // code...
    // }

    public function search($keyword)
    {
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('keterangan_barang', $keyword);
        $this->db->or_like('jenis', $keyword);

        $result = $this->db->get('barang')->result(); // Tampilkan data siswa berdasarkan keyword

        return $result;
    }

    public function fetch_barang($query)
    {
        $this->db->like('nama_barang', $query);
        $query = $this->db->get('barang');

        if($query->num_rows() > 0)
        {
            foreach($query->result_array() as $row)
            {
                $output[] = array(
                    'nama_barang'  => $row["nama_barang"]
                );
            }
            echo json_encode($output);
        }
    }

	public function insert($table,$data)
	{
		$this->db->insert($table,$data);
	}

	public function update($table,$where,$data)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

    public function empty($table)
    {
        $this->db->empty_table($table);
    }

    function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }

    function join_gudang()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('sumber', 'barang.id_sumber = sumber.id_sumber');
        return $this->db->get();
    }


    function join_cart($from, $at)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($at, 'cart.id_barang = barang.id_barang');
        return $this->db->get();
    }

    function join_cart_admin($from, $where)
    {
        $this->db->distinct();
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join('barang', 'db_cart.id_barang = barang.id_barang');
        $this->db->join('users', 'users.id = db_cart.id_user');
        $this->db->join('pesanan', 'pesanan.id_pesanan = db_cart.id_pesanan');
        $this->db->join('konsumen', 'konsumen.id_user = users.id');
        $this->db->where($where);
        return $this->db->get();
    }

    function join_wishlist($from, $at)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($at, 'wishlist.id_barang = barang.id_barang');
        return $this->db->get();
    }

    function join_pesanan($from, $at)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($at, 'checkout.id_pesanan = pesanan.id_pesanan');
        $this->db->join('users', 'users.id = pesanan.id_user');
        $this->db->join('konsumen', 'konsumen.id_user = users.id');
        return $this->db->get();
    }

    function join_pesanan_where($from, $at, $where)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($at, 'checkout.id_pesanan = pesanan.id_pesanan');
        $this->db->join('users', 'users.id = pesanan.id_user');
        $this->db->join('konsumen', 'konsumen.id_user = users.id');
        $this->db->where($where);

        return $this->db->get();
    }

    function count($where)
    {
        return $this->db->count_all_results($where);
    }

    function sum($kind, $table)
    {
        $this->db->select_sum($kind);
        $query = $this->db->get($table);

        return $query;
    }

    public function store_cart()
    {
        $this->db->select('*');// code...
    }
}
