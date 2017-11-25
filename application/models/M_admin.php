<?php

class M_admin extends CI_Model{
	
	function __construct(){
		parent::__construct();
		
	}
	
	function bacadata(){
        $baca = $this->db->get('user');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function tambahdata(){
		$string='1234567890';
		$string=str_shuffle($string);
		$username = substr($string,0,6);
        $nama = addslashes($this->input->post('namatambah'));
        $password = md5(addslashes($this->input->post('passwordtambah')));
		$level='admin';
        $data = array(
                'username'=>$username,
                'password'=>$password,
                'nama'=>$nama,
				'level'=>$level
                );
        $simpan=$this->db->insert('user',$data);
		if($simpan){
			return true;
		}
		else{
			return false;
		}
	}

	function saveData($table, $data){
		return $this->db->insert($table, $data);
	}

	function getData($table, $param){
		return $this->db->get_where($table, $param);
	}

	function deleteData($param, $id, $table){
		$this->db->where($param,$id);
        return $this->db->delete($table);
	}
	
	function hapusdata($username){
		$this->db->where('username',$username);
        $hapus=$this->db->delete('user');
		if($hapus){
			return true;
		}
		else{
			return false;
		}		
	}
	
	function filterdata($data){
        return $this->db->get_where('user', array('username'=>$data));
    }
	
	function updatedata(){
        $username=$this->input->post('usernametambah');
        $nama = addslashes($this->input->post('namatambah'));
        $password = md5(addslashes($this->input->post('passwordtambah')));
		$level='admin';
        $data = array(
                'password'=>$password,
                'nama'=>$nama
                );
        $this->db->where('username',$username);
        $this->db->update('user',$data);
		return true;
    }

    function terbilang($bilangan) {

	  $angka = array('0','0','0','0','0','0','0','0','0','0',
	                 '0','0','0','0','0','0');
	  $kata = array('','satu','dua','tiga','empat','lima',
	                'enam','tujuh','delapan','sembilan');
	  $tingkat = array('','ribu','juta','milyar','triliun');

	  $panjang_bilangan = strlen($bilangan);

	  /* pengujian panjang bilangan */
	  if ($panjang_bilangan > 15) {
	    $kalimat = "Diluar Batas";
	    return $kalimat;
	  }

	  /* mengambil angka-angka yang ada dalam bilangan,
	     dimasukkan ke dalam array */
	  for ($i = 1; $i <= $panjang_bilangan; $i++) {
	    $angka[$i] = substr($bilangan,-($i),1);
	  }

	  $i = 1;
	  $j = 0;
	  $kalimat = "";


	  /* mulai proses iterasi terhadap array angka */
	  while ($i <= $panjang_bilangan) {

	    $subkalimat = "";
	    $kata1 = "";
	    $kata2 = "";
	    $kata3 = "";

	    /* untuk ratusan */
	    if ($angka[$i+2] != "0") {
	      if ($angka[$i+2] == "1") {
	        $kata1 = "seratus";
	      } else {
	        $kata1 = $kata[$angka[$i+2]] . " ratus";
	      }
	    }

	    /* untuk puluhan atau belasan */
	    if ($angka[$i+1] != "0") {
	      if ($angka[$i+1] == "1") {
	        if ($angka[$i] == "0") {
	          $kata2 = "sepuluh";
	        } elseif ($angka[$i] == "1") {
	          $kata2 = "sebelas";
	        } else {
	          $kata2 = $kata[$angka[$i]] . " belas";
	        }
	      } else {
	        $kata2 = $kata[$angka[$i+1]] . " puluh";
	      }
	    }

	    /* untuk satuan */
	    if ($angka[$i] != "0") {
	      if ($angka[$i+1] != "1") {
	        $kata3 = $kata[$angka[$i]];
	      }
	    }

	    /* pengujian angka apakah tidak nol semua,
	       lalu ditambahkan tingkat */
	    if (($angka[$i] != "0") OR ($angka[$i+1] != "0") OR
	        ($angka[$i+2] != "0")) {
	      $subkalimat = "$kata1 $kata2 $kata3 " . $tingkat[$j] . " ";
	    }

	    /* gabungkan variabe sub kalimat (untuk satu blok 3 angka)
	       ke variabel kalimat */
	    $kalimat = $subkalimat . $kalimat;
	    $i = $i + 3;
	    $j = $j + 1;

	  }

	  /* mengganti satu ribu jadi seribu jika diperlukan */
	  if (($angka[5] == "0") AND ($angka[6] == "0")) {
	    $kalimat = str_replace("satu ribu","seribu",$kalimat);
	  }

	  return trim($kalimat);

	} 

	public function cek_predikat($idguru, $nilai){
		$query = $this->db->query("select * from tb_predikat where idguru = '".$idguru."'");
		if($query->num_rows() == 0){
			return "Guru belum membuat predikat";
		}else{
			$query = $this->db->query("select * from tb_predikat where idguru='".$idguru."' and '".$nilai."' between nilaibawah and '".$nilai."'");
			return $query->row()->predikat;
		}
	}

}