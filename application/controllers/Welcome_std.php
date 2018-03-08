<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_std extends CI_Controller {


	public function index()
	{
		
		$this->load->view('top-bar');
		$this->load->view('std-page/Fristsidebar-std');
		$this->load->view('std-page/frist-page/Request_form');
		$this->load->view('footer');
		$this->load->view('script');
	}
}
