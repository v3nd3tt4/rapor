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
}