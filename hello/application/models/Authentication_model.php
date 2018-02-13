<?php

class Authentication_model extends CI_Model
	{
		
		public Auth($data_login)){
			$condition = "Username ='".$data_login['username']."' AND Password ='".$data_login['password']."'"
			$this->db->select('*');
			$this->db->from('authentication');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			if($query->num_rows() == 1) {
				return true;
			}else{
				return false;
			}
		}
		public function read_user_information($username) {

			$condition = "Username =" . "'" . $username . "'";
			$this->db->select('*');
			$this->db->from('authentication');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->result();
			} else {
			return false;
			}
			}


}
?>