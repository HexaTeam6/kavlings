<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $this->load->view('landing');
    }

    public function masuk()
    {
        if (isset($_SESSION['email']) && isset($_SESSION['token'])){
            redirect(site_url().'/Auth/login');
        }else{
            $this->load->view('pages/masuk');
        }
    }

    public function login()
    {
        if (isset($_SESSION['email']) && isset($_SESSION['token'])){
            $email = $_SESSION['email'];
            $token = $_SESSION['token'];

            $query = $this->User_model->getLoginToken($email, $token);
        }else{
            $email = $this->input->post("email");
            $password = $this->input->post("password");

            $query = $this->User_model->getLogin($email, $password);
            if(count($query->result())>0) $token = $this->getToken(20);

            $this->User_model->update_data('id_login', 'login', $query->row()->id_login, array('token' => $token));
        }

        if (count($query->result())>0){
            foreach ($query->result() as $row)
            {
                $this->session->set_userdata("id_login",$row->id_login);
                $this->session->set_userdata("nama",$row->nama);
                $this->session->set_userdata("email",$row->email);
                $this->session->set_userdata("role",$row->role);
                $this->session->set_userdata("token",$token);
                if ($row->role == "A"){
                    redirect(site_url().'/Monitoring/StatusDokter');
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
        redirect(site_url().'/Auth/masuk');
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
