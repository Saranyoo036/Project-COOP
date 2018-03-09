<?php

class news extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('News_model');

  	}

  	public function addnews()
  	{
  		$this->load->view('top-bar');
		$this->load->view('sidebar-admin');
		$this->load->view('add_news_view');
		$this->load->view('script');
  	}
  	public function insertnewstodb()
  	{
  		$this->News_model->insert($_POST);
  		$this->load->view('top-bar');
		$this->load->view('sidebar-admin');
		$this->load->view('show_news_view');
		$this->load->view('script');
  	}




  	

}


 ?>