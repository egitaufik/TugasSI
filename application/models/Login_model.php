<?php

/**
 * 
 */
class Login_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function auth($data)
	{
		$this->db->select("id_user,username,hak_akses,nama");
		$hasil = $this->db->get_where("user",$data)->row();
		return $hasil;
	}
}
?>