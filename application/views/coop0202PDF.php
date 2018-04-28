<?php
	// $url1=$_SERVER['REQUEST_URI'];
	// header("Refresh: 5; URL=$url1");

	 //require('fpdf.php');
	 //define('FPDF_FONTPATH','font/');
	$this->load->library('fpdf');
	class PDF extends Fpdf
	{
		//Override คำสั่ง (เมธอด) Footer
		function Footer()	{
			//เส้น
			$this->setLineWidth(1);
			$this->SetY( -22 );
			$this->setX(24);
			$this->Cell(168,0, iconv( 'UTF-8','cp874' , '') ,1,0,'L');

			//ล่างซ้าย
			$this->SetY( -18 );
			$this->SetFont('AngsanaNew','I',12);
			$this->setX(25);
			$this->Cell(0,0, iconv( 'UTF-8','cp874' , 'งานหลักสูตรและสหกิจศึกษา มหาวิทยาลัยสงขลานครินทร์  วิทยาเขตภูเก็ต') ,0,0,'L');
			$this->Ln(6);
			$this->setX(25);
			$this->Cell(0,0, iconv( 'UTF-8','cp874' , 'โทรศัพท์ 0-7627-6177-8   โทรสาร 0-7627-6179 email: masnee.v@phuket.psu.ac.th') ,0,0,'L');
		}
	}

	$organization_name = $coop0202->organization_name;
	$address = $coop0202->address;
	$moo = $coop0202->moo;
	$soi = $coop0202->soi;
	$street = $coop0202->street;
	$sub_dristrict = $coop0202->sub_dristrict;
	$district = $coop0202->district;
	$province = $coop0202->province;
	$zip_code = $coop0202->zip_code;
	$tel = $coop0202->tel;
	$fax = $coop0202->fax;
	$website = $coop0202->website;

	$name = $coop0202->name;
	$surname = $coop0202->surname;
	$position = $coop0202->position;
	$phone = $coop0202->phone;
	$email = $coop0202->email;
	$jog_position = $coop0202->job_position;
	$skill = $coop0202->skill;
	$number_of_student = $coop0202->number_of_student;
	$job_description = $coop0202->job_description;
	$responsibilities = $coop0202->responsibilities;
	$candidate_requirements = $coop0202->candidate_requirements;
 
	$allowance = $coop0202->allowance;
	$transportation = $coop0202->transportation;
	$accommodation = $coop0202->accommodation;
	$meal = $coop0202->meal;
	$other = $coop0202->other;
 	
 	$pdf= new PDF('P', 'mm', 'A4');

	// add font
	$pdf->AddFont('AngsanaNew', '', 'angsa.php');
	$pdf->AddFont('AngsanaNew', 'B', 'angsab.php');
	$pdf->AddFont('AngsanaNew', 'I', 'angsai.php');
	$pdf->AddFont('AngsanaNew', 'BI', 'angsaz.php');
	// end add font

	$pdf->SetLeftMargin( 25 );
	$pdf->SetRightMargin( 16 );
	$pdf->AddPage();

	//$pdf->Image(url('img/fpdf/coop0202/logo_psu.jpg'), 13, 8, 12, 25, 'jpg', '');
	$pdf->SetFont('AngsanaNew', 'B', 17);
	$pdf->text(35, 30, iconv('UTF-8', 'cp874', 'แบบเสนองาน (Cooperation Education Proposal)'));
	$pdf->SetXY(165, 21);
	$pdf->Cell(28, 9, 'COOP 02-02', 1, 1, 'C');

	$pdf->setLineWidth(0.5);
	$pdf->SetXY(13, 26);
	$pdf->Cell(0, 8, '', 'B', 1);
	$pdf->setLineWidth(0.1);

	$pdf->SetFont('AngsanaNew', 'B', 16);
	$pdf->Cell(0, 14, iconv('UTF-8', 'cp874', 'ข้อมูลหน่วยงานที่จะไปฝึกปฏิบัติงาน (Organization Information)'), 0, 1, 'C');

	$pdf->SetFont('AngsanaNew', '', 14);
	$pdf->Cell(19, 4, iconv('UTF-8', 'cp874', 'ชื่อหน่วยงาน'), 0, 0);

