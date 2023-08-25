<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('produk_model');
    }

    public function index() {
        // Tampilkan halaman utama toko online dengan form pencarian
        $this->load->view('header');
        $this->load->view('search_form');
        // Load produk dari database untuk ditampilkan
        $data['produk'] = $this->produk_model->get_produk();
        $this->load->view('produk_list', $data);
        $this->load->view('footer');
    }

    public function cari() {
        // Ambil keyword pencarian dari input form
        $keyword = $this->input->get('keyword');
        
        // Cari produk berdasarkan keyword menggunakan model
        $data['produk'] = $this->produk_model->cari_produk($keyword);
        
        // Tampilkan hasil pencarian
        $this->load->view('header');
        $this->load->view('search_form');
        $this->load->view('produk_list', $data);
        $this->load->view('footer');
    }
}