<?php
class Authentication extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}

	public function authen_login(){

			$data_login = array(
				'username' => $this->input->post('txtUsername'),
				'password' => $this->input->post('txtPassword')
			);
			$condition = "personnelID='".$data_login['username']."' AND password='".$data_login['password']."'";
			$this->db->select('*');
			$this->db->from('personnel');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			$result = $query->result();
			$position;

			if ($result) {
				foreach ($result as $arr ) {
					 	$position = $arr->Position;
						echo $position;
					}
					switch ($position) { //check position and redirect
						case 'admin':
							$this->logedin();
							break;
							case 'lecture':
							$this->login_teacher();
							break;

						default:

							break;
					}

					}

			else{
					$this->db->select('*');
					$this->db->from('student');
					$this->db->where("STD_ID='".$data_login['username']."' AND password='".$data_login['password']."'");
					$this->db->limit(1);
					$query = $this->db->get();
					$result = $query->result_array();
					if($result){
						$_SESSION['stdid'] = $result[0]['STD_ID'];
						$_SESSION['std_name'] =  $result[0]['std_name'];
						$_SESSION['std_sname'] =  $result[0]['std_sname'];

						$querystatus = $this->db->query("SELECT status FROM student_status WHERE STD_ID = $_SESSION[stdid]");
						$row = $querystatus->result_array();

						$_SESSION['std_status'] = $row[0]['status'];
						$_SESSION['stdmajorid'] = $result[0]['major_id'];
						$_SESSION['std_type'] = $result[0]['std_type'];

						$this->checktime();


						//echo $_SESSION['std_status'];
						// print_r($row);
						 //print_r($result);
						 redirect(base_url("Project-COOP/welcome_std?std_id=".$_SESSION['stdid']));
					}else{
						$this->session->set_flashdata('error','Invalid Username or Password');
						redirect(base_url("Project-COOP"));
					}
				}
			}

		public function log_out()
		{
			$sess_array = array('username'=>'');
			$this->session->unset_userdata('logged_in',$sess_array);
			$data['message_display'] = 'Successfully Logout';
			redirect(base_url("Project-COOP"));
		}
		public function logedin()
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
		public function login_teacher()
{
	$session_data= array(
		'username'=>$this->input->post('txtUsername'),
	);
	$this->session->set_userdata('logged_in',$session_data);
	$this->load->view('top-bar-teacher');
	$this->load->view('teacher-page/rightsidebar-teacher');
	$this->load->view('teacher-page/home');
	$this->load->view('script');
}

	public function checktime()
	{
		$query = $this->db->query("SELECT*FROM major_setting WHERE major_id =".$_SESSION['stdmajorid']." AND status_id = 2 AND major_type ='".$_SESSION['std_type']."'");
		$row = $query->result_array();
		$date = date_create(date('Y-m-d'));
		$datedb = date_create('2018-04-28');
		$diff=date_diff($datedb,$date);
		echo  $difday = $diff->format("%R%a days"); // date_diff get value from 2nd property - 1st property
	// sample format -> print_r($diff->format("%R%y year %R%h hours %R%i min %R%s sec"));
		if($difday[0]=='+'){
			//echo ' this day';
			//$_SESSION['std_status'] = 'Request';
		}
		else{
		 	//echo 'cannot go to select company';
		 	$_SESSION['std_status'] = 'Request';
		}
	}


}

?>
