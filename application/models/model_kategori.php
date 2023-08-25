<?php

class Model_kategori extends CI_Model{
	public function data_snack_kering(){
		return $this->db->get_where("tb_barang",array
			('kategori' => 'snack kering'));
	}

	public function data_snack_basah(){
		return $this->db->get_where("tb_barang",array
			('kategori' => 'snack basah'));
	}

	public function data_minuman(){
		return $this->db->get_where("tb_barang",array
			('kategori' => 'minuman'));
	}
}