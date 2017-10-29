<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class Pegawai extends CI_Controller {

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
			'page' => 'template_admin_v2/dashboard_pegawai',
			'link' => 'pegawai',
			'list' => $this->db->get('tb_pegawai')
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function tambah_pegawai(){
		$data = array(
			'page' => 'template_admin_v2/tambah_pegawai',
			'link' => 'pegawai',
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function simpan_pegawai(){
		$cek = $this->db->get_where('tb_pegawai', array('kodepegawai' => $this->input->post('kodeguru', true)));
		$cek_username = $this->db->get_where('tb_pegawai', array('username' => $this->input->post('username', true)));

		if($cek->num_rows() != 0){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Maaf!</strong> Kode Pegawai Sudah Ada !</div>'
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
			'kodepegawai' => $this->input->post('kodeguru', true),
			'namapegawai' => $this->input->post('namaguru', true),
			'alamat' => $this->input->post('alamat', true),
			'telp' => $this->input->post('telp', true),
			'jk' => $this->input->post('jk', true),
			'agama' => $this->input->post('agama', true),
			'tempatlahir' => $this->input->post('tempatlahir', true),
			'divisi' => $this->input->post('divisi', true),
			'tgllahir' => $this->input->post('tgllahir', true),
			'username' => $this->input->post('username', true),
			'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
		);
		$simpan = $this->db->insert('tb_pegawai', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
			);
			redirect(base_url().'pegawai/tambah_pegawai'); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
			);
			redirect(base_url().'pegawai/tambah_pegawai'); //location
		}
	}


	public function hapus_pegawai($idguru){
		$this->db->where(array('idpegawai' => $idguru));
		$hapus = $this->db->delete('tb_pegawai');
		if($hapus){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
			);
			redirect(base_url().'pegawai'); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
			);
			redirect(base_url().'pegawai'); //location
		}
	}

	public function lihat_pegawai($idguru){
		$data = array(
			'page' => 'template_admin_v2/lihat_pegawai',
			'link' => 'pegawai',
			'list' => $this->db->get_where('tb_pegawai', array('idpegawai' => $idguru))
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function update_pegawai(){
		if($this->input->post('password', true) != ''){
			$data = array(
				'kodepegawai' => $this->input->post('kodeguru', true),
				'namapegawai' => $this->input->post('namaguru', true),
				'alamat' => $this->input->post('alamat', true),
				'telp' => $this->input->post('telp', true),
				'jk' => $this->input->post('jk', true),
				'divisi' => $this->input->post('divisi', true),
				'agama' => $this->input->post('agama', true),
				'tempatlahir' => $this->input->post('tempatlahir', true),
				'tgllahir' => $this->input->post('tgllahir', true),
				'username' => $this->input->post('username', true),
				'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT)
			);
		}else{
			$data = array(
				'kodepegawai' => $this->input->post('kodeguru', true),
				'namapegawai' => $this->input->post('namaguru', true),
				'alamat' => $this->input->post('alamat', true),
				'telp' => $this->input->post('telp', true),
				'jk' => $this->input->post('jk', true),
				'divisi' => $this->input->post('divisi', true),
				'agama' => $this->input->post('agama', true),
				'tempatlahir' => $this->input->post('tempatlahir', true),
				'tgllahir' => $this->input->post('tgllahir', true),
				'username' => $this->input->post('username', true)
			);
		}
		$this->db->where(array('idpegawai' => $this->input->post('idguru', true)));
		$simpan = $this->db->update('tb_pegawai', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diupdate !</div>'
			);
			redirect(base_url().'pegawai/lihat_pegawai/'.$this->input->post('idguru', true)); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diupdate !</div>'
			);
			redirect(base_url().'pegawai/lihat_pegawai/'.$this->input->post('idguru', true)); //location
		}
	}

}