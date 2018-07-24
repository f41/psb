<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	//public function __construct() 
	//{
	//		parent::__construct();
	//		$this->load->model('Grande_model');
	//}

	public function index()
	{
		$data = array (	
						'title'		=> 'Login'
					  );
		$this->load->view('login_view',$data);
	}
}