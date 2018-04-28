<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function authen(){
		
			
		$this->load->view('firstpage');
	}

	public function test()
	{
		$coop = (object) array(
			'organization_name'=>'a',
			'address'=>'a',
			'moo'=>'a',
			'soi'=>'a',
			'street'=>'b',
			'sub_dristrict'=>'asd',
			'district'=>'asd',
			'province'=>'asd',
			'zip_code'=>'asd',
			'tel'=>'asd',
			'fax'=>'asd',
			'website'=>'asd',
			'name'=>'asd',
			'surname'=>'asd',
			'position'=>'asd',
			'phone'=>'asd',
			'email'=>'asd',
			'job_position'=>'asd',
			'skill'=>'asd',
			'number_of_student'=>'asd',
			'job_description'=>'asd',
			'responsibilities'=>'asd',
			'candidate_requirements'=>'asd',
			'allowance'=>'asd',
			'transportation'=>'asd',
			'accommodation'=>'asd',
			'meal'=>'asd',
			'other'=>'asd');
		$data =array('coop0202'=>$coop);
		$this->load->view('coop0202PDF',$data);

	}

	}
