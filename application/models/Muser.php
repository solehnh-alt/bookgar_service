<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Muser extends CI_Model
{
	function cek_nowa($data=array()){
	    $cek = $this->db->get_where('tb_user',$data);
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
	    $this->db->insert("tb_user",$data);
	}
    
    function cek_user($user){
		return $this->db
			->where('email_user', $user)
			->get('tb_user');
    }
    
	function getdata($id){
		if(empty($id)){
			return $this->db
			->select('email_user,fname_user,lname_user,tanggallahir_user,id_kelurahan,alamatlengkap_user,nowa_user,saldo_user')
			->get('tb_user');
		}else{
			return $this->db
			->select('email_user,fname_user,lname_user,tanggallahir_user,id_kelurahan,alamatlengkap_user,nowa_user,saldo_user')
			->where('id',$id)
			->get('tb_user');
		}
	}

	function editbiodata($data=array(),$where=null){
		return $this->db
					->where('id', $where)
					->update('tb_user',$data);
	}
}

?>
