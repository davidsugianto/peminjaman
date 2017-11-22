<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	
	//fungsi listing user
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('MAHASISWA');
		$this->db->order_by('NIM','DECS');
		$query = $this->db->get();
		return $query->result();
	}
	//fungsi Detail
	public function detail($NIM)
	{
		$this->db->select('*');
		$this->db->from('MAHASISWA');
		$this->db->where('NIM',$NIM);
		$this->db->order_by('NIM','DECS');
		$query = $this->db->get();
		return $query->row();
	}
	//fungsi tambah user
	public function tambah($data)
	{
		$this->db->insert('MAHASISWA',$data);
	}
	//fungsi edit user
	public function edit($data)
	{
		$this->db->where('NIM',$data['NIM']);
		$this->db->update('MAHASISWA',$data);
	}
	//fungsi delete user
	public function delete($data)
	{
		$this->db->where('NIM',$data['NIM']);
		$this->db->delete('MAHASISWA',$data);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */