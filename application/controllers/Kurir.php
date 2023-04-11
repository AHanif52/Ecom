<?php 
class Kurir extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function index(){
        if(empty($this->session->userdata('username'))){
            redirect('Adminpanel');
        }
        $data['kurir']= $this->Mcrud->get_all_data('tbl_kurir')->result();
        $this->template->load('layout_admin', 'admin/kurir/index', $data);
    }

    public function add(){
        $this->template->load('layout_admin', 'admin/kurir/form_add');
    }

    public function save(){
        $namakurir = $this->input->post('kurir');
        $dataInsert = array(
            'namaKurir' => $namakurir
        );
        $this->Mcrud->insert('tbl_kurir', $dataInsert);
        redirect('kurir');
    }

    public function getid($id){
        $datawhere = array(
            'idKurir' => $id
        );
        $data['kurir']= $this->Mcrud->get_by_id('tbl_kurir', $datawhere)->row_object();
        $this->template->load('layout_admin', 'admin/kurir/form_edit', $data);
    }

    public function edit(){
        $id = $this->input->post('id');
        $namakurir = $this->input->post('namakurir');
        $dataUpdate = array(
            'namaKurir' => $namakurir
        );
        $this->Mcrud->update('tbl_kurir', $dataUpdate, 'idKurir', $id);
        redirect('kurir');
    }

    public function delete($id){
        $this->Mcrud->delete('tbl_kurir', 'idKurir', $id);
        if($this->db->affected_rows()){
            redirect('kurir');
        } else {
            echo "Data gagal dihapus";
        }
    }
}