<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Makassar");

class Master extends CI_Controller {
	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Psb_model');
	}

	public function tahun_ajaran()
	{
		$date = date('Ymdhis');
		$this->form_validation->set_rules('ta_awal','Tahun Ajaran Awal','required');
		$this->form_validation->set_rules('ta_akhir','Tahun Ajaran Akhir','required');
		if ($this->form_validation->run() === FALSE)
		{
			$data = array (	
							'title'		=> 'Tahun Ajaran',
							'isi'	    => 'master_ta_view',
							'ta'		=> $this->Psb_model->ta()
						  );
			$this->load->view('layout/wrapper',$data);
		}else{
			$ta_awal  = $this->input->post('ta_awal');
			$ta_akhir = $this->input->post('ta_akhir');
			$data = array(
						'ta_id'		=> $ta_awal.$ta_akhir,
						'ta_awal'	=> $ta_awal,
						'ta_akhir'	=> $ta_akhir
					);
			$this->Psb_model->tambah_ta($data);
			$this->session->set_flashdata('msg', 
					'<div class="alert alert-success">
						<h4> Berhasil Tambah Data</h4>
					</div>');
			redirect(base_url().'master/tahun_ajaran');
		}
	}
}