<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		$this->load->model('informasi_model');
		$this->load->model('user_model');
		$this->load->model('konfigurasi_model');
	}

	public function index()
	{
		$peminjaman = $this->transaksi_model->listing();

		$data = array('title' 		=> 'Data Peminjaman Alat ('.count($peminjaman).')',
					  'peminjaman' 	=> $peminjaman,
					  'isi' 		=> 'admin/laporan/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		$user = $this->user_model->listing();

		$data = array('title' 		=> 'Peminjaman Alat ('.count($user).')',
					  'user' 		=> $user,
					  'isi' 		=> 'admin/laporan/list_user');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	//add peminjaman
	public function add($NIM)
	{
		$user 			= $this->user_model->detail($NIM);
		$peminjaman 	= $this->transaksi_model->user($NIM);
		$limit			= $this->transaksi_model->limit_peminjaman($NIM);
		$alat 			= $this->informasi_model->listing();
		$konfigurasi 	= $this->konfigurasi_model->listing();

		// validasi
		$valid = $this->form_validation;

		$valid->set_rules('ID_ALAT', 'Pilih Alat', 'required',
				array('required' => 'Pilih Alat'));

		if ($valid->run()=== FALSE) {
		//end validasi

		$data = array('title' 		=> 'Peminjaman Alat atas nama: '.$user->NAMA_MAHASISWA,
					  'user' 		=> $user,
					  'peminjaman'	=> $peminjaman,
					  'alat'		=> $alat,
					  'konfigurasi'	=> $konfigurasi,
					  'limit'		=> $limit,
					  'isi' 		=> 'admin/laporan/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		} else {
			$i = $this->input;
			$data = array('NIM' 					=> $this->session->userdata('NIM'),
						  'ID_ALAT' 				=> $i->post('ID_ALAT'),
						  'NIM'						=> $NIM,
						  'TANGGAL_PEMINJAMAN' 		=> $i->post('TANGGAL_PEMINJAMAN'),
						  'TANGGAL_PENGEMBALIAN'	=> $i->post('TANGGAL_PENGEMBALIAN'),
						  'KETERANGAN_DENDA'		=> $i->post('KETERANGAN_DENDA'),
						  'STATUS_PEMINJAMAN' 		=> $i->post('STATUS_PEMINJAMAN')
						 );
			$this->transaksi_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data peminjaman telah ditambahkan');
			redirect(base_url('index.php/admin/laporan/add/'.$NIM),'refresh');
			//end database
		}
	}

	//edit peminjaman
	public function edit($ID_PEMINJAMAN)
	{
		$peminjaman 	= $this->transaksi_model->detail($ID_PEMINJAMAN);
		$NIM 			= $peminjaman->NIM;
		$user 			= $this->user_model->detail($NIM);
		$alat 			= $this->informasi_model->listing();
		$konfigurasi 	= $this->konfigurasi_model->listing();

		// validasi
		$valid = $this->form_validation;

		$valid->set_rules('ID_ALAT', 'Pilih Alat', 'required',
				array('required' => 'Pilih Alat'));

		if ($valid->run()=== FALSE) {
		//end validasi

		$data = array('title' 		=> 'Edit Peminjaman Alat atas nama: '.$user->NAMA_MAHASISWA,
					  'user' 		=> $user,
					  'peminjaman'	=> $peminjaman,
					  'alat'		=> $alat,
					  'konfigurasi'	=> $konfigurasi,
					  'isi' 		=> 'admin/laporan/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		} else {
			$i = $this->input;
			$data = array('ID_PEMINJAMAN'			=> $ID_PEMINJAMAN,	 
						  'NIM' 					=> $this->session->userdata('NIM'),
						  'ID_ALAT' 				=> $i->post('ID_ALAT'),
						  'NIM'						=> $NIM,
						  'TANGGAL_PEMINJAMAN' 		=> $i->post('TANGGAL_PEMINJAMAN'),
						  'TANGGAL_PENGEMBALIAN'	=> $i->post('TANGGAL_PENGEMBALIAN'),
						  'KETERANGAN_DENDA'		=> $i->post('KETERANGAN_DENDA'),
						  'STATUS_PEMINJAMAN' 		=> $i->post('STATUS_PEMINJAMAN')
						 );
			$this->transaksi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data peminjaman telah di update');
			redirect(base_url('index.php/admin/laporan'),'refresh');
			//end database
		}
	}

	//fungsi pengembalian buku
	public function kembali($ID_PEMINJAMAN)
	{
		$peminjaman 	= $this->transaksi_model->detail($ID_PEMINJAMAN);
		$data = array('ID_PEMINJAMAN'			=> $ID_PEMINJAMAN,	 
					  'NIM' 					=> $this->session->userdata('NIM'),
					  'STATUS_PEMINJAMAN' 		=> 'Sudah'
					 );
		$this->transaksi_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data peminjaman telah di update');
		redirect(base_url('index.php/admin/laporan'),'refresh');
	}

	//Delete peminjaman
	public function delete($ID_PEMINJAMAN)
	{
		//proteksi hapus disini
		$data = array('ID_PEMINJAMAN' => $ID_PEMINJAMAN);
		$this->transaksi_model->delete($data);
		$this->session->set_flashdata('sukses', 'data berhasil dihapus');
		redirect(base_url('index.php/admin/laporan'),'refresh');
	}
}
