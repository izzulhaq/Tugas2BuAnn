<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_login'); //digunakan memanggil model
        if($this->session->userdata('status') == "login"){
            if($this->session->userdata('lvl') == "1"){
                redirect(base_url('home/admin'));
            }else if($this->session->userdata('lvl') == "2"){
                redirect(base_url('home/petugas'));
            }else{
                redirect(base_url('home/siswa'));
            }
        }
    }

	public function index()
	{
		$this->load->view('login');
    }
    
    function aksi_login(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => sha1($password)
            );
        $cek = $this->m_login->cek_login("login",$where)->num_rows();
        if($cek > 0){
            $tes = $this->m_login->cek_login("login",$where)->row_array();
            if($tes["lvl"]==1){
                $data_session = array(
                    'nama' => $username,
                    'status' => "login",
                    'lvl' => "1"
                    );
                $this->session->set_userdata($data_session);
                redirect(site_url('home/admin'));
            }else if($tes["lvl"]==2){
                $data_session = array(
                    'nama' => $username,
                    'status' => "login",
                    'lvl' => "2"
                    );
                $this->session->set_userdata($data_session);
                redirect(site_url('home/petugas'));
            }else{
                $data_session = array(
                    'nama' => $username,
                    'status' => "login",
                    'lvl' => "3"
                    );
                $this->session->set_userdata($data_session);
                redirect(site_url('home/siswa'));
            }
        }else{
            echo "Username dan password salah !!!!!";
        }
    }
}
