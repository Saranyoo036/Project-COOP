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
			 $arraytoset = explode(",",$id); 
       
		      $que = "SELECT * FROM major_setting,major  
		          where major_setting.major_id = major.major_id  
		          AND major_setting.SETTING_TYPE ='$type'  
		          AND major.NameMajor_sub = '$major' 
		          Limit 1;"; 
		       
		      $query = $this->db->query($que); 
		      $row = $query->row(); 
		 
		      $data = array( 
		        'TeacherID'=>$arraytoset[1], 
		        'setting_id'=> $row->setting_id, 
		        'permission' => 'appove' 
		      ); 
		 
		      $this->db->insert('approve',$data); 
		    	return true;

		}



}
?>
