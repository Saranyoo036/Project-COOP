<?php

class Teacher_model extends CI_Model
	{

		 public function allteacher(){
			$this->db->select('*');
			$this->db->from('teacher');
			$query = $this->db->get();

      return $query->result_array();

		}
		public function assignteacher($id)
		{
			//echo 'id ='.$id.'<br/>';
			$arraytoset = explode(",",$id);
			//echo count($id);
			print_r($arraytoset[3]);

			$this->db->where('TeacherID', $arraytoset[3]);
    	$this->db->update('teacher', array('Status' => 'Assign'));
    	return true;

		}



}
?>
