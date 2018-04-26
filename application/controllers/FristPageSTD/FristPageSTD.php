<?php

	class FristPageSTD extends CI_Controller {
		function __construct()
	    {      // this is your constructor
	        parent::__construct();
					$this->load->model('student_model');

	    }
		public function Frist_PageSTD()
		{
		// request mail from stdid 	$data['data'] = $this->student_model->requestpage($_GET);
			//print_r($data);
			$this->load->view('top-bar');
			$this->load->view('std-page/Fristsidebar-std');
			$this->load->view('std-page/frist-page/Internship_Re_form');
			$this->load->view('script');
		}

		public function sendrequest()
		{
			//print_r($_POST);
			$this->student_model->sendrequest($_POST);
			$this->load->view('top-bar');
			$this->load->view('std-page/Fristsidebar-std');
			$this->load->view('std-page/frist-page/Internship_Con_form');
			$this->load->view('script');
			header( "refresh:5;url=".base_url("Project-COOP") );
		}

}
?>
