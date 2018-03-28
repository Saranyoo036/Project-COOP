<?php

class student_model extends CI_Model
	{
		public function __construct(){
			parent::__construct();
			date_default_timezone_set("Asia/Bangkok");

		}


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
        // $this->std_status_id = '';
        // $this->status = $data['type'];
        $this->status = 'request';
        $this->std_id = $_SESSION['stdid'];

        $this->db->insert('student_status', $this);
        //print_r($data);
        return true;
     }
		 public function mystatus()
		 {
		 	$query = $this->db->query("SELECT student.STD_ID,std_name,std_sname,status,
				(SELECT faculty.Faculty_name FROM faculty WHERE faculty.Fac_ID = (SELECT major.Fac_ID FROM major WHERE major.Major_ID = (SELECT major_id FROM student WHERE STD_ID = $_SESSION[stdid]))) AS faculty ,
				(SELECT major.Major_name FROM major WHERE major.Major_ID = (SELECT student.major_id FROM student WHERE student.STD_ID = $_SESSION[stdid])) AS major
				FROM`student`
				INNER JOIN student_status ON student_status.STD_ID = student.STD_ID");
			$row = $query->result_array();

			return $row;
		 }

     public function allstatus()
     {
       $query = $this->db->query("SELECT student.STD_ID, student.std_name,student.std_sname,(SELECT NameMajor_sub FROM major WHERE Major_ID = (SELECT major_id FROM student WHERE STD_ID = $_SESSION[stdid])) AS major,student.std_type,student_status.status FROM student INNER JOIN student_status ON student.STD_ID=student_status.STD_ID
			 ");
       $row = $query->result();
       //print_r($row);

       // $query2 = $this->db->query('SELECT * FROM student');
       // $row2 = $query2->result_array();
       // echo '<pre>';
       // print_r($row);
       // echo '</pre>';
       return $row;
     }

		 public function addfirstcompany($companyid)
		 {
			 $date = date('Y-m-d H:i:s');
			 $this->STD_ID = $_SESSION['stdid'];
			 $this->company_id = $companyid;
			 $this->Time_select = $date;
			 //echo $this->address;

			 $this->db->insert('student_company', $this);


		 }

		 public function addsecondcompany($companyid)
		 {
			 $date = date('Y-m-d H:i:s');
			 $this->STD_ID = $_SESSION['stdid'];
			 $this->company_id = $companyid;
			 $this->Time_select = $date;
			 //echo $this->address;

			 $this->db->insert('student_company', $this);

		 }
		 public function checkfirstcompany($companyid)
		 {
			 $query = $this->db->query("SELECT * FROM student_company WHERE STD_ID = $_SESSION[stdid] ");
       $row = $query->result_array();
			 if(isset($row[0])){
				 //print_r($row[0]);

				 $this->checksecondcompany($companyid);
			 }

			 else{
				 $this->addfirstcompany($companyid);

			 }

		 }

		 public function checksecondcompany($companyid)
		 {
			 $query = $this->db->query("SELECT * FROM student_company ");
       $row = $query->result_array();
			 echo $row[0]['company_id'];
			 if ($companyid!=$row[0]['company_id']) {

				$this->addsecondcompany($companyid);
			 }
			 else{
				// echo 'asdasdasd';
			 }


		 }



}
?>
