<?php 
public function test()
{
	$coop = (object) array(

		'faculty_id'=>'',
		'lang'=>'',
		'name_and_surname_thai_1'=>'',
		'major_year_1advisor_name_1'=>'',
		'advisor_name_1'=>'',
		'faculty_1'=>'',
		'name_and_surname_eng_1'=>'',
		'major_year_eng_1'=>'',
		'advisor_name_eng_1'=>'',
		'faculty_eng_1'=>'',
		'student_id_1'=>'',
		'phone_number_1'=>'',
		'semester_gpa_1'=>'',
		'cumulative_gpa_1'=>'',

	);

	$data =array('coop0104'=>$coop);
	$this->load->view('coop0104PDF',$data);
}
?>