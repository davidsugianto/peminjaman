<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function index()
	{
		$data = array('title' => 'Halaman Informasi Tugas Akhir', 'isi' => 'public/informasi/tugasakhir');
		$this->load->view('public/layout/wrapper', $data, FALSE);
	}
	public function alat()
	{
		$data = array('title' => 'Halaman Informasi Alat', 'isi' => 'public/informasi/alat');
		$this->load->view('public/layout/wrapper', $data, FALSE);
	}
}
