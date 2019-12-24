<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mmitra extends CI_Model
{
	function cek_nowa($data=array()){
	    $cek = $this->db->get_where('tb_mitra',$data);
	    return $cek;
	}
	
	function add_otp($data=array()){
	    $this->db->insert("tb_otp",$data);
	}
	
	function cek_otp($data=array()){
	    $cek = $this->db->get_where('tb_otp',$data);
	    return $cek;
	}
	
	function register($data=array()){
	    $this->db->insert("tb_mitra",$data);
	}
    
    function cek_mitra($user){
		return $this->db
			->where('email_mitra', $user)
			->get('tb_mitra');
    }
    
	function getdata($id){
		if(empty($id)){
			return $this->db
			->select('email_mitra,fname_mitra,lname_mitra,tanggallahir_mitra,id_kelurahan,alamatlengkap_mitra,nowa_mitra')
			->get('tb_mitra');
		}else{
			return $this->db
			->select('email_mitra,fname_mitra,lname_mitra,tanggallahir_mitra,id_kelurahan,alamatlengkap_mitra,nowa_mitra')
			->where('id',$id)
			->get('tb_mitra');
		}
	}

	function editbiodata($data=array(),$where=null){
		return $this->db
					->where('id', $where)
					->update('tb_mitra',$data);
	}
}

?>
