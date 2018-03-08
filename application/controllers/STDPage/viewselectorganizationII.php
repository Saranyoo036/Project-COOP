<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class viewselectorganizationII extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function viewselect_organizationII()
		{

			$this->load->view('css');
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			//$this->load->view('std-page/cooppage_form');
			$this->load->view('script');

		}
		
}
?>