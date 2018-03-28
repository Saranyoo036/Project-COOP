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
      $result = false;
      $condition = "STD_ID ='".$data_login['username']."' AND password ='".$data_login['password']."'";
      $this->db->select('*');
      $this->db->from('student');
      $this->db->where($condition);
      $this->db->limit(1);
      $query = $this->db->get();
      $result = $query->result();
      //print_r($result);
      if ($result) {
          $std_id;
          foreach ($result as $arr ) {
             $std_id = $arr->STD_ID;
          }
          		 $_SESSION['stdid'] = $std_id;
				redirect(base_url("Project-COOP/welcome_std?std_id=".$std_id));
         
          }

      else{
        $condition = "personnelID='".$data_login['username']."' AND password='".$data_login['password']."'";
        $this->db->select('*');
        $this->db->from('personnel');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->result();
        $admin;
        foreach ($result as $arr ) {
             $position = $arr->Position;
          }
        if($position=='admin'){
          $this->logedin();
        }
        
        // $this->session->set_flashdata('error','Invalid Username or Password');
        // redirect(base_url("Project-COOP"));
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


}

?>

