<?php 
class Akunmember extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function index(){
        if(empty($this->session->userdata('username'))){
            redirect('Adminpanel');
        }
        $data['member']= $this->Mcrud->get_all_data('tbl_member')->result();
        $this->template->load('layout_admin', 'admin/member/index', $data);
    }

    public function aktif($id){
        $dataupdate = array('statusAktif'=>'Y');
        $this->Mcrud->update('tbl_member', $dataupdate, 'idkonsumen', $id);
        redirect('akunmember');
    }

    public function non_aktif($id){
        $dataupdate = array('statusAktif'=>'N');
        $this->Mcrud->update('tbl_member', $dataupdate, 'idkonsumen', $id);
    redirect('akunmember');
    }
}