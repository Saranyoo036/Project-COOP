<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class cooppageform extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
					$this->load->model('student_model');

	    }
		public function cooppage_form()
		{
			$data = $this->student_model->checkform($_SESSION['stdid']);
			//print_r($data);
			if($data == Array()){
				$stddata['stddata'] = $this->student_model->mystatus($_SESSION['stdid']);
				$this->load->view('top-bar-std');
				$this->load->view('std-page/rightsidebar-std');
				$this->load->view('std-page/cooppage_form',$stddata);
				$this->load->view('script-std');
			}
			else{
				$this->load->view('top-bar-std');
				$this->load->view('std-page/rightsidebar-std');
				$this->load->view('std-page/sended103form');
				$this->load->view('script-std');
			}

		}
		public function edit103form()
		{
			$data['data'] = $this->student_model->checkform($_SESSION['stdid']);
			array_push($data['data'],$this->student_model->mystatus($_SESSION['stdid']));
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/edit103form',$data);
			$this->load->view('script-std');

		}
		public function update103form()
		{
			$this->student_model->update103form($_POST);
			redirect("Project-COOP/welcome_std/pass");
		}
		public function view($id)
		{
			$data['data'] = $this->student_model->checkform($id);
			array_push($data['data'],$this->student_model->mystatus($id));
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/view103form',$data);
			$this->load->view('script-std');

		}
		public function viewcompany($idea,$posid)
		{
			//echo $idea;


			$this->load->model('company_model');
			$responsedata['responsedata'] = $this->company_model->view($idea,$posid);
			$email = explode(',',$responsedata['responsedata']['query'][0]['contract']);

			// echo '<pre>';
			// print_r($responsedata['responsedata']);
			// print_r($email);
			// echo '</pre>';
			$coop = (object) array(
				'organization_name'=>$responsedata['responsedata']['query'][0]['company_name'],
				'address'=>$responsedata['responsedata']['query'][0]['address'],
				'moo'=>'',
				'soi'=>'',
				'street'=>'',
				'sub_dristrict'=>$responsedata['responsedata']['query'][0]['Sub_district'],
				'district'=>$responsedata['responsedata']['query'][0]['District'],
				'province'=>$responsedata['responsedata']['query'][0]['provice'],
				'zip_code'=>$responsedata['responsedata']['query'][0]['postcode'],
				'tel'=>$responsedata['responsedata']['query'][0]['Tel'],
				'fax'=>$email[0],
				'website'=>'',
				'name'=>$responsedata['responsedata']['query'][0]['company_contract_name'],
				'surname'=>$responsedata['responsedata']['query'][0]['company_contract_sname'],
				'position'=>$responsedata['responsedata']['query'][0]['contacter_position'],
				'phone'=>$responsedata['responsedata']['query'][0]['Tel'],
				'email'=>$email[1],
				'job_position'=>$responsedata['responsedata']['row']['Position_name'],
				'skill'=>$responsedata['responsedata']['row']['Position_skill'],
				'number_of_student'=>$responsedata['responsedata']['row']['Position_num'],
				'job_description'=>$responsedata['responsedata']['row']['Position_desc'],
				'responsibilities'=>$responsedata['responsedata']['row']['responsibility'],
				'candidate_requirements'=>$responsedata['responsedata']['row']['candidatereq'],
				'allowance'=>'',
				'transportation'=>'',
				'accommodation'=>'',
				'meal'=>'',
				'other'=>'');
			$data =array('coop0202'=>$coop);
			$this->load->view('coop0202PDF',$data);

		}
		}


?>
