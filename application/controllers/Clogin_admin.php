<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin_admin extends CI_Controller {
	public function index(){
		$this->load->view('login_admin');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->mymodels->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			$com = array(
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			'jss_admin' => $this->load->view('admin/jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_admin',$com);
			
		}else{
			echo "<scrip> alert ('Username dan password salah !') </scrip>";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Clogin_admin'));
	}

}
