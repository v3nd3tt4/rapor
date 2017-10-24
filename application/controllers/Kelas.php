<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class kelas extends CI_Controller {

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
			'page' => 'template_admin_v2/dashboard_kelas',
			'link' => 'kelas',
			'list' => $this->db->get('tb_kelas')
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function tambah_kelas(){
		$data = array(
			'page' => 'template_admin_v2/tambah_kelas',
			'link' => 'kelas',
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function simpan_kelas(){
		$cek = $this->db->get_where('tb_kelas', array('kodekelas' => $this->input->post('kodekelas', true)));

		if($cek->num_rows() != 0){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Maaf!</strong> NIS Sudah Ada !</div>'
			);
			redirect(base_url().'siswa/tambah_siswa'); //location
			exit();
		}

		$data = array(
			'kodekelas' => $this->input->post('kodekelas', true),	 
			'namakelas'	 => $this->input->post('namakelas', true),	 
			'bidangstudi'  => $this->input->post('bidangstudi', true), 
			'programstudikeahlian'  => $this->input->post('programstudikeahlian', true),
			'kompetensikeahlian'  => $this->input->post('kompetensikeahlian', true),
			'namawalikelas'  => $this->input->post('namawalikelas', true),	 
			'semester' => $this->input->post('semester', true),	 
		);
		$simpan = $this->db->insert('tb_kelas', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
			);
			redirect(base_url().'kelas/tambah_kelas'); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
			);
			redirect(base_url().'kelas/tambah_kelas'); //location
		}
	}


	public function hapus_kelas($idguru){
		$this->db->where(array('idkelas' => $idguru));
		$hapus = $this->db->delete('tb_kelas');
		if($hapus){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
			);
			redirect(base_url().'kelas'); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
			);
			redirect(base_url().'kelas'); //location
		}
	}

	public function lihat_kelas($idguru){
		$data = array(
			'page' => 'template_admin_v2/lihat_kelas',
			'link' => 'kelas',
			'list' => $this->db->get_where('tb_kelas', array('idkelas' => $idguru))
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function update_kelas(){
		$data = array(
			'kodekelas' => $this->input->post('kodekelas', true),	 
			'namakelas'	 => $this->input->post('namakelas', true),	 
			'bidangstudi'  => $this->input->post('bidangstudi', true), 
			'programstudikeahlian'  => $this->input->post('programstudikeahlian', true),
			'kompetensikeahlian'  => $this->input->post('kompetensikeahlian', true),
			'namawalikelas'  => $this->input->post('namawalikelas', true),	 
			'semester' => $this->input->post('semester', true),
		);
		$this->db->where(array('idkelas' => $this->input->post('idkelas', true)));
		$simpan = $this->db->update('tb_kelas', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diupdate !</div>'
			);
			redirect(base_url().'kelas/lihat_kelas/'.$this->input->post('idkelas', true)); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diupdate !</div>'
			);
			redirect(base_url().'kelas/lihat_kelas/'.$this->input->post('idkelas', true)); //location
		}
	}

}