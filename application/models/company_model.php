<?php

class company_model extends CI_Model
	{

    public function showallcompany()
    {
      $sql = "SELECT Position_name,company_position.Position_id,company.* FROM company_position,company WHERE company.company_id = company_position.company_id AND company_type = '".$_SESSION['std_type']."' AND Major_ID=".$_SESSION['stdmajorid']." AND company_position.company_id NOT IN (SELECT company_id FROM student_company WHERE STD_ID =". $_SESSION['stdid']." ) ORDER BY company_id";


      $query = $this->db->query($sql);
      $row = $query->result();
      //print_r($row);
      return $row;
    }

    public function showallcompanyedit()
    {
      $sql = "SELECT Position_name,company_position.Position_id,company.* FROM company_position,company WHERE company.company_id = company_position.company_id AND company_type = '".$_SESSION['std_type']."' AND Major_ID=".$_SESSION['stdmajorid']." AND company_position.Position_id NOT IN (SELECT Position_id FROM student_company WHERE STD_ID =". $_SESSION['stdid']." ) ORDER BY company_id";

      $query = $this->db->query($sql);
      $row = $query->result();
      print_r($sql);
      return $row;
    }

		public function numberperso($companyid)
		{
			$query = $this->db->query("SELECT ");
			$row = $query->result_array();
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
       	//echo $this->address;

       	$this->db->insert('company', $this);
     }
     public function delete($id)
     {
       $this->db->where('company_id', $id);
       $this->db->delete('company');
     }
     public function view($id,$posid)
     {
       $this->db->select('*');
       $this->db->from('company');
       $this->db->where('company_id='.$id);
       $query = $this->db->get();
       $query= $query->result_array();
			 $query2 = $this->db->query("SELECT * FROM company_position WHERE `Position_id`= '".$posid."'");
			 $row = $query2->result_array()[0];
			 $return = array('row' =>$row ,'query'=>$query );
			 //print_r($return);
       return $return;
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
