<?php 

	function ceksdh_login_pegawai()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('id_user');
		// $email = $CI->session->userdata('email');
		$user = $CI->fungsi->user_login()->status;
		if ($user_session && $user != 0) {
			$CI->session->set_flashdata('login', 'sudah login');
			// echo "<script>alert('Sudah Login, Logout Dulu Bosss')</script>";
			redirect('Home','refresh');
		}
	}

	function cekblm_login_pegawai()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('id_user');
		$user = $CI->fungsi->user_login()->status;
		if (!$user_session) {
			$CI->session->set_flashdata('login', 'belum login');
			redirect('','refresh');
		}else if($user == 0){
			echo "<script>alert('Akun Anda Tidak Aktif')</script>";
			redirect('','refresh');
		}
	}

	function ceksdh_login_mitra()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('mitra_id');
		if ($user_session) {
			echo "<script>alert('Sudah Login, Logout Dulu Bosss')</script>";
			redirect('mitra','refresh');
		}
	}

	function cekblm_login_mitra()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('mitra_id');
		if (!$user_session) {
			echo "<script>alert('Login Dulu Bosss')</script>";
			redirect('auth/login_mitra','refresh');
		}
	}

	function cek_akses()
	{
		$CI =& get_instance();
		$CI->load->library('fungsi');
		if ($CI->fungsi->user_login()->jabatan > 2) {
			echo "<script>alert('Anda itu siapa? Sadari diri Anda dahulu!')</script>";
			redirect('pegawai','refresh');
		}
	}

	function cek_akses_gudang()
	{
		$CI =& get_instance();
		$CI->load->library('fungsi');
		if ($CI->fungsi->user_login()->jabatan > 3) {
			echo "<script>alert('Anda itu siapa? mau lihat-lihat material')</script>";
			redirect('pegawai','refresh');
		}
	}

 ?>
