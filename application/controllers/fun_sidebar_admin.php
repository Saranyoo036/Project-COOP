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
	public function show_teacher_monitor()
	{
		$data = array(
			 'nameFac' => $this->input->get('subname_Fac'),
      		'nameMaj'=> $this->input->get('subname_major'),
      		'type' => $this->input->get('type_major')
		);
		$this->load->view('top-bar');
		$this->load->view('sidebar-admin');
		$this->load->view('show_teacher_monitor_view',$data);
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
	public function assign_monitor()
	{


		$id =  explode(',', $this->input->get('id'));
		$this->load->model('Teacher_model');
		$this->Teacher_model->assign_monitor_teacher($id[1],$this->input->get('type'),$this->input->get('major'));


		 $back =  base_url("project-coop/index.php/Fun_sidebar_admin/show_teacher_monitor?subname_Fac=".$this->input->get('fac')."&subname_major=".$this->input->get('major')."&type_major=".$this->input->get('type'));

		 header('Location:'.$back);
	}
	public function Add_Fac_view()
		{
			$this->load->view('top-bar');
			$this->load->view('sidebar-admin');
			$this->load->view('Add/Add_Fac');
			$this->load->view('script');
		}

	public function Add_Ma_view()
		{
			$this->load->view('top-bar');
			$this->load->view('sidebar-admin');
			$this->load->view('Add/Add_Ma');
			$this->load->view('script');
		}
	public function addmaj()
	{
		$this->load->model('Faculty_major_model');
		$this->Faculty_major_model->add_major($_POST['majname_eng'],$_POST['majname_thai'],$_POST['majname_sub'],$_POST['FacSelect']);
		$back = base_url("Project-COOP/index.php/Fun_sidebar_admin/home");
		header('Location:'.$back);
	}
	public function addFac()
	{
		$this->load->model('Faculty_major_model');
		$this->Faculty_major_model->add_faculty($_POST['namefac_eng'],$_POST['namefac_thai'],$_POST['namefac_sub']);
		$back = base_url("Project-COOP/index.php/Fun_sidebar_admin/home");
		header('Location:'.$back);
	}

	public function show_export_view()
	{
		$data = array(
			 'nameFac' => $this->input->get('subname_Fac'),
      		'nameMaj'=> $this->input->get('subname_major'),
      		'type' => $this->input->get('type_major')
		);
		$this->load->view('top-bar');
		$this->load->view('sidebar-admin');
		$this->load->view('export_view',$data);
		$this->load->view('script');
	}

	public function excel_format()
	{
		$data = array(
			'nameFac' => $_POST['fac'],
      		'nameMaj'=> $_POST['major'],
      		'type' => $_POST['type']
      	);
		$this->load->view('excel_format',$data);
	}
	public function view103STD()
{
		$this->load->model('home_model');
		$data['data'] = $this->home_model->data103($_GET['STD_ID']);
		array_push($data['data'],$this->home_model->STD_data($_GET['STD_ID']));
		$this->load->view('top-bar');
		$this->load->view('sidebar-admin');
		$this->load->view('std-page/view103form',$data);
		$this->load->view('script');
}

public function edit103STD()
{
		$this->load->model('home_model');
		$data['data'] = $this->home_model->data103($_GET['STD_ID']);
		array_push($data['data'],$this->home_model->STD_data($_GET['STD_ID']));
		$this->load->view('top-bar');
		$this->load->view('sidebar-admin');
		$this->load->view('std-page/edit103form',$data);
		$this->load->view('script');
}

public function deleteSTD()
{
	$this->load->model('home_model');
	$this->home_model->delSTD($_GET['STD_ID']);
	redirect(base_url('Project-COOP/Fun_sidebar_admin/show_student?subname_major='.$_GET['major'].'&type_major'.$_GET['type']));
}

public function adminView202()
{
	$this->load->model('company_model');
			$responsedata['responsedata'] = $this->company_model->view($_GET['comID']);
			//
			$this->load->view('top-bar');
			$this->load->view('sidebar-admin');
			$this->load->view('admin-viewCompany',$responsedata);
			$this->load->view('script');
}
}
