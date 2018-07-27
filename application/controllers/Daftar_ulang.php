<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Makassar");

class Daftar_ulang extends CI_Controller {
	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Psb_model');
	}

	public function index()
	{
		$data = array (	
						'title'		=> 'Data Pendaftaran',
						'isi'	    => 'daftarulang_view',
						'pendaftar'	=> $this->Psb_model->list_daftarulang(),
						'ta'		=> $this->Psb_model->ta()
					  );
		$this->load->view('layout/wrapper',$data);
	}

	public function proses($id)
	{
		$data = array (
						'dftr_nodaftar' => $id,
						'dftr_ulang'	=> 1
					);
		$this->Psb_model->seleksi($data);
		redirect(base_url().'daftar_ulang');
	}
}