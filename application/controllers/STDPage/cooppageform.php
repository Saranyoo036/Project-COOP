<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class cooppageform extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();

	    }
		public function cooppage_form()
		{

			//$this->load->view('css');
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/cooppage_form');
			$this->load->view('script-std');


		}

}
?>
