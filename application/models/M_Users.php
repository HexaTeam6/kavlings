<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Users extends CI_Model {

	function get_user($id = null)
	{
		$this->db->select('*');
		$this->db->from('tb_login');
		if ($id != null) {
			$this->db->where('id_user', $id);
		}
		// $this->db->where('status', 1);
		// if ($this->session->userdata('role') != -1) {
		// 	$this->db->where('role != 1', -1);
		// }
		$query = $this->db->get();
		return $query;
	}

}

/* End of file M_Users.php */
/* Location: ./application/models/M_Users.php */