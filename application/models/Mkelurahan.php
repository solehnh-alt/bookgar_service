<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mkelurahan extends CI_Model
{
	function getdata(){
	   return $this->db->get('districts');
	}
}

?>
