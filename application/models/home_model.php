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
			$query =$this->db->query('SELECT status FROM student_staus WHERE std_id ='.$stdid);
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
}
?>
