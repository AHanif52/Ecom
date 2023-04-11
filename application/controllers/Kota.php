<?php 
class Kota extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function index(){
        if(empty($this->session->userdata('username'))){
            redirect('Adminpanel');
        }
        $data['kota']= $this->Mcrud->get_all_data('tbl_kota')->result();
        $this->template->load('layout_admin', 'admin/kota/index', $data);
    }

    public function add(){
        $this->template->load('layout_admin', 'admin/kota/form_add');
    }

    public function save(){
        $idkota = $this->input->post('idkota');
        $namakota = $this->input->post('namakota');
        $dataInsert = array(
            'IdKota' => $idkota,
            'NamaKota' => $namakota
        );
        $this->Mcrud->insert('tbl_kota', $dataInsert);
        redirect('Kota');
    }

    public function getid($id){
        $datawhere = array(
            'IdKota' => $id
        );
        $data['kota']= $this->Mcrud->get_by_id('tbl_kota', $datawhere)->row_object();
        $this->template->load('layout_admin', 'admin/kota/form_edit', $data);
    }

    public function edit(){
        $id = $this->input->post('id');
        $namakota = $this->input->post('namakota');
        $dataUpdate = array(
            'NamaKota' => $namakota
        );
        $this->Mcrud->update('tbl_kota', $dataUpdate, 'idKota', $id);
        redirect('kota');
    }

    public function delete($id){
        $this->Mcrud->delete('tbl_kota', 'idKota', $id);
        if($this->db->affected_rows()){
            redirect('kota');
        } else {
            echo "Data gagal dihapus";
        }
    }
}