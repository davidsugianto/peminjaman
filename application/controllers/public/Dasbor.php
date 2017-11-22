<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function index()
	{
		$data = array('title' => 'Halaman Dasbor User', 'isi' => 'public/dasbor/list_public');
		$this->load->view('public/layout/wrapper', $data, FALSE);
	}
}
