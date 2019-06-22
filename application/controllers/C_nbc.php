<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//defined('BASEPATH')? define('BASEPATH', 1):null;
class C_nbc extends CI_Controller {

	public $item_keranjang=0;

	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		$avg_std = $this->avg_std();
	}

	function avg_std(){ //standar deviassi dan rata-rata
		$training = $this->mymodels->GetData('data_training',''); 	//1
		if($training != NULL) { 	 //parameter pertama								//2
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
			foreach ($training as $train){ 							//3
				if($train['rekomen'] == "YA"){ 						//4    //mencari interval
					$n_rekomen++;							
					$sum_merk_rekomen			= $train['merk'];
					$sum_ram_rekomen 			= $train['ram'];
					$sum_vga_rekomen			= $train['vga'];
					$sum_hdd_rekomen			= $train['hdd'];
					$sum_lcd_rekomen 			= $train['lcd'];
					$sum_processor_rekomen		= $train['processor'];
					$sum_rate_rekomen			= $train['rate'];
				}
				else if($train['rekomen'] == "TIDAK"){ 				//5
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
			}														//6

			//rata-rata
			$u_merk_rekomen			= $sum_merk_rekomen/$n_rekomen;						//7
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
			foreach ($training as $train){														//8
				if($train['rekomen'] == "YA"){													//9
					$sum2_merk_rekomen			+= pow($train['merk']-$u_merk_rekomen,2);
					$sum2_ram_rekomen 			+= pow($train['ram']-$u_ram_rekomen,2);
					$sum2_vga_rekomen			+= pow($train['vga']-$u_vga_rekomen,2);
					$sum2_hdd_rekomen			+= pow($train['hdd']-$u_hdd_rekomen,2);
					$sum2_lcd_rekomen 			+= pow($train['lcd']-$u_lcd_rekomen,2);
					$sum2_processor_rekomen		+= pow($train['processor']-$u_processor_rekomen,2);
					$sum2_rate_rekomen			+= pow($train['rate']-$u_rate_rekomen,2);
				}
				else if($train['rekomen'] == "TIDAK"){											//10
					$sum2_merk_tidakrekomen			+= pow($train['merk']-$u_merk_tidakrekomen,2);
					$sum2_ram_tidakrekomen 			+= pow($train['ram']-$u_ram_tidakrekomen,2);
					$sum2_vga_tidakrekomen			+= pow($train['vga']-$u_vga_tidakrekomen,2);
					$sum2_hdd_tidakrekomen			+= pow($train['hdd']-$u_hdd_tidakrekomen,2);
					$sum2_lcd_tidakrekomen 			+= pow($train['lcd']-$u_lcd_tidakrekomen,2);
					$sum2_processor_tidakrekomen	+= pow($train['processor']-$u_processor_tidakrekomen,2);
					$sum2_rate_tidakrekomen			+= pow($train['rate']-$u_rate_tidakrekomen,2);
				}
			}																				//11

			//menghitung standart deviasi 
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

		return array(																		//12
			'avg' =>$avg ,
			'std' =>$std,
		 );




	}


	public function gaussian($x , $u, $std){ 	//mencari yes no												//1
		
        $g= (1.0/($std* sqrt(2*3.1415926535))) * exp(-(($x-$u)*($x-$u)) / (2.0 * $std * $std)); //2

        return $g; 																				//3
    }


    function compare($merk,$ram,$vga,$hdd,$lcd,$processor,$rate,$avg,$std){							
        $YA         = $this->gaussian($merk,$avg[0],$std[0]) * $this->gaussian($ram,$avg[1],$std[1]) * $this->gaussian($vga,$avg[2],$std[2]) * $this->gaussian($hdd,$avg[3],$std[3]) * $this->gaussian($lcd,$avg[4],$std[4]) * $this->gaussian($processor,$avg[5],$std[5]) * $this->gaussian($rate,$avg[6],$std[6]);

        $TIDAK  = $this->gaussian($merk,$avg[7],$std[7]) * $this->gaussian($ram,$avg[8],$std[8]) * $this->gaussian($vga,$avg[9],$std[9]) * $this->gaussian($hdd,$avg[10],$std[10]) * $this->gaussian($lcd,$avg[11],$std[11]) * $this->gaussian($processor,$avg[12],$std[12]) * $this->gaussian($rate,$avg[13],$std[13]);

        return $YA >= $TIDAK;
    }
    function YA($merk,$ram,$vga,$hdd,$lcd,$processor,$rate,$avg,$std){
        return $this->gaussian($merk,$avg[0],$std[0]) * $this->gaussian($ram,$avg[1],$std[1]) * $this->gaussian($vga,$avg[2],$std[2]) * $this->gaussian($hdd,$avg[3],$std[3]) * $this->gaussian($lcd,$avg[4],$std[4]) * $this->gaussian($processor,$avg[5],$std[5]) * $this->gaussian($rate,$avg[6],$std[6]);
    }

    function TIDAK($merk,$ram,$vga,$hdd,$lcd,$processor,$rate,$avg,$std){
        return $this->gaussian($merk,$avg[7],$std[7]) * $this->gaussian($ram,$avg[8],$std[8]) * $this->gaussian($vga,$avg[9],$std[9]) * $this->gaussian($hdd,$avg[10],$std[10]) * $this->gaussian($lcd,$avg[11],$std[11]) * $this->gaussian($processor,$avg[12],$std[12]) * $this->gaussian($rate,$avg[13],$std[13]);
    }
    
    function confmatrix($class,$prediksi){
        if($class=="P"){ // if kelas positif
            if($prediksi == "P"){ // True positive
                return "TP";
            }
            else if($prediksi == "TP"){ // false negative
                return "FN";
            }
        }
        else if($class=="TP"){ // if kelas negatif
            if($prediksi == "P"){  //  false positive
                return "FP";
            }
            else if($prediksi == "TP"){ // true negative
                return "TN";
            }
        }
    }

	public function halaman_nbc(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login_admin');
		}
		else{
			$com = array(
			'data_training'=>$this->mymodels->getData('data_training',''),
			'data'=>$this->mymodels->getData('data_uji',''),
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			'jss_admin' => $this->load->view('admin/jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_nbc',$com);
		}
	}

	function rekomendasi(){
		$avg_std = $this->avg_std();
		$avg=$avg_std['avg'];
		$std=$avg_std['std'];
		var_dump($std);
		$data=$this->mymodels->getData('data_uji','');
		$TP=0;
		$TN=0;
		$FN=0;
		$FP=0;
		if($data != NULL){
			$c=0;
			foreach($data as $data_tabel){

				$prediksi[$c] = ($this->compare($data_tabel['merk'],$data_tabel['ram'],$data_tabel['vga'],$data_tabel['hdd'],$data_tabel['lcd'],$data_tabel['processor'],$data_tabel['rate'],$avg,$std) == 1 ? "P":"TP") ;
					
					++$c;
					
					$hasil[$c-1]['YA']= $this->YA($data_tabel['merk'],$data_tabel['ram'],$data_tabel['vga'],$data_tabel['hdd'],$data_tabel['lcd'],$data_tabel['processor'],$data_tabel['rate'],$avg,$std);
				

					$hasil[$c-1]['TIDAK']=$this->TIDAK($data_tabel['merk'],$data_tabel['ram'],$data_tabel['vga'],$data_tabel['hdd'],$data_tabel['lcd'],$data_tabel['processor'],$data_tabel['rate'],$avg,$std);
				

					$hasil[$c-1]['prediksi']=($prediksi[$c-1]=="P" ? "YA" : "TIDAK");
				

					$hasil[$c-1]['confmatrix']=$this->confmatrix(($data_tabel['rekomen'] == "YA" ? "P" : "TP"),$prediksi[$c-1]);
				   
					if ($this->confmatrix(($data_tabel['rekomen'] == "YA" ? "P" : "TP"),$prediksi[$c-1]) == "TP"){
						$TP++;
					}
					if ($this->confmatrix(($data_tabel['rekomen'] == "YA" ? "P" : "TP"),$prediksi[$c-1]) == "TN"){
						$TN++;
					}
					if ($this->confmatrix(($data_tabel['rekomen'] == "YA" ? "P" : "TP"),$prediksi[$c-1]) == "FP"){
						$FP++;
					}
					if ($this->confmatrix(($data_tabel['rekomen'] == "YA" ? "P" : "TP"),$prediksi[$c-1]) == "FN"){
						$FN++;
					}

			}
		}

		$confmatrix['recall'] = $TP / ($TP+$FN);
		$confmatrix['precision'] = $TP / ($TP+$FP);
		$confmatrix['accuracy'] = ($TP+$TN)/($TP+$TN+$FP+$FN);
		$confmatrix['error_rate'] = ($FP+$FN) / ($TP+$TN+$FP+$FN);

		$confmatrix['TP']=$TP;
		$confmatrix['TN']=$TN;
		$confmatrix['FP']=$FP;
		$confmatrix['FN']=$FN;

		return array(
			'data_tabel'=>$data,
			'hasil'=>$hasil,
			'confmatrix'=>$confmatrix,);

	}

	function cek_prediksi(){
		if ($_POST['merk']==ctype_upper('acer')){
			$merk=1;
		}
		elseif ($_POST['merk']==ctype_upper('asus')) {
				$merk=2;
		}
		elseif ($_POST['merk']==ctype_upper('dell')) {
				$merk=3;
		}
		elseif ($_POST['merk']==ctype_upper('hp')) {
				$merk=4;
		}
		elseif ($_POST['merk']==ctype_upper('lenovo')) {
				$merk=5;
		}
		elseif ($_POST['merk']==ctype_upper('toshiba')) {
				$merk=6;
		}

		var_dump($_POST['merk']);

		$atribut = array(
			'data_training'=>$this->mymodels->getData('data_training',''),
			'data'=>$this->mymodels->getData('data_uji',''),
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			'jss_admin' => $this->load->view('admin/jss_admin',array(),true),
			'merk'=>$merk, 
			'ram' =>$_POST['ram'],
			'vga' =>$_POST['vga'],
			'hdd' =>$_POST['hdd'],
			'lcd' =>$_POST['lcd'],
			'processor' => $_POST['processor'],
			'rate'=>$_POST['rate'],);

		$avg_std = $this->avg_std();
		$avg=$avg_std['avg'];
		$std=$avg_std['std'];

		$prediksi= ($this->compare($merk,$_POST['ram'],$_POST['vga'],$_POST['hdd'],$_POST['lcd'],$_POST['processor'],$_POST['rate'],$avg,$std) == 1 ? "YA":"TIDAK") ;
		$data= array('prediksi'=>$prediksi);
		$this->mymodels->InsertData('test',$data);

		$this->load->view('admin/halaman_cek_prediksi',$atribut);
		 
	}

	public function halaman_nbc_eval(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login_admin');
		 }
		 else{
			$com = array(
			'data_training'=>$this->mymodels->getData('data_training',''),
			'data'=>$this->mymodels->getData('data_uji',''),
			'rekomendasi'=>$this->rekomendasi(),
			'header_admin' => $this->load->view('admin/header_admin',array(),true),
			'jss_admin' => $this->load->view('admin/jss_admin',array(),true),
			);
			$this->load->view('admin/halaman_evaluasi_nbc',$com);
		}
	}

	public function collaborative(){
		$avg_std = $this->avg_std();
		$avg=$avg_std['avg'];
		$std=$avg_std['std'];
		$data=$this->mymodels->collaborative();

		if($data != NULL){
			$c=0;
			foreach($data as $data_tabel){
				if(($data_tabel['merk_produk'])=='Acer'){
					$merk=1;
				}
				else if(($data_tabel['merk_produk'])=='ASUS'){
					$merk=2;
				}
				else if(($data_tabel['merk_produk'])=='Dell'){
					$merk=3;
				}
				else if(($data_tabel['merk_produk'])=='HP'){
					$merk=4;
				}
				else if(($data_tabel['merk_produk'])=='Lenovo'){
					$merk=5;
				}
				elseif ($data_tabel['merk_produk']=='toshiba') {
								$merk=6;
				}

				$prediksi[$c] = ($this->compare($merk,$data_tabel['ram_produk'],$data_tabel['vga_produk'],$data_tabel['hdd_produk'],$data_tabel['lcd_produk'],$data_tabel['processor_produk'],$data_tabel['rate'],$avg,$std) == 1 ? "P":"TP") ;
				var_dump($merk);
					
					++$c;
					$hasil[$c-1]['prediksi']=($prediksi[$c-1]=="P" ? "YA" : "TIDAK");
				}
			}				

		return array(
			'data_tabel'=>$data,
			'hasil'=>$hasil,
			);
	}

	function contentbased(){
		$avg_std = $this->avg_std($this->mymodels->contentbased());
		$avg=$avg_std['avg'];
		$std=$avg_std['std'];
		$data=$this->mymodels->collaborative();

		if($data != NULL){
			$c=0;
			foreach($data as $data_tabel_cb){
				if(($data_tabel_cb['merk_produk'])=='Acer'){
					$merk=1;
				}
				else if(($data_tabel_cb['merk_produk'])=='ASUS'){
					$merk=2;
				}
				else if(($data_tabel_cb['merk_produk'])=='Dell'){
					$merk=3;
				}
				else if(($data_tabel_cb['merk_produk'])=='HP'){
					$merk=4;
				}
				else if(($data_tabel_cb['merk_produk'])=='Lenovo'){
					$merk=5;
				}
				elseif ($data_tabel_cb['merk_produk']=='toshiba') {
								$merk=6;
				}


				$prediksi[$c] = ($this->compare($merk,$data_tabel_cb['ram_produk'],$data_tabel_cb['vga_produk'],$data_tabel_cb['hdd_produk'],$data_tabel_cb['lcd_produk'],$data_tabel_cb['processor_produk'],$data_tabel_cb['rate'],$avg,$std) == 1 ? "P":"TP") ;
				//var_dump($merk);
					
					++$c;
					$hasil[$c-1]['prediksi']=($prediksi[$c-1]=="P" ? "YA" : "TIDAK");
				}
			}
		else{
			echo "Belum Ada Rekomendasi Untuk Anda";
		}	
		return array(
			'data_tabel'=>$data,
			'hasil'=>$hasil,
			);
	}

	public function halaman_collaborative(){
		if($this->session->userdata('status') != "login"){
			$com = array(
			'collaborative'=>$this->collaborative(),
			'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_user',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);
			$this->load->view('user/hal_pertama',$com);
		}
		else{
			$login = array(
			'collaborative'=>$this->collaborative(),
			'jumlah_data'=>$this->mymodels->jumlah_data('produk'),
			'header_user' => $this->load->view('user/header_login',array(),true),
			'carousel_user' => $this->load->view('user/carousel_user',array(),true),
			'sidebar_user' => $this->load->view('user/sidebar_user',array(),true),
			);
			$this->load->view('user/hal_pertama',$login);
		}
	}


	function avg_std_test($data_training){
		$training = $this->mymodels->GetData($data_training,''); 	//1
		//var_dump($training);
		if($training != NULL) { 									//2
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
			foreach ($training as $train){ 							//3
				if($train['rekomen'] == "YA"){ 						//4
					$n_rekomen++;							
					$sum_merk_rekomen			= $train['merk'];
					$sum_ram_rekomen 			= $train['ram'];
					$sum_vga_rekomen			= $train['vga'];
					$sum_hdd_rekomen			= $train['hdd'];
					$sum_lcd_rekomen 			= $train['lcd'];
					$sum_processor_rekomen		= $train['processor'];
					$sum_rate_rekomen			= $train['rate'];
				}
				else if($train['rekomen'] == "TIDAK"){ 				//5
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
			}														//6

			//rata-rata
			$u_merk_rekomen			= $sum_merk_rekomen/$n_rekomen;						//7
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
			foreach ($training as $train){														//8
				if($train['rekomen'] == "YA"){													//9
					$sum2_merk_rekomen			+= pow($train['merk']-$u_merk_rekomen,2);
					$sum2_ram_rekomen 			+= pow($train['ram']-$u_ram_rekomen,2);
					$sum2_vga_rekomen			+= pow($train['vga']-$u_vga_rekomen,2);
					$sum2_hdd_rekomen			+= pow($train['hdd']-$u_hdd_rekomen,2);
					$sum2_lcd_rekomen 			+= pow($train['lcd']-$u_lcd_rekomen,2);
					$sum2_processor_rekomen		+= pow($train['processor']-$u_processor_rekomen,2);
					$sum2_rate_rekomen			+= pow($train['rate']-$u_rate_rekomen,2);
				}
				else if($train['rekomen'] == "TIDAK"){											//10
					$sum2_merk_tidakrekomen			+= pow($train['merk']-$u_merk_tidakrekomen,2);
					$sum2_ram_tidakrekomen 			+= pow($train['ram']-$u_ram_tidakrekomen,2);
					$sum2_vga_tidakrekomen			+= pow($train['vga']-$u_vga_tidakrekomen,2);
					$sum2_hdd_tidakrekomen			+= pow($train['hdd']-$u_hdd_tidakrekomen,2);
					$sum2_lcd_tidakrekomen 			+= pow($train['lcd']-$u_lcd_tidakrekomen,2);
					$sum2_processor_tidakrekomen	+= pow($train['processor']-$u_processor_tidakrekomen,2);
					$sum2_rate_tidakrekomen			+= pow($train['rate']-$u_rate_tidakrekomen,2);
				}
			}																				//11

			//menghitung standart deviasi 
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

		$output = array(																		//12
			'avg' =>$avg ,
			'std' =>$std,
		 );

		//echo "<br>";
		echo json_encode($output);
		//var_dump($output);
		//echo "a";

		return $output;
	}

	public function gaussian_test($x , $u, $std){
		
        $g= (1.0/($std* sqrt(2*3.1415926535))) * exp(-(($x-$u)*($x-$u)) / (2.0 * $std * $std));
        echo $g;
        return $g;
    }

}