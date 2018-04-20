<?php

class news extends CI_Controller {

	public function __construct(){
    parent::__construct();

		//$this->load->helper(array('form', 'url'));
		date_default_timezone_set("Asia/Bangkok");
    $this->load->model('News_model');

  	}

		public function toaddform()
		{
			$this->load->view('top-bar');
			$this->load->view('sidebar-admin');
			$this->load->view('add_news_view');
			$this->load->view('script');
		}
		public function addnews()
		{
			//echo getcwd().'/uploaded_file/';
			//print_r($_POST);
			//print_r($_FILES);
			$filename;
			$date = date('Y-m-d H:i:s');
			if (!empty($_FILES)) {
				$filename = $_FILES['file']['name'];
    		$tempFile = $_FILES['file']['tmp_name'];
    		$targetPath = getcwd().'/uploaded_file/';
    		$targetFile =  $targetPath. $_FILES['file']['name'];

    		move_uploaded_file($tempFile,$targetFile);

		}
			$this->News_model->addnews($_POST,$filename,$date);
			$this->session->set_flashdata('compelte', 'ระบบได้ทำการอัปโหลดไฟล์ของท่านเสร็จเรียบร้อยแล้ว');
			redirect(base_url("Project-COOP/news/toaddform"));
		}

}


 ?>
