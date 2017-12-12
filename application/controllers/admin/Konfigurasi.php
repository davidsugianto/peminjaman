<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');

		//halaman konfigurasi hanya boleh diakses oleh admin
		/*if ($this->session->userdata('AKSES_LEVEL') != 'Admin') {
			$this->session->flashdata('sukses','Oops... anda bukan admin');
			redirect(base_url('login'),'refresh');
		}*/
		//end proteksi
	}

	public function index()
	{
		$konfigurasi = $this->konfigurasi_model->listing();

		//validasi
		$this->form_validation->set_rules('NAMA_WEB','Nama Website','required', array('required' => 'Nama Website harus di isi'));
		if ($this->form_validation->run()=== FALSE) {
		//end validasi

		$data = array('title' 			=> 'Konfigurasi Website : '.$konfigurasi->NAMA_WEB,
					  'konfigurasi'		=> $konfigurasi,
					  'isi'				=> 'admin/konfigurasi/list'
					 );
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		} else {
			//masuk database
			$i = $this->input;
			$data = array('ID_KONFGURASI'			=> $konfigurasi->ID_KONFGURASI,
						  'NIM' 					=> $this->session->userdata('NIM'),
						  'NAMA_WEB'				=> $i->post('NAMA_WEB'),
						  'MAX_HARI_PINJAM'			=> $i->post('MAX_HARI_PINJAM'),
						  'MAX_JUMLAH_PINJAM'		=> $i->post('MAX_JUMLAH_PINJAM'),
						  'DENDA_PERHARI'			=> $i->post('DENDA_PERHARI')
						 );
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data konfigurasi telah di update');
			redirect(base_url('index.php/admin/konfigurasi'),'refresh');
		}
	}

}

/* End of file Konfigurasi.php */
/* Location: ./application/controllers/admin/Konfigurasi.php */