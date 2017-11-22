<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	//halaman utama data user
	public function index()
	{
		$user = $this->user_model->listing();

		$data = array('title' => 'Data User ('.count($user).')', 'user' => $user, 'isi' => 'admin/user/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	//halaman tambah user
	public function tambah()
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
			$data = array('title' => 'Tambah User', 'isi' => 'admin/user/tambah');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$i = $this->input;
			$data = array('NIM' 			=> $i->post('NIM'),
						  'NAMA_MAHASISWA' 	=> $i->post('NAMA_MAHASISWA'),
						  'PRODI' 			=> $i->post('PRODI'),
						  'JURUSAN' 		=> $i->post('JURUSAN'),
						  'PASSWORD' 		=> sha1($i->post('PASSWORD')),
						  'AKSES_LEVEL' 	=> $i->post('AKSES_LEVEL')
						 );
			$this->user_model->tambah($data);
			$this->session->set_flashdata('sukses', 'data berhasil ditambah');
			redirect(base_url('index.php/admin/user'),'refresh');
		}

	}
	//halaman edit user
	public function edit($NIM)
	{
		$user = $this->user_model->detail($NIM);

		//validasi
		$valid = $this->form_validation;

		$valid->set_rules('NIM','Nim','required', array('required' => 'Nim harus di isi'));

		$valid->set_rules('PRODI','Program Studi','required', array('required' => 'Program Studi harus di isi'));

		$valid->set_rules('JURUSAN','Jurusan','required', array('required' => 'Jurusan harus di isi'));

		if ($valid->run()=== FALSE) {
			//end validsi
			$data = array('title' => 'Edit user : '.$user->NAMA_MAHASISWA, 'user' => $user, 'isi' => 'admin/user/edit');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$i = $this->input;

			//jika input password lebih dari 5 karakter
			if (strlen($i->post('PASSWORD')) > 6) {
				$data = array('NIM'				=> $NIM,
							  'NIM' 			=> $i->post('NIM'),
							  'PRODI' 			=> $i->post('PRODI'),
							  'JURUSAN' 		=> $i->post('JURUSAN'),
							  'PASSWORD' 		=> sha1($i->post('PASSWORD')),
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
			$this->session->set_flashdata('sukses', 'data berhasil diupdate');
			redirect(base_url('index.php/admin/user'),'refresh');
		}

	}
	//Delete User
	public function delete($NIM)
	{
		//proteksi hapus disini
		$data = array('NIM' => $NIM);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses', 'data berhasil dihapus');
		redirect(base_url('index.php/admin/user'),'refresh');
	}

}
