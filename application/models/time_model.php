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
      $query = $this->db->query("SELECT * FROM major_setting WHERE `SETTING_TYPE` ='".$type."'AND `major_id`= '".$mid."'");
      $row = $query->result_array();
      return $row;
    }

    public function settime($data)
    {
      $date = date('Y-m-d H:i:s');
      $mid = $this->getmajorid($data['major']);
      //echo $mid;
      print_r($data);
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

      $where = "SETTING_TYPE ='".$data['type']."' AND major_ID = '".$mid."'";

      $this->db->where($where);
      $this->db->update('major_setting', array('start_date_Req' => $data['requestfrom']
      ,'end_date_Req'=>$data['requestto']
      ,'start_date_choosing'=>$data['choosingto'] 
      ,'end_date_choosing'=>$data['choosingto'] 
      
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
       
        $this->major_ID = $majorid;
        $this->SETTING_TYPE = $data['type'];
        $this->start_date_choosing = $data['choosingfrom'];
        $this->end_date_choosing = $data['choosingfrom'];
        $this->create_at = $date;
        $this->update_at = '';
        $this->setting_id = '';
        $this->start_date_Req =$data['requestfrom'];
        $this->end_date_Req = $data['requestto'];
        $this->db->insert('major_setting', $this);

      
    }

		}

 ?>
