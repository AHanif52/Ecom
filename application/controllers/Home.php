<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

   function __construct(){
      parent::__construct();
      $this->load->model('Mfrontend');
      $this->load->library('form_validation');
   }

   public function index(){
      $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
      $data['produk_terbaru']= $this->Mfrontend->get_all_produk_terbaru()->result();
      $this->template->load('layout_frontend', 'frontend/home', $data);
   }

   public function Register(){
      $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
      $data['kota']= $this->Mfrontend->get_all_data('tbl_kota')->result();
      $this->template->load('layout_frontend','frontend/register', $data);
   }

   public function login(){
      $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
      $this->template->load('layout_frontend','frontend/login', $data);
   }

   public function insert_reg(){
      $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('username', 'Username', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
      $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]');
      $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
      $this->form_validation->set_rules('no_telpon', 'Telp', 'trim|required');
      if($this->form_validation->run() == FALSE){
         $this->session->set_flashdata('pesan', validation_errors());
         redirect('home/Register'); 
         //'<div class="alert alert-danger" role="alert">
            //Gagal! Mohon lengkapi data anda.
         //</div>');
      }else{
         $nama = $this->input->post('nama');
         $email = $this->input->post('email');
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $alamat = $this->input->post('alamat');
         $no_telpon = $this->input->post('no_telpon');
         $kota = $this->input->post('kota');
        
         $data = array(
            'username' => $username,
            'password' => $password,
            'namaKonsumen' => $nama,
            'alamat' => $alamat,
            'idKota' => $kota,
            'email' => $email,
            'tlpn' => $no_telpon,
            'statusAktif' => 'Y'
         );
         $this->Mfrontend->insert_reg($data);
         redirect('home/login');
      }
   }

   public function detail_produk($id = null){
        if (!isset($id)) redirect('home');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_telpon', 'Telp', 'trim|required');

        //$validation->set_rules($product->rules());
        $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
        $data['get_kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->row();
        $data["produk"] = $this->Mfrontend->getById($id)->row();
        if (!$data["produk"]) show_404();
        
        $this->template->load('layout_frontend','frontend/detail_produk', $data);
    }
}