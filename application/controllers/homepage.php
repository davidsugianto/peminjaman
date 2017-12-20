<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage extends CI_Controller {
//load model
	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Informasi_model');
	}
	//halaman Login
	public function index()
	{
		//$this->load->view('public/index1');
		$alat = $this->Informasi_model->listing();
		$TA = $this->Informasi_model->listing_TA();
		$data = array('title' => 'Data Alat ('.count($alat).')', 'alat' => $alat, 'isi' => 'public/index1');
        $data1 = array('title' => 'Data Tugas Akhir ('.count($TA).')', 'TA' => $TA, 'isi' => 'public/index1');
		//$this->load->view('public/index1', $data, $data1);
        $this->load->view('public/index1', ['alat'=>$alat, 'TA'=>$TA]);
	}
	//homepage daftar alat
	/*public function list()
	{
		$alat = $this->informasi_model->listing();

		//$data = array('title' => 'Data Alat', 'isi' => 'public/index1');
		$data = array('title' => 'Data Alat ('.count($alat).')', 'alat' => $alat, 'isi' => 'public/index1');
		$this->load->view('public/index1');
	}*/
    }