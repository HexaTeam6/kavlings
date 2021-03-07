<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function login_user($post)
	{
        $this->db->select('*');
        $this->db->from('tb_login');
        $this->db->where('username', $post['username']);
        $this->db->where('password', MD5($post['password']));
        // $this->db->where('status', 1);
		$result = $this->db->get();
		return $result;
    }

    public function get_user($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_login');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function get_pelanggan($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_pelanggan');
        if ($id != null) {
            $this->db->where('id_pelanggan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

}

/* End of file UserModel.php */
/* Location: ./application/models/UserModel.php */
