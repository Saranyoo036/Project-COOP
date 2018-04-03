<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class company extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('company_model');

  }

  public function addcompany()
  {

    $this->load->view('top-bar');
    $this->load->view('sidebar-admin');
    $this->load->view('add_company_view');
    $this->load->view('script');
  }
  public function insertcompany()
  {
    //$this->load->model('company_model');
    $this->company_model->addnewcompany($_POST);
    $back =  base_url("project-coop/index.php/Fun_sidebar_admin/show_company?subname_major=".$_POST['major']."&type_major=".$_POST['group4']);
		header('Location:'.$back);

  }
  public function deletecompany()
  {
    $del_id = $this->input->get('company_delid');
    echo $del_id;
    //$this->load->model('company_model');
    $this->company_model->delete($del_id);
    $back =  base_url("project-coop/index.php/Fun_sidebar_admin/show_company?subname_major=".$_GET['subname_major']."&type_major=".$_GET['type_major']);
		header('Location:'.$back);

    // Produces:
    // DELETE FROM major
    // WHERE id = $id

  }
  public function viewcompany()
  {
    //$this->load->model('company_model');
    $responsedata['responsedata'] =  $this->company_model->view($_GET['company_viewid']);
    //print_r($responsedata);
    $this->load->view('top-bar');
    $this->load->view('sidebar-admin');
    $this->load->view('show_company-detail_view',$responsedata);
    $this->load->view('script');
  }
  public function editcompanyinfo()
  {
    //$this->load->model('company_model');
    $this->company_model->update($_POST);
    $back =  base_url("project-coop/index.php/Fun_sidebar_admin/show_company?subname_major=".$_POST['major']."&type_major=".$_POST['group4']);
		header('Location:'.$back);
  }

  public function viewPosition()
  {
    $data = array(
      'company_ID' => $this->input->get('company_id')
      // ,'nameMaj'=>$this->input->get('subname_major'),
      // '$type'=>$this->input->get('type_major')
    );
    $this->load->view('top-bar');
    $this->load->view('sidebar-admin');
    $this->load->view('Add/Add_Po',$data);
    $this->load->view('script'); 
  }

  public function insertPosition()
  {
    $this->load->model('company_model');
    $this->company_model->addPosition($_POST);
    $back = base_url("Project-COOP/index.php/Fun_sidebar_admin/home");
    header('Location:'.$back);
  }

}



?>
