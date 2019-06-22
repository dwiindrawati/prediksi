<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('mymodels');
	
		/*if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}*/
	}

	public function index(){
		$com = array(
			'header_admin' => $this->load->view('header_admin',array(),true),
			'jss_admin' => $this->load->view('jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_admin',$com);
	}

	public function halaman_admin(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login_admin');
		}
		else{
			$com = array(
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			'jss_admin' => $this->load->view('admin/jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_admin',$com);
		}
	}
}