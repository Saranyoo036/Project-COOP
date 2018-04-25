<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_Teacher extends CI_Controller {


	public function index()
	{
		$this->load->view('css');
		$this->load->view('top-bar-teacher');
		$this->load->view('teacher-page/rightsidebar-teacher');
		$this->load->view('teacher-page/home');
		$this->load->view('script');
	}
}
