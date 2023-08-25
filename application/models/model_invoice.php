<?php

class Model_invoice extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$kode_transaksi   = $this->input->post('kode_transaksi');
		$nama_lengkap     = $this->input->post('nama_lengkap');
		$id_user   		  = $this->session->userdata('id_user');
		$alamat 		  = $this->input->post('alamat');
		$nomer_tlp 		  = $this->input->post('nomer_tlp');
		$jasa_kirim       = $this->input->post('jasa_kirim');
		$pilih_pembayaran = $this->input->post('pilih_pembayaran');
		$status 		  = $this->input->post('status');

		$invoice = array(
			'kode_transaksi'  => $kode_transaksi,
			'nama_lengkap'    => $nama_lengkap,
			'id_user'	      => $id_user,
			'alamat' 	      => $alamat,
			'nomer_tlp'		  => $nomer_tlp,
			'jasa_kirim'      => $jasa_kirim,
			'pilih_pembayaran'=> $pilih_pembayaran,
			'tgl_pesan'       => date('Y-m-d H:i:s'),
			'batas_bayar'     => date('Y-m-d H:i:s', mktime( date('H'),
						         date('i'),date('s'), date('m'), date('d') + 1,date('Y'))),
			'status'          => $status,
		);
		$this->db->insert('tb_invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice' => $id_invoice,
				'id_brg'     => $item['id'],
				'nama_brg'   => $item['name'],
				'jumlah'     => $item['qty'],
				'harga'      => $item['price'],	
			);
			$this->db->insert('tb_pesanan', $data);
		}

		return TRUE;
	}

	public function tampil_data()
	{
		$result = $this->db->get('tb_invoice');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->limit(
			1)->get('tb_invoice');
		if($result->num_rows() > 0){
			return $result->row();
		}else {
			return false;
		}
	}

	public function ambil_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function muncul_data(){
		return $this->db->get('tb_invoice');
	}

	public function get($table)
    {
        $this->db->ORDER_BY('id_invoice', 'DESC');
        return $this->db->get($table);
    }

    public function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

    public function edit_status($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
}