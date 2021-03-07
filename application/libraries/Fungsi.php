<?php 
	
	/**
	 * 
	 */
	class Fungsi
	{
		protected $CI;

		function __construct()
		{
			$this->CI =& get_instance();
		}

		function user_login()
		{
			$this->CI->load->model('UserModel');
			$user_id = $this->CI->session->userdata('id_user');
			$user_data = $this->CI->UserModel->get_user($user_id)->row();
			return $user_data;
		}

		function chart_project()
		{
			$this->CI->load->model('M_project');
			$project =  $this->CI->M_project->chart_project()->result();
			return $project;
		}

	}

?>