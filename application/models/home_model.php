<?php

class  home_model extends CI_Model
	{

    public function showmajor($facid)
    {
      $query =$this->db->query('SELECT * FROM major WHERE Fac_ID ='.$facid);
      if ($query->result()) {
        //print_r($query->result());
        return $query->result();
      }
    }
    public function showfac()
    {
      $query =$this->db->query('SELECT * FROM faculty');

      if ($query->result()) {
        //print_r($query->result());
        return $query->result();
      }
    }
		public function checktostdhome()
		{
			$stdid = $_GET['std_id'];
			$query =$this->db->query('SELECT status FROM student_status WHERE std_id ='.$stdid);
			$row = $query->result_array();
			if (isset($row[0])) {
				$status = $row[0]['status'];
				//echo $status;
				return true;
			}
			else{
				return false;
			}


			// echo $status;
			// print_r($row);

		}

		public function data103($id)
		{
			$query = $this->db->query("SELECT * FROM student_form_103 WHERE std_form_103_id = $id");
			$row = $query->result_array();
			return $row;
		}

		public function STD_data($id)
		{
			$query = $this->db->query("SELECT student.STD_ID,std_name,std_sname,status,std_tel,std_email,
				(SELECT faculty.Faculty_name FROM faculty WHERE faculty.Fac_ID = (SELECT major.Fac_ID FROM major WHERE major.Major_ID = (SELECT major_id FROM student WHERE STD_ID = $id))) AS faculty ,
				(SELECT major.Major_name FROM major WHERE major.Major_ID = (SELECT student.major_id FROM student WHERE student.STD_ID = $id)) AS major
				FROM`student`
				INNER JOIN student_status ON student_status.STD_ID = student.STD_ID WHERE student.STD_ID = $id");
			$row = $query->result_array();

			return $row;
		}

		public function delSTD($id)
		{
			$sql = "DELETE FROM `student` WHERE STD_ID=$id";
			$this->db->query($sql);
		}
}
?>
