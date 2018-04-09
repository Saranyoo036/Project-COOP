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
				$this->load->view('top-bar-std');
				$this->load->view('std-page/rightsidebar-std');
				$this->load->view('std-page/cooppage_form');
				$this->load->view('script-std');
			}
			else{
				$this->load->view('top-bar-std');
				$this->load->view('std-page/rightsidebar-std');
				$this->load->view('std-page/sended103form');
				$this->load->view('script-std');
			}

			//$this->load->view('css');
			// $this->load->view('top-bar-std');
			// $this->load->view('std-page/rightsidebar-std');
			// $this->load->view('std-page/cooppage_form');
			// $this->load->view('script-std');


		}

}
?>
