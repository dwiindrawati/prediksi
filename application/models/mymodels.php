<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodels extends CI_Model {
	public function Keranjang($where){
		// $data = $this->db->query('select * from keranjang,,produk WHERE keranjang.id_produk = produk.id_produk and keranjang.id_user = '.$where);
		// return $data->result_array();

		$this->db->select('*');
		$this->db->from('keranjang');
		$this->db->join('produk','keranjang.id_produk=produk.id_produk','left');
		$this->db->where('keranjang.id_user='.$where);

		return $this->db->get()->result_array();

	}
	public function belum_terbayar($where){
		// $data = $this->db->query('select * from detail_beli,pembelian,produk WHERE detail_beli.id_beli=pembelian.id_beli and pembelian.status_pembelian="belum terbayar" and detail_beli.id_produk=produk.id_produk and detail_beli.id_user = '.$where);
		// return $data->result_array();
		$this->db->select('*');
		$this->db->from('detail_beli');
		$this->db->join('pembelian','detail_beli.id_beli=pembelian.id_beli','left');
		$this->db->join('produk','detail_beli.id_produk=produk.id_produk','left');
		$this->db->where('pembelian.status_pembelian="belum terbayar"');
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	public function proses_pengiriman($where){
		// $data = $this->db->query('select * from transaksi,user,produk WHERE transaksi.id_produk = produk.id_produk and transaksi.status_transaksi= "dikirim" and transaksi.id_user = '.$where);
		// return $data->result_array();
		$this->db->select('*');
		$this->db->from('detail_beli');
		$this->db->join('pembelian','detail_beli.id_beli=pembelian.id_beli','left');
		$this->db->join('produk','detail_beli.id_produk=produk.id_produk','left');
		$this->db->where('pembelian.status_pembelian="dikirim"');
		$this->db->where($where);

		return $this->db->get()->result_array();
	}

	public function selesai($where=""){
		$this->db->select('*');
		$this->db->from('detail_beli');
		$this->db->join('pembelian','detail_beli.id_beli=pembelian.id_beli','left');
		$this->db->join('produk','detail_beli.id_produk=produk.id_produk','left');
		$this->db->where('pembelian.status_pembelian="selesai"');
		$this->db->where($where);

		return $this->db->get()->result_array();
	}

	public function pembayaran(){
		// $data = $this->db->query('select * from detail_beli,pembelian,produk WHERE detail_beli.id_beli=pembelian.id_beli and pembelian.status_pembelian="belum terbayar" and detail_beli.id_produk=produk.id_produk and detail_beli.id_user = '.$where);
		// return $data->result_array();
		$this->db->select('*');
		$this->db->from('detail_beli');
		$this->db->join('pembelian','detail_beli.id_beli=pembelian.id_beli','left');
		$this->db->join('pembayaran','detail_beli.id_beli=pembayaran.id_beli','left');
		$this->db->where('pembelian.status_pembelian="belum terbayar"');

		return $this->db->get()->result_array();
		
	}

	public function collaborative(){
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('rating','produk.id_produk=rating.id_produk');
		$this->db->group_by('produk.id_produk');
		return $this->db->get()->result_array();
	}

	
	// public function contentbased_training($id){
	// 	$this->db->select('*');
	// 	$this->db->from('produk');
	// 	$this->db->join('rating','produk.id_produk=rating.id_produk','left');
	// 	$this->db->where('rating.id_user = "'.$id.'"');
	// 	return $this->db->get()->result_array();
	// }

	public function contentbased_uji($id){
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('rating','produk.id_produk=rating.id_produk','left');
		$this->db->where('rating.id_user!='.$id);
		return $this->db->get()->result_array();
	}

	public function contentbased($id){
		$this->db->select('*');
		$this->db->from('prediksi_rekomendasi');
		$this->db->join('produk','produk.id_produk=prediksi_rekomendasi.id_produk','left');
		$this->db->join('user','user.id_user=prediksi_rekomendasi.id_user','left');
		$this->db->where('prediksi_rekomendasi.id_user = "'.$id.'"');
		return $this->db->get()->result_array();
	}

	public function GetData($tabel,$where=""){
		$data = $this->db->query('select * from '.$tabel.' '.$where);
		return $data->result_array();
	}

	public function InsertData($tabelname,$data){
		$res=$this->db->insert($tabelname,$data);
		return $res;
	}

	public function DeleteData($tabelname,$where){
		$res=$this->db->delete($tabelname,$where);
		return $res;
	}

	public function UpdateData($tabelname,$data,$where){
		$res=$this->db->update($tabelname,$data,$where);
		return $res;
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	function jumlah_data($tabel){
		return $this->db->get($tabel)->num_rows();
	}

	function jumlah_row($tabel,$where){
		return $this->db->get_where($tabel,$where)->num_rows();
	}

	function data($number,$offset){
		return $query = $this->db->get('produk',$number,$offset)->result();		
	}
}
