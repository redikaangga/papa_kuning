<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mapel extends CI_Model {

	public function getMapel()
	{
		$this->db->select('mapel.*, guru.nama_guru');
		$this->db->from('mapel');
		$this->db->join('guru', 'guru.id_guru = mapel.id_guru', 'left');

		$data = $this->db->get();

		return $data->result();
	}

	public function act_tambah($param)
	{
		$this->db->insert('mapel', $param);

		return $this->db->affected_rows();
	}

	public function getDetailMapel($id)
	{
		$this->db->where('id_mapel', $id);
		$data = $this->db->get('mapel');

		return $data->row();
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Siswa';
		$data['data_siswa'] = $this->M_siswa->getDetailSiswa($id);
		$data['data_kelas'] = $this->M_kelas->getKelas();
		$this->load_template('siswa/form_edit_siswa', $data);
	}

	public function act_edit($param)
	{
		$object = [
			'mapel'		=> $param['nama'],
			'id_guru'	=> $param['id_guru'],
		];
		$this->db->where('id_mapel', $param['id']);
		$this->db->update('mapel', $object);

		return $this->db->affected_rows();
	}

	public function act_hapus($id)
	{
		$this->db->where('id_mapel', $id);
		$this->db->delete('mapel');

		$this->db->affected_rows();
	}	

}

/* End of file M_mapel.php */
/* Location: ./application/models/M_mapel.php */