<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');

class Simple_login 
{
	// SET SUPER GLOBAL
 	var $CI = NULL;
 
 	public function __construct() 
 	{
 		$this->CI =& get_instance();
 	}

	// Fungsi login
 	public function login($username, $password) 
 	{
 		$query = $this->CI->db->get_where('tbmaster_user',array('user_id'=>$username,'user_password' => md5($password)));
 		if($query->num_rows() == 1) 
 		{
 			$row 		= $this->CI->db->query('SELECT * FROM tbmaster_user where user_id = "'.$username.'"');
 			$user 		= $row->row();
 			$username 	= $user->user_id;
 			$nama 		= $user->user_nama;
 			$level 		= $user->user_level;
 			$foto 		= $user->user_foto;
 			
 			$this->CI->session->set_userdata('username', $username);
 			$this->CI->session->set_userdata('id_login', uniqid(rand()));
 			$this->CI->session->set_userdata('nama', $nama);
 			$this->CI->session->set_userdata('level', $level);
 			$this->CI->session->set_userdata('foto', $foto);
 			redirect(base_url());
 		}else{
 			$this->CI->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
                Oops... Username/password salah
              </div>');
 			redirect(base_url('login'));
 		}
 		return false;
 	}
 
	// Proteksi halaman
 	public function cek_login() 
 	{
 		if($this->CI->session->userdata('username') == '') 
 		{
			$this->CI->session->set_flashdata('pesan','<div class="alert alert-info" role="alert">
                Anda belum login
              </div>');
			redirect(base_url('login'));
 		}
 	}

	// Fungsi logout
	public function logout()
	{
 		$this->CI->session->unset_userdata('username');
 		$this->CI->session->unset_userdata('id_login');
 		$this->CI->session->unset_userdata('nama');
 		$this->CI->session->unset_userdata('level');
 		$this->CI->session->unset_userdata('foto');
 		$this->CI->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
                Anda berhasil logout
              </div>');
 		redirect(base_url('login'));
 	}
}