<?php

class  News_model extends CI_Model
	{
		public function addnews($data,$filename,$date,$facid,$name)
		{
			$query = $this->db->query("SELECT * FROM personnel WHERE personnelID = $name");
			$row = $query->result_array();
			// print_r($row);

			$this->new_id = '';
			$this->Topic = $data['name'];
			$this->description = $data['about'];
			$this->start_date = $date;
			$this->file_name = $filename;
			$this->Fac_ID = $facid;
			$this->add_by = $row[0]['personnelName'].' '.$row[0]['personnelSName'];

			$this->db->insert('news', $this);
		}
		public function shownews($facid)
		{
			$query =$this->db->query("SELECT * FROM news WHERE Fac_ID = $facid ORDER BY start_date DESC" );
			$row = $query->result_array();

			return $row;
		}
		public function shownewsdetail($newsid)
		{
			$sql = "SELECT * FROM news WHERE new_id = $newsid";
			$query = $this->db->query($sql);
			$row = $query->result_array();

			return $row;
		}
		public function updatenews($data,$filename)
		{
			print_r($data['data'][0]);
			$data = array(
				'new_id' =>$data['data'][0]['new_id'],
				'Topic' =>$data['data'][0]['Topic'],
				'description' =>$data['data'][0]['description'],
				'start_date' =>$data['data'][0]['start_date'],
        'file_name' => $filename,
				'Fac_ID' =>$data['data'][0]['Fac_ID']
			);

			$this->db->replace('news', $data);

		}

}
?>
