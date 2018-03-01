<?php

class time_model extends CI_Model
	{
    public function __construct(){
      parent::__construct();
      date_default_timezone_set("Asia/Bangkok");

    }

    public function getmajorid($major)
    {
      $query = $this->db->query("SELECT Major_ID FROM major WHERE `NameMajor_sub`= '".$major."'");
      $row = $query->result_array()[0];
      if ($row) {
        $majorid = $row['Major_ID'];
      }
      return $majorid;
    }

    public function showdate($major,$type)
    {
      $mid = $this->getmajorid($major);
      $query = $this->db->query("SELECT * FROM major_setting WHERE `major_id`= '".$mid."'");
      $row = $query->result_array();
      return $row;
    }

    public function settime($data)
    {
      $date = date('Y-m-d H:i:s');
      $mid = $this->getmajorid($data['major']);
      //echo $mid;
      //print_r($data);
      // echo $date.'<br>';
      // echo $majorid.'<br>';

      $this->db->select('*');
      $this->db->from('major_setting');
      $this->db->where('major_ID = '.$mid);
      $query = $this->db->get();
      if ($query->result()) {

        $this->update($data,$date,$mid);
      }
      else{
        //echo $mid;
        $this->insert($data,$date,$mid);
      }
    }

    public function update($data,$date,$mid)
    {
      //print_r($data);
      $type = array('0'=>'Request','1'=>'Choosing');

      $this->db->where('setting_id', 3);
      $this->db->update('major_setting', array('start_date' => $data['requestfrom']
      ,'end_date'=>$data['requestto']
      
      ));
      return true;
    }

    public function insert($data,$date,$majorid)
    {
    //  print_r($data);
      //echo $date;
      echo $majorid;
      $from = array('0' => $data['requestfrom'],'1'=> $data['choosingfrom'] );
      $to = array('0' => $data['requestto'] ,'1'=>$data['choosingto'] );
      $type = array('0'=>'Request','1'=>'Choosing');

      for ($i=0; $i <count($from) ; $i++) {
        $this->setting_id = '';
        $this->major_ID = $majorid;
        $this->SETTING_TYPE = $type[$i];
        $this->start_date = $from[$i];
        $this->end_date = $to[$i];
        $this->create_at = $date;
        $this->update_at = '';
        $this->type =$data['type'];
        $this->db->insert('major_setting', $this);

      }
    }

		}

 ?>
