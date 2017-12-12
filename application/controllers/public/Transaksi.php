<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		$this->load->model('informasi_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		$alat = $this->informasi_model->listing();

		$data = array('title' => 'Data Alat ('.count($alat).')', 'alat' => $alat, 'isi' => 'public/transaksi/list');
		$this->load->view('public/layout/wrapper', $data, FALSE);
	}

	//fungsi tambah
	public function pinjam_alat()
	{
		//$MAHASISWA  = $this->user_model->detail($NIM);

		$data = array('title' 		=> 'Peminjaman Alat',
					  'isi' 		=> 'public/transaksi/pinjam_alat');
		$this->load->view('public/layout/wrapper', $data, FALSE);
	}
}
