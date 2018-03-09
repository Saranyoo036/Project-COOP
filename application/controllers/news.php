<?php

class news extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('News_model');

  	}

		public function toaddform()
		{
			$this->load->view('top-bar');
			$this->load->view('sidebar-admin');
			$this->load->view('add_news_view');
			$this->load->view('script');
		}



}


 ?>
