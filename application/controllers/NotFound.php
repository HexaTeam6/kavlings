<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {

	public function index()
	{
		$this->load->view('errors/_NotFound',FALSE);		
	}

}

/* End of file notFound.php */
/* Location: ./application/controllers/notFound.php */