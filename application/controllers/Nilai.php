<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class Nilai extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
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
			'page' => 'template_admin_v2/dashboard_nilai',
			'link' => 'nilai',
			'kelas' => $this->db->get_where('tb_kelas', array('namawalikelas' => $this->session->userdata('idguru'))),
			'mapel' => $this->db->get('tb_mapel')
		);

		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function siswa_kelas(){
		$kelas = $this->input->post('kelas', true);
		$mapel = $this->input->post('mapel', true);
		$tahunajaran = $this->input->post('ta', true);
		$semester = $this->input->post('semester', true);
		$this->db->from('tb_siswa');
		$this->db->where(array('idkelas' => $kelas));
		$this->db->order_by('namasiswa', 'ASC');
		$siswa = $this->db->get();
		$data = array(
			'page' => 'template_admin_v2/nilai_siswa_kelas',
			'link' => 'nilai',
			'kelas' => $this->db->get_where('tb_kelas', array('idkelas' => $kelas)),
			'siswa' => $siswa,
			'mapel' => $this->db->get_where('tb_mapel', array('idmapel' => $mapel)),
			'semester' => $semester,
			'tahunajaran' => $tahunajaran
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function isi_nilai_siswa(){
		$siswa = $this->db->get_where('tb_siswa', array('idsiswa' => $this->input->get('id_siswa', true)));
		$kelas = $this->db->get_where('tb_kelas', array('idkelas' => $this->input->get('id_kelas', true)));
		$mapel = $this->db->get_where('tb_mapel', array('idmapel' => $this->input->get('idmapel', true)));
		$cek_nilai = $this->db->get_where('tb_nilai', array('nis' => $siswa->row()->nis, 'kodemapel' => $mapel->row()->kodemapel, 'thnajaran' => $this->input->get('ta', true), 'semester' => $this->input->get('semester', true)));
		$data = array(
			'page' => 'template_admin_v2/isi_nilai_siswa',
			'link' => 'nilai', 
			'siswa' => $siswa,
			'kelas' => $kelas,
			'mapel' => $mapel,
			'guru' => $this->db->get('tb_guru'),
			'cek_nilai' => $cek_nilai

		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function lihat_nilai_siswa(){
		$siswa = $this->db->get_where('tb_siswa', array('idsiswa' => $this->input->get('id_siswa', true)));
		$kelas = $this->db->get_where('tb_kelas', array('idkelas' => $this->input->get('id_kelas', true)));
		$mapel = $this->db->get_where('tb_mapel', array('idmapel' => $this->input->get('idmapel', true)));
		$cek_nilai = $this->db->get_where('tb_nilai', array('nis' => $siswa->row()->nis, 'kodemapel' => $mapel->row()->kodemapel, 'thnajaran' => $this->input->get('ta', true), 'semester' => $this->input->get('semester', true)));
		$data = array(
			'page' => 'template_admin_v2/lihat_nilai_siswa',
			'link' => 'nilai', 
			'siswa' => $siswa,
			'kelas' => $kelas,
			'mapel' => $mapel,
			'guru' => $this->db->get('tb_guru'),
			'cek_nilai' => $cek_nilai

		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function simpan_nilai(){
		$data = array(
			'sk7' => $this->input->post('sk7', true),
			'sk8' => $this->input->post('sk8', true),
			'sk9' => $this->input->post('sk9', true),
			'sk10' => $this->input->post('sk10', true),
			'uts' => $this->input->post('uts', true),
			'us' => $this->input->post('uas', true),
			'afaktif' => $this->input->post('afaktif', true),
			'psycom' => $this->input->post('psycom', true),
			'kkm' => $this->input->post('kkm', true),
			'deskripsi' => $this->input->post('deskripsi', true),
			'thnajaran' => $this->input->post('ta', true),
			'semester' => $this->input->post('semester', true),
			'nis' => $this->input->post('nis', true),
			'kodemapel' => $this->input->post('kodemapel', true),
			'kodeguru' => $this->input->post('guru', true),
		);
		$simpan = $this->db->insert('tb_nilai', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
			);
			redirect(base_url().'nilai/isi_nilai_siswa?id_siswa='.$this->input->post('id_siswa', true).'&id_kelas='.$this->input->post('id_kelas', true).'&idmapel='.$this->input->post('idmapel', true).'&ta='.$this->input->post('ta', true).'&semester='.$this->input->post('semester', true));
		}else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data gagal disimpan !</div>'
			);
			redirect(base_url().'nilai/isi_nilai_siswa?id_siswa='.$this->input->post('id_siswa', true).'&id_kelas='.$this->input->post('id_kelas', true).'&idmapel='.$this->input->post('idmapel', true).'&ta='.$this->input->post('ta', true).'&semester='.$this->input->post('semester', true));
		}
	}

	public function update_nilai(){
		$data = array(
			'sk7' => $this->input->post('sk7', true),
			'sk8' => $this->input->post('sk8', true),
			'sk9' => $this->input->post('sk9', true),
			'sk10' => $this->input->post('sk10', true),
			'uts' => $this->input->post('uts', true),
			'us' => $this->input->post('uas', true),
			'afaktif' => $this->input->post('afaktif', true),
			'psycom' => $this->input->post('psycom', true),
			'kkm' => $this->input->post('kkm', true),
			'deskripsi' => $this->input->post('deskripsi', true),
			// 'thnajaran' => $this->input->post('ta', true),
			// 'semester' => $this->input->post('semester', true),
			// 'nis' => $this->input->post('nis', true),
			// 'kodemapel' => $this->input->post('kodemapel', true),
			// 'kodeguru' => $this->input->post('guru', true),
		);
		$this->db->where('nis', $this->input->post('nis', true));
		$this->db->where('kodemapel', $this->input->post('kodemapel', true));
		$this->db->where('thnajaran', $this->input->post('ta', true));
		$this->db->where('semester', $this->input->post('semester', true));
		$simpan = $this->db->update('tb_nilai', $data);
		if($simpan){
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diupdate !</div>'
			);
			redirect(base_url().'nilai/lihat_nilai_siswa?id_siswa='.$this->input->post('id_siswa', true).'&id_kelas='.$this->input->post('id_kelas', true).'&idmapel='.$this->input->post('idmapel', true).'&ta='.$this->input->post('ta', true).'&semester='.$this->input->post('semester', true));
		}else{
			$this->session->set_flashdata(
			    'msg', 
			    '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data gagal disimpan !</div>'
			);
			redirect(base_url().'nilai/lihat_nilai_siswa?id_siswa='.$this->input->post('id_siswa', true).'&id_kelas='.$this->input->post('id_kelas', true).'&idmapel='.$this->input->post('idmapel', true).'&ta='.$this->input->post('ta', true).'&semester='.$this->input->post('semester', true));
		}
	}

	public function riwayat_nilai(){
		$data = array(
			'page' => 'template_admin_v2/riwayat_nilai',
			'link' => 'riwayat_nilai',
			'kelas' => $this->db->get_where('tb_kelas', array('namawalikelas' => $this->session->userdata('idguru'))),
		);

		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function list_siswa(){
		$kelas = $this->input->post('kelas', true);
		$this->db->from('tb_siswa');
		$this->db->where(array('idkelas' => $kelas));
		$this->db->order_by('namasiswa', 'ASC');
		$siswa = $this->db->get();
		$data = array(
			'page' => 'template_admin_v2/list_siswa',
			'link' => 'riwayat_nilai',
			'kelas' => $this->db->get_where('tb_kelas', array('idkelas' => $kelas)),
			'siswa' => $siswa
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function nilai_per_siswa(){
		$id_siswa = $this->input->get('idsiswa', true);
		$siswa = $this->db->get_where('tb_siswa', array('idsiswa' => $id_siswa));
		$kelas = $this->db->get_where('tb_kelas', array('idkelas' => $siswa->row()->idsiswa));
		$this->db->from('tb_nilai');
		$this->db->join('tb_mapel', 'tb_nilai.kodemapel = tb_mapel.kodemapel');
		$this->db->where(array('nis' => $siswa->row()->nis));
		$data_nilai = $this->db->get();
		// $data_nilai = $this->db->get_where('tb_nilai', array('nis' => $siswa->row()->nis));
		$data = array(
			'page' => 'template_admin_v2/nilai_per_siswa',
			'link' => 'riwayat_nilai',
			'siswa' => $siswa,
			'kelas' => $kelas,
			'data_nilai' => $data_nilai
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function isi_raport(){
		$data = array(
			'page' => 'template_admin_v2/dashboard_isi_raport',
			'link' => 'isi_raport',
			'kelas' => $this->db->get_where('tb_kelas', array('namawalikelas' => $this->session->userdata('idguru'))),
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function list_siswa_isi_raport(){
		// $kelas = $this->input->post('kelas'. true);
		$ta = $this->input->post('ta', true);
		$semester = $this->input->post('semester', true);
		$kelas = $this->input->post('kelas', true);
		$this->db->from('tb_siswa');
		$this->db->where(array('idkelas' => $kelas));
		$this->db->order_by('namasiswa', 'ASC');
		$siswa = $this->db->get();
		$data = array(
			'page' => 'template_admin_v2/list_siswa_isi_raport',
			'link' => 'isi_raport',
			'kelas' => $this->db->get_where('tb_kelas', array('idkelas' => $kelas)),
			'siswa' => $siswa,
			'ta' => $ta,
			'semester' => $semester
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function isi_raport_siswa(){
		

		$ta = $this->input->get('ta', true);
		$semester = $this->input->get('semester', true);
		$idsiswa = $this->input->get('idsiswa', true);
		$kelas = $this->input->get('idkelas', true);

		$this->db->from('vw_nilai');
		$this->db->join('tb_mapel', 'vw_nilai.kodemapel = tb_mapel.kodemapel');
		$this->db->where(array('tb_mapel.kategorimapel' => 'normatif'));
		$nilai_normatif = $this->db->get();

		$this->db->from('vw_nilai');
		$this->db->join('tb_mapel', 'vw_nilai.kodemapel = tb_mapel.kodemapel');
		$this->db->where(array('tb_mapel.kategorimapel' => 'adaptif'));
		$nilai_adaptif = $this->db->get();

		$this->db->from('vw_nilai');
		$this->db->join('tb_mapel', 'vw_nilai.kodemapel = tb_mapel.kodemapel');
		$this->db->where(array('tb_mapel.kategorimapel' => 'produktif'));
		$nilai_produktif = $this->db->get();

		$this->db->from('vw_nilai');
		$this->db->join('tb_mapel', 'vw_nilai.kodemapel = tb_mapel.kodemapel');
		$this->db->where(array('tb_mapel.kategorimapel' => 'mulok'));
		$nilai_mulok = $this->db->get();

		$data = array(
			'page' => 'template_admin_v2/isi_raport_siswa',
			'link' => 'isi_raport',
			'kelas' => $this->db->get_where('tb_kelas', array('idkelas' => $kelas)),
			'siswa' => $this->db->get_where('tb_siswa', array('idsiswa' => $idsiswa)),
			'nilai_normatif' => $nilai_normatif,
			'nilai_adaptif' => $nilai_adaptif,
			'nilai_produktif' => $nilai_produktif,
			'nilai_mulok' => $nilai_mulok,
			'ta' => $ta,
			'semester' => $semester
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

}