$pdf->AddFont('AngsanaNew','');
//if($source_lang[0] != "en" && $source_lang[0] != "th") {
if(0) {
	$pdf->SetFont('AngsanaNew', '', 8);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp1252', $organization_name), 'B', 1, 'L');
	$pdf->SetFont('angsa', '', 14);
} else {
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $organization_name), 'B', 1, 'L');
}

	//$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $organization_name), 'B', 1, 'L');
	$pdf->Cell(0, 2, 'Organization\'s name', 0, 1);

	$pdf->SetY(57);
	$pdf->Cell(9, 4, iconv('UTF-8', 'cp874', 'เลขที่'), 0, 0);
	$pdf->Cell(26, 4, iconv('UTF-8', 'cp874', $address), 'B', 0, 'L');
	$pdf->Cell(9, 4, iconv('UTF-8', 'cp874', 'หมู่ที่'), 0, 0);
	$pdf->Cell(11, 4, iconv('UTF-8', 'cp874', $moo), 'B', 0, 'L');
	$pdf->Cell(8, 4, iconv('UTF-8', 'cp874', 'ซอย'), 0, 0);
	$pdf->Cell(53, 4, iconv('UTF-8', 'cp874', $soi), 'B', 0, 'L');
	$pdf->Cell(9, 4, iconv('UTF-8', 'cp874', 'ถนน'), 0, 0);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $street), 'B', 1, 'L');
	$pdf->Cell(35, 2, 'Address', 0, 0);
	$pdf->Cell(21, 2, 'Moo', 0, 0);
	$pdf->Cell(60, 2, 'Soi', 0, 0);
	$pdf->Cell(50, 2, 'Street', 0, 1);

	$pdf->SetY(66);
	$pdf->Cell(17, 4, iconv('UTF-8', 'cp874', 'แขวง/ตำบล'), 0, 0);
	$pdf->Cell(44, 4, iconv('UTF-8', 'cp874', $sub_dristrict), 'B', 0, 'L');
	$pdf->Cell(15, 4, iconv('UTF-8', 'cp874', 'เขต/อำเภอ'), 0, 0);
	$pdf->Cell(38, 4, iconv('UTF-8', 'cp874', $district), 'B', 0, 'L');
	$pdf->Cell(11, 4, iconv('UTF-8', 'cp874', 'จังหวัด'), 0, 0);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $province), 'B', 1, 'L');
	$pdf->Cell(61, 2, 'Sub Dristrict', 0, 0);
	$pdf->Cell(53, 2, 'District', 0, 0);
	$pdf->Cell(0, 2, 'Province', 0, 1);

	$pdf->SetY(75);
	$pdf->Cell(20, 4, iconv('UTF-8', 'cp874', 'รหัสไปรษณีย์'), 0, 0);
	$pdf->Cell(30, 4, iconv('UTF-8', 'cp874', $zip_code), 'B', 0, 'L');
	$pdf->Cell(14, 4, iconv('UTF-8', 'cp874', 'โทรศัพท์'), 0, 0);
	$pdf->Cell(46, 4, iconv('UTF-8', 'cp874', $tel), 'B', 0, 'L');
	$pdf->Cell(19, 4, iconv('UTF-8', 'cp874', 'เบอร์โทรสาร'), 0, 0);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $fax), 'B', 1, 'L');
	$pdf->Cell(51, 2, 'Zip code', 0, 0);
	$pdf->Cell(59, 2, 'Tel.', 0, 0);
	$pdf->Cell(0, 2, 'Fax', 0, 1);

	$pdf->SetY(84);
	$pdf->Cell(21, 4, iconv('UTF-8', 'cp874', 'เว็ปไซด์บริษัท'), 0, 0);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $website), 'B', 1, 'L');
	$pdf->Cell(0, 2, 'Website', 0, 1);

	$pdf->setLineWidth(0.6);
	$pdf->Cell(0, 4, '', 'B', 1);
	$pdf->setLineWidth(0.1);

	$pdf->SetY(98);
	$pdf->SetFont('AngsanaNew', 'B', 15);
	$pdf->Cell(94, 4, iconv('UTF-8', 'cp874', 'ชื่อผู้ติดต่อประสานงาน (กรณีจะต้องทำหนังสือถึง) (Coordinator)'), 'B', 1, 'L');

	$pdf->SetY(107);
	$pdf->SetFont('AngsanaNew', '', 14);
	$pdf->Cell(5, 4, iconv('UTF-8', 'cp874', 'ชื่อ'), 0, 0);
	$pdf->Cell(47, 4, iconv('UTF-8', 'cp874', $name), 'B', 0, 'L');
	$pdf->Cell(13, 4, iconv('UTF-8', 'cp874', 'นามสกุล'), 0, 0);
	$pdf->Cell(46, 4, iconv('UTF-8', 'cp874', $surname), 'B', 0, 'L');
	$pdf->Cell(13, 4, iconv('UTF-8', 'cp874', 'ตำแหน่ง'), 0, 0);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $position), 'B', 1, 'L');
	$pdf->Cell(52, 2, 'Name', 0, 0);
	$pdf->Cell(59, 2, 'Surname', 0, 0);
	$pdf->Cell(0, 2, 'Position', 0, 1);

	$pdf->SetY(115);
	$pdf->Cell(13, 4, iconv('UTF-8', 'cp874', 'โทรศัพท์'), 0, 0);
	$pdf->Cell(53, 4, iconv('UTF-8', 'cp874', $phone), 'B', 0, 'L');
	$pdf->Cell(11, 4, iconv('UTF-8', 'cp874', 'E-mail'), 0, 0);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $email), 'B', 1, 'L');
	$pdf->Cell(0, 2, 'Phone', 0, 1);

	$pdf->SetY(124);
	$pdf->Cell(42, 4, iconv('UTF-8', 'cp874', 'ตำแหน่งงานที่รับ(Job Position)'), 0, 0);
	$pdf->Cell(50, 4, iconv('UTF-8', 'cp874', $jog_position), 'B', 0, 'L');
	$pdf->Cell(10, 4, iconv('UTF-8', 'cp874', 'ทักษะ'), 0, 0);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $skill), 'B', 1, 'L');
	$pdf->Cell(100, 2, 'Skill', 0, 1, 'R');

	$pdf->SetY(130);
	$pdf->Cell(40, 4, iconv('UTF-8', 'cp874', 'จำนวน (Number of students)'), 0, 0);
	$pdf->Cell(27, 4, iconv('UTF-8', 'cp874', $number_of_student), 'B', 0, 'L');
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', 'คน (Person)'), 0, 1);

	$pdf->SetY(136);
	$pdf->Cell(41, 4, iconv('UTF-8', 'cp874', 'ลักษณะงาน (Job Description)'), 0, 1);
	$pdf->Cell(0, 6, iconv('UTF-8', 'cp874', ''), 'B', 1);
	$pdf->Cell(0, 6, iconv('UTF-8', 'cp874', ''), 'B', 1);
	$pdf->Cell(0, 6, iconv('UTF-8', 'cp874', ''), 'B', 1);

	$pdf->SetY(141);
	$pdf->MultiCell(0, 6, iconv('UTF-8', 'cp874', $job_description));

	$pdf->SetY(161);
	$pdf->Cell(41, 4, iconv('UTF-8', 'cp874', 'ความรับผิดชอบ (Responsibilities)'), 0, 1);
	$pdf->Cell(0, 6, iconv('UTF-8', 'cp874', ''), 'B', 1);
	$pdf->Cell(0, 6, iconv('UTF-8', 'cp874', ''), 'B', 1);
	$pdf->Cell(0, 6, iconv('UTF-8', 'cp874', ''), 'B', 1);

	$pdf->SetY(166);
	$pdf->MultiCell(0, 6, iconv('UTF-8', 'cp874', $responsibilities));

	$pdf->SetY(186);
	$pdf->Cell(41, 4, iconv('UTF-8', 'cp874', 'คุณสมบัติพิเศษ (Candidate Requirement)'), 0, 1);
	$pdf->Cell(0, 6, iconv('UTF-8', 'cp874', ''), 'B', 1);
	$pdf->Cell(0, 6, iconv('UTF-8', 'cp874', ''), 'B', 1);

	$pdf->SetY(191);
	$pdf->MultiCell(0, 6, iconv('UTF-8', 'cp874', $candidate_requirements));

	$pdf->SetY(203);
	$pdf->SetFont('AngsanaNew', 'B', 14);
	$pdf->Cell(0, 10, iconv('UTF-8', 'cp874', 'สวัสดีการสำหรับนักศึกษา (Benefit)'), 0, 1, 'L');
	
	$pdf->Cell(3, 3, '', 0, 0);
	$pdf->Cell(3, 3, '', 1, 0);
	$pdf->SetFont('AngsanaNew', '', 14);
	$pdf->Cell(0, 3, iconv('UTF-8', 'cp874', ' ไม่มี (None)'), 0, 1);

	$pdf->Cell(0, 4, '', 0, 1);
	$pdf->Cell(3, 3, '', 0, 0);
	$pdf->Cell(3, 3, '', 1, 0);
	$pdf->SetFont('AngsanaNew', '', 14);
	$pdf->Cell(33, 3, iconv('UTF-8', 'cp874', ' มี (Yes) ได้แก่'), 0, 0);

	$pdf->Cell(34, 3, iconv('UTF-8', 'cp874', 'ค่าตอบแทน (Allowance)'), 0, 0);
	$pdf->Cell(28, 4, iconv('UTF-8', 'cp874', $allowance), 'B', 0, 'L');
	$pdf->Cell(43, 3, iconv('UTF-8', 'cp874', '         รถรับ/ส่ง (Transportation)'), 0, 0);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $transportation), 'B', 1, 'L');

	$pdf->SetY(226);
	$pdf->Cell(39, 4, '', 0, 0);
	$pdf->Cell(33, 3, iconv('UTF-8', 'cp874', 'ที่พัก (Accommodation)'), 0, 0);
	$pdf->Cell(29, 4, iconv('UTF-8', 'cp874', $accommodation), 'B', 0, 'L');
	$pdf->Cell(28, 3, iconv('UTF-8', 'cp874', '         อาหาร (Meal)'), 0, 0);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $meal), 'B', 1, 'L');

	$pdf->SetY(232);
	$pdf->Cell(39, 4, '', 0, 0);
	$pdf->Cell(18, 3, iconv('UTF-8', 'cp874', 'อื่นๆ (Other)'), 0, 0);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $other), 'B', 1, 'L');


	//$pdf->Image(url('img/fpdf/coop0202/circle.jpg'), 60, 220, 3, 3, 'jpg', '');
	//$pdf->Image(url('img/fpdf/coop0202/circle.jpg'), 60, 226, 3, 3, 'jpg', '');
	//$pdf->Image(url('img/fpdf/coop0202/circle.jpg'), 60, 232, 3, 3, 'jpg', '');

	//$pdf->Image(url('img/fpdf/coop0202/circle.jpg'), 130, 220, 3, 3, 'jpg', '');
	//$pdf->Image(url('img/fpdf/coop0202/circle.jpg'), 130, 226, 3, 3, 'jpg', '');

	$pdf->SetXY(100, 250);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', '(ลงชื่อ)________________________________(ผุ้ให้ข้อมูล)'), 0, 1, 'L');
	$pdf->SetXY(100, 253);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', 'Signature                                                              Information'), 0, 1, 'L');
	$pdf->SetXY(100, 258);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', '     ตำแหน่ง______________________________'), 0, 1, 'L');
	$pdf->SetXY(100, 261);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', '     Position'), 0, 1, 'L');
	$pdf->SetXY(100, 266);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', '                  วันที่______________________'), 0, 1, 'L');
	$pdf->SetXY(100, 269);
	$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', '                   Date'), 0, 1);

	//check benefit
	//None
	if(($allowance == "") && ($transportation == "") && ($accommodation == "") && ($meal == "") && ($other == ""))
	{
		$pdf->SetXY(27.4, 212);
		$pdf->Cell(0, 4, "X", 0, 1, 'L');
	}
	else
	{
		//Yes
		$pdf->SetXY(27.4, 219);
		$pdf->Cell(0, 4, "X", 0, 1, 'L');
		
		$pdf->SetFont('AngsanaNew', '', 10);

		//Allowance
		if($allowance != "")
		{
			$pdf->SetXY(59.6, 219.2);
			$pdf->Cell(0, 4, "X", 0, 1, 'L');
		}
		
		//Transportation
		if($transportation != "")
		{
			$pdf->SetXY(129.6, 219.2);
			$pdf->Cell(0, 4, "X", 0, 1, 'L');
		}
		
		//Accommodation
		if($accommodation != "")
		{
			$pdf->SetXY(59.6, 225.2);
			$pdf->Cell(0, 4, "X", 0, 1, 'L');
		}
		
		//Meal
		if($meal != "")
		{
			$pdf->SetXY(129.6, 225.2);
			$pdf->Cell(0, 4, "X", 0, 1, 'L');
		}
		
		//Other
		if($other != "")
		{
			$pdf->SetXY(59.6, 231.2);
			$pdf->Cell(0, 4, "X", 0, 1, 'L');
		}
	}
	//end check benefit

	// I is show on brownser D is download
	$pdf->Output('asdasd.pdf' , 'I'); // I, D
	exit;
?>