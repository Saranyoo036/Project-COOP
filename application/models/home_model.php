<?php

class  home_model extends CI_Model
	{

    public function showmajor($facid)
    {
      $query =$this->db->query('SELECT * FROM major WHERE Fac_ID ='.$facid);
      if ($query->result()) {
        //print_r($query->result());
        return $query->result();
      }
    }
    public function showfac()
    {
      $query =$this->db->query('SELECT * FROM faculty');

      if ($query->result()) {
        //print_r($query->result());
        return $query->result();
      }
    }
}
?>
