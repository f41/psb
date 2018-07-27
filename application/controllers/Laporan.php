<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Psb_model');
	}

	public function hasil_seleksi()
	{
		$ta = $this->input->post('ta');
		$data = array (	
						'title'		=> 'Hasil Seleksi',
						'hasil'		=> $this->Psb_model->hasil_seleksi($ta)
					  );
		$this->load->view('lap_hasil_seleksi_view',$data);
	}
}