<?php

class homepage extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('home_model');

  	}
    public function showmajor($facid)
    {
      $data = $this->home_model->showmajor($facid);
			echo '<option value="">Please select major</option>';
      foreach ($data as $maj ) {
        echo "<option value=$maj->NameMajor_sub> $maj->Major_name</option>";
      }
    }
    public function showfac()
    {
      $this->home_model->showfac();
    }



}


 ?>
