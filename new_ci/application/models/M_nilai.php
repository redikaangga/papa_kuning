<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai extends CI_Model {

	public function getNilai()
	{
		$this->db->select('nilai.*, mapel.mapel, siswa.nama');
		$this->db->from('nilai');
		$this->db->join('mapel', 'nilai.id_mapel = mapel.id_mapel', 'left');
		$this->db->join('siswa', 'nilai.id_siswa = siswa.id_siswa', 'left');

		$data = $this->db->get();

		return $data->result();
	}

	public function act_tambah($param)
	{
		$this->db->insert('nilai', $param);

		return $this->db->affected_rows();
	}

	public function getDetailNilai($id)
	{
		$this->db->where('id_nilai', $id);
		$data = $this->db->get('nilai');

		return $data->row();
	}

	public function act_edit($param)
	{
		$object = [
			'id_mapel'		=> $param['mapel'],
			'id_siswa'		=> $param['siswa'],
			'total_nilai'	=> $param['nilai'],
		];
		$this->db->where('id_nilai', $param['id']);
		$this->db->update('nilai', $object);

		return $this->db->affected_rows();
	}

	public function act_hapus($id)
	{
		$this->db->where('id_nilai', $id);
		$this->db->delete('nilai');

		$this->db->affected_rows();
	}	

}

/* End of file M_nilai.php */
/* Location: ./application/models/M_nilai.php */