<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {

	public function getGuru()
	{
		// $this->db->select('guru.*, mapel.nama_mapel');
		// $this->db->from('guru');
		// $this->db->join('mapel', 'mapel.id_mapel = guru.id_mapel', 'left');

		$data = $this->db->get('guru');

		return $data->result();
	}

	public function act_tambah($param)
	{
		$this->db->insert('guru', $param);

		return $this->db->affected_rows();
	}

	public function getDetailGuru($id)
	{
		$this->db->where('id_guru', $id);
		$data = $this->db->get('guru');

		return $data->row();
	}

	public function act_edit($param)
	{
		$object = [
			'nama_guru'		=> $param['nama_guru'],
			'alamat_guru'	=> $param['alamat_guru'],
			
		];
		$this->db->where('id_guru', $param['id']);
		$this->db->update('guru', $object);

		return $this->db->affected_rows();
	}

	public function act_hapus($id)
	{
		$this->db->where('id_guru', $id);
		$this->db->delete('guru');

		$this->db->affected_rows();
	}	

}

/* End of file M_guru.php */
/* Location: ./application/models/M_guru.php */