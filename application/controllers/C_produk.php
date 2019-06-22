<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_produk extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('mymodels');
		$this->load->helper(array('form', 'url'));
		/*if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}*/
	}

	public function index(){
		$com = array(
			'header_admin' => $this->load->view('header_admin',array(),true),
			'jss_admin' => $this->load->view('jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_produk',$com);
	}

	public function halaman_produk(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login_admin');
		}
		else{
			$com = array(
			'data'=>$this->mymodels->getData('produk',''),
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			'jss_admin' => $this->load->view('admin/jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_produk',$com);
		}
	}

	public function form_add_produk(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login_admin');
		}
		else {
			$com = array(
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			);
			$this->load->view('admin/form_add_produk',$com);
		}
	}

	public function delete($id)
	{
		$where = array('id_produk' => $id, );
		$perintah=$this->mymodels->DeleteData('produk',$where);
		if($perintah>=1){
			echo "<script> alert('Delete Produk $id') </script>";
			redirect('C_produk/halaman_produk');
		}
		else{
			echo "<script> alert('Delete Produk Gagal') </script>";
		}
	}

	public function add_produk(){
		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './gambar_produk/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '25000'; //lebar maksimum 2500 px
        $config['max_height']  = '16000'; //tinggi maksimu 1600px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
		$merk=$_POST['merk'];
		$type=$_POST['type'];
		$ram=$_POST['ram'];
		$hdd=$_POST['hdd'];
		$vga=$_POST['vga'];
		$lcd=$_POST['lcd'];
		$processor=$_POST['processor'];
		$harga=$_POST['harga'];
		$kuantitas=$_POST['kuantitas'];
		$deskripsi=$_POST['deskripsi'];

		if($_FILES['berkas']['name'])
        {
            if ($this->upload->do_upload('berkas'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  	'gambar_produk' =>$gbr['file_name'],
                  	'merk_produk'=>$merk,
					'type_produk'=>$type,
					'ram_produk'=>$ram,
					'hdd_produk'=>$hdd,
					'vga_produk'=>$vga,
					'lcd_produk'=>$lcd,
					'processor_produk'=>$processor,
					'harga_produk'=>$harga,
					'kuantitas_produk'=>$kuantitas,
					'deskripsi_produk'=>$deskripsi,
                );

                $this->mymodels->InsertData('produk',$data);
               	echo "<script> alert('Add Berita Berhasil')</script>";

            }else{
               echo "<script> alert('Add Berita Gagal')</script>";
            }
        }
		$dat=array(
			'data'=> $this->mymodels->getData('produk',''),
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			);

		$this->load->view('admin/halaman_produk',$dat,array('error' => ' ' ));
	}

	public function edit_produk($id){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$where = "where id_produk=".$id;
		$data=$this->mymodels->GetData('produk',$where);
		$databerita=array(
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			"id_produk"=>$data[0]['id_produk'],
			'gambar_produk' =>$data[0]['gambar_produk'],
            'merk_produk'=>$data[0]['merk_produk'],
			'type_produk'=>$data[0]['type_produk'],
			'ram_produk'=>$data[0]['ram_produk'],
			'hdd_produk'=>$data[0]['hdd_produk'],
			'vga_produk'=>$data[0]['vga_produk'],
			'lcd_produk'=>$data[0]['lcd_produk'],
			'processor_produk'=>$data[0]['processor_produk'],
			'harga_produk'=>$data[0]['harga_produk'],
			'kuantitas_produk'=>$data[0]['kuantitas_produk'],
			'deskripsi_produk'=>$data[0]['deskripsi_produk'],
			);
		$this->load->view('admin/form_update_produk',$databerita);
		}
	}

	public function update_produk(){
		$where = " id_produk = ".$_POST['id'];

        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './gambar_produk/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '2500'; //lebar maksimum 2500 px
        $config['max_height']  = '1600'; //tinggi maksimu 1600px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
		$merk=$_POST['merk'];
		$type=$_POST['type'];
		$ram=$_POST['ram'];
		$hdd=$_POST['hdd'];
		$vga=$_POST['vga'];
		$lcd=$_POST['lcd'];
		$processor=$_POST['processor'];
		$harga=$_POST['harga'];
		$kuantitas=$_POST['kuantitas'];
		$deskripsi=$_POST['deskripsi'];

		$data_text = array(
            'merk_produk'=>$merk,
			'type_produk'=>$type,
			'ram_produk'=>$ram,
			'hdd_produk'=>$hdd,
			'vga_produk'=>$vga,
			'lcd_produk'=>$lcd,
			'processor_produk'=>$processor,
			'harga_produk'=>$harga,
			'kuantitas_produk'=>$kuantitas,
			'deskripsi_produk'=>$deskripsi,
		);

		$res= $this->mymodels->UpdateData('produk',$data_text,$where);
		if($res>=1){
			echo "<script> alert('Update Produk Berhasil')</script>";
		}

		else{
			 	echo "<script> alert('Update Produk Gagal')</script>";

		}



		if($_FILES['berkas']['name'])
        {
            if ($this->upload->do_upload('berkas'))
            {
                $gbr = $this->upload->data();
                $data = array(
                	'gambar_produk' =>$gbr['file_name'],
                );

                $this->mymodels->UpdateData('produk',$data,$where);
               	echo "<script> alert('Add produk Berhasil')</script>";

            }else{
               echo "<script> alert('Add produk Gagal')</script>";
            }
        }

		$dat=array(
			'data'=> $this->mymodels->getData('produk',''),
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			);

		$this->load->view('admin/halaman_produk',$dat,array('error' => ' ' ));
	}

	public function halaman_produk_user($merk){
		$where="where merk_produk='".$merk."'";
		if($this->session->userdata('status') != "login"){
			$com = array(
			'data'=>$this->mymodels->getData('produk',$where),
			'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_user',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);
			$this->load->view('user/hal_produk',$com);
		}
		else{
			$login = array(
			'data'=>$this->mymodels->getData('produk',$where),
			'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);
			$this->load->view('user/hal_produk',$login);
		}

	}

	public function detail_produk_user($id){

		if($this->session->userdata('status') != "login"){
			$where = "where id_produk=".$id;
			$data=$this->mymodels->GetData('produk',$where);


			$where_rate = "id_produk=".$id;
			$login = array(
			'data_rate'=>$this->mymodels->GetData('rating',$where),
			'jumlah_row'=>$this->mymodels->jumlah_row('rating',$where_rate),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			"id_produk"=>$data[0]['id_produk'],
			'gambar_produk' =>$data[0]['gambar_produk'],
            'merk_produk'=>$data[0]['merk_produk'],
			'type_produk'=>$data[0]['type_produk'],
			'ram_produk'=>$data[0]['ram_produk'],
			'hdd_produk'=>$data[0]['hdd_produk'],
			'vga_produk'=>$data[0]['vga_produk'],
			'lcd_produk'=>$data[0]['lcd_produk'],
			'processor_produk'=>$data[0]['processor_produk'],
			'harga_produk'=>$data[0]['harga_produk'],
			'deskripsi_produk'=>$data[0]['deskripsi_produk'],
			'kuantitas_produk'=>$data[0]['kuantitas_produk'],
			);

			$this->load->view('user/hal_detailproduk',$login);
		}
		else{
			$where = "where id_produk=".$id;
			$data=$this->mymodels->GetData('produk',$where);


			$where_rate = "id_produk=".$id;
			$login = array(
			'data_rate'=>$this->mymodels->GetData('rating',$where),
			'jumlah_row'=>$this->mymodels->jumlah_row('rating',$where_rate),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			"id_produk"=>$data[0]['id_produk'],
			'gambar_produk' =>$data[0]['gambar_produk'],
            'merk_produk'=>$data[0]['merk_produk'],
			'type_produk'=>$data[0]['type_produk'],
			'ram_produk'=>$data[0]['ram_produk'],
			'hdd_produk'=>$data[0]['hdd_produk'],
			'vga_produk'=>$data[0]['vga_produk'],
			'lcd_produk'=>$data[0]['lcd_produk'],
			'processor_produk'=>$data[0]['processor_produk'],
			'harga_produk'=>$data[0]['harga_produk'],
			'deskripsi_produk'=>$data[0]['deskripsi_produk'],
			'kuantitas_produk'=>$data[0]['kuantitas_produk'],
			);

			$this->load->view('user/hal_detailproduk',$login);
		}
	}


}
