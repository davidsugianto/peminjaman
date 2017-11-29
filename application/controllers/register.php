<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	//halaman Login
	public function index()
	{
		$data = array('title' => 'Register');
		$this->load->view('admin/register_view', $data, FALSE);
	}
	public function register()
	{
		//validasi
		$valid = $this->form_validation;

		$valid->set_rules('NIM','Nim','required', array('required' => 'Nim harus di isi'));

		$valid->set_rules('NAMA_MAHASISWA','Nama','required|is_unique[MAHASISWA.NAMA_MAHASISWA]', array('required' => 'Nama harus di isi', 'is_unique' => '<strong> Nama'.$this->input->post('NAMA_MAHASISWA').'</string> sudah ada silahkan buat user baru'));

		$valid->set_rules('PRODI','Program Studi','required', array('required' => 'Program Studi harus di isi'));

		$valid->set_rules('JURUSAN','Jurusan','required', array('required' => 'Jurusan harus di isi'));

		$valid->set_rules('PASSWORD','Password','required|min_length[5]', array('required' => 'password harus di isi', 'min_length' => 'password minimal 5 karakter'));

		if ($valid->run()=== FALSE) {
			//end validsi
			$data = array('title' => 'Register User', 'isi' => 'register/register');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$i = $this->input;
			$data = array('NIM' 			=> $i->post('NIM'),
						  'NAMA_MAHASISWA' 	=> $i->post('NAMA_MAHASISWA'),
						  'PRODI' 			=> $i->post('PRODI'),
						  'JURUSAN' 		=> $i->post('JURUSAN'),
						  'PASSWORD' 		=> md5($i->post('PASSWORD')),
						  'AKSES_LEVEL' 	=> $i->post('AKSES_LEVEL')
						 );
			$this->User_model->tambah($data);
			$this->session->set_flashdata('sukses', 'data berhasil ditambah');
			redirect(base_url('index.php/register'),'refresh');
		}

	}
}	