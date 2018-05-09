<?php
class coop0103PDF extends CI_Controller {
	function __construct()
		{
				// this is your constructor
				parent::__construct();
				$this->load->model('student_model');
		}

public function view0103form($stdid)
{
	//echo $stdid;
	 $data['data'] = $this->student_model->checkform($stdid);
	 array_push($data['data'],$this->student_model->mystatus($stdid));

	 $company = $this->db->query("select company_id,Position_id from student_company where STD_ID = $stdid and select_print = 1 ");
	 $row = $company->result_array();
	// echo '<pre>';
	// print_r($row);
	// echo'</pre>';
	if ($row!=array()) {
		$comname = $this->student_model->companyidtocompanyname($row[0]['company_id']);
		$posname = $this->student_model->changeidposandcompanytoname($row[0]['Position_id']);
	}
	else{
		$comname = '';
		$posname = '';
	}

	$coop = (object) array(

		'faculty_id'=>'1',
		'lang'=>'0',
		'name_and_surname_thai_1'=>$data['data'][1][0]['std_name'].' '.$data['data'][1][0]['std_sname'],
		'major_year_1'=>$data['data'][1][0]['major'],
		'year_1'=>'4',
		'advisor_name_1'=>$data['data'][0]['Name_of_advisor'],
		'faculty_1'=>$data['data'][1][0]['faculty'],
		'name_and_surname_eng_1'=>'',
		'major_year_eng_1'=>'',
		'year_1'=>'4',
		'advisor_name_eng_1'=>'',
		'faculty_eng_1'=>'',
		'student_id_1'=>$data['data'][0]['std_form_103_id'],
		'phone_number_1'=>$data['data'][1][0]['std_tel'],
		'semester_gpa_1'=>$data['data'][0]['Semester_GPA'],
		'cumulative_gpa_1'=>$data['data'][0]['Cumulative_GPA'],
		'email_1'=>$data['data'][1][0]['std_email'],
		'working_from_1'=>'',
		'working_until_1'=>'',
		'period_of_working_1_1'=>'',
		'job_position'=>$posname,
		'position_1_2'=>'',
		'organization_name' => $comname,
		'oraganization_name_1_2'=>'',
		'period_of_working_1_2'=>'',
		'course_1_1'=>'',
		'course_1_2'=>'',
		'course_duration_1_1'=>'',
		'course_duration_1_2'=>'',
		'course_gpa_1_1'=>'',
		'course_gpa_1_2'=>'',
		'identification_card_no_1'=>$data['data'][0]['Iden_cardNo'],
		'issued_at_1'=>$data['data'][0]['Issued_at'],
		'issued_date_1'=>$data['data'][0]['Issued_date'],
		'expiry_date_1'=>$data['data'][0]['Expiry_date'],
		'race_1'=>$data['data'][0]['Race'],
		'nationality_1'=>$data['data'][0]['Nationality'],
		'religion_1'=>$data['data'][0]['Religion'],
		'date_of_birth_1'=>$data['data'][0]['Date_of_birth'],
		'place_of_birth_1'=>$data['data'][0]['Place_of_birth'],
		'sex_1'=>$data['data'][0]['sex'],
		'height_1'=>$data['data'][0]['Height'],
		'weight_1'=>$data['data'][0]['Weight'],
		'chronical_disease_1'=>$data['data'][0]['Chronical_disease'],

		'address_this_term_2'=>$data['data'][0]['Address_now'],
		'tel_2_1'=>'',
		'moblie_2_1'=>$data['data'][1][0]['std_tel'],
		'fax_2_1'=>'',
		'email_2'=>$data['data'][1][0]['std_email'],

		'permanent_address_2'=>$data['data'][0]['Address'],
		'tel_2_2'=>'',
		'moblie_2_2'=>$data['data'][1][0]['std_tel'],
		'fax_2_2'=>'',

		'name_emergency_2'=>$data['data'][0]['Emergency_name'].' '.$data['data'][0]['Emergency_Sname'],
		'relation_emergency_2'=>$data['data'][0]['Emergency_relation'],
		'occupation_emergency_2'=>$data['data'][0]['Emergency_Occupation'],
		'place_of_work_emergency_2'=>$data['data'][0]['Emergency_Placework'],
		'address_emergency_2'=>$data['data'][0]['Emergency_Address'],
		'tel_emergency_2'=>$data['data'][0]['Emergency_Tel'],
		'fax_emergency_2'=>'',
		'email_emergency_2'=>$data['data'][0]['Emergency_E-mail'],

		'father_name_2'=>$data['data'][0]['Father_name'].' '.$data['data'][0]['Father_sname'],
		'age_father_2'=>$data['data'][0]['Father_age'],
		'occupation_father_2'=>$data['data'][0]['Father_occupation'],
		'address_father_2'=>$data['data'][0]['Father_Address'],
		'moo_father_2'=>$data['data'][0]['Emergency_E-mail'],
		'soi_father_2'=>$data['data'][0]['Emergency_E-mail'],
		'sub_district_father_2'=>$data['data'][0]['Emergency_E-mail'],
		'district_father_2'=>$data['data'][0]['Emergency_E-mail'],
		'province_father_2'=>$data['data'][0]['Emergency_E-mail'],
		'zip_cord_father_2'=>$data['data'][0]['Father_Zipcode'],
		'tel_father_2'=>$data['data'][0]['Father_Tel'],
		'fax_father_2'=>'',
		'email_father_2'=>$data['data'][0]['Father_Email'],

		'mother_name_2'=>$data['data'][0]['mother_name'].' '.$data['data'][0]['mother_sname'],
		'age_mother_2'=>$data['data'][0]['mother_age'],
		'occupation_mother_2'=>$data['data'][0]['mother_occupation'],
		'address_mother_2'=>$data['data'][0]['mother_address'],
		'moo_mother_2'=>$data['data'][0]['mother_Zipcode'],
		'soi_mother_2'=>$data['data'][0]['Father_Email'],
		'sub_district_mother_2'=>$data['data'][0]['Father_Email'],
		'district_mother_2'=>$data['data'][0]['Father_Email'],
		'province_mother_2'=>$data['data'][0]['Father_Email'],
		'zip_cord_mother_2'=>$data['data'][0]['mother_Zipcode'],
		'tel_mother_2'=>$data['data'][0]['mother_Tel'],
		'fax_mother_2'=>'',
		'email_mother_2'=>$data['data'][0]['mother_Email'],

		'no_of_relatives_2'=>$data['data'][0]['num_of_relative'],
		'you_are_the_2'=>$data['data'][0]['num_are_you'],

		'name_relatives_2_1'=>'',
		'age_relatives_2_1'=>'',
		'occupation_relatives_2_1'=>'',
		'position_relatives_2_1'=>'',
		'address_relatives_2_1'=>'',

		'name_relatives_2_2'=>'',
		'age_relatives_2_2'=>'',
		'occupation_relatives_2_2'=>'',
		'position_relatives_2_2'=>'',
		'address_relatives_2_2'=>'',

		'name_relatives_2_3'=>'',
		'age_relatives_2_3'=>'',
		'occupation_relatives_2_3'=>'',
		'position_relatives_2_3'=>'',
		'address_relatives_2_3'=>'',

		'name_relatives_2_4'=>'',
		'age_relatives_2_4'=>'',
		'occupation_relatives_2_4'=>'',
		'position_relatives_2_4'=>'',
		'address_relatives_2_4'=>'',

		'name_relatives_2_5'=>'',
		'age_relatives_2_5'=>'',
		'occupation_relatives_2_5'=>'',
		'position_relatives_2_5'=>'',
		'address_relatives_2_5'=>'',

		'primary_name_3'=>$data['data'][0]['Edu_pri_school'],
		'primary_province_3'=>$data['data'][0]['Edu_pri_Provice'],
		'primary_year_attended_3'=>$data['data'][0]['Edu_pri_YearAttend'],
		'primary_year_graduated_3'=>$data['data'][0]['Edu_pri_YearGraduate'],
		'primary_major_3'=>$data['data'][0]['Edu_pri_major'],

		'secondary_name_3'=>$data['data'][0]['Edu_sec_school'],
		'secondary_province_3'=>$data['data'][0]['Edu_sec_Provice'],
		'secondary_year_attended_3'=>$data['data'][0]['Edu_sec_YearAttend'],
		'secondary_year_graduated_3'=>$data['data'][0]['Edu_sec_YearGraduated'],
		'secondary_major_3'=>$data['data'][0]['Edu_sec_major'],

		'high_school_name_3'=>$data['data'][0]['Edu_high_school'],
		'high_school_province_3'=>$data['data'][0]['Edu_high_Provice'],
		'high_school_year_attended_3'=>$data['data'][0]['Edu_high_YearAttend'],
		'high_school_year_graduated_3'=>$data['data'][0]['Edu_high_YearGraduated'],
		'high_school_major_3'=>$data['data'][0]['Edu_high_major'],

		'university_name_3'=>$data['data'][0]['Edu_uni'],
		'university_province_3'=>$data['data'][0]['Edu_uni_Provice'],
		'university_year_attended_3'=>$data['data'][0]['Edu_uni_YearAttend'],
		'university_year_graduated_3'=>$data['data'][0]['Edu_uni_Graduated'],
		'university_major_3'=>$data['data'][0]['Edu_uni_major'],

		'previous_training_year_from_3'=>$data['data'][0]['Pre_trained_YearFrom'],
		'previous_training_year_to_3'=>$data['data'][0]['Pre_trained_Yearto'],
		'previous_training_jobdescription_3'=>$data['data'][0]['Pre_trained_Position'],
		'previous_training_organization_3'=>$data['data'][0]['Pre_trained_Provice'],
		'previous_training_province_3'=>$data['data'][0]['Pre_trained_Organization'],

		'career_objectives_3_1'=>$data['data'][0]['Career_objective1'],
		'career_objectives_3_2'=>$data['data'][0]['Career_objective2'],
		'career_objectives_3_3'=>$data['data'][0]['Career_objective3'],
		'career_objectives_3_4'=>$data['data'][0]['Career_objective4'],

		'student_activities_year_4_1'=>'',
		'student_activities_position_4_1'=>$data['data'][0]['std_activity_1'],
		'student_activities_year_4_2'=>'',
		'student_activities_position_4_2'=>$data['data'][0]['std_activity_2'],
		'student_activities_year_4_3'=>'',
		'student_activities_position_4_3'=>$data['data'][0]['std_activity_3'],

		'english_listening_4'=>$data['data'][0]['Language_Eng_lis'],
		'english_speaking_4'=>$data['data'][0]['Language_Eng_speak'],
		'english_reading_4'=>$data['data'][0]['Language_Eng_read'],
		'english_writing_4'=>$data['data'][0]['Language_Eng_writing'],

		'chinese_listening_4'=>$data['data'][0]['Language_CN_lis'],
		'chinese_speaking_4'=>$data['data'][0]['Language_CN_speak'],
		'chinese_reading_4'=>$data['data'][0]['Language_CN_read'],
		'chinese_writing_4'=>$data['data'][0]['Language_CN_writing'],

		'other_language_4'=>'',

		'other_listening_4'=>'',
		'other_speaking_4'=>'',
		'other_reading_4'=>'',
		'other_writing_4'=>'',

		'special_ability_4_1'=>$data['data'][0]['Specail_ability_1'],
		'special_ability_4_2'=>$data['data'][0]['Specail_ability_2'],
		'special_ability_4_3'=>$data['data'][0]['Specail_ability_3'],
		'computerized_ability_4_1'=>$data['data'][0]['Other_skill_computer'],
		'car_license_no_4_1'=>$data['data'][0]['Drive_license_car'],
		'motorcycle_license_no_4_1'=>$data['data'][0]['Drive_license_motorCycle'],
		'sport_4_1'=>$data['data'][0]['Other_skill_sport'],
		'hobbies_4_1'=>$data['data'][0]['Explain_yourself'],

		'explain_about_yourself'=>$data['data'][0]['Other_skill_Hobbies'],
	);

	

	$data =array('coop0103'=>$coop);
	$this->load->view('coop0103PDF',$data);
}
public function setcompanyinform($stdid,$companyid,$posid)
{

	echo $companyid.' '.$stdid.' '.$posid ;
	echo 'asdasdvcwwev';
	$sql = "UPDATE student_company SET select_print = 0 WHERE STD_ID = $stdid";
	$this->db->query($sql);
	$where = array('select_print' => 0,'STD_ID'=>$stdid,'company_id'=>$companyid,'Position_id'=>$posid);

	$this->db->set('select_print', 1, FALSE);
	$this->db->where($where);
	$this->db->update('student_company');


}
}
?>
