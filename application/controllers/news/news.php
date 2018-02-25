<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class news extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function new_s()
		{
			$this->load->view('css');
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');
			$this->load->view('new_s/new_s');
			$this->load->view('footer');
			$this->load->view('script');
		}
		
}
?>