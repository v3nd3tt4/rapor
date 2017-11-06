<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class siswa_user extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		if($this->session->userdata('status') != 'login'){
			echo '<script>alert("Anda harus login terlebih dahulu");</script>';
			echo '<script>window.location.href = "'.base_url().'";</script>';
		}else if($this->session->userdata('level') != 'siswa'){
			echo '<script>alert("Anda tidak diizinkan mengakses halaman ini");</script>';
			echo '<script>window.location.href = "'.base_url().'";</script>';
		}
	}

	public function index(){		
		$data = array(
			'page' => 'template_admin_v2/siswa/dashboard_siswa',
			'link' => 'siswa',
			'siswa' => $this->db->get_where('tb_siswa', array('idsiswa' => $this->session->userdata('idsiswa')))
		);

		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function raport(){
		$siswa = $this->db->get_where('tb_siswa', array('idsiswa' => $this->session->userdata('idsiswa')));

		$this->db->from('vw_nilai');
		$this->db->where(array('nis' => $siswa->row()->nis));
		$this->db->group_by('thnajaran, semester');
		$data = $this->db->get();

		$kelas = $this->db->get_where('tb_kelas', array('idkelas' => $siswa->row()->idkelas));

		$data = array(
			'page' => 'template_admin_v2/siswa/raport',
			'link' => 'raport',
			'siswa' => $siswa,
			'data' => $data,
			'kelas' => $kelas
		);

		$this->load->view('template_admin_v2/template/wrapper', $data);
	}

	public function cetak_raport_siswa(){
		$ta = $this->input->get('ta', true);
		$semester = $this->input->get('semester', true);
		$idsiswa = $this->input->get('idsiswa', true);
		$kelas = $this->input->get('idkelas', true);
		$siswa = $this->db->get_where('tb_siswa', array('idsiswa' => $idsiswa));

		$this->db->from('vw_nilai');
		$this->db->join('tb_mapel', 'vw_nilai.kodemapel = tb_mapel.kodemapel');
		$this->db->where(array('tb_mapel.kategorimapel' => 'normatif', 'vw_nilai.nis' => $siswa->row()->nis, 'vw_nilai.thnajaran' => $ta, 'vw_nilai.semester' => $semester));
		$nilai_normatif = $this->db->get();

		$this->db->from('vw_nilai');
		$this->db->join('tb_mapel', 'vw_nilai.kodemapel = tb_mapel.kodemapel');
		$this->db->where(array('tb_mapel.kategorimapel' => 'adaptif', 'vw_nilai.nis' => $siswa->row()->nis, 'vw_nilai.thnajaran' => $ta, 'vw_nilai.semester' => $semester));
		$nilai_adaptif = $this->db->get();

		$this->db->from('vw_nilai');
		$this->db->join('tb_mapel', 'vw_nilai.kodemapel = tb_mapel.kodemapel');
		$this->db->where(array('tb_mapel.kategorimapel' => 'produktif', 'vw_nilai.nis' => $siswa->row()->nis, 'vw_nilai.thnajaran' => $ta, 'vw_nilai.semester' => $semester));
		$nilai_produktif = $this->db->get();

		$this->db->from('vw_nilai');
		$this->db->join('tb_mapel', 'vw_nilai.kodemapel = tb_mapel.kodemapel');
		$this->db->where(array('tb_mapel.kategorimapel' => 'mulok', 'vw_nilai.nis' => $siswa->row()->nis, 'vw_nilai.thnajaran' => $ta, 'vw_nilai.semester' => $semester));
		$nilai_mulok = $this->db->get();

		$kegiatan = $this->db->get_where('tb_kegiatan', array('nis' => $siswa->row()->nis, 'thnajaran' => $ta, 'semester' => $semester));

		$pengembangan_diri = $this->db->get_where('tb_kepribadian', array('nis' => $siswa->row()->nis, 'thajaran' => $ta, 'semester' => $semester, 'kategori' => 'pengembangan diri'));

		$kepribadian = $this->db->get_where('tb_kepribadian', array('nis' => $siswa->row()->nis, 'thajaran' => $ta, 'semester' => $semester, 'kategori' => 'kepribadian'));

		$presensi = $this->db->get_where('tb_presensi', array('nis' => $siswa->row()->nis, 'thajaran' => $ta, 'semester' => $semester));

		$catatan = $this->db->get_where('tb_catatan', array('nis' => $siswa->row()->nis, 'thnajaran' => $ta, 'semester' => $semester));

		$kelas = $this->db->get_where('tb_kelas', array('idkelas' => $kelas));

		$jumlah = $this->db->query("select sum(nr) as jumlah_nilai from vw_nilai where nis = '".$siswa->row()->nis."' and thnajaran = '".$ta."' and semester = '".$semester."' ");
		$total_nilai = $this->db->query("select count(*) as total_nilai from vw_nilai where nis = '".$siswa->row()->nis."' and thnajaran = '".$ta."' and semester = '".$semester."' ");

		$total_siswa = $this->db->get_where('tb_siswa', array('idkelas' => $this->input->get('idkelas', true)));

		$ranking = $this->db->query("select nis, sum(nr) as nr, (@curRank:=@curRank +1) as ranking from vw_nilai, (SELECT @curRank := 0) r where thnajaran = '".$ta."' and semester = '".$semester."' group by nis order by sum(nr) desc");

		$data = array(
			// 'page' => 'template_admin_v2/cetak_raport_siswa',
			// 'link' => 'lihat_raport',
			'kelas' => $kelas,
			'siswa' => $siswa,
			'nilai_normatif' => $nilai_normatif,
			'nilai_adaptif' => $nilai_adaptif,
			'nilai_produktif' => $nilai_produktif,
			'nilai_mulok' => $nilai_mulok,
			'ta' => $ta,
			'semester' => $semester,
			'kegiatan' => $kegiatan,
			'pengembangan_diri' =>$pengembangan_diri,
			'kepribadian' => $kepribadian,
			'presensi' => $presensi,
			'catatan' => $catatan,
			'guru' => $this->db->get_where('tb_guru', array('idguru' => $kelas->row()->namawalikelas)),
			'jumlah_nilai' => $jumlah,
			'total_nilai' => $total_nilai,
			'total_siswa' => $total_siswa,
			'ranking' => $ranking
		);
		$this->load->view('template_admin_v2/cetak_raport_siswa1', $data);
	}

}