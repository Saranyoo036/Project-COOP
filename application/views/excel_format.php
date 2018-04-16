<?php
		$show='';
		$condition = "student.STD_ID = student_company.STD_ID
									AND student.STD_ID = student_status.STD_ID
									AND student.STD_ID = student_form_103.std_form_103_id
									AND company.company_id = student_company.company_id
									AND student.major_id = major.Major_ID
									AND student.std_type = '$type'
									AND major.major_id = (SELECT Major_ID from major WHERE NameMajor_sub = '$nameMaj')";

			$this->db->select('*');
			$this->db->from('student,student_company,company,student_form_103,student_status,major');
			$this->db->where($condition);

			$Res = $this->db->get();
			if($Res->result()){
				$show.='<table class="table" border = "1">
						<tr>
							<td>ลำดับที่</td>
							<td>ชื่อผู้ติดต่อ</td>
							<td>สถานที่ขอฝึกงาน</td>
							<td>ที่อยู่</td>
							<td>จังหวัด</td>
							<td>โทรศัพท์</td>
							<td>รหัสนักศึกษา</td>
							<td>ชื่อ</td>
							<td>สกุล</td>
							<td>ตำแหน่งงาน</td>
							<td>สาขา</td>
							<td>โทรศัพท์</td>
							<td>ที่ น.ศ. ส่ง</td>
							<td>สภานะ</td>
							<td>ชื่อผู้ปกครอง</td>
							<td>นามสกุลผู้ปกครอง</td>
							<td>ที่อยู่</td>
						</tr>';
				$sql = "SELECT * from student_form_103,student_company,student_status,student,company_position,company,major
						WHERE student.STD_ID = student_form_103.std_form_103_id
						AND student.STD_ID = student_status.STD_ID
						AND student.STD_ID = student_company.STD_ID
						AND student.major_id = major.Major_ID
						AND company.company_id = company_position.company_id
						AND student_company.status_student_company_id = 1
						AND student.std_type = '$type'
						AND major.major_id = (SELECT Major_ID from major WHERE NameMajor_sub = '$nameMaj')";
						$query=$this->db->query($sql);
						$num = 1;
						foreach ($query->result() as $key) {
						$show.='<tr>
								<td>'.$num.'</td>
								<td>'.$key->company_contract_name.'</td>
								<td>'.$key->company_name.'</td>
								<td>'.$key->address.'</td>
								<td>'.$key->provice.'</td>
								<td>'.$key->Tel.'</td>
								<td>'.$key->STD_ID.'</td>
								<td>'.$key->std_name.'</td>
								<td>'.$key->std_sname.'</td>
								<td>'.$key->Position_name.'</td>
								<td>'.$key->Major_name.'</td>
								<td>'.$key->std_tel.'</td>
								<td></td>
								<td></td>
								<td>'.$key->Parent_name.'</td>
								<td>'.$key->Parent_sname.'</td>
								<td>'.$key->Parent_Address.'</td>
								</tr>';
						$num++;
						}
				$show.='</table>';

			}
		header("Content-Disposition: attachment; filename=$nameMaj-$type.xls");	
		header("Content-Type: application/vnd.ms-excel");
		
		echo $show;
	
?>