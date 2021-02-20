<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_TambahBaru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->template->load('template', 'Angsuran/tambah_baru');	
	}

}

/* End of file Angsuran.php */
/* Location: ./application/controllers/Angsuran.php */