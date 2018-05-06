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
			$data = $this->student_model->checkform();
			//print_r($data);
			if($data == Array()){
				$stddata['stddata'] = $this->student_model->mystatus();
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
			$data['data'] = $this->student_model->checkform();
			array_push($data['data'],$this->student_model->mystatus());
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
		public function viewcompany($idea)
		{
			//echo $idea;
			$this->load->model('company_model');
			$responsedata['responsedata'] = $this->company_model->view($idea,$posid);
			echo '<pre>';
			print_r($responsedata['responsedata']);
			echo '</pre>';
			$coop = (object) array(
				'organization_name'=>$responsedata['responsedata']['query'][0]['company_name'],
				'address'=>$responsedata['responsedata']['query'][0]['address'],
				'moo'=>'a',
				'soi'=>'a',
				'street'=>'b',
				'sub_dristrict'=>'asd',
				'district'=>'asd',
				'province'=>$responsedata['responsedata']['query'][0]['provice'],
				'zip_code'=>'asd',
				'tel'=>$responsedata['responsedata']['query'][0]['Tel'],
				'fax'=>'asd',
				'website'=>'asd',
				'name'=>$responsedata['responsedata']['query'][0]['company_contract_name'],
				'surname'=>$responsedata['responsedata']['query'][0]['company_contract_sname'],
				'position'=>'asd',
				'phone'=>'asd',
				'email'=>'asd',
				'job_position'=>'asd',
				'skill'=>$responsedata['responsedata']['row']['Position_skill'],
				'number_of_student'=>$responsedata['responsedata']['row']['Position_num'],
				'job_description'=>$responsedata['responsedata']['row']['Position_desc'],
				'responsibilities'=>'asd',
				'candidate_requirements'=>'asd',
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
