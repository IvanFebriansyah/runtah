<?php

class Invoice extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum Login!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
			redirect('auth/login');
		}
	}
	public function index()
	{
	
		$user = $this->session->userdata('id_user');
		$data['invoice'] = $this->db->query("SELECT * FROM tb_invoice inv, tb_user usr WHERE inv.id_user=usr.id_user AND usr.id_user='$user' ORDER BY id_invoice DESC")->result();
		$data['user'] = $this->model_invoice->muncul_data()->result();
		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/invoice',$data);
		$this->load->view('templates_user/footer');
	}

	public function detail($id_invoice)
	{
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		
		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/detail_invoice',$data);
		$this->load->view('templates_user/footer');
	}


	public function hapus ($id)
	{
		$where = array('id_invoice' => $id);
		$this->model_invoice->hapus_data($where, 'tb_invoice');
		redirect('user/invoice/index');
	}

	public function print_invoice()
	{
		$data['title'] = 'Cetak Stok Barang';
		$data['invoice'] = $this->model_invoice->muncul_data('tb_invoice')->result();
		$this->load->view('templates_user/header');
		$this->load->view('user/print_invoice', $data);
		$this->load->view('templates_user/footer');

	}
}