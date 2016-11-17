<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_mapel');
		$this->load->model('M_guru');
	}

	public function index()
	{
		$data['judul'] = 'Menu Mata Pelajaran';
		$data['data_mapel'] = $this->M_mapel->getMapel();
		$this->load_template('mapel/home', $data);
	}

	public function addMapel()
	{
		$data['judul'] = 'Tambah Mapel';
		$data['guru'] = $this->M_guru->getGuru();
		$data['mapel'] = $this->M_mapel->getMapel();
		$this->load_template('mapel/form_tambah_mapel', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('mapel', 'Nama', 'required');
		$this->form_validation->set_rules('id_guru', 'Nama_Guru', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));

			redirect('mapel/addMapel');
		} else {
			$param = $this->input->post();
			$proses = $this->M_mapel->act_tambah($param);
			if($proses >= 0){
				$this->session->set_flashdata('alert_msg', succ_msg('Mapel berhasil diinput'));
				redirect('mapel');
			} else{
				$this->session->set_flashdata('alert_msg', err_msg('Gagal input Mapel'));
				redirect('mapel/addMapel');
			}
			
		}
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Mapel';
		$data['data_mapel'] = $this->M_mapel->getDetailMapel($id);
		$data['data_guru'] 	= $this->M_guru->getGuru($id);
		$this->load_template('mapel/form_edit_mapel', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('mapel', 'Nama', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));

			redirect('mapel/addMapel');
		} else {
			$param = $this->input->post();
			$proses = $this->M_mapel->act_edit($param);

			if($proses >= 0){
				$this->session->set_flashdata('alert_msg', succ_msg('Mapel berhasil di edit'));
				redirect('mapel');
			} else{
				$this->session->set_flashdata('alert_msg', err_msg('Gagal edit Mapel'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}		
	}

	public function hapus($id)
	{
		$proses = $this->M_mapel->act_hapus($id);

		if($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('Mapel berhasil di hapus'));
			redirect('mapel');
		} else{
			$this->session->set_flashdata('alert_msg', err_msg('Gagal hapus Mapel'));
			redirect('mapel');
		}			
	}

}

/* End of file Mapel.php */
/* Location: ./application/controllers/Mapel.php */