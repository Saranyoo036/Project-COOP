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
		public function showview($id)
		{
			$responsedata['responsedata'] = $this->company_model->view($id);
			//print_r($data);
			$this->load->view('top-bar-std');
    		$this->load->view('std-page/rightsidebar-std');
    		$this->load->view('show_company-detail_view_std',$responsedata);
    		$this->load->view('script-std');
		}

		public function checkcompany()
		{
			$this->load->model('student_model');
			$this->student_model->checkfirstcompany($_POST['companyid']);
			//print_r($_POST);
			redirect(base_url("Project-COOP/STDPage/viewselectorganization/showview/".$_POST['companyid']));

		}

}
?>
