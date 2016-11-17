<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_guru');
		// $this->load->model('M_kelas');
	}

	public function index()
	{
		$data['judul'] = 'Menu Guru';
		$data['data_guru'] = $this->M_guru->getGuru();
		$this->load_template('guru/home', $data);		
	}

	public function addGuru()
	{
		$data['judul'] = 'Tambah Guru';
		// $data['kelas'] = $this->M_kelas->getKelas();
		$this->load_template('guru/form_tambah_guru', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_guru', 'nama', 'required');
		$this->form_validation->set_rules('alamat_guru', 'alamat', 'required');
		// $this->form_validation->set_rules('id_kelas', 'Kelas', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));

			redirect('guru/addGuru');
		} else {
			$param = $this->input->post();
			$proses = $this->M_guru->act_tambah($param);
			if($proses >= 0){
				$this->session->set_flashdata('alert_msg', succ_msg('Berhasil input Guru'));
				redirect('guru');
			} else{
				$this->session->set_flashdata('alert_msg', err_msg('Gagal input Guru'));
				redirect('guru/addGuru');
			}
			
		}
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Guru';
		$data['data_guru'] = $this->M_guru->getDetailGuru($id);
		// $data['data_kelas'] = $this->M_kelas->getKelas();
		$this->load_template('guru/form_edit_guru', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama_guru', 'Nama', 'required');
		$this->form_validation->set_rules('alamat_guru', 'Alamat', 'required');
		// $this->form_validation->set_rules('id_kelas', 'Kelas', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));

			redirect('guru/addGuru');
		} else {
			$param = $this->input->post();
			$proses = $this->M_guru->act_edit($param);

			if($proses >= 0){
				$this->session->set_flashdata('alert_msg', succ_msg('Berhasil edit'));
				redirect('guru');
			} else{
				$this->session->set_flashdata('alert_msg', err_msg('Gagal edit Siswa'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}		
	}

	public function hapus($id)
	{
		$proses = $this->M_guru->act_hapus($id);

		if($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('Siswa berhasil di hapus'));
			redirect('guru');
		} else{
			$this->session->set_flashdata('alert_msg', err_msg('Gagal hapus Siswa'));
			redirect('guru');
		}			
	}	

}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */