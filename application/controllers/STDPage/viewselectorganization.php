<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class viewselectorganization extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function viewselect_organization()
		{

			$this->load->view('css');
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/viewselect_organization');
			$this->load->view('script');

		}
		
}
?>