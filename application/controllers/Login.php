<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		// if($this->session->userdata('username')==""){
		// 	echo '<script>alert("Anda harus login terlebih dahulu");</script>';
		// 	echo '<script>window.location.href = "'.base_url().'";</script>';
		// }
		// $this->load->model('M_posting');
	}

	public function index(){		
		// $data = array(
		// 	'page' => 'template_admin_v2/login',
		// 	'link' => 'login'
		// );

		$this->load->view('template_admin_v2/login');
	}
}