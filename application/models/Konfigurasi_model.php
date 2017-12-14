<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function listing()
	{
		$query = $this->db->get('KONFIGURASI');
		return $query->row();
	}
	public function edit($data)
	{
		$this->db->where('ID_KONFGURASI',$data['ID_KONFGURASI']);
		$this->db->update('KONFIGURASI',$data);
	}
	

}

/* End of file Konfigurasi.php */
/* Location: ./application/models/Konfigurasi.php */