<?php

class Kategori extends CI_Controller{
	public function snack_kering()
	{
		$data['snack_kering'] = $this->model_kategori->data_snack_kering()->result();
		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/snack_kering',$data);
		$this->load->view('templates_user/footer');
	}

	public function snack_basah()
	{
		$data['snack_basah'] = $this->model_kategori->data_snack_basah()->result();
		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/snack_basah',$data);
		$this->load->view('templates_user/footer');
	}

	public function minuman()
	{
		$data['minuman'] = $this->model_kategori->data_minuman()->result();
		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/minuman',$data);
		$this->load->view('templates_user/footer');
	}
}