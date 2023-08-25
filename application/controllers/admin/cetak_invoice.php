<?php 

class cetak_invoice extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

		if($this->session->userdata('hak_akses') !='1'){
			$this->session->set_flashdata('pesan1','Anda Belum Login!');
			redirect('form_login');
		}

	}

	public function index()
	{
		$data['invoice'] = $this->db->query("SELECT * FROM tb_invoice inv, tb_user usr WHERE inv.id_user=usr.id_usr  ORDER BY id_invoice DESC")->result();
		$data['user'] = $this->model_barang->tampil_data('tb_usr')->result();
		

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/cetak_invoice', $data); 
		$this->load->view('templates_admin/footer');
	}
	public function print_invoice()
	{
		$data['invoice'] = $this->db->query("SELECT * FROM tb_invoice inv, tb_user usr WHERE inv.id_user=usr.id_usr  ORDER BY id_invoice DESC")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('admin/print_invoice', $data);
		$this->load->view('templates_admin/footer');

	}
}