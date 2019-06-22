<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transaksi extends CI_Controller {
	public $item_keranjang=0;

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		 $this->load->helper(array('form', 'url'));
	}

	public function index(){

	if($this->session->userdata('status') != "login"){
			$com = array(
			'data'=>$this->mymodels->getData('produk',''),
			'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_user',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);
			$this->load->view('user/hal_pertama',$com);
		}
		else{
			$login = array(
			'data'=>$this->mymodels->getData('produk',''),
			'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);
			$this->load->view('user/hal_pertama',$login);
		}
	}

	// function selesai_belanja($email,$total){
	// 	if($this->session->userdata('status') != "login"){
	// 		$com = array(
	// 			'data'=>$this->mymodels->getData('produk',''),
	// 			'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
	// 			'header_user' => $this->load->view('user/header_user',array(),true),
	// 			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
	// 			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
	// 		);
	// 		$this->load->view('user/hal_pertama',$com);
	// 	}
	// 	else{
			
			
	// 		$email=str_replace("-", "@", $email);
	// 		$where = array(
	// 			'email_user' => $email
	// 			);

	// 		$data=$this->mymodels->cek_login('user',$where)->row_array();

	// 		$where_alamat = array('id_user' =>$data['id_user']);
	// 		$data_alamat=$this->mymodels->cek_login('alamat_user',$where_alamat)->row_array();
	// 		$login = array(
	// 			'header_user' => $this->load->view('user/header_login',array(),true),
	// 			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
	// 			'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
	// 			'id_user'=>$data_alamat['id_user'],
	// 			'jalan'=>$data_alamat['jalan'],
	// 			'kelurahan'=>$data_alamat['kelurahan'],
	// 			'kecamatan'=>$data_alamat['kecamatan'],
	// 			'kota'=>$data_alamat['kota'],
	// 			'provinsi'=>$data_alamat['provinsi'],
	// 			'kode_pos'=>$data_alamat['kode_pos'],
	// 			'total'=>$total,
	// 		);
	// 		$this->load->view('user/hal_pembayaran',$login);
	// 	}
	// }


	

	


	
	
	// function item_produk_diterima($email,$id){
	// 	if($this->session->userdata('status') != "login"){
	// 		$com = array(
	// 		'data'=>$this->mymodels->getData('produk',''),
	// 		'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
	// 		'header_user' => $this->load->view('user/header_user',array(),true),
	// 		'carousel_user' => $this->load->view('user/carousel_user',array(),true),
	// 		'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
	// 		);
	// 		$this->load->view('user/hal_pertama',$com);
	// 	}
	// 	else{
	// 		$email=str_replace("-", "@", $email);
	// 		// $where = "where email like %".$email."%";
	// 		// $data=$this->mymodels->GetData('peserta',$where);
	// 		$where = array(
	// 			'email_user' => $email
	// 			);
	// 		$data=$this->mymodels->cek_login('user',$where)->row_array();

	// 		$where_id = array (
	// 			'id_user' => $data['id_user'],
	// 			'id_transaksi'=>$id,
	// 			);
	// 		$data_update = array(
	// 			'status_transaksi' =>'selesai',
	// 			);
	// 		$perintah=$this->mymodels->UpdateData('transaksi',$data_update,$where_id);

	// 		$login = array(
	// 		'data_kirim' => $this->mymodels->proses_pengiriman($data['id_user']),
	// 		'header_user' => $this->load->view('user/header_login',array(),true),
	// 		'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
	// 		);
	// 		$this->load->view('user/hal_proses_pengiriman',$login);
	// 	}
	// }

	

}