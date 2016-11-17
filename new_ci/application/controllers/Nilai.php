<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_nilai');
		$this->load->model('M_siswa');
		$this->load->model('M_mapel');
	}

	public function index()
	{
		$data['judul'] = 'Menu Nilai';
		$data['data_nilai'] = $this->M_nilai->getNilai();
		$this->load_template('nilai/home', $data);
	}

	public function addNilai()
	{
		$data['judul'] = 'Tambah Nilai';
		$data['nilai'] = $this->M_nilai->getNilai();
		$data['siswa'] = $this->M_siswa->getSiswa();
		$data['mapel'] = $this->M_mapel->getMapel();
		$this->load_template('nilai/form_tambah_nilai', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('id_siswa', 'Siswa', 'required');
		$this->form_validation->set_rules('id_mapel', 'Mapel', 'required');
		$this->form_validation->set_rules('total_nilai', 'Nilai', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));

			redirect('nilai/addNilai');
		} else {
			$param = $this->input->post();
			$proses = $this->M_nilai->act_tambah($param);
			if($proses >= 0){
				$this->session->set_flashdata('alert_msg', succ_msg('Nilai berhasil diinput'));
				redirect('nilai');
			} else{
				$this->session->set_flashdata('alert_msg', err_msg('Gagal input Nilai'));
				redirect('nilai/addNilai');
			}
			
		}
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Nilai';
		$data['data_mapel'] = $this->M_mapel->getMapel();
		$data['data_siswa'] = $this->M_siswa->getSiswa();
		$data['data_nilai'] = $this->M_nilai->getDetailNilai($id);
		$this->load_template('nilai/form_edit_nilai', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('mapel', 'Mapel', 'required');
		$this->form_validation->set_rules('nama_siswa', 'Siswa', 'required');
		$this->form_validation->set_rules('id_nilai', 'Nilai', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));

			redirect('nilai/addNilai');
		} else {
			$param = $this->input->post();
			$proses = $this->M_nilai->act_edit($param);

			if($proses >= 0){
				$this->session->set_flashdata('alert_msg', succ_msg('Nilai berhasil di edit'));
				redirect('siswa');
			} else{
				$this->session->set_flashdata('alert_msg', err_msg('Gagal edit Nilai'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}		
	}

	public function hapus($id)
	{
		$proses = $this->M_nilai->act_hapus($id);

		if($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('Berhasil di hapus'));
			redirect('nilai');
		} else{
			$this->session->set_flashdata('alert_msg', err_msg('Gagal hapus'));
			redirect('nilai');
		}			
	}

}

/* End of file Nilai.php */
/* Location: ./application/controllers/Nilai.php */