<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mkabupaten extends CI_Model
{
	function getdata(){
	   return $this->db->get('regencies');
	}
}

?>
