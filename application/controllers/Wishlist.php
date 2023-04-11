<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model(['Mwishlist', 'Mfrontend']);
    }

    public function add_to_wishlist($id){
        $id=$this->session->userdata('id');
        if (empty($id)) {
            redirect('home/login');
        } else {
            $data = array(
                'idKonsumen' => $this->session->userdata('id'), 
                'idProduk' => $id, 
            );
            $this->Mwishlist->insert_wishlist($data);

            redirect('wishlist');
        }
    }

	public function index(){
        $id=$this->session->userdata('id');
        if (empty($id)) {
            redirect('home/login');
        } else {
            $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
            $data['wishlist'] = $this->Mwishlist->join3table()->result();

            $this->template->load('layout_frontend', 'frontend/wishlist', $data);
        }
	}

    public function delete($id) {
        if ($this->Mwishlist->delete($id)) {
            redirect('wishlist');
        }
    }
}
