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
			$data['mystatus'] =  $this->student_model->mystatus();
			$this->load->view('css');
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/status_page',$data);
			$this->load->view('script-std');

		}

}
?>
