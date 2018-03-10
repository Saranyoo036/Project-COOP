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
        //print_r($data);
			 $query = $this->db->query('SELECT STD_ID FROM student WHERE auth_id = '.$data['authid']);
        $row = $query->result_array();
			 //print_r($row);
			  $row[0]['STD_ID'];

        $this->std_status_id = '';
        $this->std_type = $data['type'];
        $this->status = 'request';
        $this->std_id = $row[0]['STD_ID'];

        $this->db->insert('student_staus', $this);

        //print_r($data);
        $where = "auth_id =".$data['authid'];

        $this->db->where($where);
        $this->db->update('authentication', array('Email' => $data['mail']));
        return true;

       
     }

     public function allstatus()
     {
       $query = $this->db->query('SELECT student.STD_ID, student.std_name,student.std_sname,student.major_id,student.std_psuid,student_staus.std_type,student_staus.status FROM student INNER JOIN student_staus ON student.STD_ID=student_staus.STD_ID
');
       $row = $query->result();
       //print_r($row);

       // $query2 = $this->db->query('SELECT * FROM student');
       // $row2 = $query2->result_array();
       // echo '<pre>';
       // print_r($row);
       // echo '</pre>';
       return $row;
     }



}
?>
