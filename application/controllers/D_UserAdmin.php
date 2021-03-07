<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_UserAdmin extends CI_Controller {

public function __construct()
{
	parent::__construct();
	cekblm_login_pegawai();
	$this->load->model('UserModel');
	$this->load->model('M_Users');
}

	public function index()
	{
		$data['row'] = $this->M_Users->get_user();
		$this->template->load('template', 'users/daftar_user', $data);
	}

}

/* End of file D_UserAdmin.php */
/* Location: ./application/controllers/D_UserAdmin.php */