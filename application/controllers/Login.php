<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	//halaman Login
	public function index()
	{
		$data = array('title' => 'Login');
		$this->load->view('admin/login_view', $data, FALSE);
	}	
}
