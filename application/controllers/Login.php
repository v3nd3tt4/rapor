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

	public function proses_login(){
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$rule = $this->input->post('rule', true);
		if($rule == 'guru'){
			$cek = $this->db->get_where('tb_guru', array('username' => $username));
			if($cek->num_rows() == 0){
				$this->session->set_flashdata(
				    'msg', 
				    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Username tidak ditemukan !</div>'
				);
				redirect(base_url().'login'); //location
			}else{
				$get_password = $cek->row()->password;
				$cocok = password_verify($password, $get_password);
				if($cocok){
					$sess_data['status'] = 'login';
					//$sess_data['id']=$sess->id;
					$sess_data['idguru'] = $cek->row()->idguru;
					$sess_data['username'] = $cek->row()->username;
					$sess_data['nama'] = $cek->row()->namaguru;
					$sess_data['level'] = 'guru';
					$this->session->set_userdata($sess_data);
					echo'<script>window.location.href="'.base_url().'guru";</script>';
				}else{
					$this->session->set_flashdata(
					    'msg', 
					    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Password salah !</div>'
					);
					redirect(base_url().'login'); //location
				}
			}
		}
		if($rule == 'staff'){
			$cek = $this->db->get_where('tb_pegawai', array('username' => $username));
			if($cek->num_rows() == 0){
				$this->session->set_flashdata(
				    'msg', 
				    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Username tidak ditemukan !</div>'
				);
				redirect(base_url().'login'); //location
			}else{
				$get_password = $cek->row()->password;
				$cocok = password_verify($this->input->post('password', true), $get_password);
				if($cocok){
					$sess_data['status'] = 'login';
					//$sess_data['id']=$sess->id;
					$sess_data['idpegawai'] = $cek->row()->idpegawai;
					$sess_data['username'] = $cek->row()->username;
					$sess_data['nama'] = $cek->row()->namapegawai;
					$sess_data['level'] = 'pegawai';
					$this->session->set_userdata($sess_data);
					echo'<script>window.location.href="'.base_url().'home";</script>';
				}else{
					$this->session->set_flashdata(
					    'msg', 
					    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Password salah !</div>'
					);
					redirect(base_url().'login'); //location
				}
			}
		}
		if($rule == 'siswa'){
			$cek = $this->db->get_where('tb_siswa', array('username' => $username));
			if($cek->num_rows() == 0){
				$this->session->set_flashdata(
				    'msg', 
				    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Username tidak ditemukan !</div>'
				);
				redirect(base_url().'login'); //location
			}else{
				$get_password = $cek->row()->password;
				$cocok = password_verify($this->input->post('password', true), $get_password);
				if($cocok){
					$sess_data['status'] = 'login';
					//$sess_data['id']=$sess->id;
					$sess_data['idsiswa'] = $cek->row()->idsiswa;
					$sess_data['username'] = $cek->row()->username;
					$sess_data['nama'] = $cek->row()->namasiswa;
					$sess_data['level'] = 'siswa';
					$this->session->set_userdata($sess_data);
					echo'<script>window.location.href="'.base_url().'siswa_user";</script>';
				}else{
					$this->session->set_flashdata(
					    'msg', 
					    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Password salah !</div>'
					);
					redirect(base_url().'login'); //location
				}
			}
		}
	}

	public function logout(){
		echo 'Please wait...';
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('status');
		$this->session->unset_userdata('idguru');
		//session_destroy();
		echo '<script>window.location.href="'.base_url().'";</script>';
	}

}