<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class Predikat extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			echo '<script>alert("Anda harus login terlebih dahulu");</script>';
			echo '<script>window.location.href = "'.base_url().'";</script>';
		}else if($this->session->userdata('level') != 'guru'){
			echo '<script>alert("Anda tidak diizinkan mengakses halaman ini");</script>';
			echo '<script>window.location.href = "'.base_url().'";</script>';
		}
	}

	public function index(){		
		$data = array(
			'page' => 'template_admin_v2/dashboard_predikat',
			'link' => 'predikat',
			'list' => $this->db->get('tb_predikat'),
		);

		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function tambah_predikat(){
		$data = array(
			'page' => 'template_admin_v2/tambah_predikat',
			'link' => 'predikat',
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function simpan_predikat(){
		// $cek = $this->db->get_where('tb_kelas', array('kodekelas' => $this->input->post('kodekelas', true)));

		// if($cek->num_rows() != 0){
		// 	$this->session->set_flashdata(
		// 	    'msg', 
		// 	    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Maaf!</strong> NIS Sudah Ada !</div>'
		// 	);
		// 	redirect(base_url().'siswa/tambah_siswa'); //location
		// 	exit();
		// }
		$data = array(
			'idguru' => $this->session->userdata('idguru'),
			'nilaiatas' => $this->input->post('nilaiatas', true),
			'nilaibawah' => $this->input->post('nilaibawah', true),	 
			'huruf'	 => $this->input->post('huruf', true),	 
			'predikat'  => $this->input->post('predikat', true),
		);
		$simpan = $this->db->insert('tb_predikat', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
			);
			redirect(base_url().'predikat/tambah_predikat'); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
			);
			redirect(base_url().'predikat/tambah_predikat'); //location
		}
	}

	public function hapus_predikat($idguru){
		$this->db->where(array('idpredikat' => $idguru));
		$hapus = $this->db->delete('tb_predikat');
		if($hapus){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
			);
			redirect(base_url().'predikat'); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
			);
			redirect(base_url().'predikat'); //location
		}
	}

	public function lihat_predikat($idguru){
		$data = array(
			'page' => 'template_admin_v2/lihat_predikat',
			'link' => 'predikat',
			'list' => $this->db->get_where('tb_predikat', array('idpredikat' => $idguru)),
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function update_predikat(){
		$data = array(
			'idguru' => $this->session->userdata('idguru'),
			'nilaiatas' => $this->input->post('nilaiatas', true),
			'nilaibawah' => $this->input->post('nilaibawah', true),	 
			'huruf'	 => $this->input->post('huruf', true),	 
			'predikat'  => $this->input->post('predikat', true),
		);
		$this->db->where(array('idpredikat' => $this->input->post('idpredikat', true)));
		$simpan = $this->db->update('tb_predikat', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diupdate !</div>'
			);
			redirect(base_url().'predikat/lihat_predikat/'.$this->input->post('idpredikat', true)); //location
		}
		else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diupdate !</div>'
			);
			redirect(base_url().'predikat/lihat_predikat/'.$this->input->post('idpredikat', true)); //location
		}
	}

}