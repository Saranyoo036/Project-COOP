<?php

class  News_model extends CI_Model
	{	
		public function __construct(){
      		parent::__construct();
      		date_default_timezone_set("Asia/Bangkok");

    	}

    	public function insert($data)
    	{
    		$date = date('Y-m-d H:i:s');
    		$this->new_id ='';
        	$this->Topic = $data['name'];
        	$this->description = $data['about'];
        	$this->start_date = $date;
        	$this->db->insert('news', $this);
    	}






}
?>