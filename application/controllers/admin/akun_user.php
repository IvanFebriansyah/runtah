<?php 

class akun_user extends CI_Controller{
		
	public function index()
	{
		
		$data['akun'] = $this->model_auth->tampil_data('tb_user')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/akun_user', $data); 
		$this->load->view('templates_admin/footer');
	}

	public function updateData()
	{
		$id_user		= $this->input->post('id_user');
		$nama 			= $this->input->post('nama');
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');
		$email          = $this->input->post('email');
		$nomer_tlp      = $this->input->post('nomer_tlp');

		$data = array(
			'nama'			=> $nama,
			'username'		=> $username,
			'password'		=> $password,
			'email'         => $email,
			'nomer_tlp'     => $nomer_tlp
		
		);

		$where = array('id_user' => $id_user);

		$this->model_auth->update_data($where, $data, 'tb_user');
		$this->session->set_flashdata('pesan', 'Akun telah di ubah');
		redirect('admin/akun_user/index');
	}
	public function hapusData($id)
	{
		$where = array('id_user' => $id);
		$this->model_auth->hapus_data($where, 'tb_user');
		$this->session->set_flashdata('pesan', 'Data akun telah di hapus');
		redirect('admin/akun_user/index');
	}
}