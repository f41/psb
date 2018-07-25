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
						'title'			=> 'Data Pendaftaran',
						'isi'	    	=> 'pendaftaran_view',
						'pendaftaran'	=> $this->Psb_model->pendaftaran()
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
						'dftr_nodaftar'			=> $this->input->post('dftr_nodaftar'),
						'dftr_ta_id'			=> $this->input->post('dftr_ta_id'),
						'dftr_tgl_daftar'		=> date('Ymd'),
						'dftr_nama_calon_siswa'	=> $this->input->post('dftr_nama_calon_siswa'),
						'dftr_tempat_lahir'		=> $this->input->post('dftr_tempat_lahir'),
						'dftr_tgl_lahir'		=> $this->input->post('dftr_tgl_lahir'),
						'dftr_jenkel'			=> $this->input->post('dftr_jenkel'),
						'dftr_alamat'			=> $this->input->post('dftr_alamat'),
						'dftr_create_by' 		=> 'adm',
						'dftr_create_dt '		=> $date
					);
			$ortu = array(
						'ortu_dftr_nodaftar'	=> $this->input->post('dftr_nodaftar'),
						'ortu_nama_ayah'		=> $this->input->post('ortu_nama_ayah'),
						'ortu_pekerjaan_ayah'	=> $this->input->post('ortu_pekerjaan_ayah'),
						'ortu_nohp_ayah'		=> $this->input->post('ortu_nohp_ayah'),
						'ortu_nama_ibu'			=> $this->input->post('ortu_nama_ibu'),
						'ortu_pekerjaan_ibu'	=> $this->input->post('ortu_pekerjaan_ibu'),
						'ortu_nohp_ibu'			=> $this->input->post('ortu_nohp_ibu'),
						'ortu_alamat'			=> $this->input->post('ortu_alamat')
					);
			$this->Psb_model->input_pendaftaran($data);
			$this->Psb_model->input_ortu($ortu);
			$this->session->set_flashdata('msg', 
					'<div class="alert alert-success">
						<h4>Berhasil <span class="fa fa-check"></span></h4>
					</div>');
			redirect(base_url().'pendaftaran');
		}
	}

	public function detail($id)
	{
		$data = array (	
						'title'		=> 'Data Pendaftaran',
						'isi'	    => 'detail_pendaftaran_view',
						'detail'	=> $this->Psb_model->detail_pendaftaran($id)
					  );
		$this->load->view('layout/wrapper',$data);
	}
}