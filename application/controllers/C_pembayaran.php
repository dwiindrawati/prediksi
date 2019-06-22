<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pembayaran extends CI_Controller {
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

	function upload_bukti_pembayaran($email,$total){
		//  if(isset($_FILES['berkas'])){
  //   		echo $_FILES['berkas']['name'];
		// }else{
		// 	print_r($_FILES);
		// 	echo $_POST['berkas'];
		// }
		$email=str_replace("-", "@", $email);
			$where = array(
				'email_user' => $email
				);

		$data_user=$this->mymodels->cek_login('user',$where)->row_array();
		$where_id= array (
				'id_user'=>$data_user['id_user'],
				'status_pembelian'=>'belum terbayar'
				);
			
		$data_beli=$this->mymodels->cek_login('pembelian',$where_id)->row_array();

		$tgl=date('Y-m-d');
		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './gambar_upload/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '5000'; //lebar maksimum 2500 px
        $config['max_height']  = '5000'; //tinggi maksimu 1600px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);

		if($_FILES['berkas']['name'])
        {
            if ($this->upload->do_upload('berkas'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  	'upload_bukti' =>$gbr['file_name'],
                  	'id_user'=>$data_user['id_user'],
                  	'id_beli'=>$data_beli['id_beli'],
                  	'nama_user'=>$data_user['nama_user'],
                  	'total_harga'=>$total,
                  	'tanggal_bayar'=>$tgl,

                );

                $this->mymodels->InsertData('pembayaran',$data); 
               	echo "<script> alert('Bukti Pembayaran Berhasil di upload')</script>";
               	redirect('C_pembelian/hal_pembelian/$email');

            }else{
               //echo "<script> alert('upload Gagal')</script>";
            	echo $this->upload->display_errors($open = '<p>',$close = '</p>');
            }
        }

	}

	function halaman_pembayaran(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login_admin');
		}
		else{
			$com = array(
			'data'=>$this->mymodels->pembayaran(),
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			'jss_admin' => $this->load->view('admin/jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_pembayaran',$com);
		}
	}

	function verfi_bayar($id_beli){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login_admin');
		}
		else{
			$data = array (
				'status_pembelian'=>'dikirim',
			);

			$where = array (
				'id_beli'=>$id_beli,
				);

			$this->mymodels->UpdateData('pembelian',$data,$where);
			$com = array(
			'data'=>$this->mymodels->pembayaran(),
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			'jss_admin' => $this->load->view('admin/jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_pembayaran',$com);
		}

	}
}