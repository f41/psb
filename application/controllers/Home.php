<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Psb_model');
	}

	public function index()
	{
		$data = array (	
						'title'		=> 'Home',
						'isi'	    => 'home_view',
						'ta'		=> $this->Psb_model->ta()
					  );
		$this->load->view('layout/wrapper',$data);
	}
}