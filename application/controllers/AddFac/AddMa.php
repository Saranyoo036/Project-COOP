<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AddMa extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function Add_Ma()
		{
			$this->load->view('top-bar');
			$this->load->view('right-sidebar-admin');
			$this->load->view('Add/Add_Ma');
		
			$this->load->view('script');
		}
		
}
?>