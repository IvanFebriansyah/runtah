<?php

class Dashboard_admin extends CI_Controller{

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

		$data['jumlahbarang'] = $this->model_barang->get('tb_barang')->num_rows();
		$data['jumlahinvoice'] = $this->model_invoice->get('tb_invoice')->num_rows();
		$data['jumlahuser'] = $this->model_auth->get('tb_user')->num_rows();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/footer');
	}
}	