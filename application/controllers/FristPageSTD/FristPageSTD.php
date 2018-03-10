<?php

	class FristPageSTD extends CI_Controller {
		function __construct()
	    {      // this is your constructor
	        parent::__construct();
					$this->load->model('student_model');

	    }
		public function Frist_PageSTD()
		{
			$data['data'] = $this->student_model->requestpage($_GET);
			//print_r($data);
			$this->load->view('top-bar');
			$this->load->view('std-page/Fristsidebar-std');
			$this->load->view('std-page/frist-page/Internship_Re_form',$data);
			$this->load->view('script');
		}

		public function sendrequest()
		{
			//print_r($_POST);
			$this->student_model->sendrequest($_POST);
		}

}
?>
