<?php 
class Ongkir extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function index(){
        if(empty($this->session->userdata('username'))){
            redirect('Adminpanel');
        }
        $data['ongkir']= $this->Mcrud->ongkir()->result();
        $this->template->load('layout_admin', 'admin/ongkir/index', $data);
    }

    public function add(){
        $data['bayar']= $this->Mcrud->get_all_data('tbl_kurir')->result();
        $data['kota']= $this->Mcrud->get_all_data('tbl_kota')->result();
        $this->template->load('layout_admin', 'admin/ongkir/form_add', $data);
    }

    public function save(){
        $kurir = $this->input->post('idkurir');
        $kotaasal = $this->input->post('idkotaasal');
        $kotatujuan = $this->input->post('idkotatujuan');
        $biaya = $this->input->post('biaya');
        $dataInsert = array(
            'idKurir' => $kurir,
            'idKotaAsal' => $kotaasal,
            'idKotaTujuan' => $kotatujuan,
            'biaya' => $biaya
        );
        $this->Mcrud->insert('tbl_biaya_kirim', $dataInsert);
        redirect('Ongkir');
    }

    public function getid($id){
        $data['kota']= $this->Mcrud->get_all_data('tbl_kota')->result();
        $data['kurir']= $this->Mcrud->get_all_data('tbl_kurir')->result();
        $data['ongkir']= $this->Mcrud->ongkir_by_id($id)->row_object();
        $this->template->load('layout_admin', 'admin/ongkir/form_edit', $data);
    }

    public function edit(){
        $id = $this->input->post('id');
        $kurir = $this->input->post('idkurir');
        $kotaasal = $this->input->post('idkotaasal');
        $kotatujuan = $this->input->post('idkotatujuan');
        $biaya = $this->input->post('biaya');

        $dataUpdate = array(
            'idKurir' => $kurir,
            'idKotaAsal' => $kotaasal,
            'idKotaTujuan' => $kotatujuan,
            'biaya' => $biaya
        );
        $this->Mcrud->update('tbl_biaya_kirim', $dataUpdate, 'idBiayaKirim', $id);
        redirect('Ongkir');
    }

    public function delete($id){
        $this->Mcrud->delete('tbl_biaya_kirim', 'idBiayaKirim', $id);
        if($this->db->rows()){
            redirect('Ongkir');
        } else {
            echo "Data gagal dihapus";
        }
    }
}