<?php

class M_jurnal extends CI_Model{
	var $gallery_path;
	
	function __construct(){
		parent::__construct();
		$this->load->library('image_lib');
	}
	
	function tambahdata($data, $tabel){
		$simpan=$this->db->insert($tabel,$data);
		return true;
	}
	
	function tampil_semua_jurnal(){
		$baca = $this->db->get('jurnal');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
	function ambil_jurnal($num, $offset){
		 $this->db->order_by('id', 'DESC');

		 $data = $this->db->get('jurnal', $num, $offset);

		 return $data->result();
 	}
	
	function hapusdata($id){
		$this->db->where('id',$id);
        $hapus=$this->db->delete('jurnal');
		if($hapus){
			return true;
		}
		else{
			return false;
		}		
	}

	function filter_data($id){
        return $this->db->get_where('jurnal', array('id'=>$id));
    }
	
	function tampil_per_id($id){
		return $this->db->get_where('jurnal', array('id'=>$id));
	}
	
	function update_data($id, $tabel, $data){
		$this->db->where('id',$id);
        $this->db->update($tabel,$data);
		return true;
	}
	
}
?>