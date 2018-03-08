<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_std_Pass extends CI_Controller {


	public function index()
	{
		$this->load->view('css');
		$this->load->view('top-bar-std');
		$this->load->view('std-page/rightsidebar-std');
		$this->load->view('std-page/home');
		$this->load->view('script');
	}
}
