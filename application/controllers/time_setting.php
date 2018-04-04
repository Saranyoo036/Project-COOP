<?php
class time_setting extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('time_model');

  }

  public function updatetime()
  {
    print_r($_POST);
    if(($_POST['requestfrom']!=NULL)||($_POST['requestto']!=NULL)){
      
     $this->time_model->settime(1,$_POST['major'],$_POST['type'],$_POST['requestfrom'],$_POST['requestto']);
    }
    if(($_POST['choosingfrom']!=NULL)||($_POST['choosingto']!=NULL)){
      
     $this->time_model->settime(2,$_POST['major'],$_POST['type'],$_POST['choosingfrom'],$_POST['choosingto']);
    }
    if(($_POST['rechoosingfrom']!=NULL)||($_POST['rechoosingto']!=NULL)){
     
     $this->time_model->settime(5,$_POST['major'],$_POST['type'],$_POST['rechoosingfrom'],$_POST['rechoosingto']);
    }
    $back = base_url("project-coop/index.php/time_setting/loadpage?subname_major=".$_POST['major']."&type_major=".$_POST['type']);
    header('Location:'.$back);

  }
  public function loadpage()
  {
    $data['data'] = $this->time_model->showdate($_GET['subname_major'],$_GET['type_major']);
   

     $this->load->view('top-bar');
     $this->load->view('sidebar-admin');
     $this->load->view('show_setting_view',$data);
     $this->load->view('script');
  }

}





 ?>
  