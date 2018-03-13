<?php
class time_setting extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('time_model');

  }

  public function updatetime()
  {
    //print_r($_POST);
    if(empty($_POST['status_chk'])){
      $_POST['status_chk']="inactive";
      echo $_POST['status_chk'];
    }else{
      $_POST['status_chk']="active";
      echo $_POST['status_chk'];
    }
    $this->time_model->settime($_POST);
    $back = $back =  base_url("project-coop/index.php/time_setting/loadpage?subname_major=".$_POST['major']."&type_major=".$_POST['type']);
    header('Location:'.$back);

  }
  public function loadpage()
  {
    // $data = array(
    // 	'nameMaj' => $this->input->get('subname_major'),
    // 	'type' => $this->input->get('type_major')
    // );
    $data['data'] = $this->time_model->showdate($_GET['subname_major'],$_GET['type_major']);
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';



    if ($data['data'] == array() ) {

      $this->load->view('show_setting_view',$data);
    }
    else{

        if ($data['data'][0]['start_date_Req'] == '0000-00-00') {
          $data['data'][0]['start_date_Req'] = '';
        } 
        if ($data['data'][0]['end_date_Req'] == '0000-00-00') {
          $data['data'][0]['end_date_Req'] = '';
        }
      
        if ($data['data'][0]['start_date_choosing'] == '0000-00-00') {
          $data['data'][0]['start_date_choosing'] = '';
        }
        if ($data['data'][0]['end_date_choosing'] == '0000-00-00') {
          $data['data'][0]['end_date_choosing'] = '';
        }
        if ($data['data'][0]['start_date_Rechoosing'] == '0000-00-00') {
          $data['data'][0]['start_date_Rechoosing'] = '';
        }
        if ($data['data'][0]['end_date_Rechoosing'] == '0000-00-00') {
          $data['data'][0]['end_date_Rechoosing'] = '';
        } 
      
        $this->load->view('show_setting_view',$data);

    }

    $this->load->view('top-bar');
    $this->load->view('sidebar-admin');
   // $this->load->view('show_setting_view',$data);
    $this->load->view('script');
  }

}





 ?>
