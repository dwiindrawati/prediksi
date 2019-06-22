<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
	public $item_keranjang=0;

	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	function avg_std($data_training){
		$training = $data_training ;
		//var_dump($training);
		if($training != NULL)
		// 
		{
			$sum_merk_rekomen			= 0;
			$sum_ram_rekomen 			= 0;
			$sum_vga_rekomen			= 0;
			$sum_hdd_rekomen			= 0;
			$sum_lcd_rekomen 			= 0;
			$sum_processor_rekomen		= 0;
			$sum_rate_rekomen			= 0;

			$sum_merk_tidakrekomen			= 0;
			$sum_ram_tidakrekomen 			= 0;
			$sum_vga_tidakrekomen			= 0;
			$sum_hdd_tidakrekomen			= 0;
			$sum_lcd_tidakrekomen 			= 0;
			$sum_processor_tidakrekomen		= 0;
			$sum_rate_tidakrekomen			= 0;


			$n_rekomen 	= 0;
			$n_tidakrekomen 	= 0;
			$n_data				= 0;

			//menjumlah data total biasa
			foreach ($training as $train){
				if($train['rekomen'] == "YA"){
					$n_rekomen++;							
					$sum_merk_rekomen			= $train['merk'];
					$sum_ram_rekomen 			= $train['ram'];
					$sum_vga_rekomen			= $train['vga'];
					$sum_hdd_rekomen			= $train['hdd'];
					$sum_lcd_rekomen 			= $train['lcd'];
					$sum_processor_rekomen		= $train['processor'];
					$sum_rate_rekomen			= $train['rate'];
				}
				else if($train['rekomen'] == "TIDAK"){
					$n_tidakrekomen++;	
					$sum_merk_tidakrekomen			= $train['merk'];
					$sum_ram_tidakrekomen 			= $train['ram'];
					$sum_vga_tidakrekomen			= $train['vga'];
					$sum_hdd_tidakrekomen			= $train['hdd'];
					$sum_lcd_tidakrekomen 			= $train['lcd'];
					$sum_processor_tidakrekomen		= $train['processor'];
					$sum_rate_tidakrekomen			= $train['rate'];
				}
				$n_data++;
			}

			if ($n_rekomen==0){
				$n_rekomen=1;
			}
			if ($n_tidakrekomen==0) {
				$n_tidakrekomen=1;
			}
			//rata-rata
			$u_merk_rekomen			= $sum_merk_rekomen/$n_rekomen;
			$u_ram_rekomen 			= $sum_ram_rekomen/$n_rekomen;
			$u_vga_rekomen			= $sum_vga_rekomen/$n_rekomen;
			$u_hdd_rekomen			= $sum_hdd_rekomen/$n_rekomen;
			$u_lcd_rekomen 			= $sum_lcd_rekomen/$n_rekomen ;
			$u_processor_rekomen	= $sum_lcd_rekomen/$n_rekomen ;
			$u_rate_rekomen			= $sum_rate_rekomen/$n_rekomen;

			$u_merk_tidakrekomen		= $sum_merk_tidakrekomen/$n_tidakrekomen;
			$u_ram_tidakrekomen 		= $sum_ram_tidakrekomen/$n_tidakrekomen;
			$u_vga_tidakrekomen			= $sum_vga_tidakrekomen/$n_tidakrekomen;
			$u_hdd_tidakrekomen			= $sum_hdd_tidakrekomen/$n_tidakrekomen;
			$u_lcd_tidakrekomen 		= $sum_lcd_tidakrekomen/$n_tidakrekomen;
			$u_processor_tidakrekomen	= $sum_processor_tidakrekomen/$n_tidakrekomen;
			$u_rate_tidakrekomen		= $sum_rate_tidakrekomen/$n_tidakrekomen;

			$sum2_merk_rekomen			= 0;
			$sum2_ram_rekomen 			= 0;
			$sum2_vga_rekomen			= 0;
			$sum2_hdd_rekomen			= 0;
			$sum2_lcd_rekomen 			= 0;
			$sum2_processor_rekomen		= 0;
			$sum2_rate_rekomen			= 0;

			$sum2_merk_tidakrekomen			= 0;
			$sum2_ram_tidakrekomen 			= 0;
			$sum2_vga_tidakrekomen			= 0;
			$sum2_hdd_tidakrekomen			= 0;
			$sum2_lcd_tidakrekomen 			= 0;
			$sum2_processor_tidakrekomen	= 0;
			$sum2_rate_tidakrekomen			= 0;

			//sum untuk standart deviasi
			foreach ($training as $train){
				if($train['rekomen'] == "YA"){
					$sum2_merk_rekomen			+= pow($train['merk']-$u_merk_rekomen,2);
					$sum2_ram_rekomen 			+= pow($train['ram']-$u_ram_rekomen,2);
					$sum2_vga_rekomen			+= pow($train['vga']-$u_vga_rekomen,2);
					$sum2_hdd_rekomen			+= pow($train['hdd']-$u_hdd_rekomen,2);
					$sum2_lcd_rekomen 			+= pow($train['lcd']-$u_lcd_rekomen,2);
					$sum2_processor_rekomen		+= pow($train['processor']-$u_processor_rekomen,2);
					$sum2_rate_rekomen			+= pow($train['rate']-$u_rate_rekomen,2);
				}
				else if($train['rekomen'] == "TIDAK"){
					$sum2_merk_tidakrekomen			+= pow($train['merk']-$u_merk_tidakrekomen,2);
					$sum2_ram_tidakrekomen 			+= pow($train['ram']-$u_ram_tidakrekomen,2);
					$sum2_vga_tidakrekomen			+= pow($train['vga']-$u_vga_tidakrekomen,2);
					$sum2_hdd_tidakrekomen			+= pow($train['hdd']-$u_hdd_tidakrekomen,2);
					$sum2_lcd_tidakrekomen 			+= pow($train['lcd']-$u_lcd_tidakrekomen,2);
					$sum2_processor_tidakrekomen	+= pow($train['processor']-$u_processor_tidakrekomen,2);
					$sum2_rate_tidakrekomen			+= pow($train['rate']-$u_rate_tidakrekomen,2);
				}
			}
			if ($n_rekomen<=1){
				$n_rekomen=2;
			}
			if ($n_tidakrekomen<=1) {
				$n_tidakrekomen=2;
			}
			//ngitung standart deviasi
			$std_merk_rekomen			= sqrt($sum2_merk_rekomen/($n_rekomen-1));
			$std_ram_rekomen 			= sqrt($sum2_ram_rekomen/($n_rekomen-1));
			$std_vga_rekomen			= sqrt($sum2_vga_rekomen/($n_rekomen-1));
			$std_hdd_rekomen			= sqrt($sum2_hdd_rekomen/($n_rekomen-1));
			$std_lcd_rekomen 			= sqrt($sum2_lcd_rekomen/($n_rekomen-1));
			$std_processor_rekomen		= sqrt($sum2_processor_rekomen/($n_rekomen-1));
			$std_rate_rekomen			= sqrt($sum2_rate_rekomen/($n_rekomen-1));

			$std_merk_tidakrekomen			= sqrt($sum2_merk_tidakrekomen/($n_tidakrekomen-1));
			$std_ram_tidakrekomen 			= sqrt($sum2_ram_tidakrekomen/($n_tidakrekomen-1));
			$std_vga_tidakrekomen			= sqrt($sum2_vga_tidakrekomen/($n_tidakrekomen-1));
			$std_hdd_tidakrekomen			= sqrt($sum2_hdd_tidakrekomen/($n_tidakrekomen-1));
			$std_lcd_tidakrekomen 			= sqrt($sum2_lcd_tidakrekomen/($n_tidakrekomen-1));
			$std_processor_tidakrekomen		= sqrt($sum2_processor_tidakrekomen/($n_tidakrekomen-1));
			$std_rate_tidakrekomen			= sqrt($sum2_rate_tidakrekomen/($n_tidakrekomen-1));

			//array standart deviasi
			$std[0] = $std_merk_rekomen;
			$std[1] = $std_ram_rekomen ;
			$std[2] = $std_vga_rekomen;
			$std[3] = $std_hdd_rekomen;
			$std[4] = $std_lcd_rekomen;
			$std[5]	= $std_processor_rekomen;
			$std[6]	= $std_rate_rekomen;	

			$std[7] 	= $std_merk_tidakrekomen;
			$std[8] 	= $std_ram_tidakrekomen ;
			$std[9] 	= $std_vga_tidakrekomen;
			$std[10] 	= $std_hdd_tidakrekomen;
			$std[11] 	= $std_lcd_tidakrekomen;
			$std[12]	= $std_processor_tidakrekomen;
			$std[13]	= $std_rate_tidakrekomen;	

			//rata-rata
			$avg[0] = $u_merk_rekomen;
			$avg[1] = $u_ram_rekomen ;
			$avg[2] = $u_vga_rekomen;
			$avg[3] = $u_hdd_rekomen;
			$avg[4] = $u_lcd_rekomen;
			$avg[5]	= $u_processor_rekomen;
			$avg[6]	= $u_rate_rekomen;	

			$avg[7] 	= $u_merk_tidakrekomen;
			$avg[8] 	= $u_ram_tidakrekomen ;
			$avg[9] 	= $u_vga_tidakrekomen;
			$avg[10] 	= $u_hdd_tidakrekomen;
			$avg[11] 	= $u_lcd_tidakrekomen;
			$avg[12]	= $u_processor_tidakrekomen;
			$avg[13]	= $u_rate_tidakrekomen;	
		}

		return array(
			'avg' =>$avg ,
			'std' =>$std,
		 );

	}


	function gaussian($x , $u, $std){
		if($u==0){
			$u=1;
		}
		if($std==0){
			$std=1;
		}

        return (1.0/($std* sqrt(2*3.1415926535))) * exp(-(($x-$u)*($x-$u)) / (2.0 * $std * $std));
    }

    function compare($merk,$ram,$vga,$hdd,$lcd,$processor,$rate,$avg,$std){
        $YA         = $this->gaussian($merk,$avg[0],$std[0]) * $this->gaussian($ram,$avg[1],$std[1]) * $this->gaussian($vga,$avg[2],$std[2]) * $this->gaussian($hdd,$avg[3],$std[3]) * $this->gaussian($lcd,$avg[4],$std[4]) * $this->gaussian($processor,$avg[5],$std[5]) * $this->gaussian($rate,$avg[6],$std[6]);

        $TIDAK  = $this->gaussian($merk,$avg[7],$std[7]) * $this->gaussian($ram,$avg[8],$std[8]) * $this->gaussian($vga,$avg[9],$std[9]) * $this->gaussian($hdd,$avg[10],$std[10]) * $this->gaussian($lcd,$avg[11],$std[11]) * $this->gaussian($processor,$avg[12],$std[12]) * $this->gaussian($rate,$avg[13],$std[13]);

        return $YA >= $TIDAK;
    }

    public function collaborative(){
		$avg_std = $this->avg_std($this->mymodels->GetData('data_training',''));
		$avg=$avg_std['avg'];
		$std=$avg_std['std'];
		$data=$this->mymodels->collaborative();

		if($data != NULL){
			$c=0;
			
			foreach($data as $data_tabel){
				if(($data_tabel['merk_produk'])=='ACER'){
					$merk='1';
				}
				else if(($data_tabel['merk_produk'])=='ASUS'){
					$merk='2';
				}
				else if(($data_tabel['merk_produk'])=='DELL'){
					$merk='3';
				}
				else if(($data_tabel['merk_produk'])=='HP'){
					$merk='4';
				}
				else if(($data_tabel['merk_produk'])=='LENOVO'){
					$merk='5';
				}
				elseif ($data_tabel['merk_produk']=='TOSHIBA') {
					$merk='6';
				}
				// else{
				// 	$merk=0;
				// }
				//var_dump($data_tabel['merk_produk']);

				$prediksi[$c] = ($this->compare($merk,$data_tabel['ram_produk'],$data_tabel['vga_produk'],$data_tabel['hdd_produk'],$data_tabel['lcd_produk'],$data_tabel['processor_produk'],$data_tabel['rate'],$avg,$std) == 1 ? "P":"TP") ;
				//var_dump($merk);
					
					++$c;
					$hasil[$c-1]['prediksi']=($prediksi[$c-1]=="P" ? "YA" : "TIDAK");
				}
			}
			return array(
				'data_tabel'=>$data,
				'hasil'=>$hasil,
			);
		}

	function contentbased($id){
		$data_training = $this->mymodels->contentbased($id);

		if ($data_training== NULL) {
			return array(
				'data_tabel'=>array(),
				'hasil'=>array(),
				);
		}
		else{
			$avg_std = $this->avg_std($data_training);
			$avg=$avg_std['avg'];
			$std=$avg_std['std'];
			$data=$this->mymodels->contentbased_uji($id);

			if($data != NULL){
				$c=0;
				foreach($data as $data_tabel_cb){
					if(($data_tabel_cb['merk_produk'])=='ACER'){
						$merk='1';
					}
					else if(($data_tabel_cb['merk_produk'])=='ASUS'){
						$merk='2';
					}
					else if(($data_tabel_cb['merk_produk'])=='DELL'){
						$merk='3';
					}
					else if(($data_tabel_cb['merk_produk'])=='HP'){
						$merk='4';
					}
					else if(($data_tabel_cb['merk_produk'])=='LENOVO'){
						$merk='5';
					}
					elseif ($data_tabel_cb['merk_produk']=='TOSHIBA') {
						$merk='6';
					}


					$prediksi[$c] = ($this->compare($merk,$data_tabel_cb['ram_produk'],$data_tabel_cb['vga_produk'],$data_tabel_cb['hdd_produk'],$data_tabel_cb['lcd_produk'],$data_tabel_cb['processor_produk'],$data_tabel_cb['rate'],$avg,$std) == 1 ? "P":"TP") ;
					//var_dump($merk);
						
						++$c;
						$hasil[$c-1]['prediksi']=($prediksi[$c-1]=="P" ? "YA" : "TIDAK");
					}
				}
				
			return array(
				'data_tabel'=>$data,
				'hasil'=>$hasil,
				);
		}

	}				

		

	function index(){
	if($this->session->userdata('status') != "login"){
			$com = array(
			//'collaborative'=>$this->collaborative(),
			//'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_user',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);
			$this->load->view('user/hal_pertama',$com);
		}
		else{
			$username = $this->session->userdata('username');
			//$email=str_replace("-", "@", $email);

			$where = 'where username = "'.$username.'"';
			$data_user = $this->mymodels->GetData('user',$where);
			//var_dump($data_user[0]['id_user']);
			$login = array(
			//'collaborative'=>$this->collaborative(),
			//'contentbased'=>$this->contentbased($data_user[0]['id_user']),
			//'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);
			$this->load->view('user/hal_pertama_user',$login);
		}
	}

	function register(){
		$com = array(
			'header_user' => $this->load->view('user/header_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);
		$this->load->view('user/hal_register',$com);
	}

	function input_registrasi(){
		$tgl=date('d-m-Y');

		$data=  array(
			'nama'=>$_POST['nama'],
			'username'=>$_POST['username'],
			'password' =>md5($_POST['password']) ,
		 );
		$com = array(
			//'data'=>$this->mymodels->getData('produk',''),
			////'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_user',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);

		 $perintah=$this->mymodels->InsertData('user',$data); 
		 if($perintah>=1){
			echo "<script> alert('Registrasi berhasil, silahkan login')</script>";
			
			redirect('C_user');
		}
		else{
			echo "<script> alert('Registrasi Gagal')</script>";
			$this->load->view('user/hal_register',$com);
		}
		 
	}
	

	function login_user(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' =>md5($password)
			);

		$cek = $this->mymodels->cek_login("user",$where)->num_rows();
		$login = array(
			//'data'=>$this->mymodels->getData('produk',''),
			//'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);

		$com = array(
			//'data'=>$this->mymodels->getData('produk',''),
			//'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_user',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);

		if($cek > 0){

			$data_session = array(
				'nama' => $nama,
				'username' => $username,
				'status' => "login",
				'keranjang'=> array(),

				);

			$this->session->set_userdata($data_session);
			redirect('C_user');
		}
		else{
			echo  "<script> alert('Login Gagal')</script>";
			redirect('C_user');
		}
		
	}

	function logout(){
		$com = array(
			//'data'=>$this->mymodels->getData('produk',''),
			//'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_user',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);
		$this->session->sess_destroy();
		redirect('C_user');
	}

	function profil_user($username){
		if($this->session->userdata('status') != "login"){
			redirect('C_user');
		}
		else{
			$username=$email;
			// $where = "where email like %".$email."%";
			// $data=$this->mymodels->GetData('peserta',$where);
			$where = array(
				'username' => $username
				);
			$data=$this->mymodels->cek_login('user',$where)->row_array();

			$login = array(
			//'data'=>$this->mymodels->getData('user',''),
			//'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_login',array(),true),
			//'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
			'nama'=>$data['nama'],
			'username'=>$data['username'],
			//'password_user' =>md5($_POST['password_user']) ,
			//'no_hp_user' =>$data['no_hp_user'] ,
			//'gender_user' =>$data['gender_user'] ,
			//'tanggal_pembuatan' =>$data['tanggal_pembuatan'],
			);
			$this->load->view('user/hal_profil',$login);
		}
		//echo "string";

	}
	
	function update_profil($username){
		if($this->session->userdata('status') != "login"){
			redirect('C_user');
		}
		else{
			$username=$username;
			// $where = "where email like %".$email."%";
			// $data=$this->mymodels->GetData('peserta',$where);
			$where = array(
				'username' => $username
				);

			$tgl=date('d-m-Y');

			$data=  array(
				'nama'=>$_POST['nama'],
				//'email_user'=>$_POST['email_user'],
				'password' =>md5($_POST['password']) ,
				//'gender_user' =>$_POST['gender_user'] ,
				//'tanggal_pembuatan' =>$tgl,
			 );

			$login = array(
				//'data'=>$this->mymodels->getData('user',''),
				//'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
				'header_user' => $this->load->view('user/header_login',array(),true),
				//'carousel_user' => $this->load->view('user/carousel_user',array(),true),
				'sidebar_user' => $this->load->view('user/sidebar_profil',array(),true),
				'nama'=>$data['nama'],
				'username'=>$data['username'],
				//'no_hp_user' =>$_POST['no_hp_user'] ,
				//'password_user' =>md5($_POST['password_user']) ,
				//'gender_user' =>$data['gender_user'] ,
				//'tanggal_pembuatan' =>$data['tanggal_pembuatan'],
				);

			 $perintah=$this->mymodels->UpdateData('user',$data,$where); 
			 if($perintah>=1){
				echo "<script> alert('Update Data Berhasil')</script>";
				$this->load->view('user/hal_profil',$login);
			}
			else{
				echo "<script> alert('Update Data Gagal')</script>";
				$this->load->view('user/hal_profil',$login);
			}
		}
		 
	}

	

	function halaman_user(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login_admin');
		}
		else{
			$com = array(
			'data'=>$this->mymodels->getData('user',''),
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			'jss_admin' => $this->load->view('admin/jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_user',$com);
		}
	}

}