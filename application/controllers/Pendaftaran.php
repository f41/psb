<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Makassar");

class Pendaftaran extends CI_Controller {
	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Psb_model');
	}

	public function index()
	{
		$data = array (	
						'title'		=> 'Data Pendaftaran',
						'isi'	    => 'pendaftaran_view'
					  );
		$this->load->view('layout/wrapper',$data);
	}

	public function input()
	{
		$date = date('Ymdhis');
		$this->form_validation->set_rules('dftr_nodaftar','No Pendaftaran','required');
		if ($this->form_validation->run() === FALSE)
		{
			$data = array (	
							'title'		=> 'Pendaftaran',
							'isi'	    => 'input_pendaftaran_view',
							'ta'		=> $this->Psb_model->ta(),
							'nodaftar'	=> $date
						  );
			$this->load->view('layout/wrapper',$data);
		}else{
			$data = array(
						'dftr_nodaftar'		=> $this->input->post('ta_awal'),
						'dftr_tgl_daftar'	=> $this->input->post('ta_awal'),
						'dftr_nama_calon_siswa'	=> $this->input->post('ta_awal'),
						'dftr_tempat_lahir'	=> $this->input->post('ta_awal'),
						'dftr_tgl_lahir'	=> $this->input->post('ta_awal'),
						'dftr_jenkel'	=> $this->input->post('ta_awal'),
						'dftr_alamat'	=> $this->input->post('ta_awal'),
						'dftr_create_by' => $this->input->post('ta_awal'),
						'dftr_create_dt '	=> $date
					);
			$this->Psb_model->tambah_ta($data);
			$this->session->set_flashdata('msg', 
					'<div class="alert alert-success">
						<h4>Berhasil <span class="fa fa-check"></span></h4>
					</div>');
			redirect(base_url().'master/tahun_ajaran');
		}
	}
}