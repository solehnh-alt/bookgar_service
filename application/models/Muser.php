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
	
	function getData($tabel="",$field="",$where="",$id=""){
		$data = array();
		if (empty($field)) {
			$this->db->select("*");
		} else {
			$this->db->select($field);
		}
		$this->db->from($tabel);
		if (!empty($where)) {
			$this->db->where($where, $id);
		}
		$hasil = $this->db->get();
		
		if($hasil->num_rows() > 0){
			return $hasil->row_array();
		}
	}
	
    function checkEmailExist($email)
    {
        $this->db->select('userId');
        $this->db->where('email', $email);
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_users');

        if ($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }


    /**
     * This function used to insert reset password data
     * @param {array} $data : This is reset password data
     * @return {boolean} $result : TRUE/FALSE
     */
    function resetPasswordUser($data)
    {
        $result = $this->db->insert('tbl_reset_password', $data);

        if($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * This function is used to get customer information by email-id for forget password email
     * @param string $email : Email id of customer
     * @return object $result : Information of customer
     */
    function getCustomerInfoByEmail($email)
    {
        $this->db->select('userId, email, name');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $this->db->where('email', $email);
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * This function used to check correct activation deatails for forget password.
     * @param string $email : Email id of user
     * @param string $activation_id : This is activation string
     */
    function checkActivationDetails($email, $activation_id)
    {
        $this->db->select('id');
        $this->db->from('tbl_reset_password');
        $this->db->where('email', $email);
        $this->db->where('activation_id', $activation_id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    // This function used to create new password by reset link
    function createPasswordUser($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_users', array('password'=>getHashedPassword($password)));
        $this->db->delete('tbl_reset_password', array('email'=>$email));
    }
}

?>
