<?php
class Psb_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}

	//Menampilkan Data Agama
	public function agama() 
	{
		$query = $this->db->get('tbmaster_agama');
		return $query->result_array();
	}

	//Menampilkan Data Master TA
	public function ta() 
	{
		$this->db->from('tbmaster_tahun_ajaran');
		$this->db->order_by('ta_id', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	//Untuk Menambahkan Tahun Ajaran Baru
	public function tambah_ta($data)
	{
		return $this->db->insert('tbmaster_tahun_ajaran',$data);
	}

}
?>