<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	//fungsi listing alat
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('ALAT');
		$this->db->order_by('NAMA_ALAT','DECS');
		$query = $this->db->get();
		return $query->result();
	}
	//fungsi Detail
	public function detail($NAMA_ALAT)
	{
		$this->db->select('*');
		$this->db->from('ALAT');
		$this->db->where('NAMA_ALAT',$NAMA_ALAT);
		$this->db->order_by('NAMA_ALAT','DECS');
		$query = $this->db->get();
		return $query->row();
	}
	//fungsi tambah alat
	public function tambah($data)
	{
		$this->db->insert('ALAT',$data);
	}
	//fungsi edit alat
	public function edit($data)
	{
		$this->db->where('NAMA_ALAT',$data['NAMA_ALAT']);
		$this->db->update('ALAT',$data);
	}
	//fungsi delete alat
	public function delete($data)
	{
		$this->db->where('NAMA_ALAT',$data['NAMA_ALAT']);
		$this->db->delete('ALAT',$data);
	}
	//fungsi tambah tugas akhir
	public function tambahTugasakhir($data)
	{
		$this->db->insert('TUGAS_AKHIR',$data);
	}
	//fungsi listing tugas akhir
	public function listTugasakhir()
	{
		$this->db->select('*');
		$this->db->from('TUGAS_AKHIR');
		$this->db->order_by('PENERBIT','DECS');
		$query = $this->db->get();
		return $query->result();
	}
	//fungsi Detail tugas akhir
	public function detailTugasakhir($PENERBIT)
	{
		$this->db->select('*');
		$this->db->from('TUGAS_AKHIR');
		$this->db->where('PENERBIT',$PENERBIT);
		$this->db->order_by('PENERBIT','DECS');
		$query = $this->db->get();
		return $query->row();
	}
	//fungsi edit alat
	public function editTugasakhir($data)
	{
		$this->db->where('PENERBIT',$data['PENERBIT']);
		$this->db->update('TUGAS_AKHIR',$data);
	}
	//fungsi delete tuas akhir
	public function deleteTugasakhir($data)
	{
		$this->db->where('PENERBIT',$data['PENERBIT']);
		$this->db->delete('TUGAS_AKHIR',$data);
	}



}

/* End of file Informasi_model.php */
/* Location: ./application/models/Informasi_model.php */