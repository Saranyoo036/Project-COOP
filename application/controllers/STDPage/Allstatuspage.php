<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Allstatuspage extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	        $this->load->model('student_model');
	       
	    }
		public function Allstatus_page()
		{	
			$data['data'] = $this->student_model->allstatus();
			$this->load->view('css');
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/Allstatus_page',$data);
			$this->load->view('script');

		}
		
}
?>