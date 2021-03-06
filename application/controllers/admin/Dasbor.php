<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		if($this->session->userdata('STATUS') != "login"){
			redirect(base_url("index.php/Login"));
		}
	}

	//homepage
	public function index()
	{
		$data = array('title' => 'Halaman Dasbor', 'isi' => 'admin/dasbor/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//profile
	public function profile()
	{
		$NIM  = $this->session->userdata('NIM');
		$user = $this->user_model->detail($NIM);

		//validasi
		$valid = $this->form_validation;

		$valid->set_rules('NIM','Nim','required', array('required' => 'Nim harus di isi'));

		$valid->set_rules('PRODI','Program Studi','required', array('required' => 'Program Studi harus di isi'));

		$valid->set_rules('JURUSAN','Jurusan','required', array('required' => 'Jurusan harus di isi'));

		if ($valid->run()=== FALSE) {
			//end validsi
			$data = array('title' => 'Update profile : '.$user->NAMA_MAHASISWA, 'user' => $user, 'isi' => 'admin/dasbor/profile');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$i = $this->input;

			//jika input password lebih dari 5 karakter
			if (strlen($i->post('PASSWORD')) > 6) {
				$data = array('NIM'				=> $NIM,
							  'NIM' 			=> $i->post('NIM'),
							  'PRODI' 			=> $i->post('PRODI'),
							  'JURUSAN' 		=> $i->post('JURUSAN'),
							  'PASSWORD' 		=> md5($i->post('PASSWORD')),
							  'AKSES_LEVEL' 	=> $i->post('AKSES_LEVEL')
							 );

			} else {
				$data = array('NIM'				=> $NIM,
							  'NIM' 			=> $i->post('NIM'),
							  'PRODI' 			=> $i->post('PRODI'),
							  'JURUSAN' 		=> $i->post('JURUSAN'),
							  'AKSES_LEVEL' 	=> $i->post('AKSES_LEVEL')
							 );
			}
			//end if
			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses', 'profile berhasil diupdate');
			redirect(base_url('index.php/admin/dasbor/profile'),'refresh');
		} //end database

	}

}
