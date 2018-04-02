<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AddCom extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function Add_Com()
		{
			$this->load->view('top-bar');
			$this->load->view('right-sidebar-admin');
			$this->load->view('Add/Add_Com');
		
			$this->load->view('script');
		}
		
}
?>