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
			$insert = "INSERT INTO `major_setting_personnel` (major_setting_personal_id, personnel_id, major_id, major_type) VALUES (NULL, '".$id."', (SELECT major_id from major WHERE NameMajor_sub = '".$major."'), '".$type."');";
					echo $insert;
					$this->db->query($insert);

			
		}

		public function delassignteacher($id,$type,$major)
		{
			$del = "DELETE FROM `major_setting_personnel`  WHERE personnel_id = $id AND major_type='$type' AND major_id = (SELECT major_id from major WHERE NameMajor_sub = '".$major."')";
					//echo $del;
					$this->db->query($del);

			
		}
		 public function assign_monitor_teacher($id,$type,$major)
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
				 			SET personnelID_monitor = $id
				 			WHERE major_id = $maj
				 			AND major_type ='$type'
				 			AND status_id = 3 ;";
				 echo $update;
				 $this->db->query($update);
			}else{
					$insert = "INSERT INTO major_setting (major_id, major_type,status_id, personnelID_monitor) VALUES (".$maj.", '".$type."', 3, ".$id.")";
					echo $insert;
					$this->db->query($insert);

			}
		}

		public function approveSTD($id,$com,$pos)
		{

			$sql1 ="UPDATE `student_company` SET status_student_company_id = 1 WHERE STD_ID=$id AND company_id = $com AND position_id= $pos";
			$sql2 = "UPDATE `student_company` SET status_student_company_id = 2 WHERE STD_ID=$id AND company_id != $com";
			$sql3 = "UPDATE `student_status` SET status = 'Waiting' WHERE STD_ID = $id";
			$this->db->query($sql1);
			$this->db->query($sql2);
			$this->db->query($sql3);
		}

		public function unApproveSTD($id,$com,$pos)
		{
			$sql1 ="UPDATE `student_company` SET status_student_company_id = 2 WHERE STD_ID=$id AND company_id = $com AND position_id= $pos";
			$this->db->query($sql1);

			$this->db->select('*');
			$this->db->from('student_company');
			$this->db->where("STD_ID = $id AND status_student_company_id = 0 ");
			$re = $this->db->get();
			if($re->result()){}else{
				$sql3 = "UPDATE `student_status` SET status = 'Rechoosing' WHERE STD_ID = $id";
				$this->db->query($sql3);
			}
		}
}
?>
