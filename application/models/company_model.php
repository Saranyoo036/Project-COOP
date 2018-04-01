<?php

class company_model extends CI_Model
	{

    public function showallcompany()
    {
      $query = $this->db->query('SELECT * FROM company');
      $row = $query->result();
      //print_r($row);
      return $row;
    }

		 public function addnewcompany($data)
     {

       	$major = $data['major'];
      	$query2 = $this->db->query("SELECT * FROM major WHERE `NameMajor_sub`= '".$major."'");
      	$row = $query2->result_array()[0];
       	$this->company_id = '';
       	$this->Major_ID = $row['Major_ID'];
       	$this->address = $data['num']." ".$data['street']." ".$data['tumbol']." ".$data['aumpure']." ".$data['district']." ".$data['postcode'];
       	$this->provice = $data['district'];
       	$this->contract = $data['fax'].','.$data['mail'];
       	$this->Tel = $data['tel'];
       	$this->Note = $data['about'];
       	$this->company_type = $data['group4'];
       	$this->company_name = $data['name'];
        $this->company_contract_name = $data['company_con_name'];
        $this->company_contract_sname = $data['company_con_sname'];
       	//echo $this->address;

       	$this->db->insert('company', $this);
     }
     public function delete($id)
     {
       $this->db->where('company_id', $id);
       $this->db->delete('company');
     }
     public function view($id)
     {
       $this->db->select('*');
       $this->db->from('company');
       $this->db->where('company_id='.$id);
       $query = $this->db->get();
       $query= $query->result_array();
       return $query;
     }
		 public function update($data)
		 {
			 // echo '<pre>';
			 // print_r($data);
			 // echo '</pre>';

			 $this->db->where('company_id', $data['view_id']);
     	 $this->db->update('company', array('address' => $data['num']." ".$data['street']." ".$data['tumbol']." ".$data['aumpure']." ".$data['district']." ".$data['postcode']
		 	 ,'provice'=>$data['district']
	 		 ,'contract'=>$data['fax'].','.$data['mail']
		 	 ,'Tel'=>$data['tel']
		 	 ,'Note'=>$data['about']
		 	 ,'company_type'=>$data['group4']
		 	 ,'company_name'=>$data['name']));
     	 return true;
		 }


}
?>
