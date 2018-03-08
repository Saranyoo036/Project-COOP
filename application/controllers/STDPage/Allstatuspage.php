<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Allstatuspage extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function Allstatus_page()
		{

			$this->load->view('css');
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/Allstatus_page');
			$this->load->view('script');

		}
		
}
?>