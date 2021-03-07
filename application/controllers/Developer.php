<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends CI_Controller {

public function __construct()
{
	parent::__construct();
	cekblm_login_pegawai();
	$this->load->model('UserModel');
	$this->load->model('M_Users');
}

	public function UserAdmin()
	{
		$data['row'] = $this->M_Users->get_user();
		$this->template->load('template', 'users/daftar_user', $data);
	}

}

/* End of file Developer.php */
/* Location: ./application/controllers/Developer.php */