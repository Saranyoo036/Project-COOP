<?php

class student_model extends CI_Model
	{
		public function __construct(){
			parent::__construct();
			date_default_timezone_set("Asia/Bangkok");

		}

		 public function requeststudentemail($id)
     {
       //print_r($data);
       $query = $this->db->query('SELECT std_email FROM student WHERE STD_ID = '.$id);
       $row = $query->result_array();
       //print_r($toreturn);
       return $row;
     }
     public function sendrequest($data)
     {
     	$sql ="UPDATE student_status SET status ='Choosing' WHERE STD_ID = ".$_SESSION['stdid'];
      	$this->db->query($sql);
				$this->db->where('STD_ID', $_SESSION['stdid']);
				$this->db->update('student', array(
				'std_type'=>$data['type'],
				'std_tel' =>$data['tel'],
				'std_email' =>$data['mail']
				));
        return true;
     }
		 public function mystatus()
		 {
		 	$query = $this->db->query("SELECT student.STD_ID,std_name,std_sname,status,student.std_email,student.std_tel,
				(SELECT faculty.Faculty_name FROM faculty WHERE faculty.Fac_ID = (SELECT major.Fac_ID FROM major WHERE major.Major_ID = (SELECT major_id FROM student WHERE STD_ID = $_SESSION[stdid]))) AS faculty ,
				(SELECT major.Major_name FROM major WHERE major.Major_ID = (SELECT student.major_id FROM student WHERE student.STD_ID = $_SESSION[stdid])) AS major
				FROM`student`
				INNER JOIN student_status ON student_status.STD_ID = student.STD_ID WHERE student.STD_ID = $_SESSION[stdid]");
			$row = $query->result_array();

			return $row;
		 }

     public function allstatus()
     {
       $query = $this->db->query("SELECT student.STD_ID, student.std_name,student.std_sname,
				 (SELECT NameMajor_sub FROM major WHERE Major_ID = (SELECT major_id FROM student WHERE STD_ID = $_SESSION[stdid])) AS major,
				 (SELECT company_name FROM company WHERE company_id =(SELECT company_id FROM student_company WHERE STD_ID = 1000 )) AS company,
				 student.std_type,student_status.status FROM student
				 INNER JOIN student_status ON student.STD_ID=student_status.STD_ID
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

		 public function addfirstcompany($data)
		 {
			 $date = date('Y-m-d H:i:s');
			 $this->STD_ID = $_SESSION['stdid'];
			 $this->company_id = $data['companyid'];
			 $this->Time_select = $date;
			 $this->Position_id = $data['positionid'];
			 $this->subject_code=$data['subjectcode'];
			 $this->subject_year=$data['subjectyear'];
			 $this->subject_result=$data['subjectresult'];
			 $this->certificate=$data['certificate'];
			 $this->certificate_time=$data['time'];
			 $this->start_cer=$data['start_cer'];
			 $this->end_cer=$data['end_cer'];
			 //echo $this->address;

			 $this->db->insert('student_company', $this);


		 }

		 public function addsecondcompany($data)
		 {
			 $date = date('Y-m-d H:i:s');
			 $this->STD_ID = $_SESSION['stdid'];
			 $this->company_id = $data['companyid'];
			 $this->Time_select = $date;
			 $this->Position_id = $data['positionid'];
			 $this->subject_code=$data['subjectcode'];
			 $this->subject_year=$data['subjectyear'];
			 $this->subject_result=$data['subjectresult'];
			 $this->certificate=$data['certificate'];
			 $this->certificate_time=$data['time'];
			 $this->start_cer=$data['start_cer'];
			 $this->end_cer=$data['end_cer'];
			 //echo $this->address;

			 $this->db->insert('student_company', $this);

		 }
		 public function checkfirstcompany($data)
		 {

			 $query = $this->db->query("SELECT * FROM student_company WHERE STD_ID = $_SESSION[stdid] ");
       $row = $query->result_array();
			 if(isset($row[0])){
				 //print_r($row[0]);
				 $this->checksecondcompany($data);
			 }

			 else{
				 $this->addfirstcompany($data);

			 }

		 }

		 public function checksecondcompany($data)
		 {
		 	$companyid=$data['companyid'];
		 	$positionid=$data['positionid'];
			 $query = $this->db->query("SELECT * FROM student_company ");
       		$row = $query->result_array();
			 print_r($row);
			// echo $row[0]['company_id'];
			 if ($companyid==$row[0]['company_id']||$companyid==$row[1]['company_id']) {}
			 else{
				$this->addsecondcompany($data);
			 }


		 }

		 public function edit0202($data)
		 {
		 	
		 	$date = date('Y-m-d H:i:s');
		 	$up = array('company_id'=>$data['companyid'],
		 				'Time_select' =>$date,
		 				'status_student_company_id' => 0 ,
		 				'Position_id' => $data['positionid'],
		 				'subject_code'=>$data['subjectcode'],
		 				'subject_year'=>$data['subjectyear'],
		 				'subject_result'=>$data['subjectresult'],
		 				'certificate'=>$data['certificate'],
		 				'certificate_time'=>$data['time'],
		 				'start_cer'=>$data['start_cer'],
		 				'end_cer'=>$data['end_cer']);
		 	$this->db->where("STD_ID = $_SESSION[stdid] AND Position_id = $data[old_posID]");
		 	$this->db->update('student_company',$up);

		 }

		 public function checkform()
		 {
		 	$query = $this->db->query("SELECT * FROM student_form_103 WHERE std_form_103_id = $_SESSION[stdid]");
			$row = $query->result_array();
			return $row;
		 }

		 public function checkinterncompany()
		 {
			 $query = $this->db->query("SELECT * FROM student_company WHERE STD_ID = $_SESSION[stdid] AND ((status_student_company_id = 1) OR (status_student_company_id = 0))");
       		$row = $query->result_array();

			 return $row;

		 }

		 public function update103form($data)
		 {
			 $this->Name_of_advisor  = $data['advisor_name_1'];
			 $this->Semester_GPA  = $data['semester_gpa_1'];
			 $this->Cumulative_GPA  = $data['cumulative_gpa_1'];
			 $this->Iden_cardNo  = $data['identification_card_no_1'];
			 $this->Issued_at  = $data['issued_at_1'];
			 $this->Issued_date  = $data['issued_date_1'];
			 $this->Expiry_date  = $data['expiry_date_1'];
			 $this->Race  = $data['race_1'];
			 $this->Nationality  = $data['nationality_1'];
			 $this->Religion  = $data['religion_1'];
			 $this->Date_of_birth  = $data['date_of_birth_1'];
			 $this->Place_of_birth  = $data['place_of_birth_1'];
			 $this->sex  = $data['sex_1'];
			 $this->Height  = $data['height_1'];
			 $this->Weight  = $data['weight_1'];
			 $this->Chronical_disease  = $data['chronical_disease_1'];
			 $this->Address_now  = $data['address_this_term_2'];
			 $this->Address  = $data['permanent_address_2'];
			 $this->Emergency_name  = $data['name_emergency_2'];
			 $this->Emergency_relation  = $data['relation_emergency_2'];
			 $this->Emergency_Occupation  = $data['occupation_emergency_2'];
			 $this->Emergency_Placework  = $data['place_of_work_emergency_2'];
			 $this->Emergency_Address  = $data['address_emergency_2'];
			 $this->Emergency_Tel  = $data['tel_emergency_2'];
			 //$this->Emergency_E-mail   = $data['email_emergency_2'];
			 $this->Father_name  = $data['father_name_2'];
			 $this->Father_sname  = $data['issued_at_1'];
			 $this->Father_age  = $data['age_father_2'];
			 $this->Father_occupation  = $data['occupation_father_2'];
			 $this->Father_Address  = $data['address_father_2'];
			 $this->Father_Zipcode  = $data['zip_cord_father_2'];
			 $this->Father_Tel  = $data['tel_father_2'];
			 $this->Father_Email  = $data['email_father_2'];
			 $this->mother_name  = $data['mother_name_2'];
			 $this->mother_sname  = $data['issued_at_1'];
			 $this->mother_age  = $data['age_mother_2'];
			 $this->mother_occupation  = $data['occupation_mother_2'];
			 $this->mother_address  = $data['address_mother_2'];
			 $this->mother_Zipcode   = $data['zip_cord_mother_2'];
			 $this->mother_Tel  = $data['tel_mother_2'];
			 $this->mother_Email  = $data['email_mother_2'];
			 $this->Parent_name  = $data['parent_name_2'];
			 $this->Parent_sname  = $data['issued_at_1'];
			 $this->Parent_age  = $data['age_parent_2'];
			 $this->Parent_occupation  = $data['occupation_parent_2'];
			 $this->Parent_address  = $data['address_parent_2'];
			 $this->Parent_Zipcode   = $data['zip_cord_parent_2'];
			 $this->Parent_Tel  = $data['tel_parent_2'];
			 $this->Parent_Email  = $data['email_parent_2'];
			 $this->num_of_relative  = $data['no_of_relatives_2'];
			 $this->num_are_you  = $data['you_are_the_2'];
			 $this->Edu_pri_school  = $data['primary_name_3'];
			 $this->Edu_pri_Provice  = $data['primary_province_3'];
			 $this->Edu_pri_YearAttend  = $data['primary_year_attended_3'];
			 $this->Edu_pri_YearGraduate  = $data['primary_year_graduated_3'];
			 $this->Edu_pri_major  = $data['primary_major_3'];
			 $this->Edu_sec_school  = $data['secondary_name_3'];
			 $this->Edu_sec_Provice  = $data['secondary_province_3'];
			 $this->Edu_sec_YearAttend  = $data['secondary_year_attended_3'];
			 $this->Edu_sec_YearGraduated  = $data['secondary_year_graduated_3'];
			 $this->Edu_sec_major  = $data['secondary_major_3'];
			 $this->Edu_high_school  = $data['high_school_name_3'];
			 $this->Edu_high_Provice  = $data['high_school_province_3'];
			 $this->Edu_high_YearAttend  = $data['high_school_year_attended_3'];
			 $this->Edu_high_YearGraduated  = $data['high_school_year_graduated_3'];
			 $this->Edu_high_major  = $data['high_school_major_3'];
			 $this->Edu_uni  = $data['university_name_3'];
			 $this->Edu_uni_Provice  = $data['university_province_3'];
			 $this->Edu_uni_YearAttend  = $data['university_year_attended_3'];
			 $this->Edu_uni_Graduated   = $data['university_year_graduated_3'];
			 $this->Edu_uni_major  = $data['university_major_3'];
			 $this->Pre_trained_YearFrom  = $data['previous_training_year_from_3'];
			 $this->Pre_trained_Yearto  = $data['previous_training_year_to_3'];
			 $this->Pre_trained_Position  = $data['previous_training_jobdescription_3'];
			 $this->Pre_trained_Provice  = $data['previous_training_province_3'];
			 $this->Pre_trained_Organization  = $data['previous_training_organization_3'];
			 $this->Career_objective1  = $data['career_objectives_3_1'];
			 $this->Career_objective2  = $data['career_objectives_3_2'];
			 $this->Career_objective3  = $data['career_objectives_3_3'];
			 $this->Career_objective4  = $data['career_objectives_3_4'];
			 $this->std_activity_1  = $data['issued_at_1'];
			 $this->std_activity_2  = $data['issued_at_1'];
			 $this->std_activity_3  = $data['issued_at_1'];
			 $this->Language_Eng_lis  = $data['listen-eng'];
			 $this->Language_Eng_speak  = $data['speak-eng'];
			 $this->Language_Eng_read  = $data['read-eng'];
			 $this->Language_Eng_writing  = $data['write-eng'];
			 $this->Language_CN_lis  = $data['listen-ch'];
			 $this->Language_CN_speak  = $data['speak-ch'];
			 $this->Language_CN_read  = $data['read-ch'];
			 $this->Language_CN_writing  = $data['write-ch'];
			 $this->Specail_ability_1  = $data['special_ability_4_1'];
			 $this->Specail_ability_2  = $data['special_ability_4_2'];
			 $this->Specail_ability_3  = $data['special_ability_4_3'];
			 $this->Other_skill_computer  = $data['computerized_ability_4_1'];
			 $this->Other_skill_sport  = $data['sport_4_1'];
			 $this->Other_skill_Hobbies  = $data['hobbies_4_1'];
			 $this->Drive_license_car  = $data['car_license_no_4_1'];
			 $this->Drive_license_motorCycle  = $data['motorcycle_license_no_4_1'];
			 $this->Explain_yourself  = $data['explain_about_yourself'];
			 $this->std_form_103_id  = $_SESSION['stdid'];
			 //echo $this->address;
			 $this->db->replace('student_form_103', $this);

		 }

		 public function add103form($data)
		 {
			 // {
			 //   echo '<pre>';
			 //   print_r($data);
			 //   echo '</pre>';
			 // }
			 $this->Name_of_advisor  = $data['advisor_name_1'];
			 $this->Semester_GPA  = $data['semester_gpa_1'];
			 $this->Cumulative_GPA  = $data['cumulative_gpa_1'];
			 $this->Iden_cardNo  = $data['identification_card_no_1'];
			 $this->Issued_at  = $data['issued_at_1'];
			 $this->Issued_date  = $data['issued_date_1'];
			 $this->Expiry_date  = $data['expiry_date_1'];
			 $this->Race  = $data['race_1'];
			 $this->Nationality  = $data['nationality_1'];
			 $this->Religion  = $data['religion_1'];
			 $this->Date_of_birth  = $data['date_of_birth_1'];
			 $this->Place_of_birth  = $data['place_of_birth_1'];
			 $this->sex  = $data['sex_1'];
			 $this->Height  = $data['height_1'];
			 $this->Weight  = $data['weight_1'];
			 $this->Chronical_disease  = $data['chronical_disease_1'];
			 $this->Address_now  = $data['address_this_term_2'];
			 $this->Address  = $data['permanent_address_2'];
			 $this->Emergency_name  = $data['name_emergency_2'];
			 $this->Emergency_relation  = $data['relation_emergency_2'];
			 $this->Emergency_Occupation  = $data['occupation_emergency_2'];
			 $this->Emergency_Placework  = $data['place_of_work_emergency_2'];
			 $this->Emergency_Address  = $data['address_emergency_2'];
			 $this->Emergency_Tel  = $data['tel_emergency_2'];
			 //$this->Emergency_E-mail   = $data['email_emergency_2'];
			 $this->Father_name  = $data['father_name_2'];
			 $this->Father_sname  = $data['issued_at_1'];
			 $this->Father_age  = $data['age_father_2'];
			 $this->Father_occupation  = $data['occupation_father_2'];
			 $this->Father_Address  = $data['address_father_2'];
			 $this->Father_Zipcode  = $data['zip_cord_father_2'];
			 $this->Father_Tel  = $data['tel_father_2'];
			 $this->Father_Email  = $data['email_father_2'];
			 $this->mother_name  = $data['mother_name_2'];
			 $this->mother_sname  = $data['issued_at_1'];
			 $this->mother_age  = $data['age_mother_2'];
			 $this->mother_occupation  = $data['occupation_mother_2'];
			 $this->mother_address  = $data['address_mother_2'];
			 $this->mother_Zipcode   = $data['zip_cord_mother_2'];
			 $this->mother_Tel  = $data['tel_mother_2'];
			 $this->mother_Email  = $data['email_mother_2'];
			 $this->Parent_name  = $data['parent_name_2'];
			 $this->Parent_sname  = $data['issued_at_1'];
			 $this->Parent_age  = $data['age_parent_2'];
			 $this->Parent_occupation  = $data['occupation_parent_2'];
			 $this->Parent_address  = $data['address_parent_2'];
			 $this->Parent_Zipcode   = $data['zip_cord_parent_2'];
			 $this->Parent_Tel  = $data['tel_parent_2'];
			 $this->Parent_Email  = $data['email_parent_2'];
			 $this->num_of_relative  = $data['no_of_relatives_2'];
			 $this->num_are_you  = $data['you_are_the_2'];
			 $this->Edu_pri_school  = $data['primary_name_3'];
			 $this->Edu_pri_Provice  = $data['primary_province_3'];
			 $this->Edu_pri_YearAttend  = $data['primary_year_attended_3'];
			 $this->Edu_pri_YearGraduate  = $data['primary_year_graduated_3'];
			 $this->Edu_pri_major  = $data['primary_major_3'];
			 $this->Edu_sec_school  = $data['secondary_name_3'];
			 $this->Edu_sec_Provice  = $data['secondary_province_3'];
			 $this->Edu_sec_YearAttend  = $data['secondary_year_attended_3'];
			 $this->Edu_sec_YearGraduated  = $data['secondary_year_graduated_3'];
			 $this->Edu_sec_major  = $data['secondary_major_3'];
			 $this->Edu_high_school  = $data['high_school_name_3'];
			 $this->Edu_high_Provice  = $data['high_school_province_3'];
			 $this->Edu_high_YearAttend  = $data['high_school_year_attended_3'];
			 $this->Edu_high_YearGraduated  = $data['high_school_year_graduated_3'];
			 $this->Edu_high_major  = $data['high_school_major_3'];
			 $this->Edu_uni  = $data['university_name_3'];
			 $this->Edu_uni_Provice  = $data['university_province_3'];
			 $this->Edu_uni_YearAttend  = $data['university_year_attended_3'];
			 $this->Edu_uni_Graduated   = $data['university_year_graduated_3'];
			 $this->Edu_uni_major  = $data['university_major_3'];
			 $this->Pre_trained_YearFrom  = $data['previous_training_year_from_3'];
			 $this->Pre_trained_Yearto  = $data['previous_training_year_to_3'];
			 $this->Pre_trained_Position  = $data['previous_training_jobdescription_3'];
			 $this->Pre_trained_Provice  = $data['previous_training_province_3'];
			 $this->Pre_trained_Organization  = $data['previous_training_organization_3'];
			 $this->Career_objective1  = $data['career_objectives_3_1'];
			 $this->Career_objective2  = $data['career_objectives_3_2'];
			 $this->Career_objective3  = $data['career_objectives_3_3'];
			 $this->Career_objective4  = $data['career_objectives_3_4'];
			 $this->std_activity_1  = $data['issued_at_1'];
			 $this->std_activity_2  = $data['issued_at_1'];
			 $this->std_activity_3  = $data['issued_at_1'];
			 $this->Language_Eng_lis  = $data['listen-eng'];
			 $this->Language_Eng_speak  = $data['speak-eng'];
			 $this->Language_Eng_read  = $data['read-eng'];
			 $this->Language_Eng_writing  = $data['write-eng'];
			 $this->Language_CN_lis  = $data['listen-ch'];
			 $this->Language_CN_speak  = $data['speak-ch'];
			 $this->Language_CN_read  = $data['read-ch'];
			 $this->Language_CN_writing  = $data['write-ch'];
			 $this->Specail_ability_1  = $data['special_ability_4_1'];
			 $this->Specail_ability_2  = $data['special_ability_4_2'];
			 $this->Specail_ability_3  = $data['special_ability_4_3'];
			 $this->Other_skill_computer  = $data['computerized_ability_4_1'];
			 $this->Other_skill_sport  = $data['sport_4_1'];
			 $this->Other_skill_Hobbies  = $data['hobbies_4_1'];
			 $this->Drive_license_car  = $data['car_license_no_4_1'];
			 $this->Drive_license_motorCycle  = $data['motorcycle_license_no_4_1'];
			 $this->Explain_yourself  = $data['explain_about_yourself'];
			 $this->std_form_103_id  = $_SESSION['stdid'];
			 //echo $this->address;

			 $this->db->insert('student_form_103', $this);

		 }

	public function change_status($id,$status)
    {
    	if(($status=="Rechoosing")||($status=="Repair")){
    		$update2 ="UPDATE student_company SET status_student_company_id = 2 WHERE STD_ID = $id";
    		$this->db->query($update2);
    	}
       $updata = "UPDATE student_status SET  status='$status' where STD_ID = $id";
       $this->db->query($updata);
     }

     public function sent_choosing($id)
     {
     	$sql = "UPDATE student_status SET status='Approving' WHERE STD_ID = $id";
     	$this->db->query($sql);
     }

}
?>
