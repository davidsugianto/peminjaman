<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	
	//fungsi listing peminjaman
	public function listing()
	{
		$this->db->select('PEMINJAMAN.*, ALAT.NAMA_ALAT, MAHASISWA.NAMA_MAHASISWA');
		$this->db->from('PEMINJAMAN');
		//join
		$this->db->join('ALAT','ALAT.ID_ALAT = PEMINJAMAN.ID_ALAT');
		$this->db->join('MAHASISWA','MAHASISWA.NIM = PEMINJAMAN.NIM');
		//end join
		$this->db->order_by('ID_PEMINJAMAN','DECS');
		$query = $this->db->get();
		return $query->result();
	}
	//fungsi listing peminjaman user
	public function user($NIM)
	{
		$this->db->select('PEMINJAMAN.*, ALAT.NAMA_ALAT, MAHASISWA.NAMA_MAHASISWA');
		$this->db->from('PEMINJAMAN');
		//join
		$this->db->join('ALAT','ALAT.ID_ALAT = PEMINJAMAN.ID_ALAT');
		$this->db->join('MAHASISWA','MAHASISWA.NIM = PEMINJAMAN.NIM');
		//end join
		$this->db->where('PEMINJAMAN.NIM',$NIM);
		$this->db->order_by('ID_PEMINJAMAN','DECS');
		$query = $this->db->get();
		return $query->result();
	}
	//fungsi limmit peminjaman user
	public function limit_peminjaman($NIM)
	{
		$this->db->select('PEMINJAMAN.*, ALAT.NAMA_ALAT, MAHASISWA.NAMA_MAHASISWA');
		$this->db->from('PEMINJAMAN');
		//join
		$this->db->join('ALAT','ALAT.ID_ALAT = PEMINJAMAN.ID_ALAT');
		$this->db->join('MAHASISWA','MAHASISWA.NIM = PEMINJAMAN.NIM');
		//end join
		$this->db->where('PEMINJAMAN.NIM',$NIM);
		$this->db->where('PEMINJAMAN.STATUS_PEMINJAMAN <>','Sudah');
		$this->db->order_by('ID_PEMINJAMAN','DECS');
		$query = $this->db->get();
		return $query->result();
	}
	//fungsi Detail
	public function detail($NIM)
	{
		$this->db->select('*');
		$this->db->from('PEMINJAMAN');
		$this->db->where('NIM',$NIM);
		$this->db->order_by('NIM','DECS');
		$query = $this->db->get();
		return $query->row();
	}
	//fungsi tambah peminjaman
	public function tambah($data)
	{
		$this->db->insert('PEMINJAMAN',$data);
	}
	//fungsi edit peminjaman
	public function edit($data)
	{
		$this->db->where('NIM',$data['NIM']);
		$this->db->update('PEMINJAMAN',$data);
	}
	//fungsi delete user
	public function delete($data)
	{
		$this->db->where('ID_PEMINJAMAN',$data['ID_PEMINJAMAN']);
		$this->db->delete('PEMINJAMAN',$data);
	}

}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */