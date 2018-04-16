<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class DescripPage extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function Descrip_Page()
		{

			$this->load->view('css');
			$this->load->view('top-bar-teacher');
			$this->load->view('teacher-page/rightsidebar-teacher');
			$this->load->view('teacher-page/Descrip_Page');
			$this->load->view('script');

		}
		
}
?>