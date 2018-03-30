<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fun_sidebar_admin extends CI_Controller {


	public function show_student()
	{
		$data = array(
			'nameMaj' => $this->input->get('subname_major'),
			'type' => $this->input->get('type_major')
		);

		$this->load->view('top-bar');
		$this->load->view('sidebar-admin');
		$this->load->view('show_student_view',$data);
		$this->load->view('script');

	}

	public function show_company()
	{
		$data = array(
			'nameMaj' => $this->input->get('subname_major'),
			'type' => $this->input->get('type_major')
		);
		$this->load->view('top-bar');
		$this->load->view('sidebar-admin');
		$this->load->view('show_company_view',$data);
		$this->load->view('script');


	}

	public function show_teacher()
	{
		$data = array(
			 'nameFac' => $this->input->get('subname_Fac'), 
      		'nameMaj'=> $this->input->get('subname_major'), 
      		'type' => $this->input->get('type_major') 
		);
		$this->load->view('top-bar');
		$this->load->view('sidebar-admin');
		$this->load->view('show_teacher_view',$data);
		$this->load->view('script');
	}

	public function show_news()
	{
		$data = array(
			'nameMaj'=> $this->input->get('subname_major'),
			'type' => $this->input->get('type_major')
		);
			$this->load->view('top-bar');
			$this->load->view('sidebar-admin');
			$this->load->view('show_news_view',$data);
			$this->load->view('script');

	}
	 public function home() 
  { 
    $this->load->model('home_model'); 
    $data['fac'] =  $this->home_model->showfac(); 
      $this->load->view('top-bar'); 
      $this->load->view('sidebar-admin'); 
      $this->load->view('home',$data); 
      $this->load->view('script'); 
  } 

	public function show_setting()
	{
		$data = array(
			'nameMaj' => $this->input->get('subname_major'),
			'type' => $this->input->get('type_major')
		);
			$this->load->view('top-bar');
			$this->load->view('sidebar-admin');
			$this->load->view('show_setting_view',$data);
			$this->load->view('script');
	}
	public function assign()
	{
		
		
		$id =  explode(',', $this->input->get('id'));
		$this->load->model('Teacher_model');
		$this->Teacher_model->assignteacher($id[1],$this->input->get('type'),$this->input->get('major')); 

		
		
		 $back =  base_url("project-coop/index.php/Fun_sidebar_admin/show_teacher?subname_Fac=".$this->input->get('fac')."&subname_major=".$this->input->get('major')."&type_major=".$this->input->get('type'));
		 
		 header('Location:'.$back);
	}
}
