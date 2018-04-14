<?php
		$show='';
			$this->db->select('*');
			$this->db->from('student,student_company,company,student_form_103,student_status');
			$this->db->where("student.STD_ID = student_company.STD_ID
									AND student.STD_ID = student_status.STD_ID
									AND student.STD_ID = student_form_103.std_form_103_id
									AND company.company_id = student_company.company_id");
			$Res = $this->db->get();
			if($Res->result()){
				$show.='<table class="table" border = "1">
						<tr>
							<th>ลำดับที่</th>
							<th>ชื่อผู้ติดต่อ</th>
							<th>สถานที่ขอฝึกงาน</th>
							<th>ที่อยู่</th>
							<th>แขวง/ตำบล</th>
							<th>เขต/อำเภอ</th>
							<th>จังหวัด</th>
							<th>Post</th>
							<th>โทรศัพท์</th>
							<th>โทรสาร</th>
							<th>รหัสนักศึกษา</th>
							<th>ชื่อ</th>
							<th>สกุล</th>
							<th>ตำแหน่งงาน</th>
							<th>สาขา</th>
							<th>โทรศัพท์</th>
							<th>ที่ น.ศ. ส่ง</th>
							<th>สภานะ</th>
							<th>ชื่อผู้ปกครอง</th>
							<th>นามสกุลผู้ปกครอง</th>
							<th>ที่อยู่</th>
							<th>ตำบล</th>
							<th>ตำบล</th>
							<th>อำเภอ</th>
							<th>จังหวัด</th>
							<th>รหัสไปรณีย์</th>
						</tr><tr><td>555555<td></tr></table>';

			}
			
		header("Content-Type:application/xls");
		header("Content-Disposition: attachment; filename=hello.xls");
		echo $show;
	// $sql = "SELECT * FROM `student`,`student_company`,`company`,`student_form_103`,`student_status`
	// 					WHERE student.STD_ID = student_company.STD_ID
	// 					AND student.STD_ID = student_status.STD_ID
	// 					AND student.STD_ID = student_form_103.STD_ID
	// 					AND company.company_id = student_company.company_id";
?>