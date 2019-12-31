<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mcarabayar extends CI_Model
{
    var $table = 'tb_carabayar';
	
	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
        $this->db->delete($this->table);
        return true;
	}
	
    public function getdata($id)
    {
		if(empty($id)){
			return $this->db
			->get($this->table)->result_array();
		}else{
			return $this->db
            ->where('id',$id)
			->get($this->table)->result_array();
		}
	}

}

?>
