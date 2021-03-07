<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_DataTanah extends CI_Controller {

public function __construct()
{
	parent::__construct();
	cekblm_login_pegawai();
}
	public function index()
	{
		$this->template->load('template', 'tanah/data_tanah');
	}

}

/* End of file H_DataTanah.php */
/* Location: ./application/controllers/H_DataTanah.php */