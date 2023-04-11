<?php 
class Mwishlist extends CI_Model {
    public function insert_wishlist($data){
        $this->db->insert('tbl_wishlist', $data);
    }
    function join3table(){
        $id = $this->session->userdata['id'];
        //$this->db->distinct();
        $this->db->select('w.idProduk, p.namaProduk, p.foto, p.harga, p.deskripsiProduk');
        $this->db->from('tbl_wishlist as w');
        $this->db->join('tbl_member as m','m.idKonsumen = w.idKonsumen');
        $this->db->join('tbl_produk as p','p.idProduk = w.idProduk' , 'LEFT');
        $this->db->where('w.idKonsumen', $id);  
        $this->db->group_by('w.idProduk');        
        $query = $this->db->get();
        return $query;
    }

    public function delete($id) {
        return $this->db->delete('tbl_wishlist', array("idProduk" => $id));
    }  
}