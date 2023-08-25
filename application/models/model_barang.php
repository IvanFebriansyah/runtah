<?php

class Model_barang extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_barang');
	}

	public function cari_barang($keyword) {
		$this->db->like('nama_brg', $keyword); // Cari berdasarkan nama barang
		$this->db->or_like('kategori', $keyword); // Atau cari berdasarkan deskripsi barang
		return $this->db->get('tb_barang')->result();
	}

	public function tambah_barang($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_barang($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function get($table)
    {
        $this->db->ORDER_BY('id_brg', 'DESC');
        return $this->db->get($table);
    }

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id)
	{
		$result = $this->db->where('id_brg', $id)
						   ->limit(1)
						   ->get('tb_barang');
		if($result->num_rows() > 0){
			$barang = $result->row();

			// Ambil stok barang dari hasil query
			$stok = $barang->stok;
	
			// Tambahkan informasi stok ke dalam objek $barang
			$barang->stok = $stok;
	
			return $barang;
		}else{
			return array();
		}

	}

	public function detail_brg($id_brg)
	{
		$result = $this->db->where('id_brg',$id_brg)->get('tb_barang');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}
}