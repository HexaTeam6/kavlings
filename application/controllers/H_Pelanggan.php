<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_Pelanggan extends CI_Controller {

public function __construct()
{
	parent::__construct();
	cekblm_login_pegawai();
}
	public function DaftarPelanggan()
	{
		$this->template->load('template', 'pelanggan/daftar_pelanggan');
	}

	public function TambahPelanggan()
	{
		$this->template->load('template', 'pelanggan/tambah_pelanggan');
	}

}

/* End of file H_Pelanggan.php */
/* Location: ./application/controllers/H_Pelanggan.php */