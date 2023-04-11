<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model{
	public function getHotel(){
		$data = $this->db->query("SELECT * FROM hotel where hotel_desc <> '' limit 100,10");
		return $data->result_array();
	}

	public function getBuku(){
		$data = $this->db->query("SELECT idProduk,deskripsiProduk FROM tbl_produk");
		return $data->result_array();
	}

	public function getDetailBuku($id){
		$data = $this->db->query("SELECT * FROM tbl_produk Where idProduk = $id");
		return $data->row_array();		
	}
}

?>