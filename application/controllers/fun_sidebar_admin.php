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
		print_r($id);
		$arr = explode(")",$id);
		$fac = explode(',',$id);
		print_r($fac);

		 if ($fac[6] =="College of Computing" or '"College of Computing"') {
			$fac = 'COC';
		}
		echo $fac;
		unset($arr[count($arr)-1]);
		// echo '<pre>';
		// print_r($arr);
		// echo '</pre>';

		//echo $arr[5];
		$Fac= $this->input->get('subname_Fac');
		$this->load->model('Teacher_model');
		for ($i=0; $i <count($arr); $i++) {
			$this->Teacher_model->assignteacher($arr[$i]);
		}

		$back =  base_url("project-coop/index.php/Fun_sidebar_admin/show_teacher?subname_Fac=".$fac);
		header('Location:'.$back);
	}
}
