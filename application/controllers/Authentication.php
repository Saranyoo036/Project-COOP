<?php
class Authentication extends CI_Controller{

	public function __construct(){
		parent::__construct();


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
						//print_r($query->result());
						$session_data= array(
							'username'=>$this->input->post('txtUsername'),
						);
						$this->session->set_userdata('logged_in',$session_data);
						$this->load->view('top-bar');
						$this->load->view('sidebar-admin');
						$this->load->view('home');
						$this->load->view('script');

						//echo base_url();

					}
					// if ($query->num_rows() == 1) {
					// 	$result= $query->result();
					// } else {
					// 	$result = false;
					// }
					//
					// if($result!=false){
						// $session_data= array(
						// 	'username'=>$this->input->post('txtUsername'),
						//
						// );
						// $this->session->set_userdata('logged_in',$session_data);
						// $this->load->view('top-bar');
						// $this->load->view('sidebar-admin');
						// $this->load->view('home');
						// $this->load->view('script');

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


}

?>
