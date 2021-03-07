<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_DataAngsuran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekblm_login_pegawai();
		//Do your magic here
	}

	public function index()
	{
		$this->template->load('template', 'angsuran/data_angsuran');	
	}

}

/* End of file A_DataAngsuran.php */
/* Location: ./application/controllers/A_DataAngsuran.php */