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
 
    public function showdate($fac,$type)
    {
      
      $query = $this->db->query("
        SELECT * FROM `major_setting`,`major`,`status`,`faculty`
        where major_setting.major_id = major.Major_ID 
        AND major_setting.status_id = status.status_id 
        AND major.Fac_ID = faculty.Fac_ID
        AND faculty.NameFac_sub = '$fac'
        AND major_setting.major_type = '$type' 
        AND (major_setting.status_id = 1 OR major_setting.status_id = 2 OR major_setting.status_id = 5)
        GROUP BY major_setting.status_id");
      $row = $query->result_array();
      
      return $row;
    }
    public function settime($status_id,$fac,$type,$start,$end)
    {
      $date = date('Y-m-d H:i:s');
     
      $this->db->select('*');
      $this->db->from('major_setting,faculty,major');
      $this->db->where("major.Fac_ID = faculty.Fac_ID
                        AND major_setting.major_id = major.Major_ID
                        AND faculty.NameFac_sub = '$fac'
                        AND status_id = '$status_id'
                        AND major_type = '$type'
                        GROUP BY major_setting.status_id");
    
      $query = $this->db->get();
      if ($query->result()) {
       
        $this->update($status_id,$fac,$type,$start,$end);
      }
      else{
        $this->insert($status_id,$fac,$type,$start,$end);
      }
    }
 
    public function update($status_id,$fac,$type,$start,$end)
    {
      $query = "SELECT Major_ID from major,faculty where major.Fac_ID = faculty.Fac_ID AND faculty.Fac_ID = (SELECT Fac_ID from faculty where NameFac_sub = '$fac')";
      $res = $this->db->query($query);
      foreach ($res->result() as $key ) {
        $update = "UPDATE major_setting
                SET start_date = '$start' ,
                    end_date = '$end'
                WHERE major_id = $key->Major_ID
                AND   major_type = '$type'
                AND   status_id = $status_id";
                $this->db->query($update);
      }
      
    }
 
    public function insert($status_id,$fac,$type,$start,$end)
    {
      $query = "SELECT Major_ID from major,faculty where major.Fac_ID = faculty.Fac_ID AND faculty.Fac_ID = (SELECT Fac_ID from faculty where NameFac_sub = '$fac')";
      $res =$this->db->query($query);
       foreach ($res->result() as $key ) {
        $insert = "INSERT INTO major_setting(major_id,major_type,status_id,start_date,end_date)
                  VALUES($key->Major_ID,'$type','$status_id','$start','$end')";
         $this->db->query($insert);
       }
      
                   
     
    }
 
    }
 
 ?>
 