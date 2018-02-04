<?php

class Authentication_model extends CI_Model
	{
		
		public auth($data_login)){
			
			$query = $this->db->query("select count(username) from authentication where username = '".$data_login['username']."' AND Password ='".$data_login['password']);
			$count_row = 0;
			foreach ($rs->result_array() as $rm) {
			$count_row $rm['count(auth_id)'];
			}
			if($count_row == 1) {
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