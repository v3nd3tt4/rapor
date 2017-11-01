<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class Guru extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('M_posting');
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
			'page' => 'template_admin_v2/guru/dashboard_guru',
			'link' => 'guru',
			'guru' => $this->db->get_where('tb_guru', array('idguru' => $this->session->userdata('idguru')))
		);

		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

}