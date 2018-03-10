<?php

class student_model extends CI_Model
	{

		 public function requestpage($data)
     {
       //print_r($data);
       $query = $this->db->query('SELECT Email FROM authentication WHERE auth_id = '.$data['authid']);
       $row = $query->result_array();
       $toreturn = array('type' => $data['type'],'mail' => $row[0]['Email']);
       //print_r($toreturn);
       return $toreturn;
     }
     public function sendrequest($data)
     {
			 $query = $this->db->query('SELECT STD_ID FROM student WHERE auth_id = '.$data['authid']);
       $row = $query->result_array();
			 //print_r($row);
			  $row[0]['STD_ID'];
       print_r($data);

       $this->std_status_id = '';
       $this->std_form_103_id = 0;
       $this->std_type = $data['type'];
       $this->status = 'request';
       $this->std_id = $row[0]['STD_ID'];

       $this->db->insert('student_staus', $this);
     }



}
?>
