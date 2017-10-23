<?php
class M_posting extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->library('image_lib');
	}
	
	
	function tampil_semua_posting(){
			$baca = $this->db->get('post');
			if($baca->num_rows() > 0){
				foreach ($baca->result() as $data){
					$hasil[] = $data;
				}
				return $hasil;
			}
	}
	
	function tambah_data($data, $tabel){
		$simpan=$this->db->insert($tabel,$data);
		return true;
	}
	
	function hapus_data($id){
		$this->db->where('id',$id);
        $hapus=$this->db->delete('post');
		if($hapus){
			return true;
		}
		else{
			return false;
		}		
	}

	function hapus_data_new($param, $id, $table){
		$this->db->where($param,$id);
        $hapus = $this->db->delete($table);
        if($hapus){
			return true;
		}
		else{
			return false;
		}
	}
	
	function filter_data($id){
        return $this->db->get_where('post', array('id'=>$id));
    }
	
	function kategori($kategori){
		$this->db->order_by('id', 'DESC');
		$this->db->limit(9,0);
		return $this->db->get_where('post', array('kategori'=>$kategori));
	}
	
	function ambil_activity($num, $offset){
		 
		 $this->db->order_by('id', 'DESC');
		$this->db->where('kategori','activity');
		 $data = $this->db->get('post', $num, $offset);

		 return $data->result();
 	}
	
	function update_data($id, $tabel, $data){
		$this->db->where('id',$id);
        $this->db->update($tabel,$data);
		return true;
	}

	function update_data_new($param_id, $id, $tabel, $data){
		$this->db->where($param_id,$id);
        $this->db->update($tabel,$data);
		return true;
	}
	
	function searching($pencarian){
		   $cari=$this->db->query("select * from post where judul like '%$pencarian%' or kategori like '%$pencarian%' LIMIT 30  ");
		   return $cari->result();
   	}
	
	function depan_activity(){
		$data=$this->db->query("select * from post where kategori='activity' order by id Desc LIMIT 4  ");
		return $data->result();
	}
	
	
}