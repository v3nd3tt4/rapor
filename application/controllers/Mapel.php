<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class Mapel extends CI_Controller {

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
			'page' => 'template_admin_v2/dashboard_mapel',
			'link' => 'mapel',
			'list' => $this->db->get('tb_mapel'),
		);

		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function tambah_mapel(){
		$data = array(
			'page' => 'template_admin_v2/tambah_mapel',
			'link' => 'mapel',
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function simpan_mapel(){
		$cek = $this->db->get_where('tb_mapel', array('kodemapel' => $this->input->post('kodemapel', true)));

		if($cek->num_rows() != 0){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Maaf!</strong> Kode Mata Pelajaran Sudah Ada !</div>'
			);
			redirect(base_url().'mapel/tambah_mapel'); //location
			exit();
		}

		$data = array(
			'kodemapel' => $this->input->post('kodemapel', true),	 
			'namamapel'	 => $this->input->post('namamapel', true),	 
			'kategorimapel'  => $this->input->post('kategorimapel', true),
		);
		$simpan = $this->db->insert('tb_mapel', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
			);
			redirect(base_url().'mapel/tambah_mapel'); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
			);
			redirect(base_url().'mapel/tambah_mapel'); //location
		}
	}

	public function hapus_mapel($idguru){
		$this->db->where(array('idmapel' => $idguru));
		$hapus = $this->db->delete('tb_mapel');
		if($hapus){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
			);
			redirect(base_url().'mapel'); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
			);
			redirect(base_url().'mapel'); //location
		}
	}

	public function lihat_mapel($idguru){
		$data = array(
			'page' => 'template_admin_v2/lihat_mapel',
			'link' => 'mapel',
			'list' => $this->db->get_where('tb_mapel', array('idmapel' => $idguru)),
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function update_mapel(){
		$data = array(
			'kodemapel' => $this->input->post('kodemapel', true),	 
			'namamapel'	 => $this->input->post('namamapel', true),	 
			'kategorimapel'  => $this->input->post('kategorimapel', true),
		);
		$this->db->where(array('idmapel' => $this->input->post('idmapel', true)));
		$simpan = $this->db->update('tb_mapel', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diupdate !</div>'
			);
			redirect(base_url().'mapel/lihat_mapel/'.$this->input->post('idmapel', true)); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diupdate !</div>'
			);
			redirect(base_url().'mapel/lihat_mapel/'.$this->input->post('idmapel', true)); //location
		}
	}

}