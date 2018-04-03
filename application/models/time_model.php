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
      $query = $this->db->query("
        SELECT * FROM `major_setting`,`major`,`status` 
        where major_setting.major_id = major.Major_ID 
        AND major_setting.status_id = status.status_id 
        AND major.NameMajor_sub = '$major'
        AND major_setting.major_type = '$type' 
        AND (major_setting.status_id = 1 OR major_setting.status_id = 2 OR major_setting.status_id = 5)");
      $row = $query->result_array();
      
      return $row;
    }

    public function settime($status_id,$major,$type,$start,$end)
    {
      $date = date('Y-m-d H:i:s');
      $mid = $this->getmajorid($major);
      $this->db->select('*');
      $this->db->from('major_setting');
      $this->db->where("major_id = '$mid'
                        AND status_id = '$status_id'
                        AND major_type = '$type'");
    
      $query = $this->db->get();
      if ($query->result()) {
       
        $this->update($status_id,$mid,$type,$start,$end);
      }
      else{
        $this->insert($status_id,$mid,$type,$start,$end);
      }
    }

    public function update($status_id,$mid,$type,$start,$end)
    {
      $update = "UPDATE major_setting
                SET start_date = '$start' ,
                    end_date = '$end'
                WHERE major_id = $mid
                AND   major_type = '$type'
                AND   status_id = $status_id";
                //echo "<br>$update<br>";
        $this->db->query($update);
      
    }

    public function insert($status_id,$mid,$type,$start,$end)
    {
      $insert = "INSERT INTO major_setting(major_id,major_type,status_id,start_date,end_date)
                  VALUES($mid,'$type','$status_id','$start','$end')";
                 //echo "<br>$insert<br>";  
      $this->db->query($insert);
    }

		}

 ?>
