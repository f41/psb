<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Makassar");

class Seleksi extends CI_Controller {
	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Psb_model');
	}

	public function index()
	{
		$data = array (	
						'title'		=> 'Data Pendaftaran',
						'isi'	    => 'seleksi_view',
						'seleksi'	=> $this->Psb_model->pendaftaran(),
						'ta'		=> $this->Psb_model->ta()
					  );
		$this->load->view('layout/wrapper',$data);
	}

	public function lulus($id)
	{
		$data = array (
						'dftr_nodaftar' => $id,
						'dftr_status'	=> 1
					);
		$this->Psb_model->seleksi($data);
		redirect(base_url().'seleksi');
	}

	public function tidaklulus($id)
	{
		$data = array (
						'dftr_nodaftar' => $id,
						'dftr_status'	=> 0
					);
		$this->Psb_model->seleksi($data);
		redirect(base_url().'seleksi');
	}
}