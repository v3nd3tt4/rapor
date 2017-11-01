<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			echo '<script>alert("Anda harus login terlebih dahulu");</script>';
			echo '<script>window.location.href = "'.base_url().'";</script>';
		}else if($this->session->userdata('level') != 'pegawai'){
			echo '<script>alert("Anda tidak diizinkan mengakses halaman ini");</script>';
			echo '<script>window.location.href = "'.base_url().'";</script>';
		}
	}

	public function index(){
		$data = array(
			'page' => 'template_admin_v2/dashboard',
			'link' => 'home',
			'pegawai' => $this->db->get_where('tb_pegawai', array('idpegawai' => $this->session->userdata('idpegawai')))
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
			'list' => $this->db->get('tb_user')
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

	public function guru(){
		$data = array(
			'page' => 'template_admin_v2/dashboard_guru',
			'link' => 'guru',
			'list' => $this->db->get('tb_guru')
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function tambah_guru(){
		$data = array(
			'page' => 'template_admin_v2/tambah_guru',
			'link' => 'guru',
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function simpan_guru(){
		$cek = $this->db->get_where('tb_guru', array('kodeguru' => $this->input->post('kodeguru', true)));
		$cek_username = $this->db->get_where('tb_guru', array('username' => $this->input->post('username', true)));

		if($cek->num_rows() != 0){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Maaf!</strong> Kode Guru Sudah Ada !</div>'
			);
			redirect(base_url().'home/tambah_guru'); //location
			exit();
		}

		if($cek_username->num_rows() != 0){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Maaf!</strong> Username Sudah Ada !</div>'
			);
			redirect(base_url().'home/tambah_guru'); //location
			exit();
		}

		$data = array(
			'kodeguru' => $this->input->post('kodeguru', true),
			'namaguru' => $this->input->post('namaguru', true),
			'alamat' => $this->input->post('alamat', true),
			'telp' => $this->input->post('telp', true),
			'jk' => $this->input->post('jk', true),
			'agama' => $this->input->post('agama', true),
			'jenisptk' => $this->input->post('jenisptk', true),
			'statuskepegawaian' => $this->input->post('statuskepegawaian', true),
			'tempatlahir' => $this->input->post('tempatlahir', true),
			'tgllahir' => $this->input->post('tgllahir', true),
			'username' => $this->input->post('username', true),
			'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
		);
		$simpan = $this->db->insert('tb_guru', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
			);
			redirect(base_url().'home/tambah_guru'); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
			);
			redirect(base_url().'home/tambah_guru'); //location
		}
	}


	public function hapus_guru($idguru){
		$this->db->where(array('idguru' => $idguru));
		$hapus = $this->db->delete('tb_guru');
		if($hapus){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
			);
			redirect(base_url().'home/guru'); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
			);
			redirect(base_url().'home/guru'); //location
		}
	}

	public function lihat_guru($idguru){
		$data = array(
			'page' => 'template_admin_v2/lihat_guru',
			'link' => 'guru',
			'list' => $this->db->get_where('tb_guru', array('idguru' => $idguru))
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function update_guru(){
		if($this->input->post('password', true) != ''){
			$data = array(
				'kodeguru' => $this->input->post('kodeguru', true),
				'namaguru' => $this->input->post('namaguru', true),
				'alamat' => $this->input->post('alamat', true),
				'telp' => $this->input->post('telp', true),
				'jk' => $this->input->post('jk', true),
				'agama' => $this->input->post('agama', true),
				'jenisptk' => $this->input->post('jenisptk', true),
				'statuskepegawaian' => $this->input->post('statuskepegawaian', true),
				'tempatlahir' => $this->input->post('tempatlahir', true),
				'tgllahir' => $this->input->post('tgllahir', true),
				'username' => $this->input->post('username', true),
				'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT)
			);
		}else{
			$data = array(
				'kodeguru' => $this->input->post('kodeguru', true),
				'namaguru' => $this->input->post('namaguru', true),
				'alamat' => $this->input->post('alamat', true),
				'telp' => $this->input->post('telp', true),
				'jk' => $this->input->post('jk', true),
				'jenisptk' => $this->input->post('jenisptk', true),
				'statuskepegawaian' => $this->input->post('statuskepegawaian', true),
				'agama' => $this->input->post('agama', true),
				'tempatlahir' => $this->input->post('tempatlahir', true),
				'tgllahir' => $this->input->post('tgllahir', true),
				'username' => $this->input->post('username', true)
			);
		}
		$this->db->where(array('idguru' => $this->input->post('idguru', true)));
		$simpan = $this->db->update('tb_guru', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diupdate !</div>'
			);
			redirect(base_url().'home/lihat_guru/'.$this->input->post('idguru', true)); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diupdate !</div>'
			);
			redirect(base_url().'home/lihat_guru/'.$this->input->post('idguru', true)); //location
		}
	}
}
