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
    $data['data'] = $this->student_model->matching($major);

    for ($i=0; $i <count($data['data']) ; $i++) {

      $majorandcompanyname['name'] = $this->student_model->changeidposandcompanytoname($data['data'][$i]['Position_id'],$data['data'][$i]['company_id']);
      print_r($majorandcompanyname['name']);
      $data['data'][$i]['company_id'] = $majorandcompanyname['name'][0]['company_name'];
      $data['data'][$i]['Position_id'] = $majorandcompanyname['name'][0]['Position_name'];
    }
    $data_array =  array (
    $data_array[] = array ("Oliver", "Peter", "Paul"),
                    array ("Marlene", "Mica", "Lina")
            );
    $xls = new Excel_XML;
    $xls->addArray ($data['data']);
    $xls->generateXML ( "output_name" );
  }
}

?>
