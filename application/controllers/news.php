<?php

class news extends CI_Controller {

  public function __construct(){
    parent::__construct();

    //$this->load->helper(array('form', 'url'));
    date_default_timezone_set("Asia/Bangkok");
      $this->load->model('News_model');
    }

    public function toaddform($facid)
    {
      $fac['fac'] = $facid;
      $this->load->view('top-bar');
      $this->load->view('sidebar-admin');
      $this->load->view('add_news_view',$fac);
      $this->load->view('script');
    }
    public function addnews($facid)
    {
      //echo getcwd().'/uploaded_file/';
      // print_r($_POST);
      // print_r($_FILES);
      $filename;
      $date = date('Y-m-d H:i:s');
      if (!empty($_FILES)) {
        $filename = $_FILES['file']['name'];
        $tempFile = $_FILES['file']['tmp_name'];
        $targetPath = getcwd().'/uploaded_file/';
        $targetFile =  $targetPath. $_FILES['file']['name'];

        move_uploaded_file($tempFile,$targetFile);
    }
       $this->News_model->addnews($_POST,$filename,$date,$facid,$_SESSION['logged_in']['username']);
       $this->session->set_flashdata('compelte', 'ระบบได้ทำการอัปโหลดไฟล์ของท่านเสร็จเรียบร้อยแล้ว');
       redirect(base_url("Project-COOP/Fun_sidebar_admin/home"));
    }
    public function edit()
    {
      $data['data'] =  $this->News_model->shownewsdetail($_POST['newsid']);

      $targetPath = getcwd().'/uploaded_file/';
      $changefrom = $data['data'][0]['file_name'];
      $changeto = $_FILES['edit']['name'];
      $tempFile = $_FILES['edit']['tmp_name'];
      $targetFile =  $targetPath.$changeto;

      unlink($targetPath.$changefrom);
      move_uploaded_file($tempFile,$targetFile);

      $this->News_model->updatenews($data,$changeto);
      redirect(base_url("Project-COOP/Fun_sidebar_admin/home"));

    }
    public function editnewsform($newsid)
    {
      $data['data'] = $this->News_model->shownewsdetail($newsid);
      $this->load->view('top-bar');
      $this->load->view('sidebar-admin');
      $this->load->view('edit_news_form',$data);
      $this->load->view('script');

    }
    public function deletenews($newsid)
    {
      $this->db->where('new_id', $newsid);
      $this->db->delete('news');
    }
  }
  ?>
