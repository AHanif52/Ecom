<?php

class Mmember extends CI_Model{
    
    public function cek_login($u, $p){
        $q = $this->db->get_where('tbl_member', array('username' => $u, 'password' => $p));
        return $q;
    }

    public function get_toko_by_member(){
        $id = $this->session->userdata('id');
        $q = $this->db->get_where('tbl_toko', array('idKonsumen' => $id));
        return $q;
    }

    public function insert_toko($data){
        $this->db->insert('tbl_toko', $data);
    }

    public function get_produk_by_id($idproduk){
        $q = $this->db->get_where('tbl_produk', array('idProduk' => $idproduk));
        return $q;
    }

    

}
