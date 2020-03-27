<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->database(); //digunakan untuk load ke DB
		$this->load->model('crud'); //digunakan memanggil model
		if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }    
    }
	
	public function index()
	{
		$this->load->view('index');
	}
	
	public function admin(){
		$data['halaman']='menu1';
		$this->load->view('index',$data);
	}
	
	public function registrasi(){
		$where = array('lvl' => '3');

		$data['halaman']='registrasi';
		$data['dataSiswa'] = $this->crud->getData();
		$this->load->view('index',$data);
	}

	public function petugas(){
		$data['halaman']='menu2';
		$this->load->view('index2',$data);
	}
	
	public function siswa(){
		$data['halaman']='menu3';
		$this->load->view('index3',$data);
	}

	public function hapus(){
		if($this->uri->segment(3) !=null){
            $id = $this->uri->segment(3);
            $kondisi = array ('id' => $id);

            if($this->crud->hapus($kondisi)) {
                echo "<script>alert('hapus Berhasil :)');</script>";
                $this->registrasi();
            }else{
                echo "<script>alert('hapus gagal :(');</script>";
            }
        }
	}

	function add(){
		$id = $this->input->post('username');
		$pss = $this->input->post('password');
		$sts = $this->input->post('status');
		
		$data=array("username" 	=> $id,
					"password"	=> sha1($pss),
					"lvl"		=> $sts);

		$this->crud->insert($data);
		echo "<script>alert('Insert Berhasil :)')</script>";
		$this->registrasi();
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}


	
}
