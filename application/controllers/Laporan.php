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
		$awal    = substr($this->input->post('periode'),1,10);
		$akhir   = substr($this->input->post('periode'),-10,10);
		$laporan = $this->input->post('jenis_laporan');

		if ($laporan != '') {
			$hasil = $this->Psb_model->hasil_seleksi2($awal, $akhir, $laporan);
		} else {
			$hasil = $this->Psb_model->hasil_seleksi($awal, $akhir);
		};
		$data = array (	
						'title'		=> 'Hasil Seleksi',
						'hasil'		=> $hasil,
						'awal'		=> $awal,
						'akhir'		=> $akhir
					  );
		$this->load->view('lap_hasil_seleksi_view',$data);
	}
}