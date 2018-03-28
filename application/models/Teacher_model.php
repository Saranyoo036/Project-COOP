<?php

class Teacher_model extends CI_Model
	{

		 public function allteacher(){
			$this->db->select('*');
			$this->db->from('teacher');
			$query = $this->db->get();

      return $query->result_array();

		}
		 public function assignteacher($id,$type,$major) 
		{	
			$majorque = "SELECT major_id from `major` WHERE NameMajor_sub = '$major' LIMIT 1";
			$maj = $this->db->query($majorque);
			$majorID = $maj->row();

			foreach ($majorID as $key ) {
				$maj = $key ; 			
			}
			
			$this->db->select('*');
			$this->db->from('major_setting');
			$this->db->where("status_id = '3' AND major_type = '$type' AND major_id = '$maj'");
			$res = $this->db->get();
			if($res->result()){
				$update = "UPDATE major_setting 
				 			SET approve_teacher_id = '$id'
				 			WHERE major_id = '$maj'
				 			AND major_type ='$type'
				 			AND status_id = '3' ;";
				 echo $update;
				 $this->db->query($update);

			}else{
					$insert = "INSERT INTO `major_setting` (`major_id`, `major_type`, `status_id`, `approve_teacher_id`) 
					 VALUES ('$maj', '$type', '3','$id');";
					 echo $insert;
					 $this->db->query($insert);
			}


		}



}
?>
