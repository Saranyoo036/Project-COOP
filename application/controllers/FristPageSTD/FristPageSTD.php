<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class FristPageSTD extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function Frist_PageSTD()
		{
			$this->load->view('top-bar');
			$this->load->view('std-page/Fristsidebar-std');
			$this->load->view('std-page/frist-page/Internship_Re_form');
			$this->load->view('script');
		}
		
}
?>