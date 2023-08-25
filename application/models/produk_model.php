<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public function get_produk() {
        // Ambil semua data produk dari tabel produk dalam database
        return $this->db->get('tb_barang')->result();
    }

    public function cari_produk($keyword) {
        // Cari produk berdasarkan nama atau deskripsi yang mengandung keyword
        $this->db->like('nama_brg', $keyword);
        $this->db->or_like('kategoris', $keyword);
        return $this->db->get('tb_barang')->result();
    }
}