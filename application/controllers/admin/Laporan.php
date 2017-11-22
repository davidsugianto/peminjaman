<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		$data = array('title' => 'Laporan Peminjaman', 'isi' => 'admin/laporan/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
}
