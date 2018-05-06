<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class matching extends CI_Controller {
  public function __construct(){
		parent::__construct();
		$this->load->model('student_model');
    $this->load->helper('php-excel');
	}
  public function matching($major)
  {
    echo $major;
    
    $data_array =  array (
    $data_array[] = array ("Oliver", "Peter", "Paul"),
                    array ("Marlene", "Mica", "Lina")
            );
    $xls = new Excel_XML;
    $xls->addArray ($data_array);
    $xls->generateXML ( "output_name" );
  }
}

?>
