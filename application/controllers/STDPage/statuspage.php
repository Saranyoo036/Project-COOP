<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class statuspage extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
					$this->load->model('student_model');

	    }
		public function status_page()
		{
			$this->load->model('home_model');
			$checkform['checkform'] =$this->student_model->checkform();
			$data['mystatus'] =  $this->student_model->mystatus();
			$checkcompany['company'] = $this->student_model->checkinterncompany();
			$checktime = $this->home_model->checktimestat($data['mystatus'][0]['status'],$data['mystatus'][0]['major'],$_SESSION['std_type']);
			array_push($data['mystatus'],$checkform['checkform'],$checkcompany['company'],$checktime);


			$this->load->view('css');
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/status_page',$data);
			$this->load->view('script-std');

		}
		public function sentChoosing()
		{
			$this->load->model('student_model');
			$this->student_model->sent_choosing($_GET['std_id']);
			redirect(base_url("Project-COOP/STDPage/statuspage/status_page"));
		}

}
?>
