<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class statuspage extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
					$this->load->model('student_model');

	    }
		public function status_page()
		{
			$this->load->model('home_model');
			$checkform['checkform'] =$this->student_model->checkform($_SESSION['stdid']);
			$data['mystatus'] =  $this->student_model->mystatus($_SESSION['stdid']);
			$checkcompany['company'] = $this->student_model->checkinterncompany();
			$checktime = $this->home_model->checktimestat($data['mystatus'][0]['status'],$data['mystatus'][0]['major'],$_SESSION['std_type']);
			array_push($data['mystatus'],$checkform['checkform'],$checkcompany['company'],$checktime);

			$this->load->view('css');
			$this->load->view('top-bar-std');
			$this->load->view('std-page/rightsidebar-std');
			$this->load->view('std-page/status_page',$data);
			$this->load->view('script-std');

		}
		public function sentChoosing()
		{
			$email = $this->student_model->getteachermail($_SESSION['stdmajorid'],$_SESSION['std_type']);
			$this->sendmail_to_teacher($email[0]['email']);
			$this->student_model->sent_choosing($_GET['std_id']);
			redirect(base_url("Project-COOP/STDPage/statuspage/status_page"));
		}
		public function sendmail_to_teacher($email)
		{

			$this->load->library('email');

		//SMTP & mail configuration
			$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'sandna03@gmail.com',
			'smtp_pass' => 'kakz8654[]',
			'mailtype'  => 'html',
			'charset'   => 'utf-8'
			);
			$this->email->initialize($config);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");

			//Email content

			$htmlContent = '<p>Dear Lecturer, </p>';
			$htmlContent .= "<p>&emsp;&emsp;&emsp;&ensp;Please approve the student's application form as soon as possible.</p>";
			$htmlContent .= "<p>Yours sincerely,</p>";
			$htmlContent .= "<p>Curriculum and Cooperative Education Section</p>";

			$this->email->to($email);
			$this->email->from('ilchaose_kakz@live.com','PSU Coop Application');
			$this->email->subject('Your student status had changed');
			$this->email->message($htmlContent);

			//Send email
			$this->email->send();

		}

}
?>
