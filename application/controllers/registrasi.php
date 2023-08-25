<?php

class Registrasi extends CI_Controller{

	public function index()
	{	
		$this->form_validation->set_rules('nama',' Nama', 'required', ['required' => 'Nama wajib diisi!']);
		$this->form_validation->set_rules('username',' Nama', 'required', ['required' => 'Username wajib diisi!']);
		$this->form_validation->set_rules('password_1',' Password', 'required|matches[password_2]', 
										 ['required' => 'Password wajib diisi!', 'matches' => 'Password tidak cocok!']);
		$this->form_validation->set_rules('password_2',' Password', 'required|matches[password_1]');
		$this->form_validation->set_rules('nomer_tlp',' Nomer Telepon', 'required', ['required' => 'Nomer telepon wajib diisi!']);
		$this->form_validation->set_rules('email',' Email', 'required', ['required' => 'Nama email wajib diisi!']);


		if($this->form_validation->run() == FALSE) {
		$this->load->view('templates/header');
		$this->load->view('registrasi');
		$this->load->view('templates/footer');
		} else {
			$data = array(
				'id_user'       => '',
				'nama'     => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password_1'),
				'nomer_tlp'=> $this->input->post('nomer_tlp'),
				'email'    => $this->input->post('email'),
				'role_id'  => 2,
			);

			$this->db->insert('tb_user',$data);
			$this->session->set_flashdata('pesan', 'Akun anda telah berhasil dibuat!');
			redirect('registrasi');
		}
	}
}