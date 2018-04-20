<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_std extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		$data['check'] = $this->home_model->checktostdhome();
		//print_r($data);
		if ($data['check']) {
			$this->pass();
		}
		else{
			$this->firsttime();
		}
	}

	public function firsttime()
	{

		$this->load->view('top-bar');
		$this->load->view('std-page/Fristsidebar-std');
		$this->load->view('std-page/frist-page/Request_form');
		$this->load->view('footer');
		$this->load->view('script');
	}

	public function pass()
	{
		$this->load->model('News_model');
		$news['news'] = $this->News_model->shownews();
		// print_r($info);
		$this->load->view('css');
		$this->load->view('top-bar-std');
		$this->load->view('std-page/rightsidebar-std');
		$this->load->view('std-page/home',$news);
		$this->load->view('script-std');
	}
}
