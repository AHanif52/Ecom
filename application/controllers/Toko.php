<?php

class Toko extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mfrontend');
        $this->load->model('Mtoko');
    }

    public function main($idToko){
        $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
        $data['toko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $this->template->load('layout_frontend', 'frontend/toko_home', $data);
    }

    public function produk($idToko){
        $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $data['produk'] = $this->Mtoko->get_produk_by_toko($idToko)->result();
        $this->template->load('layout_frontend', 'frontend/toko_produk', $data);
    }

    public function create_produk($idToko){
        $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $data['idToko'] = $idToko;
        $this->template->load('layout_frontend', 'frontend/form_create_produk', $data);
    }
 
    public function insert_produk(){
        $idToko = $this->input->post('id_toko');
        $idKat = $this->input->post('kategori');
        $namaProduk = $this->input->post('nama_produk');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $berat = $this->input->post('berat');
        $deskripsi = $this->input->post('deskripsi');
        
        $config['upload_path'] = './upload_gambar_produk/';
        $config['allowed_types'] = 'jpeg|jpg|png|JPG|JPEG';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('gambar_produk')){
            $data_file = $this->upload->data();

            $data_insert = array(
                'idKat' => $idKat,
                'idToko' => $idToko,
                'namaProduk' => $namaProduk,
                'foto' => $data_file['file_name'],
                'harga' => $harga,
                'stok' => $stok,
                'berat' => $berat,
                'deskripsiProduk' => $deskripsi,
            );

            $this->Mtoko->insert_produk($data_insert);
            redirect('toko/produk/'.$idToko);    
        } else {
            redirect('toko/create_produk/'.$idToko);    
        }
    }

    public function detail(){
        
    }
}