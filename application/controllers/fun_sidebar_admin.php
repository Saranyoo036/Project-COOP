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
			'nameFac' => $this->input->get('subname_Fac')
		);
		$this->load->view('top-bar');
		$this->load->view('sidebar-admin');
		$this->load->view('show_teacher_view',$data);
		$this->load->view('script');
	}

	public function show_news()
	{
		$data = array(
			'nameFac'=> $this->input->get('subname_Fac'),
			'type' => $this->input->get('type_major')
		);
			$this->load->view('top-bar');
			$this->load->view('sidebar-admin');
			$this->load->view('show_news_view',$data);
			$this->load->view('script');
	
	}
}
