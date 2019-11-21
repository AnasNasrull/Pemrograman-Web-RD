<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_mahasiswa extends CI_Controller {
	public function index() {
		$this->load->model('m_mahasiswa');

		$get = $this->m_mahasiswa->get();

		$data['nim'] = $get[0]->nim;
		$data['nama'] = $get[0]->nama;
		$data['alamat'] = $get[0]->alamat;
		$data['TTL'] = $get[0]->TTL;

		$this->load->view('v_mahasiswa', $data);
	}
}