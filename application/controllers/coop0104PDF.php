<?php
class coop0104PDF extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('student_model');
	}

public function test()
{
	$coop = (object) array(

		'faculty_id'=>'1',
		'lang'=>'thai',
		'name_and_surname_thai_1'=>'ssss',
		'major_year_1advisor_name_1'=>'cxc',
		'advisor_name_1'=>'sadasds',
		'faculty_1'=>'eiei',
		'name_and_surname_eng_1'=>'ddasd asdasdas',
		'major_year_1'=>'SE',
		'advisor_name_eng_1'=>'asdqw ',
		'faculty_eng_1'=>'vqvq',
		'student_id_1'=>'asdasd',
		'phone_number_1'=>'0000',
		'semester_gpa_1'=>'2/2555',
		'cumulative_gpa_1'=>'2.2',

	);

	$data =array('coop0104'=>$coop);
	$this->load->view('coop0104PDF',$data);
}
public function view0104($stdid)
{
	$query = $this->db->query("SELECT * FROM student_company WHERE STD_ID = $stdid");
	$row = $query->result_array();
	$data['data'] = $this->student_model->mystatus($stdid);
	array_push($data['data'],$this->student_model->view0104company($stdid));

	$row[0]['start_cer'] = strtotime($row[0]['start_cer']);
	$row[0]['start_cer'] = date('d/m/y',$row[0]['start_cer']);
	$row[0]['end_cer'] = strtotime($row[0]['end_cer']);
	$row[0]['end_cer'] = date('d/m/y',$row[0]['end_cer']);

	if (isset($row[1])) {
		$row[1]['start_cer'] = strtotime($row[1]['start_cer']);
		$row[1]['start_cer'] = date('d/m/y',$row[1]['start_cer']);
		$row[1]['end_cer'] = strtotime($row[1]['end_cer']);
		$row[1]['end_cer'] = date('d/m/y',$row[1]['end_cer']);
	}
	else{

	}

	// echo '<pre>';
	// print_r($data['data']);
	// print_r($row);
	// echo '</pre>';

	if (isset($data['data'][1][0][1]['company_name'])) {
		$company2 = $data['data'][1][0][1]['company_name'];
		$province2 = $data['data'][1][0][1]['provice'];
		$position2 = $data['data'][1][0][1]['Position_name'];
	}
	else{
		$company2 ='';
		$province2 = '';
		$position2 = '';
	}

	$coop = (object) array(

		'faculty_id'=>'1',
		'lang'=>'thai',
		'name_and_surname_thai_1'=>$data['data'][0]['std_name'].' '.$data['data'][0]['std_sname'],
		'major_year_1advisor_name_1'=>$data['data'][0]['major'],
		'advisor_name_1'=>'sadasds',
		'faculty_1'=>$data['data'][0]['faculty'],
		'name_and_surname_eng_1'=>'',
		'major_year_1'=>$data['data'][0]['major'],
		'advisor_name_eng_1'=>'asdqw ',
		'faculty_eng_1'=>'vqvq',
		'student_id_1'=>$data['data'][0]['std_name'],
		'phone_number_1'=>$data['data'][0]['std_name'],
		'subject_code_1'=> $row[0]['subject_code'],
		'semester_1'=>$row[0]['subject_year'],
		'grade_1'=>$row[0]['subject_result'],
		'certificate_1'=>$row[0]['certificate'],
		'certificate_time_1'=>$row[0]['certificate_time'],
		'certificate_start_1'=>$row[0]['start_cer'],
		'certificate_end_1'=>$row[0]['end_cer'],
		'organization_name_1'=>$data['data'][1][0][0]['company_name'],
		'organization_1_province'=>$data['data'][1][0][0]['provice'],
		'organization_1_position'=>$data['data'][1][0][0]['Position_name'],
		'subject_code_2'=> $row[1]['subject_code'],
		'semester_2'=>$row[1]['subject_year'],
		'grade_2'=>$row[1]['subject_result'],
		'certificate_2'=>$row[1]['certificate'],
		'certificate_time_2'=>$row[1]['certificate_time'],
		'certificate_start_2'=>$row[1]['start_cer'],
		'certificate_end_2'=>$row[1]['end_cer'],
		'organization_name_2'=>$company2,
		'organization_2_province'=>$province2,
		'organization_2_position'=>$position2

	);

	$data =array('coop0104'=>$coop);
	$this->load->view('coop0104PDF',$data);

}
}
?>
