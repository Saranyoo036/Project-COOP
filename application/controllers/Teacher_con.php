.<?php
class Teacher_con extends CI_Controller {


	public function homeTeacher()
	{
		$this->load->model('News_model');
		$news['news'] = $this->News_model->shownews();
		// print_r($info);
		$this->load->view('css');
		$this->load->view('top-bar-teacher');
		$this->load->view('teacher-page/rightsidebar-teacher');
		$this->load->view('std-page/home',$news);
		$this->load->view('script');
	}

	public function appCOOP()
	{
		$this->load->view('top-bar-teacher');
		$this->load->view('teacher-page/rightsidebar-teacher');
		$this->load->view('teacher-page/home-coop');
		$this->load->view('script');
	}

	public function appintern()
	{
		$this->load->view('top-bar-teacher');
		$this->load->view('teacher-page/rightsidebar-teacher');
		$this->load->view('teacher-page/home-intern');
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
			$this->load->model('company_model');
			$responsedata['responsedata'] = $this->company_model->view($_GET['comID'],$_GET['posID']);
			//
			array_push($responsedata,$_GET);
			$this->load->view('top-bar-teacher');
			$this->load->view('teacher-page/rightsidebar-teacher');
			$this->load->view('teacher-page/viewCompany',$responsedata);
			$this->load->view('script');
		}

	public function aprroveStudent()
		{
			$this->load->model('Teacher_model');
			$this->Teacher_model->approveSTD($_GET['STD_ID'],$_GET['comID'],$_GET['posID']);
			redirect(base_url('Project-COOP/Teacher_con/homeTeacher'));
		}

	public function unApproveStudent()
	{
		$this->load->model('Teacher_model');
		$this->Teacher_model->unApproveSTD($_GET['STD_ID'],$_GET['comID'],$_GET['posID'],$_GET['Note']);
		redirect(base_url('Project-COOP/Teacher_con/homeTeacher'));
	}

	public function view103STD()
	{
			$this->load->model('home_model');
			$data['data'] = $this->home_model->data103($_GET['STD_ID']);
			array_push($data['data'],$this->home_model->STD_data($_GET['STD_ID']));
			$this->load->view('top-bar-teacher');
			$this->load->view('teacher-page/rightsidebar-teacher');
			$this->load->view('std-page/view103form',$data);
			$this->load->view('script');
	}

	public function NoteUnApprove()
	{
		$data = array(
						'STD_ID'=>$_GET['STD_ID'],
						'comID'=>$_GET['comID'],
						'posID'=>$_GET['posID']
					);
		$this->load->view('top-bar-teacher');
		$this->load->view('teacher-page/rightsidebar-teacher');
		$this->load->view('teacher-page/unAppNote',$data);
		$this->load->view('script');
	}
}



?>
