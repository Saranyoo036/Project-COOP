<?php

class company_model extends CI_Model
	{

    public function showallcompany()
    {
      $sql = "SELECT Position_name,company_position.Position_id,company.* FROM company_position,company WHERE company.company_id = company_position.company_id AND company_type = '".$_SESSION['std_type']."' AND Fac_ID=(SELECT Fac_ID from major where Major_ID = ".$_SESSION['stdmajorid'].")  AND company_position.company_id NOT IN (SELECT company_id FROM student_company WHERE STD_ID =". $_SESSION['stdid']." ) ORDER BY company_id";


      $query = $this->db->query($sql);
      $row = $query->result();
      //print_r($row);
      return $row;
    }

    public function showallcompanyedit()
    {
      $sql = "SELECT Position_name,company_position.Position_id,company.* FROM company_position,company WHERE company.company_id = company_position.company_id AND company_type = '".$_SESSION['std_type']."' AND Fac_ID=(SELECT Fac_ID from major where Major_ID = ".$_SESSION['stdmajorid'].") AND company_position.Position_id NOT IN (SELECT Position_id FROM student_company WHERE STD_ID =". $_SESSION['stdid']." AND status_student_company_id = 1) ORDER BY company_id";

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

       	$major = $data['fac'];
      	$query2 = $this->db->query("SELECT * FROM faculty WHERE `NameFac_sub`= '".$major."'");
      	$row = $query2->result_array()[0];
       	$this->company_id = '';
       	$this->Fac_ID = $row['Fac_ID'];
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

     public function viewcom($id)
     {
       $this->db->select('*');
       $this->db->from('company');
       $this->db->where('company_id='.$id);
       $query = $this->db->get();
       $query= $query->result_array();

       //print_r($return);
       return $query;
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
			 print_r($data);

			 $this->db->where('company_id', $data['comID']);
     	 $this->db->update('company', array('address' => $data['address']
		 	 ,'provice'=>$data['Provice']
	 		 ,'contract'=>','.$data['email']
		 	 ,'Tel'=>$data['Tel']
		 	 ,'company_contract_name'=>$data['contract_name']
       ,'company_contract_sname'=>$data['contract_sname']
		 	 ,'company_type'=>$data['type']
		 	 ,'company_name'=>$data['name']));
     	 return true;
		 }

     public function viewPos($id)
     {
        $this->db->select('*');
       $this->db->from('company_position');
       $this->db->where('Position_id='.$id);
       $query = $this->db->get();
       $query= $query->result_array();

       //print_r($return);
       return $query;
     }

     public function updatePosition($data)
     {
       $this->db->where('Position_id',$data['posID']);
       $this->db->update('company_position',array('Position_skill'=>$data['skill']
                                                ,'Position_desc'=>$data['desc']
                                                ,'Position_num'=>$data['num']
                                                ,'Position_name'=>$data['name']
                          ));
       return true;
     }

     public function deletePos($id)
     {
       $sql = "DELETE FROM company_position WHERE Position_id = $id";
       $this->db->query($sql);
     }

     public function addPos($data)
     {
       $insert=array('company_id'=>$data['comID'],'Position_name'=>$data['name'],'Position_skill'=>$data['skill'],'Position_desc'=>$data['desc'],'Position_num'=>$data['num']);
       $this->db->insert('company_position',$insert);
     }


}
?>
