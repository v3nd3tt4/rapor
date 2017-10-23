<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('username')==""){
			echo '<script>alert("Anda harus login terlebih dahulu");</script>';
			echo '<script>window.location.href = "'.base_url().'";</script>';
		}
		$this->load->model('M_posting');
	}

	public function index(){
		$data = array(
			'page' => 'template_admin_v2/dashboard',
			'link' => 'home',
			'list' => $this->db->get('post')
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function tambah(){
		$data = array(
			'page' => 'template_admin_v2/tambah_posting',
			'link' => 'home',
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function edit($id){
		$data = array(
			'page' => 'template_admin_v2/edit_posting',
			'link' => 'home',
			'data' => $this->M_posting->filter_data($id)
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function dosen(){
		$data = array(
			'page' => 'template_admin_v2/dashboard_dosen',
			'link' => 'dosen',
			'list' => $this->db->get_where('family', array('kategori' => 'Dosen'))
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function tambah_dosen(){
		$data = array(
			'page' => 'template_admin_v2/tambah_dosen',
			'link' => 'dosen',
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function edit_dosen($id){
		$data = array(
			'page' => 'template_admin_v2/edit_dosen',
			'link' => 'dosen',
			'data' => $this->db->get_where('family', array('id' => $id))
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function alumni(){
		$data = array(
			'page' => 'template_admin_v2/dashboard_alumni',
			'link' => 'alumni',
			'list' => $this->db->get_where('family', array('kategori' => 'Alumni'))
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function detail_alumni($id){
		$data = array(
			'page' => 'template_admin_v2/detail_alumni',
			'link' => 'alumni',
			'list' => $this->db->get_where('family', array('id' => $id))
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function kotak_saran(){
		$data = array(
			'page' => 'template_admin_v2/dashboard_kotak_saran',
			'link' => 'kotak_saran',
			'list' => $this->db->get('saran')
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function detail_saran($id){
		$data = array(
			'page' => 'template_admin_v2/detail_saran',
			'link' => 'kotak_saran',
			'list' => $this->db->get_where('saran', array('id' => $id))
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function galeri(){
		$data = array(
			'page' => 'template_admin_v2/dashboard_galeri',
			'link' => 'galeri',
			'list' => $this->db->get('gambar')
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function tambah_galeri(){
		$data = array(
			'page' => 'template_admin_v2/tambah_galeri',
			'link' => 'galeri',
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function edit_galeri($id){
		$data = array(
			'page' => 'template_admin_v2/edit_galeri',
			'link' => 'galeri',			
			'data' => $this->db->get_where('gambar', array('id' => $id))
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function logout(){
		session_destroy();
		echo '<script>alert("Anda berhasil logout");</script>';
		echo '<script>window.location.href = "'.base_url().'";</script>';
	}

	public function user(){
		$data = array(
			'page' => 'template_admin_v2/dashboard_user',
			'link' => 'user',
			'list' => $this->db->get('user')
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function tambah_user(){
		$data = array(
			'page' => 'template_admin_v2/tambah_user',
			'link' => 'user',
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function edit_user($id){
		$data = array(
			'page' => 'template_admin_v2/edit_user',
			'link' => 'user',		
			'data' => $this->db->get_where('user', array('id' => $id))
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function pengajuan_judul(){
		$data = array(
			'page' => 'template_admin_v2/dashboard_pengajuan_judul',
			'link' => 'pengajuan_judul',
			'data' => $this->db->get('pengajuan_judul')
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function detail_judul($id){
		$data = array(
			'page' => 'template_admin_v2/detail_judul',
			'link' => 'pengajuan_judul',
			'list' => $this->db->get_where('pengajuan_judul', array('id_pengajuan_judul' => $id))
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

}
