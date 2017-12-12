<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('informasi_model');
		if($this->session->userdata('STATUS') != "login"){
			redirect(base_url("index.php/Login"));
		}
	}

	//halaman utama informasi alat
	public function index()
	{
		$alat = $this->informasi_model->listing();

		$data = array('title' => 'Data Alat ('.count($alat).')', 'alat' => $alat, 'isi' => 'admin/informasi/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	//halaman tambah alat 
	public function tambah_alat()
	{
		//validasi
		$valid = $this->form_validation;

		$valid->set_rules('NAMA_ALAT','Nama Alat','required', array('required' => 'Nama alat harus di isi'));

		$valid->set_rules('JENIS_ALAT','Jenis Alat','required', array('required' => 'Jenis alat harus di isi'));

		$valid->set_rules('JUMLAH_ALAT','Jumlah Alat','required', array('required' => 'Jumlah alat harus di isi'));

		$valid->set_rules('KETERANGAN_ALAT','Keterangan','required', array('required' => 'Keterangan harus di isi'));

		if ($valid->run()=== FALSE) {
			//end validsi
			$data = array('title' => 'Tambah Alat', 'isi' => 'admin/informasi/tambah_alat');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$i = $this->input;
			$data = array('NAMA_ALAT' 		=> $i->post('NAMA_ALAT'),
						  'JENIS_ALAT' 		=> $i->post('JENIS_ALAT'),
						  'JUMLAH_ALAT' 	=> $i->post('JUMLAH_ALAT'),
						  'KETERANGAN_ALAT' => $i->post('KETERANGAN_ALAT')
						 );
			$this->informasi_model->tambah($data);
			$this->session->set_flashdata('sukses', 'data berhasil ditambah');
			redirect(base_url('index.php/admin/informasi'),'refresh');
		}
	}
	//halaman edit alat 
	public function edit_alat($NAMA_ALAT)
	{
		$alat = $this->informasi_model->detail($NAMA_ALAT);
		//validasi
		$valid = $this->form_validation;

		$valid->set_rules('NAMA_ALAT','Nama Alat','required', array('required' => 'Nama alat harus di isi'));

		$valid->set_rules('JENIS_ALAT','Jenis Alat','required', array('required' => 'Jenis alat harus di isi'));

		$valid->set_rules('JUMLAH_ALAT','Jumlah Alat','required', array('required' => 'Jumlah alat harus di isi'));

		$valid->set_rules('KETERANGAN_ALAT','Keterangan','required', array('required' => 'Keterangan harus di isi'));

		if ($valid->run()=== FALSE) {
			//end validsi
			$data = array('title' => 'Edit Alat : '.$alat->NAMA_ALAT, 'alat' => $alat, 'isi' => 'admin/informasi/edit_alat');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$i = $this->input;
			$data = array('NAMA_ALAT' 		=> $i->post('NAMA_ALAT'),
						  'JENIS_ALAT' 		=> $i->post('JENIS_ALAT'),
						  'JUMLAH_ALAT' 	=> $i->post('JUMLAH_ALAT'),
						  'KETERANGAN_ALAT' => $i->post('KETERANGAN_ALAT')
						 );
			$this->informasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'data berhasil diedit');
			redirect(base_url('index.php/admin/informasi'),'refresh');
		}
	}
	//Delete alat
	public function delete_alat($NAMA_ALAT)
	{
		//proteksi hapus disini
		$data = array('NAMA_ALAT' => $NAMA_ALAT);
		$this->informasi_model->delete($data);
		$this->session->set_flashdata('sukses', 'data berhasil dihapus');
		redirect(base_url('index.php/admin/informasi'),'refresh');
	}
	//halaman informasi tugas akhir
		public function tugasakhir()
	{
		$ta = $this->informasi_model->listTugasakhir();
		$data = array('title' => 'Data Tugas Akhir ('.count($ta).')', 'ta' => $ta, 'isi' => 'admin/informasi/tugasakhir');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	//halaman tambah tugas akhir 
	public function tambah_tugasakhir()
	{
		//validasi
		$valid = $this->form_validation;

		$valid->set_rules('JUDUL_TUGAS_AKHIR','Judul Tugas Akhir','required', array('required' => 'Judul tugas akhir'));

		$valid->set_rules('PENERBIT','Penerbit','required', array('required' => 'Penerbit harus di isi'));

		$valid->set_rules('PRODI','Program Studi','required', array('required' => 'Program Studi harus di isi'));

		$valid->set_rules('JURUSAN','Jurusan','required', array('required' => 'Jurusan harus di isi'));

		$valid->set_rules('TAHUN','Tahun','required', array('required' => 'Tahun harus di isi'));

		if ($valid->run()=== FALSE) {
			//end validsi
			$data = array('title' => 'Tambah Tugas Akhir', 'isi' => 'admin/informasi/tambah_tugasakhir');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$i = $this->input;
			$data = array('JUDUL_TUGAS_AKHIR' 	=> $i->post('JUDUL_TUGAS_AKHIR'),
						  'PENERBIT' 			=> $i->post('PENERBIT'),
						  'PRODI' 				=> $i->post('PRODI'),
						  'JURUSAN' 			=> $i->post('JURUSAN'),
						  'TAHUN' 				=> $i->post('TAHUN')
						 );
			$this->informasi_model->tambahTugasakhir($data);
			$this->session->set_flashdata('sukses', 'data Tugas Akhir berhasil ditambah');
			redirect(base_url('index.php/admin/informasi/tugasakhir'),'refresh');
		}
	}
		//halaman edit tugas akhir 
	public function edit_tugasakhir($PENERBIT)
	{
		$ta = $this->informasi_model->detailTugasakhir($PENERBIT);
		//validasi
		$valid = $this->form_validation;

		$valid->set_rules('JUDUL_TUGAS_AKHIR','Judul Tugas Akhir','required', array('required' => 'Judul tugas akhir'));

		$valid->set_rules('PENERBIT','Penerbit','required', array('required' => 'Penerbit harus di isi'));

		$valid->set_rules('PRODI','Program Studi','required', array('required' => 'Program Studi harus di isi'));

		$valid->set_rules('JURUSAN','Jurusan','required', array('required' => 'Jurusan harus di isi'));

		$valid->set_rules('TAHUN','Tahun','required', array('required' => 'Tahun harus di isi'));

		if ($valid->run()=== FALSE) {
			//end validsi
			$data = array('title' => 'Edit Tugas Akhir : '.$ta->PENERBIT, 'ta' => $ta, 'isi' => 'admin/informasi/edit_tugasakhir');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$i = $this->input;
			$data = array('JUDUL_TUGAS_AKHIR' 	=> $i->post('JUDUL_TUGAS_AKHIR'),
						  'PENERBIT' 			=> $i->post('PENERBIT'),
						  'PRODI' 				=> $i->post('PRODI'),
						  'JURUSAN' 			=> $i->post('JURUSAN'),
						  'TAHUN' 				=> $i->post('TAHUN')
						 );
			$this->informasi_model->editTugasakhir($data);
			$this->session->set_flashdata('sukses', 'data Tugas Akhir berhasil diupdate');
			redirect(base_url('index.php/admin/informasi/tugasakhir'),'refresh');
		}
	}
	//Delete tugas akhir
	public function delete_tugasakhir($PENERBIT)
	{
		//proteksi hapus disini
		$data = array('PENERBIT' => $PENERBIT);
		$this->informasi_model->deleteTugasakhir($data);
		$this->session->set_flashdata('sukses', 'data berhasil dihapus');
		redirect(base_url('index.php/admin/informasi/tugasakhir'),'refresh');
	}
}
