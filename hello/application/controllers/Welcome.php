<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar-admin');
		$this->load->view('home');
		$this->load->view('script');
	}
}
