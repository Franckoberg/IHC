<?php  

/**
* 
*/
class Administration_model extends CI_Model
{
	function listUser(){
		$sql = 'SELECT * FROM professeur';

		$req = $this->db->query($sql);

		if ($req->num_rows() === 1) {
			return $req->result_object();
		} else {
			return false;
		}
	}
}