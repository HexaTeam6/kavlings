<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_DataLokasi extends CI_Controller {

public function __construct()
{
	parent::__construct();
	cekblm_login_pegawai();
}
	public function index()
	{
		$this->template->load('template','tahap_lokasi/data_lokasi');		
	}

}

/* End of file H_DataLokasi.php */
/* Location: ./application/controllers/H_DataLokasi.php */