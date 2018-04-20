<?php

class coop103 extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('student_model');


  }

public function showdetail()
 {
   $this->student_model->add103form($_POST);
   redirect(base_url("Project-COOP/welcome_std?std_id=".$_SESSION['stdid']));

 }
}
 ?>
