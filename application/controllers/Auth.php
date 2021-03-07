<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('UserModel');
    }

    public function index()
    {
        ceksdh_login_pegawai();
        $this->load->view('pages/login');
    }

    public function proses_login()
    {
        $post = $this->input->POST(NULL, TRUE);
        if (isset($post['login_user'])) {
            $query = $this->UserModel->login_user($post);
            $status =  $query->row('status');
            // var_dump($query->row('status'));
            // exit;
            if ($query->num_rows() > 0 && $status == 1) {
                $row = $query->row();
                $param = array(
                    'id_user'       => $row->id_user,
                    'username'      => $row->username,
                    'password'      => $row->password,
                    'nama'          => $row->nama,
                    'role'          => $row->role,
                    'status'        => $row->status
                );
                $this->session->set_userdata($param);
                $this->session->set_flashdata('login', 'berhasil');
                redirect('Home');
            }else if($query->num_rows() > 0 && $status == 0){
                $this->session->set_flashdata('login', 'tidak aktif');
                redirect('');
            }else{
                $this->session->set_flashdata('login', 'gagal');
                redirect('');
            }
        }
    }

    public function masuk()
    {
        if (isset($_SESSION['email']) && isset($_SESSION['token'])){
            redirect(site_url().'/Auth/login');
        }else{
            $this->load->view('pages/login');
        }
    }

    public function login()
    {
        if (isset($_SESSION['username']) && isset($_SESSION['token'])){
            $username = $_SESSION['username'];
            $token = $_SESSION['token'];

            $query = $this->User_model->getLoginToken($username, $token);
        }else{
            $username = $this->input->post("username");
            $password = $this->input->post("password");

            $query = $this->User_model->getLogin($username, $password);
            if(count($query->result())>0) $token = $this->getToken(20);

            $this->User_model->update_data('id_user', 'login', $query->row()->id_user, array('token' => $token));
        }

        if (count($query->result())>0){
            foreach ($query->result() as $row)
            {
                $this->session->set_userdata("id_login",$row->id_login);
                $this->session->set_userdata("nama",$row->nama);
                $this->session->set_userdata("username",$row->email);
                $this->session->set_userdata("role",$row->role);
                $this->session->set_userdata("token",$token);
                if ($row->role == "A"){
                    redirect(site_url().'/Home');
                }
                else if ($row->role == "K"){
                    redirect(site_url().'/DataResep');
                }
            }
        }else{
            redirect(site_url().'/Auth/masuk');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }

    public function getToken($panjang){
     $token = array(
         range(1,9),
         range('a','z'),
         range('A','Z')
     );

     $karakter = array();
     foreach($token as $key=>$val){
         foreach($val as $k=>$v){
             $karakter[] = $v;
         }
     }

     $token = null;
     for($i=1; $i<=$panjang; $i++){
         // mengambil array secara acak
         $token .= $karakter[rand($i, count($karakter) - 1)];
     }

     return $token;
    }
}
