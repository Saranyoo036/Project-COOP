<?php
class student_view_con extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('student_model');


	}

	public function change_status()
	{
		 
		$this->student_model->change_status($_GET['id'],$_GET['status']);
	}
}

?>