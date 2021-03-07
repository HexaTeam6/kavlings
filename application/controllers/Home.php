<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekblm_login_pegawai();
		//Do your magic here
	}

	public function index()
	{
		$this->template->load('template', 'pages/home');			
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */