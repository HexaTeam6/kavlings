<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_TambahAngsuran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekblm_login_pegawai();
		//Do your magic here
	}

	public function index()
	{
		$this->template->load('template', 'angsuran/angsuran_baru');	
	}

}

/* End of file Angsuran.php */
/* Location: ./application/controllers/Angsuran.php */