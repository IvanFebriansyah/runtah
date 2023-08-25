<?php

class Data_barang extends CI_Controller{

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
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_brg   = $this->input->post('nama_brg');
		$keterangan = $this->input->post('keterangan');
		$kategori   = $this->input->post('kategori');
		$harga      = $this->input->post('harga');
		$stok       = $this->input->post('stok');
		$exp_date   = $this->input->post('exp_date');
		$gambar = $_FILES['gambar']['name'];
		if ($gambar = ''){}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal di Upload!";
			}else {
				$gambar=$this->upload->data('file_name');
			}
		}

	   $data = array (
	   	'nama_brg'   => $nama_brg,
	   	'keterangan' => $keterangan,
	   	'kategori'   => $kategori,
	   	'harga'      => $harga,
	   	'stok'       => $stok,
	   	'exp_date'   => $exp_date,
	   	'gambar'     => $gambar
	   
	   );

	   $this->model_barang->tambah_barang($data, 'tb_barang');
	   $this->session->set_flashdata('pesan', 'Data Barang berhasi di Update');
	   redirect('admin/data_barang/index');
	}

	public function edit($id)
	{
		$where = array('id_brg' =>$id);
		$data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id         = $this->input->post('id_brg');
		$nama_brg   = $this->input->post('nama_brg');
		$keterangan = $this->input->post('keterangan');
		$kategori   = $this->input->post('kategori');
		$harga      = $this->input->post('harga');
		$stok       = $this->input->post('stok');
		$exp_date   = $this->input->post('exp_date');
		$gambar 		= 	$_FILES['gambar']['name'];
			if($gambar){
				$config ['upload_path'] 	= './uploads';
				$config ['allowed_types'] 	= 'jpg|jpeg|png|gif|tiff';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')){
					$gambar=$this->upload->data('file_name');
					$this->db->set('gambar', $gambar);
				}else {
					echo $this->upload->display_error();
				}
			}

		$data = array(

			'nama_brg'   => $nama_brg,
			'keterangan' => $keterangan,
			'kategori'   => $kategori,
			'harga'      => $harga,
			'stok'       => $stok,
			'exp_date'   => $exp_date,
			'gambar'     => $gambar

		);

		$where = array(
			'id_brg' => $id
		);

		$this->model_barang->update_data($where,$data,'tb_barang');
		$this->session->set_flashdata('pesan', 'Data Barang berhasi di Update');
		redirect('admin/data_barang/index');

	}

	public function hapus ($id)
	{
		$where = array('id_brg' => $id);
		$this->model_barang->hapus_data($where, 'tb_barang');
		$this->session->set_flashdata('pesan', 'Data Barang Berhasil di Hapus');
		redirect('admin/data_barang/index');
	}

	public function print_barang()
	{
		$data['title'] = 'Cetak Barang';
		$data['barang'] = $this->model_barang->tampil_data('tb_barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('admin/print_barang', $data);
		$this->load->view('templates_admin/footer');

	}

	public function detail($id_brg)
	{
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates_admin/header');
	    $this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_barang',$data);
		$this->load->view('templates_admin/footer');
	}
}