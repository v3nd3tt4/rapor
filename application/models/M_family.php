<?php

class M_family extends CI_Model{
	
	function tambah_data($data, $tabel){
			$simpan=$this->db->insert($tabel,$data);
			return true;
	}
	
	function list_data($pencarian){
		   $cari=$this->db->query("select * from family where kode like '%$pencarian%' or nama like '%$pencarian%' or kategori like '%$pencarian%' LIMIT 30  ");
		   return $cari->result();
   	}
	
	function filter_data($id){
        return $this->db->get_where('family', array('id'=>$id));
    }
	
	function hapus_data($id){
		$this->db->where('id',$id);
        $hapus=$this->db->delete('family');
		if($hapus){
			return true;
		}
		else{
			return false;
		}		
	}
	
	function update_data($id, $tabel, $data){
		$this->db->where('id',$id);
        $this->db->update($tabel,$data);
		return true;
	}
	
	function ambil_family($num, $offset){
		 
		 $this->db->order_by('nama', 'ASC');
		 $this->db->where('kategori','Dosen');
		 $data = $this->db->get('family', $num, $offset);

		 return $data->result();
 	}
	
	function ambil_family_alumni($num, $offset){
		 
		 $this->db->order_by('nama', 'ASC');
		 $this->db->where('kategori','Alumni');
                 $this->db->where('status','ter-verifikasi');
		 $data = $this->db->get('family', $num, $offset);

		 return $data->result();
 	}
	
	function ambil_family_mahasiswa($num, $offset){
		 
		 $this->db->order_by('nama', 'ASC');
		 $this->db->where('kategori','Mahasiswa');
		 $data = $this->db->get('family', $num, $offset);

		 return $data->result();
 	}
	
}