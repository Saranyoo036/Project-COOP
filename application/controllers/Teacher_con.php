<?php
class Teacher_con extends CI_Controller {




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
}



?>