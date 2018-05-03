<?php

class  home_model extends CI_Model
	{
		
		public function __construct(){
			parent::__construct();
			date_default_timezone_set("Asia/Bangkok");

		}

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
				if($row[0]['status']=="Request"){
					return false;
				}else{
					$status = $row[0]['status'];
				
				return true;
				}
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

		public function checkReq($id){
			$status = "";
			$this->db->select('*');
			$this->db->from('student_status');
			$this->db->where("STD_ID = $id");
			$this->db->limit(1);
			$re = $this->db->get();
			$res = $re->result_array();
			if($res){
				$this->db->select('*');
				$this->db->from('major_setting');
				$this->db->where("major_id =(select major_id from student where STD_ID = $id) AND status_id = 1");
				$re1 = $this->db->get();
				$res1 = $re1->result_array();
				if($res1){
					$data = array("COOP"=>false,"Internship"=>false);
					foreach ($res1 as $key) {
						if($key['major_type']=="COOP"){
							$data["COOP"] = $this->checkdateBetween($key["start_date"],$key["end_date"]);
						}
						if($key['major_type']=="internship"){
							$data["Internship"] = $this->checkdateBetween($key["start_date"],$key["end_date"]);
						}
					}
					return $data;
				}else{
					return false;
				}
			}else{
				return false;
			}
			
		}

		public function checkdateBetween($datefrom,$dateto)
		{
			$now = date('Y-m-d');
			$now = date('Y-m-d',strtotime($now));

			$datefrom = date('Y-m-d',strtotime($datefrom));
			$dateto = date('Y-m-d',strtotime($dateto));

			if(($now>=$datefrom)&&($now<=$dateto)){
				return true;
			}else{
				return false;
			}
		}

		public function checktimestat($stat,$major,$type)
		{
			if(($stat=="Rechoosing")||($stat=="Repair")){
				$stat = "RechoosingandRepair";
			}
			$sql = "SELECT * from major_setting where major_type = '$type' 
												AND status_id = 
															(select status_id 
															from status 
															where status_name = '$stat')
												AND major_id = 
															(select major_id 
															from major 
															where Major_name='$major')";
			$re = $this->db->query($sql);
			$res = $re->result_array();
			if($res){
				$chk = $this->checkdateBetween($res[0]["start_date"],$res[0]["end_date"]);
				return $chk;
				
			}else{
				return false;
			}
		}

		
}
?>
