<?php
class Psb_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
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


//Pendaftaran
	//Menampilkan Data Pendaftaran
	public function pendaftaran()
	{
		$this->db->select('*');
		$this->db->from('tb_pendaftar');
		$this->db->join('tbmaster_tahun_ajaran', 'ta_id = dftr_ta_id');
		$this->db->order_by('ta_id', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	//Untuk Menambahkan Data Pendaftar
	public function input_pendaftaran($data)
	{
		return $this->db->insert('tb_pendaftar',$data);
	}

	//Untuk Menambahkan Data Orang Tua
	public function input_ortu($data)
	{
		return $this->db->insert('tbmaster_orang_tua',$data);
	}

	//Detail Calon Siswa
	public function detail_pendaftaran($id)
	{
		$this->db->select('*');
		$this->db->from('tb_pendaftar');
		$this->db->join('tbmaster_tahun_ajaran', 'ta_id = dftr_ta_id');
		$this->db->join('tbmaster_orang_tua', 'ortu_dftr_nodaftar = dftr_nodaftar');
		$this->db->where('dftr_nodaftar', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function seleksi($data) {
		$this->db->where('dftr_nodaftar',$data['dftr_nodaftar']);
		return $this->db->update('tb_pendaftar',$data);
	}

	//Menampilkan Data Pendaftaran
	public function list_daftarulang()
	{
		$this->db->select('*');
		$this->db->from('tb_pendaftar');
		$this->db->join('tbmaster_tahun_ajaran', 'ta_id = dftr_ta_id');
		$this->db->where('dftr_status', '1');
		$this->db->order_by('ta_id', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function hasil_seleksi($awal, $akhir)
	{
		$query = $this->db->query("select * from tb_pendaftar where dftr_create_dt between '$awal' and '$akhir'");
		return $query->result_array();
	}
}
?>