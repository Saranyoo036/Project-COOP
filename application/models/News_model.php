<?php

class  News_model extends CI_Model
	{
		public function addnews($data,$filename,$date)
		{
			//print_r($data);
			//print_r($_FILES);
			$this->new_id = '';
			$this->Topic = $data['name'];
			$this->description = $data['about'];
			$this->start_date = $date;
			$this->file_name = $filename;
			//echo $this->address;

			$this->db->insert('news', $this);
		}

		public function shownews()
		{
			$query =$this->db->query('SELECT * FROM news' );
			$row = $query->result_array();
			
			return $row;
		}






}
?>
