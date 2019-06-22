<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_keranjang extends CI_Controller {
	public $item_keranjang=0;

	function __construct(){
		parent::__construct();
		$this->load->library('session');
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
			'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
			);
			$this->load->view('user/hal_keranjang',$login);
		}
	}

	function tambah_keranjang($id,$user){
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
			$email=str_replace("-", "@", $user);
			$where = array(
				'email_user' => $email
			);
			$data=$this->mymodels->cek_login('user',$where)->row_array();
			//var_dump($data);
			$id_user=$data['id_user'];
			//var_dump($id_user);

			$data = array(
				'id_produk' =>$id , 
				'id_user' =>$id_user,
				);

			$perintah = $this->mymodels->InsertData('keranjang',$data);
			if($perintah>=1){
				$email=str_replace("-", "@", $email);

				$where = array(
					'email_user' => $email
				);
				$data_user=$this->mymodels->cek_login('user',$where)->row_array();
				$where_idu = "".$data_user['id_user'];
				
				$login = array(
					'data_produk'=>$this->mymodels->keranjang($where_idu),
					'header_user' => $this->load->view('user/header_login',array(),true),
					'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),

			);
				
			$this->load->view('user/hal_keranjang',$login);	
		 				
			}
				
			else{
					echo "<script> alert('Gagal Menambahkan keranjang')</script>";
			}
		 			
		}

	}

	function lihat_keranjang($email){
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
			$where_idu = "".$data_user['id_user'];
			
			$login = array(
				'data_produk'=>$this->mymodels->keranjang($where_idu),
				'header_user' => $this->load->view('user/header_login',array(),true),
				'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
				//'id_produk'=> $data_produk['id_produk'],
				// 'merk_produk'=> $data_produk['merk_produk'],
				// 'type_produk'=> $data_produk['type_produk'],
				// 'gambar_produk'=> $data_produk['gambar_produk'],	
				//'id_user'=> $data_produk['id_user'],

			);
				
			$this->load->view('user/hal_keranjang',$login);	
		 			
		}

	}

	function hapus_keranjang($email){
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
			$where_idu = "".$data_user['id_user'];

			$where_id= array (
				'id_user'=>$data_user['id_user'],
				);
			
			$perintah = $this->mymodels->DeleteData('keranjang',$where_id);
			if ($perintah>0){
				$login = array(
					'data_produk'=>$this->mymodels->keranjang($where_idu),
					'header_user' => $this->load->view('user/header_login',array(),true),
					'carousel_user' => $this->load->view('user/carousel_user',array(),true),
					'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
				);
				$this->load->view('user/hal_keranjang',$login);
			}
			
		}
	}

	function hapus_item_keranjang($id,$email){
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
			$where_idu = "".$data_user['id_user'];

			$where_id= array ('id_keranjang'=>$id);
			$perintah = $this->mymodels->DeleteData('keranjang',$where_id);
			if ($perintah>0){
				$login = array(
					'data_produk'=>$this->mymodels->keranjang($where_idu),
					'header_user' => $this->load->view('user/header_login',array(),true),
					'carousel_user' => $this->load->view('user/carousel_user',array(),true),
					'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
				);
				$this->load->view('user/hal_keranjang',$login);
			}
			
		}
	}

	 function check_out ($email,$total){
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

			$tgl=date('Y-m-d');
			$data_pembelian=array (
					'id_user' =>$_POST['id_user'],
					'nama_user' =>$data['nama_user'],
					'no_hp_user' =>$data['no_hp_user'],
					'status_pembelian'=>'belum terbayar',
					'tanggal_beli'=>$tgl,
				);
			$this->mymodels->InsertData('pembelian',$data_pembelian);

			$where_beli=array(
				'id_user' =>$_POST['id_user'],
				'status_pembelian'=>'belum terbayar',
				);
			$data_pembelian=$this->mymodels->cek_login('pembelian',$where_beli)->row_array();

			foreach ($_POST['id_produk'] as $key) {

				$data = array(
					'id_produk' =>$key,
					'id_user' =>$_POST['id_user'],
					'id_beli' => $data_pembelian['id_beli'],
				 );
				$where = array ('id_user'=>$_POST['id_user']);

				$this->mymodels->InsertData('detail_beli',$data);
				$this->mymodels->DeleteData('keranjang',$where);
			}


			$login = array(
			'data_belum' => $this->mymodels->belum_terbayar($data['id_user']),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
			);
			$this->load->view('user/hal_belum_terbayar',$login);

	 	}
	}

}
