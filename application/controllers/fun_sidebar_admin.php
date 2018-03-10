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
		$fac="";
		$id =  $this->input->get('id');
		$id = ','.$id;
		$hel = explode(',,',$id); 
		
		$fac = explode(',',$id);
		$Fac= $this->input->get('subname_Fac'); 

		 if ($fac[6] =="College of Computing" or '"College of Computing"') {
			$fac = 'COC';
		}
		
		$Fac= $this->input->get('subname_Fac');
		$this->load->model('Teacher_model');
		
		for ($i=1; $i<count($hel);$i++) {  
       		$this->Teacher_model->assignteacher($hel[$i],$this->input->get('type'),$this->input->get('major')); 
     	} 

		$back =  base_url("project-coop/index.php/Fun_sidebar_admin/show_teacher?subname_Fac=".$fac);
		header('Location:'.$back);
	}
}
