<?php
class M_galeri extends CI_Model{
	
	function tampil_semua_galeri(){
		$baca = $this->db->get('gambar');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
	
	function tambahdata($data, $tabel){
		$simpan=$this->db->insert($tabel,$data);
		return true;
	}
	
	function ambil_galeri($num, $offset){
		 
		 $this->db->order_by('id', 'DESC');
		 $this->db->where('kategori','galeri');
		 $data = $this->db->get('gambar', $num, $offset);

		 return $data->result();
 	}
	
	function filter_data($id){
        return $this->db->get_where('gambar', array('id'=>$id));
    }
	
	function update_data($id, $tabel, $data){
		$this->db->where('id',$id);
        $this->db->update($tabel,$data);
		return true;
	}
	
	function hapusdata($id){
		$this->db->where('id',$id);
        $hapus=$this->db->delete('gambar');
		if($hapus){
			return true;
		}
		else{
			return false;
		}		
	}
	
	function list_banner(){
		$ket='banner';
		$this->db->order_by('id', 'DESC');
		   $cari=$this->db->query("select * from gambar where kategori='$ket' LIMIT 0, 5  ");
		   return $cari->result();
   	}
	
	
}