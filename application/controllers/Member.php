<?php

class Member extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mfrontend');
        $this->load->model('Mmember');
        $this->load->library('cart');
    }

    public function act_login(){
        $u = $this->input->post('username');
        $p = $this->input->post('password');

        $cek = $this->Mmember->cek_login($u, $p)->num_rows();
        $result = $this->Mmember->cek_login($u, $p)->result();
        if ($cek == 1) {
            $data_session = array(
                'userName' => $u,
                'id' => $result[0]->idKonsumen,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('member');
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Error!</strong> '.validation_errors().' </div>');
            redirect('home/login');
        }
    }

    public function index(){
        if ($this->session->userdata('status') == "login") {
            $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
            $this->template->load('layout_frontend', 'frontend/user_menu', $data);
        } else {
            $this->session->set_flashdata('error', 'Anda harus login terlebih dahulu');
            redirect('home/login');
        }
    }

    public function transaksi(){
        $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
        $data['jml_trans_bb']= $this->Mmember->jml_trans_bb();
        $data['transaksi']= $this->Mmember->get_trans_by_konsumen()->result();
        $this->template->load('layout_frontend', 'frontend/member_transaksi', $data);
    }


    public function toko(){
        $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
        $data['toko'] = $this->Mmember->get_toko_by_member()->result();
        $this->template->load('layout_frontend', 'frontend/member_toko', $data);
    }

    public function create_toko(){
        $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();

        $this->template->load('layout_frontend', 'frontend/form_create_toko', $data);
    }

    public function insert_toko(){
        $id= $this->session->userdata('id');
        $nama_toko= $this->input->post('nama_toko');
        $deskripsi = $this->input->post('deskripsi');

        $config['upload_path'] = './upload_logo_toko/';
        $config['allowed_types'] = 'jpeg|jpg|png|JPG|JPEG';

        $this->load->library('upload', $config);
        
        if($this->upload->do_upload('logo_toko')){
            $data_file = $this->upload->data();

            $data_insert = array(
                'idKonsumen' => $id,
                'namaToko' => $nama_toko,
                'deskripsi' => $deskripsi,
                'logo' => $data_file['file_name'],
                'statusAktif' => 'Y'
            );

            $this->Mmember->insert_toko($data_insert);
            redirect('member/toko');    
        } else {
            redirect('member/create_toko');    
        }
    }

    public function ubah_profil($id){
        $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
        $data['toko'] = $this->Mmember->get_toko_by_id($id)->row_array();
        $this->template->load('layout_frontend', 'frontend/form_edit_toko', $data);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

    public function riwayat_transaksi(){
        
    }

   public function cart_tambah($idproduk){
       $status= $this->session->userdata('status');
       if(empty($status)){
              redirect('home/login');
         } else {
             $jml_keranjang = count($this->cart->contents());
            if(empty($jml_keranjang)){
                $data_produk = $this->Mmember->get_produk_by_id($idproduk)->row_object();
                $insert_cart = array(
                    'id' => $idproduk,
                    'id_toko' => $data_produk->idToko,
                    'name' => $data_produk->namaProduk,
                    'price' => $data_produk->harga,
                    'gambar' => $data_produk->foto,
                    'qty' => 1,
                );
                $this->cart->insert($insert_cart);
                redirect('member/keranjang');
            } else {
                $idToko = '';
                if($cart = $this->cart->contents()){
                    foreach($cart as $item){
                        $idToko = $item['id_toko'];
                    }
                }
                
                $data_produk = $this->Mmember->get_produk_by_id($idproduk)->row_object();
                if($idToko==$data_produk->idToko){
                    $data_produk = $this->Mmember->get_produk_by_id($idproduk)->row_object();
                    $insert_cart = array(
                        'id' => $idproduk,
                        'id_toko' => $data_produk->idToko,
                        'name' => $data_produk->namaProduk,
                        'price' => $data_produk->harga,
                        'gambar' => $data_produk->foto,
                        'qty' => 1,
                    );
                    $this->cart->insert($insert_cart);
                    redirect('member/keranjang');
                } else {
                    echo "barang harus dari toko yang sama";
                }
            }
       }
   }

   public function hapus_cart(){
        $data_hapus = array(
           'rowid' => $this->input->post('rowid'),
           'qty' => 0
        );
        $this->cart->update($data_hapus);
        redirect('member/keranjang');
   }

    public function keranjang(){
          $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
          $this->template->load('layout_frontend', 'frontend/keranjang', $data);
    }

    
}
