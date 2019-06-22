<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pembelian extends CI_Controller {
	public $item_keranjang=0;

	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login_admin');
		}
		else{

			$login = array(
			'data'=>$this->mymodels->getData('pembelian',''),
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			'jss_admin' => $this->load->view('admin/jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_pembelian',$login);
		}
	}

	function halaman_pembelian(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login_admin');
		}
		else{

			$login = array(
			'data'=>$this->mymodels->getData('pembelian',''),
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			'jss_admin' => $this->load->view('admin/jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_pembelian',$login);
		}
	}

	function hal_pembayaran_user ($email,$total){
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
			$email=str_replace("-", "@", $email);
			$where = array(
				'email_user' => $email
				);

			$data=$this->mymodels->cek_login('user',$where)->row_array();

			$where_alamat = array('id_user' =>$data['id_user']);
			$data_alamat=$this->mymodels->cek_login('alamat_user',$where_alamat)->row_array();
			//var_dump($data_alamat);
			$login = array(
				'header_user' => $this->load->view('user/header_login',array(),true),
				'carousel_user' => $this->load->view('user/carousel_user',array(),true),
				'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
				'id_user'=>$data_alamat['id_user'],
				'jalan'=>$data_alamat['jalan'],
				'kelurahan'=>$data_alamat['kelurahan'],
				'kecamatan'=>$data_alamat['kecamatan'],
				'kota'=>$data_alamat['kota'],
				'provinsi'=>$data_alamat['provinsi'],
				'kode_pos'=>$data_alamat['kode_pos'],
				'total'=>$total,
			);
			$this->load->view('user/hal_pembayaran',$login);

	 	}
	}

	function hal_pembelian($email){ 
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
			$email=str_replace("-", "@", $email);

			$where = array(
				'email_user' => $email
			);
			$data_user=$this->mymodels->cek_login('user',$where)->row_array();
			$where_id_user =" ".$data_user['id_user'];

			$where_id= array (
				'detail_beli.id_user'=>$data_user['id_user'],
				);


			$login = array(
			'data_belum' => $this->mymodels->belum_terbayar($where_id),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
			);
			$this->load->view('user/hal_belum_terbayar',$login);
		}

	}


	function hapus_pembelian($email){
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
			$email=str_replace("-", "@", $email);

			$where = array(
				'email_user' => $email
			);
			$data_user=$this->mymodels->cek_login('user',$where)->row_array();
			$where_id_user =" ".$data_user['id_user'];

			$where_id= array (
				'id_user'=>$data_user['id_user'],
				);
			
			$data_beli=$this->mymodels->cek_login('pembelian',$where_id)->row_array();
			$where_id_beli= array (
				'id_beli'=>$data_beli['id_beli'],
				);
			$perintah = $this->mymodels->DeleteData('detail_beli',$where_id_beli);

			if ($perintah>0){
				$login = array(
					'data_belum' => $this->mymodels->belum_terbayar($where_id_user),
					'header_user' => $this->load->view('user/header_login',array(),true),
					'carousel_user' => $this->load->view('user/carousel_user',array(),true),
					'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
				);
				$this->load->view('user/hal_belum_terbayar',$login);
			}
			
		}

	}


	function hapus_item_pembelian($email,$id){
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
			$where_id= array (
				'id_detail_beli'=>$id,
				);
			$perintah = $this->mymodels->DeleteData('detail_beli',$where_id);

			$email=str_replace("-", "@", $email);

			$where = array(
				'email_user' => $email
			);
			$data_user=$this->mymodels->cek_login('user',$where)->row_array();
			$where_id_user =" ".$data_user['id_user'];

			$where_id= array (
				'detail_beli.id_user'=>$data_user['id_user'],
				);

			if ($perintah>0){
				$login = array(
					'data_belum' => $this->mymodels->belum_terbayar($where_id),
					'header_user' => $this->load->view('user/header_login',array(),true),
					'carousel_user' => $this->load->view('user/carousel_user',array(),true),
					'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
				);
				$this->load->view('user/hal_belum_terbayar',$login);
			}
			
		}
		
	}


	function hal_proses_pengiriman($email){
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

			$email=str_replace("-", "@", $email);

			$where = array(
				'email_user' => $email
			);
			$data_user=$this->mymodels->cek_login('user',$where)->row_array();
			$where_id_user =" ".$data_user['id_user'];

			$where_id= array (
				'detail_beli.id_user'=>$data_user['id_user'],
				);

			$login = array(
			'data_kirim' => $this->mymodels->proses_pengiriman($where_id),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
			);
			$this->load->view('user/hal_proses_pengiriman',$login);
		}

	}

	function produk_diterima($email){
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
			$email=str_replace("-", "@", $email);

			$where = array(
				'email_user' => $email
			);
			$data_user=$this->mymodels->cek_login('user',$where)->row_array();
			$where_id_user =" ".$data_user['id_user'];

			$where_id= array (
				'id_user'=>$data_user['id_user'],
				'status_pembelian' =>'dikirim',
				);


			$data_beli=$this->mymodels->cek_login('pembelian',$where_id)->row_array();
			$where_id_beli= array (
				'id_beli'=>$data_beli['id_beli'],
				);


			$data_update = array(
				'status_pembelian' =>'selesai',
				);
			$perintah=$this->mymodels->UpdateData('pembelian',$data_update,$where_id_beli);

			$where_pengiriman= array (
				'detail_beli.id_user'=>$data_user['id_user'],
				);

			$login = array(
			'data_kirim' => $this->mymodels->proses_pengiriman($where_pengiriman),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
			);
			$this->load->view('user/hal_proses_pengiriman',$login);
		}
	}


	function selesai ($email){
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
			$email=str_replace("-", "@", $email);

			$where = array(
				'email_user' => $email
			);
			$data_user=$this->mymodels->cek_login('user',$where)->row_array();
			$where_id_user =" ".$data_user['id_user'];

			$where_id= array (
				'detail_beli.id_user'=>$data_user['id_user'],
				);


			$login = array(
			'data_kirim' => $this->mymodels->selesai($where_id),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
			);
			$this->load->view('user/hal_selesai',$login);
		}	
	}
}
