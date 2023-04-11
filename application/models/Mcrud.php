<?php 
class Mcrud extends CI_Model{

    public function get_all_data($tabel){
        $q=$this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data){
        $this->db->insert($tabel, $data);
    }

    public function get_by_id($tabel, $id){
        return $this->db->get_where($tabel, $id);
    }

    public function update($tabel, $data, $pk, $id){
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }

    public function delete($tabel, $pk, $id){
        $this->db->where($pk, $id);
        $this->db->delete($tabel);
    }

    public function kota()
    {
        $this->db->select('*');
        $this->db->from('tbl_kota');
        $query = $this->db->get();
        return $query;
    }

    public function ongkir(){
        $query = $this->db->query("SELECT b.idBiayaKirim, k.namaKota AS asal, 
        j.namaKota AS tujuan, b.biaya, r.namaKurir FROM tbl_biaya_kirim b Join tbl_kota k ON k.idKota = b.idKotaAsal 
        Join tbl_kota j ON j.idKota = b.idKotaTujuan Join tbl_kurir r ON r.idKurir = b.idKurir");
        return $query;
    }

    public function ongkir_by_id($id)
    {
        $query = $this->db->query("SELECT b.idBiayaKirim, k.idKota AS idasal, k.namaKota AS asal, j.namaKota AS tujuan, j.idKota AS idtujuan, b.biaya, r.idKurir, r.namaKurir FROM tbl_biaya_kirim b Join tbl_kota k ON k.idKota = b.idKotaAsal 
        Join tbl_kota j ON j.idKota = b.idKotaTujuan Join tbl_kurir r ON r.idKurir = b.idKurir 
        Where b.idBiayaKirim = '$id'");
        return $query;
    }

    public function edit($id){
        $this->db->select('statusAktif');
        $this->db->from('tbl_member');
        $this->db->where('idKonsumen', $id);
        $query = $this->db->get();
        return $query;
    }
}