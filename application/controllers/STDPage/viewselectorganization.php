<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class viewselectorganization extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	        $this->load->model('company_model');

	    }
		public function viewselect_organization()
		{
			$data['data']=$this->company_model->showallcompany();
			$this->load->view('css');
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/viewselect_organization',$data);
			$this->load->view('script-std');

		}

		public function editselect_organization()
		{
			$data = array('data'=>$this->company_model->showallcompanyedit($_GET['Position_id']),
							'com_id'=>$_GET['company_id'],
							'Pos_id'=>$_GET['Position_id']);
			
			$this->load->view('css');
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/editselect_organization',$data);
			$this->load->view('script-std');
		}
		public function showview()
		{
			$responsedata['responsedata'] = $this->company_model->view($_GET['company_id'],$_GET['position_id']);
			//print_r($data);
			$this->load->view('top-bar-std');
    		$this->load->view('std-page/rightsidebar-std');
    		$this->load->view('show_company-detail_view_std',$responsedata);
    		$this->load->view('script-std');
		}

		public function showedit()
		{
			$responsedata=array('responsedata'=>$this->company_model->view($_GET['company_id'],$_GET['position_id']),
								'old_posID'=>$_GET['old_posID']);
			
			
			$this->load->view('top-bar-std');
    		$this->load->view('std-page/rightsidebar-std');
    		$this->load->view('show_company-detail_edit_std',$responsedata);
    		$this->load->view('script-std');
		}

		public function checkcompany()
		{
			$this->load->model('student_model');
			$this->student_model->checkfirstcompany($_POST);
			//print_r($_POST);
			redirect(base_url("Project-COOP/STDPage/statuspage/status_page"));

		}

		public function editcompany()
		{
			$this->load->model('student_model');
			$this->student_model->edit0202($_POST);
			redirect(base_url("Project-COOP/STDPage/statuspage/status_page"));
		}



}
?>
