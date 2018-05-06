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

	$data['data'] = $this->student_model->mystatus($stdid);
	array_push($data['data'],$this->student_model->view0104company($stdid));
	echo '<pre>';
	print_r($data['data']);
	echo '</pre>';

	$coop = (object) array(

		'faculty_id'=>'1',
		'lang'=>'thai',
		'name_and_surname_thai_1'=>$data['data'][0]['std_name'].' '.$data['data'][0]['std_sname'],
		'major_year_1advisor_name_1'=>$data['data'][0]['major'],
		'advisor_name_1'=>'sadasds',
		'faculty_1'=>$data['data'][0]['faculty'],
		'name_and_surname_eng_1'=>'ddasd asdasdas',
		'major_year_1'=>$data['data'][0]['major'],
		'advisor_name_eng_1'=>'asdqw ',
		'faculty_eng_1'=>'vqvq',
		'student_id_1'=>$data['data'][0]['std_name'],
		'phone_number_1'=>$data['data'][0]['std_name'],
		'semester_gpa_1'=>'2/2555',
		'cumulative_gpa_1'=>'2.2',
		'organization_name_1'=>$data['data'][1][0][0]['company_name'],
		'organization_1_province'=>$data['data'][1][0][0]['provice'],
		'organization_1_position'=>$data['data'][1][0][0]['Position_name'],
		'organization_name_2'=>$data['data'][1][0][1]['company_name'],
		'organization_2_province'=>$data['data'][1][0][1]['provice'],
		'organization_2_position'=>$data['data'][1][0][1]['Position_name']

	);

	$data =array('coop0104'=>$coop);
	$this->load->view('coop0104PDF',$data);

}
}
?>
