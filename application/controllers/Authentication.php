<?php
class Authentication extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Authentication_model');
 		$this->load->model('home_model');



	}

	public function authen_login(){

			$data_login = array(
				'username' => $this->input->post('txtUsername'),
				'password' => $this->input->post('txtPassword')
			);
			$result = false;
			$condition = "Username ='".$data_login['username']."' AND Password ='".$data_login['password']."'";
			$this->db->select('*');
			$this->db->from('authentication');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->result()) {
						//print_r($query->result_array());
						//echo $query->result_array()[0]['auth_type_id'];
						switch ($query->result_array()[0]['auth_type_id']) {
							case '1':
								$this->adminlogedin();
								break;
							case '2':
								$this->stdlogedin();
								break;
							case '0':
								break;
							default:
								
								break;

						}
						//$this->logedin();

						//echo base_url();
					}

			else{
				$this->session->set_flashdata('error','Invalid Username or Password');
				redirect(base_url("Project-COOP"));
			}
	}
		public function log_out()
		{
			$sess_array = array('username'=>'');
			$this->session->unset_userdata('logged_in',$sess_array);
			$data['message_display'] = 'Successfully Logout';
			redirect(base_url("Project-COOP"));
		}
		public function adminlogedin()
		{
			$session_data= array(
				'username'=>$this->input->post('txtUsername'),
			);
			$data['fac'] =  $this->home_model->showfac();
			$this->session->set_userdata('logged_in',$session_data);
			$this->load->view('top-bar');
			$this->load->view('sidebar-admin');
			$this->load->view('home',$data);
			$this->load->view('script');
		}

		public function stdlogedin()
		{
			echo 'kuy';
		}


}

?>
