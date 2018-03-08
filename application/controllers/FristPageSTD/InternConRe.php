<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class InternConRe extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function Intern_ConRe()
		{
			$this->load->view('top-bar');
			$this->load->view('std-page/Fristsidebar-std');
			$this->load->view('std-page/frist-page/Internship_Con_form');
			$this->load->view('script');
		}
		
}
?>