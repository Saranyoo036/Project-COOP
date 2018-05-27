<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class company extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('company_model');

  }

  public function addcompany()
  {
    $data = array(
      'nameFac' => $this->input->get('subname_Fac'),
      'type' => $this->input->get('type_major')
    );
    $this->load->view('top-bar');
    $this->load->view('sidebar-admin');
    $this->load->view('add_company_view',$data);
    $this->load->view('script');
  }
  public function insertcompany()
  {
    //$this->load->model('company_model');
    $this->company_model->addnewcompany($_POST);
    $back =  base_url("project-coop/index.php/Fun_sidebar_admin/show_company?subname_Fac=".$_POST['fac']."&type_major=".$_POST['group4']);
		header('Location:'.$back);

  }
  public function deletecompany()
  {
    $del_id = $this->input->get('company_delid');
    echo $del_id;
    //$this->load->model('company_model');
    $this->company_model->delete($del_id);
    $back =  base_url("project-coop/index.php/Fun_sidebar_admin/show_company?subname_Fac=".$_GET['subname_fac']."&type_major=".$_GET['type_major']);
		header('Location:'.$back);

    // Produces:
    // DELETE FROM major
    // WHERE id = $id

  }
  public function viewcompany()
  {
    //$this->load->model('company_model');
    $responsedata['responsedata'] =  $this->company_model->viewcom($_GET['company_viewid']);
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
    print_r($_POST);
    $back =  base_url("Project-COOP/index.php/company/viewcompany?company_viewid=$_POST[comID]&subname_fac=$_POST[Fac]COC&type_major=".$_POST['type']);
		header('Location:'.$back);
  }

   public function editPositioninfo()
  {
    //$this->load->model('company_model');
    $this->company_model->updatePosition($_POST);
    $back =  base_url("Project-COOP/fun_sidebar_admin/viewPostion?posID=".$_POST['posID']);
    header('Location:'.$back);
  }

  public function delPosition()
  {
    $this->company_model->deletePos($_GET['posID']);
      $back =  base_url("Project-COOP/index.php/company/viewcompany?company_viewid=$_GET[company_viewid]&subname_fac=$_GET[subname_fac]COC&type_major=".$_GET['type_major']);
    header('Location:'.$back);
  }

  public function addPos()
  {
    $this->load->view('top-bar');
    $this->load->view('sidebar-admin');
    $this->load->view('admin-addPosition',$_GET);
    $this->load->view('script');
  }

  public function addPositioninfo()
  {
    $this->company_model->addPos($_POST);
    $back =  base_url("Project-COOP/index.php/company/viewcompany?company_viewid=$_POST[comID]&subname_fac=$_POST[subname_fac]COC&type_major=".$_POST['type_major']);
    header('Location:'.$back);
  }

}



?>
