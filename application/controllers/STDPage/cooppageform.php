<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class cooppageform extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
					$this->load->model('student_model');

	    }
		public function cooppage_form()
		{
			$data = $this->student_model->checkform();
			//print_r($data);
			if($data == Array()){
				$stddata['stddata'] = $this->student_model->mystatus();
				$this->load->view('top-bar-std');
				$this->load->view('std-page/rightsidebar-std');
				$this->load->view('std-page/cooppage_form',$stddata);
				$this->load->view('script-std');
			}
			else{
				$this->load->view('top-bar-std');
				$this->load->view('std-page/rightsidebar-std');
				$this->load->view('std-page/sended103form');
				$this->load->view('script-std');
			}

		}
		public function edit103form()
		{
			$data['data'] = $this->student_model->checkform();
			array_push($data['data'],$this->student_model->mystatus());
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/edit103form',$data);
			$this->load->view('script-std');

		}
		public function update103form()
		{
			$this->student_model->update103form($_POST);
			redirect("Project-COOP/welcome_std/pass");
		}

}
?>
