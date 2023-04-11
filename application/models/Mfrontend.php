<?php 
class Mfrontend extends CI_Model{

    public function get_all_data($tabel){
        $q=$this->db->get($tabel);
        return $q;
    }

    public function get_all_produk_terbaru(){
        $this->db->order_by('idProduk', 'DESC');
        $this->db->limit(4);
        return $this->db->get('tbl_produk');
    }

    public function insert_reg($data){
        $this->db->insert('tbl_member', $data);
    }

    public function getById($id) {
        return $this->db->get_where('tbl_produk', ["idProduk" => $id]);
    }

    public function get_Where_Cat($id){
        return $this->db->get_where('tbl_kategori', ['idKat'=>$id])->row();
    }
    

}