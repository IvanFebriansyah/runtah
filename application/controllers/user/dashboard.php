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
		foreach ($this->cart->contents() as $item) {
			$rowid = $item['rowid'];
			$new_qty = $this->input->post('quantity')[$rowid]; // Ambil kuantitas baru
	
			// Ambil stok barang dari database
			$barang = $this->model_barang->find($item['id']);
			$stok_tersedia = $barang->stok;
	
			if ($new_qty > $stok_tersedia) {
				// Jika kuantitas baru melebihi stok, kembalikan pesan error
				$this->session->set_flashdata('pesan', 'Kuantitas barang ' . $barang->nama_brg . ' tidak mencukupi.');
				redirect('user/dashboard/detail_keranjang');
			}
	
			// Update keranjang dengan kuantitas baru
			$data = array('rowid' => $rowid, 'qty' => $new_qty);
			$this->cart->update($data);
		}
	
		redirect('user/dashboard/detail_keranjang');
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
		// Periksa stok barang sebelum melanjutkan
		foreach ($this->cart->contents() as $item) {
			$barang = $this->model_barang->find($item['id']); // Ambil informasi barang dari model
			if ($barang) {
				$stok_tersedia = $barang->stok;
				if ($item['qty'] > $stok_tersedia) {
					// Jika jumlah barang dalam keranjang melebihi stok, tampilkan pesan dan arahkan kembali ke keranjang
					$this->session->set_flashdata('pesan', 'Stok barang ' . $barang->nama_brg . ' tidak mencukupi.');
					redirect('user/dashboard/detail_keranjang');
				}
			}
		}
	
		// Jika stok cukup, proses pesanan dan lanjut ke halaman pembayaran
		$is_processes = $this->model_invoice->index();
		if ($is_processes) {
			$this->cart->destroy();
			$this->load->view('templates_user/header');
			$this->load->view('templates_user/sidebar');
			$this->load->view('user/proses_pesanan');
			$this->load->view('templates_user/footer');
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