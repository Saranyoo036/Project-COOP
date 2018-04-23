<?php
class Teacher_con extends CI_Controller {


	public function homeTeacher()
	{
		$this->load->view('top-bar-teacher');
		$this->load->view('teacher-page/rightsidebar-teacher');
		$this->load->view('teacher-page/home');
		$this->load->view('script');
	}

	public function Allstatus_page()
		{

			
			$this->load->view('top-bar-teacher');
			$this->load->view('teacher-page/rightsidebar-teacher');
			$this->load->view('teacher-page/Allstatus_page');
			$this->load->view('script');

		}

	public function Descrip_Page()
		{

			
			$this->load->view('top-bar-teacher');
			$this->load->view('teacher-page/rightsidebar-teacher');
			$this->load->view('teacher-page/Descrip_Page',$_GET);
			$this->load->view('script');

		}

	public function teacherview202()
		{
			$this->load->view('top-bar-teacher');
			$this->load->view('teacher-page/rightsidebar-teacher');
			$this->load->view('teacher-page/viewCompany',$_GET);
			$this->load->view('script');
		}

	public function aprroveStudent()
		{
			$this->load->model('Teacher_model');
			$this->Teacher_model->approveSTD($_GET['STD_ID'],$_GET['comID'],$_GET['posID']);
			redirect(base_url('Project-COOP/Teacher_con/homeTeacher'));
		}	
}



?>