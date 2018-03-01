<?php
class time_setting extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('time_model');

  }

  public function updatetime()
  {
    //print_r($_POST);
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

    if ($data['data'] == array() ) {

      $this->load->view('show_setting_view',$data);
    }
    else{
      for ($i=0; $i < 2; $i++) {
        if ($data['data'][$i]['start_date'] == '0000-00-00') {
          $data['data'][$i]['start_date'] = '';
        }
        if ($data['data'][$i]['end_date'] == '0000-00-00') {
          $data['data'][$i]['end_date'] = '';
        }
      }
        $this->load->view('show_setting_view',$data);

    }

    $this->load->view('top-bar');
    $this->load->view('sidebar-admin');
    //$this->load->view('show_setting_view');
    $this->load->view('script');
  }

}





 ?>
