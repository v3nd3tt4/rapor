<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class Nilai extends CI_Controller {

	function __construct(){
		parent::__construct();
		// if($this->session->userdata('username')==""){
		// 	echo '<script>alert("Anda harus login terlebih dahulu");</script>';
		// 	echo '<script>window.location.href = "'.base_url().'";</script>';
		// }
		// $this->load->model('M_posting');
	}

	public function index(){		
		$data = array(
			'page' => 'template_admin_v2/dashboard_nilai',
			'link' => 'nilai',
			'kelas' => $this->db->get('tb_kelas')
		);

		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function siswa_kelas(){
		$kelas = $this->input->post('kelas', true);
		$this->db->from('tb_siswa');
		$this->db->where(array('idkelas' => $kelas));
		$this->db->order_by('namasiswa', 'ASC');
		$siswa = $this->db->get();
		$data = array(
			'page' => 'template_admin_v2/nilai_siswa_kelas',
			'link' => 'nilai',
			'kelas' => $this->db->get_where('tb_kelas', array('idkelas' => $kelas)),
			'siswa' => $siswa
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function isi_nilai_siswa(){
		$data = array(
			'page' => 'template_admin_v2/isi_nilai_siswa',
			'link' => 'nilai'
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}
}