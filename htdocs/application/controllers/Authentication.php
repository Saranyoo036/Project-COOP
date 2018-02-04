<?php
class Authentication extends CI_Controller{

	public function __construct(){
		parent::__construct();
		//$this->load->model('Authentication_model');

	}

	/**public function show()
	{
		
		$rs = $this->db->query('select count(auth_id) from authentication');
		
		
		foreach ($rs->result_array() as $rm) {
			echo $rm['count(auth_id)'];
		}
		
	}**/
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
			if($query->num_rows() == 1) {
				$result= true;
			}else{
				$result=false;
			}
			if($result==TRUE){
					$condition = "Username =" . "'" .$this->input->post('txtUsername'). "'";
					$this->db->select('*');
					$this->db->from('authentication');
					$this->db->where($condition);
					$this->db->limit(1);
					$query = $this->db->get();

					if ($query->num_rows() == 1) {
						$result= $query->result();
					} else {
						$result = false;
					}
				
					if($result!=false){
						$session_data= array(
							'username'=>$this->input->post('txtUsername'),

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