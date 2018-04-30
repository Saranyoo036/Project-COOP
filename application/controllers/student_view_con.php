<?php
class student_view_con extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('student_model');


	}

	public function change_status()
	{

		$this->student_model->change_status($_GET['id'],$_GET['status']);
		$email = $this->student_model->requeststudentemail($_GET['id']);
		//print_r($email);
		$email = $email[0]['std_email'];
		//echo $email;
		$this->sendmail($email,$_GET['status']);
	}

	public function sendmail($email,$status)
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
		$htmlContent = '<h1>Email from PSU COOP system via SMTP </h1>';
		$htmlContent .= "<p>System admin has change your status to $status</p>";
		// $htmlContent .= "your status is $status";

		$this->email->to($email);
		$this->email->from('ilchaose_kakz@live.com','PSU Coop Application');
		$this->email->subject('Your status had changed');
		$this->email->message($htmlContent);

		//Send email
		$this->email->send();

	}
}

?>
