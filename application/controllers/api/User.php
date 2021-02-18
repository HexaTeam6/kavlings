<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class User extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function listUser_get() {
        $id = $this->get('id_user');
        $role = $this->get('role');
        if ($id != '') {
            $user = $this->db->query("SELECT * FROM user 
                                      WHERE id_user = ?", $id)->result();
        }
        else if ($role != ''){
            $user = $this->db->query("SELECT * FROM user
                                      WHERE role = ?", $role)->result();
        }
        else {
            $user = $this->db->query("SELECT * FROM user")->result();
        }
        $this->response($user, 200);
    }

    function insertUser_post(){
        $nama_user      = trim($this->post('nama_user'));
        $email_user     = trim($this->post('email_user'));
        $password_user  = trim($this->post('password_user'));
        $no_telp        = trim($this->post('no_telp'));
        $tgl_lahir      = trim($this->post('tgl_lahir'));
        $jenis_kelamin  = trim($this->post('jenis_kelamin'));
        $tinggi_badan   = trim($this->post('tinggi_badan'));
        $berat_badan    = trim($this->post('berat_badan'));
        $role           = trim($this->post('role'));

        if (empty($nama_user) || empty($email_user) || empty($nama_user)  || empty($role)) {
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST);
            return;
        }

        $data = array(
            'nama_user'     => $nama_user,
            'email_user'    => $email_user,
            'password_user' => $password_user,
            'no_telp'       => $no_telp,
            'tgl_lahir'     => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'tinggi_badan'  => $tinggi_badan,
            'berat_badan'   => $berat_badan,
            'role'          => $role,
        );

        $this->db->insert('user',$data);
        $id = $this->db->insert_id();

        // $this->set_response($data, REST_Controller::HTTP_CREATED);
        if($this->db->affected_rows() > 0){
            // $this->response(['status' => 'berhasil'], 200);
            $this->response(['status' => 'berhasil', 'user' => $data, 'id' => $id], REST_Controller::HTTP_OK);
        }else{
            $this->response(['status' => 'gagal', 'user' => 'kosong'], REST_Controller::HTTP_BAD_REQUEST);
        }
        
    }

    function updateUser_post(){
        $id_user        = trim($this->post('id_user'));
        $nama_user      = trim($this->post('nama_user'));
        $email_user     = trim($this->post('email_user'));
        $password_user  = trim($this->post('password_user'));
        $no_telp        = trim($this->post('no_telp'));
        $tgl_lahir      = trim($this->post('tgl_lahir'));
        $jenis_kelamin  = trim($this->post('jenis_kelamin'));
        $tinggi_badan   = trim($this->post('tinggi_badan'));
        $berat_badan    = trim($this->post('berat_badan'));
        $role           = trim($this->post('role'));

        if (empty($id_user) || empty($nama_user) || empty($email_user) || empty($nama_user)  || empty($role)) {
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST);
            return;
        }

        $data = array(
            'nama_user'     => $nama_user,
            'email_user'    => $email_user,
            'password_user' => $password_user,
            'no_telp'       => $no_telp,
            'tgl_lahir'     => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'tinggi_badan'  => $tinggi_badan,
            'berat_badan'   => $berat_badan,
            'role'          => $role,
        );

        $this->db->where('id_user',$id_user);
        $this->db->update('user',$data);

        $this->set_response($data, REST_Controller::HTTP_CREATED);
    }

    function authUser_get() {
        $email = $this->get('email');

        $user = $this->db->query("SELECT * FROM user
                                    WHERE email_user = ?", array($email))->result();
        
        if(empty($user)){
            $this->response(['status' => 'gagal'], 200);
        }else{
            $this->response(['status' => 'berhasil', 'user' => $user], 200);
        }
    }
}
?>