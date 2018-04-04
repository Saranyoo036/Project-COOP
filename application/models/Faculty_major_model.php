<?php

class Faculty_major_model extends CI_Model
	{
    public function __construct(){
      parent::__construct();
      

    }

    public function add_faculty($facname_eng,$facname_thai,$facname_sub)
    {
      $insert = "INSERT INTO faculty(Faculty_name,Faculty_name_thai,NameFac_sub) VALUES('$facname_eng','$facname_thai','$facname_sub');";
      $this->db->query($insert);
    }

    public function add_major($majname_eng,$majname_thai,$majname_sub,$fac_id)
    {
      $insert="INSERT INTO major(Major_name,Major_name_thai,Fac_ID,NameMajor_sub) VALUES('$majname_eng','$majname_thai',$fac_id,'$majname_sub');";
      $this->db->query($insert);
    }

	}

 ?>
