<?php

class Invoice extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum Login!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
			redirect('auth/login');
		}
	}
	public function index()
	{
		$data['invoice'] = $this->model_invoice->muncul_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/invoice',$data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_invoice)
	{
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoice',$data);
		$this->load->view('templates_admin/footer');
	}

	public function edit($id)
	{
		$where = array('id_invoice' =>$id);
		$data['invoice'] = $this->model_invoice->edit_status($where, 'tb_invoice')->result();
		$this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_status', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update1()
	{
		$id_invoice = $this->input->post('id_invoice');
		$status    	= $this->input->post('status');

		$data = array(
			'status'     => $status		
		);

		$where = array(
			'id_invoice' => $id_invoice
		);

		$this->model_invoice->update($where,$data, 'tb_invoice');
		$this->session->set_flashdata('pesan', 'Mengupdate Data Invoice');
		redirect('admin/invoice/index');
	}

	public function hapus ($id)
	{
		$where = array('id_invoice' => $id);
		$this->model_invoice->hapus_data($where, 'tb_invoice');
		$this->session->set_flashdata('pesan', 'Data Barang berhasi di Update');
		redirect('admin/invoice/index');
	}

	public function print_invoice()
	{
		$data['title'] = 'Cetak Stok Barang';
		$data['invoice'] = $this->model_invoice->muncul_data('tb_invoice')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('admin/print_invoice', $data);
		$this->load->view('templates_admin/footer');

	}
}