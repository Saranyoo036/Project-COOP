<?php
class authentication extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Authentication_model');

	}

	
	public function authen_login(){
			$data_login = array(
				'username' => $this->input->post('txtUsername'),
				'password' => $this->input->post('txtPassword')
			);
			$result = $this->Authentication_model->Auth($data_login);
			if($result==TRUE){
				$result= $this->Authentication_model->read_user_information($this->input->post('txtUsername'));
					if($result!=false){
						$session_data= array(
							'username'=>$result[0]->user_name,

						);
						$this->session->set_userdata('logged_in',$session_data);
						$this->load->view('firstpage');
					}
			}else{
				$data_login =  array('error_message'=>'Invalid Username or Password');
				$this->load->view('index',$data_login);
			}
	}
		public function log_out()
		{
			$sess_array = array('username'=>'');
			$this->session->unset_userdata('logged_in',$sess_array);
			$data['message_display'] = 'Successfully Logout';
			$this->load->view('index',$data);
		}
	
}

?>