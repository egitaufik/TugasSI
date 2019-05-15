<?php
/**
 * 
 */
class Anggota_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_anggota($where=null,$result=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$hasil = $this->db->get("anggota");
		if ($result != null) {
			return $hasil->row();
		}else{
			return $hasil->result();
		}
	}

	public function tambah_anggota($data)
	{
		return $this->db->insert("anggota",$data);
	}

	public function ubah_anggota($data,$where)
	{
		$this->db->where($where);
		return $this->db->update("anggota",$data);
	}

	public function delete_anggota($where)
	{
		$this->db->where($where);
		return $this->db->delete("anggota");
	}
}
?>