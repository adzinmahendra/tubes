<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model{
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	public function get_role($table, $where)
	{
		$this->db->select('*');
		return $this->db->get_where($table,$where);
	}

	public function get_mail($table, $where)
	{
		$this->db->select('email');
		return $this->db->get_where($table,$where);
	}
}
