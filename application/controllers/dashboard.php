<?php

class Dashboard extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function tambah_ke_keranjang($id)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
	        'id'      => $barang->id_brg,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->nama_brg
	        
	);

	$this->cart->insert($data);
	redirect('welcome');

	}

	public function delete ($rowid)
	{
		$this->cart->remove($rowid);
		redirect('dashboard/detail_keranjang');
	}

	public function update()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items){
			$data = array(
				'rowid' => $items['rowid'],
				'qty' => $this->input->post($i. '[qty]'),
			);
			$this->cart->update($data);
			$i++;
		}

		redirect('dashboard/detail_keranjang');
	}

	public function detail_keranjang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('welcome/index');
	}

	public function pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pesanan()
	{
		$is_processes = $this->model_invoice->index();
		if($is_processes){
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_pesanan');
			$this->load->view('templates/footer');
		} else {
			echo "Maaf, Pesanan anda gagal diproses!";
		}
		
	}

	public function detail($id_brg)
	{
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates/header');
	    $this->load->view('templates/sidebar');
		$this->load->view('detail_barang',$data);
		$this->load->view('templates/footer');
	}

	public function cari_barang(){
		$keyword = $this->input->get('keyword'); // Ambil keyword pencarian dari input form

		// Panggil model untuk mencari barang berdasarkan keyword
		$data['barang'] = $this->model_barang->cari_barang($keyword);

		// Load view daftar barang dengan hasil pencarian
		$this->load->view('templates/header');
	    $this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
}