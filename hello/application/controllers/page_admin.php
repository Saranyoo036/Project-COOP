<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page_admin extends CI_Controller {


	public function index()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('home');
		$this->load->view('script');
	}
}
