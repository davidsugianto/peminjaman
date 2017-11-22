<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$data = array('title' => 'Halaman Peminjaman User', 'isi' => 'public/transaksi/list');
		$this->load->view('public/layout/wrapper', $data, FALSE);
	}
}
