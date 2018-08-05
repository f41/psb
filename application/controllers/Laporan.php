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
		$awal  = substr($this->input->post('periode'),1,10);
		$akhir  = substr($this->input->post('periode'),-10,10);
		$akhir = 
		$data = array (	
						'title'		=> 'Hasil Seleksi',
						'hasil'		=> $this->Psb_model->hasil_seleksi($awal, $akhir),
						'awal'		=> $awal,
						'akhir'		=> $akhir
					  );
		$this->load->view('lap_hasil_seleksi_view',$data);
	}
}