<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('informasi_model');
		if($this->session->userdata('STATUS') != "login"){
			redirect(base_url("index.php/Login"));
		}
	}
	
	public function index()
	{
	$alat = $this->informasi_model->listing();

		$data = array('title' => 'Data Alat ('.count($alat).')', 'alat' => $alat, 'isi' => 'admin/informasi/list');
		$this->load->view('public/index.php/coba/wrapper', $data, FALSE);
		$data = array('title' => 'Halaman Informasi Tugas Akhir', 'isi' => 'public/informasi/tugasakhir');
		$this->load->view('public/layout/wrapper', $data, FALSE);
	}
	
}
