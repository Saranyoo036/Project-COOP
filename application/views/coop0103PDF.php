<?php
// auto refresh
// $url1=$_SERVER['REQUEST_URI'];
// header("Refresh: 3; URL=$url1");

// require('fpdf.php');
// define('FPDF_FONTPATH','font/');
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
		$this->SetFont('angsa','I',12);
		$this->setX(25);
		$this->Cell(0,0, iconv( 'UTF-8','cp874' , 'งานหลักสูตรและสหกิจศึกษา มหาวิทยาลัยสงขลานครินทร์  วิทยาเขตภูเก็ต') ,0,0,'L');
		$this->Ln(6);
		$this->setX(25);
		$this->Cell(0,0, iconv( 'UTF-8','cp874' , 'โทรศัพท์ 0-7627-6177-8   โทรสาร 0-7627-6179') ,0,0,'L');

		//ล่างขวา
		$this->SetFont('angsa','',12);
		$this->SetY(-18);
		$this->Cell(170,0, iconv( 'UTF-8','cp874' , 'หน้าที่ '.$this->PageNo().' /  tp' ),0,0,'R');
	}
}

function FilterShowNumber($number) {
	return $number == 0 ? "" : (string)$number;
}
function FilterShowDate($date) {
	$date = (string)$date;
	return $date == "0000-00-00" ? "" : $date;
}
function FilterShowProvince($province) {
	return $province == "-" ? "" : $province;
}

$pdf= new PDF('P', 'mm', 'A4');

//add font
$pdf->AddFont('angsa', '', 'angsa.php');
$pdf->AddFont('angsa', 'B', 'angsab.php');
$pdf->AddFont('angsa', 'I', 'angsai.php');
$pdf->AddFont('angsa', 'BI', 'angsaz.php');
$pdf->AddFont('cordia', '', 'cordia.php');
$pdf->AddFont('cordia', 'B', 'cordiab.php');
$pdf->AddFont('cordia', 'I', 'cordiai.php');
$pdf->AddFont('cordia', 'BI', 'cordiaz.php');
//end add font

// page amount
$pdf->AliasNbPages( 'tp' );

//กำหนดคุณสมบัติของเอกสาร pdf
// $pdf->SetAuthor( 'select2web.com' );
// $pdf->SetCreator( 'fpdf version 1.6' );
// $pdf->SetDisplayMode( 'fullpage' , 'single' );
// $pdf->SetKeywords( 'php mysql jquery' );
// $pdf->SetSubject( 'this document for testing.' );
// $pdf->SetTitle( 'Showme' );

// ************************************** page 1
// variables
$faculty_id = $coop0103->faculty_id;
$lang = $coop0103->lang;
if($lang == 0)
{
	$name_and_surname_1 = $coop0103->name_and_surname_thai_1;
	$major_year_1 = $coop0103->major_year_1.' '.$coop0103->year_1;
	$advisor_name_1 = $coop0103->advisor_name_1;
	$faculty_1 = $coop0103->faculty_1;
}
else
{
	$name_and_surname_1 = $coop0103->name_and_surname_eng_1;
	$major_year_1 = $coop0103->major_year_eng_1.' '.$coop0103->year_1;
	$advisor_name_1 = $coop0103->advisor_name_eng_1;
	$faculty_1 = $coop0103->faculty_eng_1;
}

$student_id_1 = $coop0103->student_id_1;
$phone_number_1 = $coop0103->phone_number_1;
$semester_gpa_1 = FilterShowNumber($coop0103->semester_gpa_1);
$cumulative_gpa_1 = FilterShowNumber($coop0103->cumulative_gpa_1);
$email_1 = $coop0103->email_1;
$position_1_1 = "asdasd";  //$coop0202->job_position;
$oraganization_name_1_1 = "dfsdfsdf";//$coop0202->organization_name;

function DateThai($strDate, $lang) {
	$strYear = date("Y",strtotime($strDate));
	$strMonth= date("n",strtotime($strDate));
	$strDay= date("j",strtotime($strDate));
	$strHour= date("H",strtotime($strDate));
	$strMinute= date("i",strtotime($strDate));
	$strSeconds= date("s",strtotime($strDate));
	// thai format
	if($lang == 0) {
		$strMonthCut  = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$strMonthThai =$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	} else {
		$strMonthCut = Array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		$strMonthEng =$strMonthCut[$strMonth];
		return "$strMonthEng $strDay, $strYear";
	}

	//return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
}

$working_from_1 = $coop0103->working_from_1;
$working_until_1 = $coop0103->working_until_1;
//$period_of_working_1_1 = floor((abs(strtotime($working_until_1) - strtotime($working_from_1))/(60*60*24)))." วัน";
$period_of_working_1_1 = DateThai($working_from_1, $lang)." - ".DateThai($working_until_1, $lang);
//$period_of_working_1_1 = "";
//$period_of_working_1_1 = $coop0103->period_of_working_1_1;

// $position_1_2 = $coop0103->position_1_2;
// $oraganization_name_1_2 = $coop0103->oraganization_name_1_2;
// $period_of_working_1_2 = $coop0103->period_of_working_1_2;

if(isset($coop0202_2))
{
	$position_1_2 = $coop0202_2->job_position;
	$oraganization_name_1_2 = $coop0202_2->organization_name;
	$period_of_working_1_2 = $period_of_working_1_1;
}
else
{
	$position_1_2 = "";
	$oraganization_name_1_2 = "";
	$period_of_working_1_2 = "";
}


$course_1_1 = $coop0103->course_1_1;
$course_1_2 = $coop0103->course_1_2;
$course_duration_1_1 = $coop0103->course_duration_1_1;
$course_duration_1_2 = $coop0103->course_duration_1_2;
$course_gpa_1_1 = $coop0103->course_gpa_1_1;
$course_gpa_1_2 = $coop0103->course_gpa_1_2;


$identification_card_no_1 = $coop0103->identification_card_no_1;
$issued_at_1 = $coop0103->issued_at_1;
$issued_date_1 = $coop0103->issued_date_1;
$expiry_date_1 = $coop0103->expiry_date_1;
$race_1 = $coop0103->race_1;
$nationality_1 = $coop0103->nationality_1;
$religion_1 = $coop0103->religion_1;

$date_of_birth_1 = $coop0103->date_of_birth_1;
$place_of_birth_1 = $coop0103->place_of_birth_1;

$date = new DateTime($date_of_birth_1);
$now  = new DateTime();
$interval = $now->diff($date);

$age_1 = $interval->y;
$sex_1 = $coop0103->sex_1;
if($sex_1 == 'm')
	$sex_1 = "ชาย";
else
	$sex_1 = "หญิง";
$height_1 = $coop0103->height_1;
$weight_1 = $coop0103->weight_1;
$chronical_disease_1 = $coop0103->chronical_disease_1;

// end variables

$pdf->setMargins(15.4, 15.2, 10);
$pdf->AddPage();

$pdf->SetFont('angsa', 'I', 15);
$pdf->setXY(170, 9);
$pdf->Cell(31, 9, 'COOP 01 - 03', 1, 1, 'C');

$pdf->SetFont('angsa', 'B', 18);
$pdf->Cell(0, 5, iconv('UTF-8', 'cp874', 'ใบสมัครงานสหกิจศึกษาและการฝึกงาน'), 0, 1, 'C');

$pdf->SetFont('angsa', 'B', 10);
$pdf->Cell(0, 3, iconv('UTF-8', 'cp874', 'ปรับปรุงครั้งที่ 7 วันที่ 11 พ.ย.57'), 0, 1, 'R');

$pdf->SetFont('angsa', 'B', 18);
$pdf->Cell(0, 5, 'APPLICATION FOR COORPERATIVE AND INTERNSHIP', 0, 1, 'C');

$pdf->SetFont('angsa', 'B', 16);
$pdf->Cell(0, 12, iconv('UTF-8', 'cp874', 'มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ต'), 0, 1, 'C');
$pdf->Cell(0, 5, 'Prince of Songkla University, Phuket Campus', 0, 1, 'C');

$shift_y = 12;
$header_h = 24 + $shift_y;

$pdf->Cell(0, 3, '', 0, 1);
$pdf->SetFont('angsa', 'B', 14);
$pdf->Cell(34, $header_h, '', 1, 0);
$pdf->Cell(112, $header_h, iconv('UTF-8', 'cp874', 'ข้อมูลส่วนตัวนักศึกษา (STUDENT PERSONAL DATA)'), 'TRB', 0, 'C');
$pdf->Cell(38, $header_h, '','TRB', 0, 'C');

$pdf->setXY(168, 52);
$pdf->Cell(26, $header_h-2, iconv('UTF-8', 'cp874', ''), 1, 1, 'C');

$photo_frame_h = $shift_y/2 + 2.5;
$pdf->SetFont('angsa', '', 10);
$pdf->setXY(170, 45 + $photo_frame_h);
$pdf->Cell(22, 24, iconv('UTF-8', 'cp874', 'รูปถ่าย'), 0, 1, 'C');
$pdf->setXY(170, 49 + $photo_frame_h);
$pdf->Cell(22, 24, 'Recent Photo', 0, 1, 'C');
$pdf->setXY(170, 53 + $photo_frame_h);
$pdf->Cell(22, 24, 'of', 0, 1, 'C');

$pdf->SetXY(15.4, 75);
$pdf->Cell(184, 46 + $shift_y, '', 'RLB', 1, 'C');

$pdf->SetFont('angsa', '', 14);
$pdf->SetXY(17, 80 + $shift_y);
$pdf->Cell(47, 4, iconv('UTF-8', 'cp874', 'ชื่อ-นามสกุล  ไทย  (นาย/นางสาว)'), 0, 0, 'L');
$pdf->Cell(85, 4, iconv('UTF-8', 'cp874', $name_and_surname_1), 'B', 0, 'L');
$pdf->Cell(20, 4, iconv('UTF-8', 'cp874', 'รหัสนักศึกษา'), 0, 0, 'L');
$pdf->Cell(25, 4, iconv('UTF-8', 'cp874', $student_id_1), 'B', 1, 'L');
$pdf->SetX(17);
$pdf->Cell(132, 2, 'Name & Surname English (Mr./Miss)', 0, 0, 'L');
$pdf->Cell(45, 2, 'Std.ID', 0, 1, 'L');

$pdf->SetXY(17, 91 + $shift_y);
$pdf->Cell(28, 4, iconv('UTF-8', 'cp874', 'สาขาวิชา - ชั้นปีที่'), 0, 0, 'L');
$pdf->Cell(77, 4, iconv('UTF-8', 'cp874', $major_year_1), 'B', 0, 'L');
$pdf->Cell(8, 4, iconv('UTF-8', 'cp874', 'คณะ'), 0, 0, 'L');
$pdf->Cell(64, 4, iconv('UTF-8', 'cp874', $faculty_1), 'B', 1, 'L');
$pdf->SetX(17);
$pdf->Cell(105, 2 , 'Major - Year', 0, 0, 'L');
$pdf->Cell(90, 2 , 'Faculty', 0, 1 ,'L');

$pdf->SetXY(17, 102 + $shift_y);
$pdf->Cell(28, 4, iconv('UTF-8', 'cp874', 'ชื่ออาจารย์ที่ปรึกษา'), 0, 0, 'L');
$pdf->Cell(100, 4, iconv('UTF-8', 'cp874', $advisor_name_1), 'B', 0, 'L');
$pdf->Cell(20, 4, iconv('UTF-8', 'cp874', 'เบอร์โทรศัพท์'), 0, 0, 'L');
$pdf->Cell(29, 4, iconv('UTF-8', 'cp874', $phone_number_1), 'B', 1, 'L');
$pdf->SetX(17);
$pdf->Cell(130, 2, 'Name of academic advisor', 0, 0, 'L');
$pdf->Cell(50, 2, 'Phone', 0, 1, 'L');

$pdf->SetXY(17, 113 + $shift_y);
$pdf->Cell(45, 4, iconv('UTF-8', 'cp874', 'เกรดเฉลี่ยภาคการศึกษาที่ผ่านมา'), 0, 0, 'L');
$pdf->Cell(50, 4, $semester_gpa_1, 'B', 0, 'L');
$pdf->Cell(20, 4, iconv('UTF-8', 'cp874', 'เกรดเฉลี่ยรวม'), 0, 0, 'L');
$pdf->Cell(62, 4, $cumulative_gpa_1, 'B', 1, 'L');
$pdf->SetX(17);
$pdf->Cell(95, 2, 'Semester GPA', 0, 0, 'L');
$pdf->Cell(90, 2, 'Cumulative GPA', 0, 1, 'L');

//---[Job Position]---------------------------
$height_b = 5;
$header_w = 50;

$pdf->AddFont('angsa','');
$pdf->setY(121 + $shift_y);
$pdf->SetFont('angsa', 'B', 14);
$pdf->Cell(184, 11, iconv('UTF-8', 'cp874', 'ตำแหน่งงานที่สมัคร( Job Position)'), 'LRB', 1, 'C');

$pdf->Cell($header_w , 6, iconv('UTF-8', 'cp874', 'บริษัท'), 'L', 0, 'C');
$pdf->Cell(184-$header_w , $height_b, iconv('UTF-8', 'cp874', ""), 'LR', 1, 'L');
if(0) {
	$pdf->SetFont('angsa', '', 8);
	$pdf->Text($header_w + 18, 138.5 + $shift_y, iconv('UTF-8', 'cp1252', $oraganization_name_1_1));
} else {
	$pdf->SetFont('angsa', '', 14);
	$pdf->Text($header_w + 18, 138.5 + $shift_y, iconv('UTF-8', 'cp874', $oraganization_name_1_1));
}
$pdf->SetFont('angsa', 'B', 14);
$pdf->Cell($header_w , $height_b, iconv('UTF-8', 'cp874', 'Organization\'s name'), 'LB', 0, 'C');
$pdf->Cell(184-$header_w , $height_b, iconv('UTF-8', 'cp874', ""), 'LRB', 1, 'L');

$pdf->Cell($header_w , 6, iconv('UTF-8', 'cp874', 'สมัครงานตำแหน่ง'), 'L', 0, 'C');
$pdf->SetFont('angsa', '', 14);
$pdf->Cell(184-$header_w , $height_b, iconv('UTF-8', 'cp874', ""), 'LR', 1, 'L');
$pdf->Text($header_w + 18, 148.5 + $shift_y, iconv('UTF-8', 'cp874', $position_1_1));
$pdf->SetFont('angsa', 'B', 14);
$pdf->Cell($header_w , $height_b, iconv('UTF-8', 'cp874', 'Position'), 'LB', 0, 'C');
$pdf->Cell(184-$header_w , $height_b, iconv('UTF-8', 'cp874', ""), 'LRB', 1, 'L');

$pdf->Cell($header_w , 6, iconv('UTF-8', 'cp874', 'ระยะเวลาปฏิบัติงาน'), 'L', 0, 'C');
$pdf->Cell(184-$header_w , 6, iconv('UTF-8', 'cp874', ""), 'LR', 1, 'L');
$pdf->Cell($header_w , $height_b, iconv('UTF-8', 'cp874', 'Period of working'), 'LB', 0, 'C');
$pdf->SetFont('angsa', '', 14);
$pdf->Text($header_w + 18, 159 + $shift_y, iconv('UTF-8', 'cp874', $period_of_working_1_1));
$pdf->Cell(184-$header_w , $height_b, iconv('UTF-8', 'cp874', ""), 'LRB', 1, 'L');

$pdf->Cell(184, $shift_y - 8, "", "LR", 1, 'C');

//---------------------------------------------
$pdf->SetFont('angsa', '', 14);

$pdf->Cell(184, 8, '',  'LRB', 1);
$pdf->Cell(184, 35, '',  'LRB', 1);
$pdf->Cell(184, 35, '',  'LRB', 1);
$pdf->Cell(184, 14, '',  'LRB', 1);
$bottom_shift_y = $shift_y - 4;

$pdf->SetXY(17, 183 + $bottom_shift_y);
$pdf->Cell(40, 4, iconv('UTF-8', 'cp874', 'บัตรประจำตัวประชาชนเลขที่'), 0, 0, 'L');
$pdf->Cell(70, 4, $identification_card_no_1, 'B', 0, 'l');
$pdf->Cell(15, 4, iconv('UTF-8', 'cp874', 'ออกให้ ณ'), 0, 0, 'L');
$pdf->Cell(50, 4, iconv('UTF-8', 'cp874', $issued_at_1), 'B', 1, '');
$pdf->SetX(17);
$pdf->Cell(110, 2, 'Identification card no.', 0, 0, 'L');
$pdf->Cell(60, 2, 'Issued at', 0, 1, 'L');

$pdf->SetXY(17, 194 + $bottom_shift_y);
$pdf->Cell(13, 4, iconv('UTF-8', 'cp874', 'เมื่อวันที่'), 0, 0, 'L');
$pdf->Cell(69, 4, iconv('UTF-8', 'cp874', DateThai($issued_date_1, $lang)), 'B', 0, 'L');
$pdf->Cell(20, 4, iconv('UTF-8', 'cp874', 'หมดอายุวันที่'), 0, 0, 'L');
$pdf->Cell(73, 4, iconv('UTF-8', 'cp874', DateThai($expiry_date_1, $lang)), 'B', 1, 'L');
$pdf->SetX(17);
$pdf->Cell(82, 2, 'Issued date', 0, 0, 'L');
$pdf->Cell(95, 2, 'Expiry date', 0, 1, 'L');

$pdf->SetXY(17, 205 + $bottom_shift_y);
$pdf->Cell(12, 4, iconv('UTF-8', 'cp874', 'เชื้อชาติ'), 0, 0, 'L');
$pdf->Cell(44, 4, iconv('UTF-8', 'cp874', $race_1), 'B', 0, 'L');
$pdf->Cell(12, 4, iconv('UTF-8', 'cp874', 'สัญชาติ'), 0, 0, 'L');
$pdf->Cell(40, 4, iconv('UTF-8', 'cp874', $nationality_1), 'B', 0, 'L');
$pdf->Cell(10, 4, iconv('UTF-8', 'cp874', 'ศาสนา'), 0, 0, 'L');
$pdf->Cell(57, 4, iconv('UTF-8', 'cp874', $religion_1), 'B', 1, 'L');
$pdf->SetX(17);
$pdf->Cell(56, 2, 'Race', 0, 0, 'L');
$pdf->Cell(52, 2, 'Nationality', 0, 0, 'L');
$pdf->Cell(62, 2, 'Religion', 0, 1, 'L');

$pdf->SetXY(17, 218 + $bottom_shift_y);
$pdf->Cell(20.5, 4, iconv('UTF-8', 'cp874', 'วันเดือนปีเกิด'), 0, 0, 'L');
$pdf->Cell(39.5, 4, iconv('UTF-8', 'cp874', DateThai($date_of_birth_1, $lang)), 'B', 0, 'L');
$pdf->Cell(16, 4, iconv('UTF-8', 'cp874', 'สถานที่เกิด'), 0, 0, 'L');
$pdf->Cell(83, 4, iconv('UTF-8', 'cp874', $place_of_birth_1), 'B', 0, 'L');
$pdf->Cell(7, 4, iconv('UTF-8', 'cp874', 'อายุ'), 0, 0, 'L');
$pdf->Cell(5, 4, iconv('UTF-8', 'cp874', FilterShowNumber($age_1)), 'B', 0, 'L');
$pdf->Cell(20, 4, iconv('UTF-8', 'cp874', 'ปี'), 0, 1, 'L');
$pdf->SetX(17);
$pdf->Cell(60, 2, 'Date of birth', 0, 0, 'L');
$pdf->Cell(99, 2, 'Place of birth', 0, 0, 'L');
$pdf->Cell(12, 2, 'Age', 0, 0, 'L');
$pdf->Cell(20, 2, 'Year', 0, 1, 'L');

$pdf->SetXY(17, 228 + $bottom_shift_y);
$pdf->Cell(7, 4, iconv('UTF-8', 'cp874', 'เพศ'), 0, 0, 'L');
$pdf->Cell(40, 4, iconv('UTF-8', 'cp874', $sex_1), 'B', 0, 'L');
$pdf->Cell(11, 4, iconv('UTF-8', 'cp874', 'ส่วนสูง'), 0, 0, 'L');
$pdf->Cell(49, 4, iconv('UTF-8', 'cp874', FilterShowNumber($height_1)), 'B', 0, 'L');
$pdf->Cell(5, 4, iconv('UTF-8', 'cp874', 'ซม.'), 0, 0, 'L');
$pdf->Cell(12, 4, iconv('UTF-8', 'cp874', ' น้ำหนัก'), 0, 0, 'L');
$pdf->Cell(45, 4, iconv('UTF-8', 'cp874', FilterShowNumber($weight_1)), 'B', 0, 'L');
$pdf->Cell(20, 4, iconv('UTF-8', 'cp874', 'กก.'), 0, 1, 'L');
$pdf->SetX(17);
$pdf->Cell(47, 2, 'Sex', 0, 0, 'L');
$pdf->Cell(66, 2, 'Height', 0, 0, 'L');
$pdf->Cell(56, 2, 'Weight', 0, 0, 'L');
$pdf->Cell(20, 2, 'Kg.', 0, 1, 'L');

$pdf->SetXY(17, 238 + $bottom_shift_y);
$pdf->Cell(40, 4, iconv('UTF-8', 'cp874', 'โรคเรื้อรัง โรคประจำตัว ระบุ'), 0, 0, 'L');
$pdf->Cell(135, 4, iconv('UTF-8', 'cp874', $chronical_disease_1), 'B', 1, 'L');

$pdf->SetX(17);
$pdf->Cell(20, 2, 'Chronical disease: specify', 0, 1, 'L');
// ************************************** end page 1

// ************************************** page 2
$pdf->AddPage();

// variables
$address_this_term_2 = $coop0103->address_this_term_2;
$tel_2_1 = $coop0103->tel_2_1;
$moblie_2_1 = $coop0103->moblie_2_1;
$fax_2_1 = $coop0103->fax_2_1;
$email_2 = $coop0103->email_2;

$permanent_address_2 = $coop0103->permanent_address_2;
$tel_2_2 = $coop0103->tel_2_2;
$moblie_2_2 = $coop0103->moblie_2_2;
$fax_2_2 = $coop0103->fax_2_2;

$name_emergency_2 = $coop0103->name_emergency_2;
$relation_emergency_2 = $coop0103->relation_emergency_2;
$occupation_emergency_2 = $coop0103->occupation_emergency_2;
$place_of_work_emergency_2 = $coop0103->place_of_work_emergency_2;
$address_emergency_2 = $coop0103->address_emergency_2;
$tel_emergency_2 = $coop0103->tel_emergency_2;
$fax_emergency_2 = $coop0103->fax_emergency_2;
$email_emergency_2 = $coop0103->email_emergency_2;

$father_name_2 = $coop0103->father_name_2;
$age_father_2 = $coop0103->age_father_2;
$occupation_father_2 = $coop0103->occupation_father_2;
$address_father_2 = $coop0103->address_father_2;
$moo_father_2 = $coop0103->moo_father_2;
$soi_father_2 = $coop0103->soi_father_2;
$sub_district_father_2 = $coop0103->sub_district_father_2;
$district_father_2 = $coop0103->district_father_2;
$province_father_2 = $coop0103->province_father_2;
$zip_cord_father_2 = $coop0103->zip_cord_father_2;
$tel_father_2 = $coop0103->tel_father_2;
$fax_father_2 = $coop0103->fax_father_2;
$email_father_2 = $coop0103->email_father_2;

$mother_name_2 = $coop0103->mother_name_2;
$age_mother_2 = $coop0103->age_mother_2;
$occupation_mother_2 = $coop0103->occupation_mother_2;
$address_mother_2 = $coop0103->address_mother_2;
$moo_mother_2 = $coop0103->moo_mother_2;
$soi_mother_2 = $coop0103->soi_mother_2;
$sub_district_mother_2 = $coop0103->sub_district_mother_2;
$district_mother_2 = $coop0103->district_mother_2;
$province_mother_2 = $coop0103->province_mother_2;
$zip_cord_mother_2 = $coop0103->zip_cord_mother_2;
$tel_mother_2 = $coop0103->tel_mother_2;
$fax_fmother_2 = $coop0103->fax_mother_2;
$email_mother_2 = $coop0103->email_mother_2;

$no_of_relatives_2 = $coop0103->no_of_relatives_2;
$you_are_the_2 = $coop0103->you_are_the_2;

$no_relatives_2_1 = 1;
$name_and_surname_relatives_2_1 = $coop0103->name_relatives_2_1;
$age_relatives_2_1 = $coop0103->age_relatives_2_1;
$occupation_relatives_2_1 = $coop0103->occupation_relatives_2_1;
$position_relatives_2_1 = $coop0103->position_relatives_2_1;
$address_relatives_2_1 = $coop0103->address_relatives_2_1;

$no_relatives_2_2 = 2;
$name_and_surname_relatives_2_2 = $coop0103->name_relatives_2_2;
$age_relatives_2_2 = $coop0103->age_relatives_2_2;
$occupation_relatives_2_2 = $coop0103->occupation_relatives_2_2;
$position_relatives_2_2 = $coop0103->position_relatives_2_2;
$address_relatives_2_2 = $coop0103->address_relatives_2_2;

$no_relatives_2_3 = 3;
$name_and_surname_relatives_2_3 = $coop0103->name_relatives_2_3;
$age_relatives_2_3 = $coop0103->age_relatives_2_3;
$occupation_relatives_2_3 = $coop0103->occupation_relatives_2_3;
$position_relatives_2_3 = $coop0103->position_relatives_2_3;
$address_relatives_2_3 = $coop0103->address_relatives_2_3;

$no_relatives_2_4 = 4;
$name_and_surname_relatives_2_4 = $coop0103->name_relatives_2_4;
$age_relatives_2_4 = $coop0103->age_relatives_2_4;
$occupation_relatives_2_4 = $coop0103->occupation_relatives_2_4;
$position_relatives_2_4 = $coop0103->position_relatives_2_4;
$address_relatives_2_4 = $coop0103->address_relatives_2_4;

$no_relatives_2_5 = 5;
$name_and_surname_relatives_2_5 = $coop0103->name_relatives_2_5;
$age_relatives_2_5 = $coop0103->age_relatives_2_5;
$occupation_relatives_2_5 = $coop0103->occupation_relatives_2_5;
$position_relatives_2_5 = $coop0103->position_relatives_2_5;
$address_relatives_2_5 = $coop0103->address_relatives_2_5;
// end variables

$pdf->SetFont('angsa','',14);
$pdf->setLineWidth(0.1);
$pdf->SetLeftMargin(15);
$pdf->SetRightMargin(10);

// กรอบ 1
$pdf->SetX(100);
$pdf->SetY(15);
$pdf->Cell(0,45, '' ,1,0,'L');

// form
$pdf->SetY(19);
$pdf->SetX(16);
$pdf->Cell(0,0, iconv( 'UTF-8','cp874' , 'ที่อยู่ในภาคการศึกษานี้') ,0,0,'L');

//เส้น
$pdf->SetY(25);
$pdf->SetX(16);
$pdf->Cell(180,0, '______________________________________________________________________________________________________________' ,0,0,'L');
	$pdf->SetY(21.9);
	$pdf->SetX(18);
	$pdf->MultiCell(178,6.6, iconv( 'UTF-8','cp874' , $address_this_term_2) ,0,'L', false);
//MultiCell(float w, float h, string txt [, mixed border [, string align [, boolean fill]]])

//เส้น
$pdf->SetY(31.5);
$pdf->SetX(16);
$pdf->Cell(180,0, '______________________________________________________________________________________________________________' ,0,0,'L');

$pdf->SetY(39.5);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'โทรศัพท์ ______________________________________ โทรศัพท์มือถือ ___________________________________________________') ,0,0,'L');

	$pdf->SetY(39.5);
	$pdf->SetX(30);
	$pdf->Cell(61,0, iconv( 'UTF-8','cp874' , $tel_2_1) ,0,0,'L');

	$pdf->SetY(39.5);
	$pdf->SetX(115);
	$pdf->Cell(80,0, iconv( 'UTF-8','cp874' , $moblie_2_1) ,0,0,'L');

$pdf->SetY(47.5);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'โทรสาร ___________________________________ E-mail ______________________________________________________________') ,0,0,'L');

	$pdf->SetY(47.5);
	$pdf->SetX(30);
	$pdf->Cell(55,0, iconv( 'UTF-8','cp874' , $fax_2_1) ,0,0,'L');

	$pdf->SetY(47.5);
	$pdf->SetX(97);
	$pdf->Cell(99,0, iconv( 'UTF-8','cp874' , $email_2) ,0,0,'L');

// กรอบ 2
$pdf->Ln(0);
$pdf->SetX(100);
$pdf->SetY(60);
$pdf->Cell(0,69, '' ,1,0,'L');

$pdf->SetY(67);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'ที่อยู่ถาวร ______________________________________________________________________________________________________') ,0,0,'L');

$pdf->SetY(74.5);
$pdf->SetX(16);
$pdf->Cell(180,0, '______________________________________________________________________________________________________________' ,0,0,'L');

	$pdf->SetY(63.5);
	$pdf->SetX(31);
	$pdf->MultiCell(178,7.5, iconv( 'UTF-8','cp874' , $permanent_address_2) ,0,'L', false);

$pdf->SetY(82.5);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'โทรศัพท์ _____________________________ โทรศัพท์มือถือ __________________________________ โทรสาร __________________') ,0,0,'L');

	$pdf->SetY(82.5);
	$pdf->SetX(30);
	$pdf->Cell(47,0, iconv( 'UTF-8','cp874' , $tel_2_2) ,0,0,'L');

	$pdf->SetY(82.5);
	$pdf->SetX(100);
	$pdf->Cell(53,0, iconv( 'UTF-8','cp874' , $moblie_2_2) ,0,0,'L');

	$pdf->SetY(82.5);
	$pdf->SetX(168);
	$pdf->Cell(28,0, iconv( 'UTF-8','cp874' , $fax_2_2) ,0,0,'L');

$pdf->SetY(90.5);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'บุคคลที่ติดต่อได้ในกรณีฉุกเฉิน (Emergency case contact to)') ,0,0,'L');

$pdf->SetY(98.5);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'ชื่อ-นามสกุล _______________________________________ความเกี่ยวข้อง _______________________________________________') ,0,0,'L');

	$pdf->SetY(98.5);
	$pdf->SetX(36);
	$pdf->Cell(61,0, iconv( 'UTF-8','cp874' , $name_emergency_2) ,0,0,'L');

	$pdf->SetY(98.5);
	$pdf->SetX(119);
	$pdf->Cell(75,0, iconv( 'UTF-8','cp874' , $relation_emergency_2) ,0,0,'L');

$pdf->SetY(106.5);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'อาชีพ ___________________________________________สถานที่ทำงาน _________________________________________________') ,0,0,'L');

	$pdf->SetY(106.5);
	$pdf->SetX(27);
	$pdf->Cell(67,0, iconv( 'UTF-8','cp874' , $occupation_emergency_2) ,0,0,'L');

	$pdf->SetY(106.5);
	$pdf->SetX(116);
	$pdf->Cell(78,0, iconv( 'UTF-8','cp874' , $place_of_work_emergency_2) ,0,0,'L');

$pdf->SetY(114.5);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'ที่อยู่  ________________________________________________________________________________________________________') ,0,0,'L');

	$pdf->SetY(114.5);
	$pdf->SetX(25);
	$pdf->Cell(168,0, iconv( 'UTF-8','cp874' , $address_emergency_2) ,0,0,'L');

$pdf->SetY(122.5);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'โทรศัพท์ ______________________ โทรสาร ____________________ E-mail _____________________________________________') ,0,0,'L');

	$pdf->SetX(31);
	$pdf->Cell(34,0, iconv( 'UTF-8','cp874' , $tel_emergency_2) ,0,0,'L');

	$pdf->SetX(79);
	$pdf->Cell(31,0, iconv( 'UTF-8','cp874' , $fax_emergency_2) ,0,0,'L');

	$pdf->SetX(122);
	$pdf->Cell(72,0, iconv( 'UTF-8','cp874' , $email_emergency_2) ,0,0,'L');

// กรอบ 3
$pdf->Ln(0);
$pdf->SetX(100);
$pdf->SetY(135);
$pdf->Cell(35,8, '' ,1,0,'L');
$pdf->Cell(112,8, '' ,1,0,'L');
$pdf->Cell(38,8, '' ,1,0,'L');

$pdf->SetFont('angsa','B',14);

$pdf->SetY(139);
$pdf->SetX(78);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'ข้อมูลครอบครัว (FAMILY DETAILS)') ,0,0,'L');

// กรอบ 4
$pdf->Ln(0);
$pdf->SetX(100);
$pdf->SetY(143);
$pdf->Cell(0, 128, '' ,1,0,'L');

$pdf->SetFont('angsa','',14);

$pdf->SetY(146.5);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'ชื่อบิดา ______________________________________ อายุ _________ ปี           อาชีพ ______________________________________') ,0,0,'L');

	$pdf->SetX(28);
	$pdf->Cell(61,0, iconv( 'UTF-8','cp874' , $father_name_2) ,0,0,'L');

	$pdf->SetX(97);
	$pdf->Cell(13,0, iconv( 'UTF-8','cp874' , FilterShowNumber($age_father_2)) ,0,0,'L');

	$pdf->SetX(132);
	$pdf->Cell(60,0, iconv( 'UTF-8','cp874' , $occupation_father_2) ,0,0,'L');

$pdf->SetY(153);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'ที่อยู่ ____________ หมู่ที่ ___________ ซอย ___________________________ แขวง/ตำบล __________________________________') ,0,0,'L');

	$pdf->SetX(25);
	$pdf->Cell(18,0, iconv( 'UTF-8','cp874' , $address_father_2) ,0,0,'L');

	$pdf->SetX(52);
	$pdf->Cell(17,0, iconv( 'UTF-8','cp874' , $moo_father_2) ,0,0,'L');

	$pdf->SetX(78);
	$pdf->Cell(42,0, iconv( 'UTF-8','cp874' , $soi_father_2) ,0,0,'L');

	$pdf->SetX(139);
	$pdf->Cell(54,0, iconv( 'UTF-8','cp874' , $sub_district_father_2) ,0,0,'L');

$pdf->SetY(161);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'เขต/อำเภอ _________________________________ จังหวัด ________________________ รหัสไปรษณีย์ _______________________') ,0,0,'L');

	$pdf->SetX(33);
	$pdf->Cell(52,0, iconv( 'UTF-8','cp874' , $district_father_2) ,0,0,'L');

	$pdf->SetX(97);
	$pdf->Cell(38,0, iconv( 'UTF-8','cp874' , FilterShowProvince($province_father_2)) ,0,0,'L');

	$pdf->SetX(156);
	$pdf->Cell(36,0, iconv( 'UTF-8','cp874' , $zip_cord_father_2) ,0,0,'L');

$pdf->SetY(169);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'โทรศัพท์ ______________________ โทรสาร ____________________ E-mail ____________________________________________') ,0,0,'L');

	$pdf->SetX(31);
	$pdf->Cell(34,0, iconv( 'UTF-8','cp874' , $tel_father_2) ,0,0,'L');

	$pdf->SetX(79);
	$pdf->Cell(31,0, iconv( 'UTF-8','cp874' , $fax_father_2) ,0,0,'L');

	$pdf->SetX(122);
	$pdf->Cell(71,0, iconv( 'UTF-8','cp874' , $email_father_2) ,0,0,'L');

$pdf->SetY(177);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'ชื่อมารดา ______________________________________ อายุ _________ ปี           อาชีพ ______________________________________') ,0,0,'L');

	$pdf->SetX(31);
	$pdf->Cell(61,0, iconv( 'UTF-8','cp874' , $mother_name_2) ,0,0,'L');

	$pdf->SetX(100);
	$pdf->Cell(13,0, iconv( 'UTF-8','cp874' , FilterShowNumber($age_mother_2)) ,0,0,'L');

	$pdf->SetX(135);
	$pdf->Cell(60,0, iconv( 'UTF-8','cp874' , $occupation_mother_2) ,0,0,'L');

$pdf->SetY(185);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'ที่อยู่ ____________ หมู่ที่ ___________ ซอย ___________________________ แขวง/ตำบล __________________________________') ,0,0,'L');

	$pdf->SetX(25);
	$pdf->Cell(17,0, iconv( 'UTF-8','cp874' , $address_mother_2) ,0,0,'L');

	$pdf->SetX(53);
	$pdf->Cell(16,0, iconv( 'UTF-8','cp874' , $moo_mother_2) ,0,0,'L');

	$pdf->SetX(78);
	$pdf->Cell(42,0, iconv( 'UTF-8','cp874' , $soi_mother_2) ,0,0,'L');

	$pdf->SetX(139);
	$pdf->Cell(54,0, iconv( 'UTF-8','cp874' , $sub_district_mother_2) ,0,0,'L');

$pdf->SetY(193);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'เขต/อำเภอ _________________________________ จังหวัด ________________________ รหัสไปรษณีย์ _______________________') ,0,0,'L');

	$pdf->SetX(33);
	$pdf->Cell(52,0, iconv( 'UTF-8','cp874' , $district_mother_2) ,0,0,'L');

	$pdf->SetX(97);
	$pdf->Cell(38,0, iconv( 'UTF-8','cp874' , FilterShowProvince($province_mother_2)) ,0,0,'L');

	$pdf->SetX(156);
	$pdf->Cell(37,0, iconv( 'UTF-8','cp874' , $zip_cord_mother_2) ,0,0,'L');

$pdf->SetY(201);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'โทรศัพท์ ______________________ โทรสาร ____________________ E-mail ____________________________________________') ,0,0,'L');

	$pdf->SetX(31);
	$pdf->Cell(34,0, iconv( 'UTF-8','cp874' , $tel_mother_2) ,0,0,'L');

	$pdf->SetX(79);
	$pdf->Cell(31,0, iconv( 'UTF-8','cp874' , $fax_fmother_2) ,0,0,'L');

	$pdf->SetX(122);
	$pdf->Cell(70,0, iconv( 'UTF-8','cp874' , $email_mother_2) ,0,0,'L');

$pdf->SetY(209);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'จำนวนพี่น้อง _______________ คน                เป็นบุตรคนที่ ________________________ ตามรายละเอียดข้างล่างนี้') ,0,0,'L');

	$pdf->SetX(37);
	$pdf->Cell(22,0, iconv( 'UTF-8','cp874' , FilterShowNumber($no_of_relatives_2)) ,0,0,'L');

	$pdf->SetX(97);
	$pdf->Cell(38,0, iconv( 'UTF-8','cp874' , FilterShowNumber($you_are_the_2)) ,0,0,'L');

$pdf->SetY(217);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , 'ลำดับที่           ชื่อและนามสกุล                             อายุ      อาชีพ                            ตำแหน่ง                               ที่อยู่ (จังหวัด)') ,0,0,'L');

$no_x = 18.5;
$name_x = 25;
$age_x = 80.5;
$occ_x = 89;
$pos_x = 120.5;
$adr_x = 157;
$pdf->SetY(228);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , '____  ________________________________  _____  __________________  _____________________   _______________________') ,0,0,'L');

	$pdf->SetX($no_x);
	$pdf->Cell(6,0, iconv( 'UTF-8','cp874' , $no_relatives_2_1) ,0,0,'L');

	$pdf->SetX($name_x);
	$pdf->Cell(41,0, iconv( 'UTF-8','cp874' , $name_and_surname_relatives_2_1) ,0,0,'L');

	$pdf->SetX($age_x);
	$pdf->Cell(7.5,0, iconv( 'UTF-8','cp874' , FilterShowNumber($age_relatives_2_1)) ,0,0,'L');

	$pdf->SetX($occ_x);
	$pdf->Cell(29,0, iconv( 'UTF-8','cp874' , $occupation_relatives_2_1) ,0,0,'L');

	$pdf->SetX($pos_x);
	$pdf->Cell(34,0, iconv( 'UTF-8','cp874' , $position_relatives_2_1) ,0,0,'L');

	$pdf->SetX($adr_x);
	$pdf->Cell(47,0, iconv( 'UTF-8','cp874' , FilterShowProvince($address_relatives_2_1)) ,0,0,'L');

$pdf->SetY(236);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , '____  ________________________________  _____  __________________  _____________________   _______________________') ,0,0,'L');

	$pdf->SetX($no_x);
	$pdf->Cell(6,0, iconv( 'UTF-8','cp874' , $no_relatives_2_2) ,0,0,'L');

	$pdf->SetX($name_x);
	$pdf->Cell(41,0, iconv( 'UTF-8','cp874' , $name_and_surname_relatives_2_2) ,0,0,'L');

	$pdf->SetX($age_x);
	$pdf->Cell(7.5,0, iconv( 'UTF-8','cp874' , FilterShowNumber($age_relatives_2_2)) ,0,0,'L');

	$pdf->SetX($occ_x);
	$pdf->Cell(29,0, iconv( 'UTF-8','cp874' , $occupation_relatives_2_2) ,0,0,'L');

	$pdf->SetX($pos_x);
	$pdf->Cell(34,0, iconv( 'UTF-8','cp874' , $position_relatives_2_2) ,0,0,'L');

	$pdf->SetX($adr_x);
	$pdf->Cell(47,0, iconv( 'UTF-8','cp874' , FilterShowProvince($address_relatives_2_2)) ,0,0,'L');

$pdf->SetY(244);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , '____  ________________________________  _____  __________________  _____________________   _______________________') ,0,0,'L');

	$pdf->SetX($no_x);
	$pdf->Cell(6,0, iconv( 'UTF-8','cp874' , $no_relatives_2_3) ,0,0,'L');

	$pdf->SetX($name_x);
	$pdf->Cell(41,0, iconv( 'UTF-8','cp874' , $name_and_surname_relatives_2_3) ,0,0,'L');

	$pdf->SetX($age_x);
	$pdf->Cell(7.5,0, iconv( 'UTF-8','cp874' , FilterShowNumber($age_relatives_2_3)) ,0,0,'L');

	$pdf->SetX($occ_x);
	$pdf->Cell(29,0, iconv( 'UTF-8','cp874' , $occupation_relatives_2_3) ,0,0,'L');

	$pdf->SetX($pos_x);
	$pdf->Cell(34,0, iconv( 'UTF-8','cp874' , $position_relatives_2_3) ,0,0,'L');

	$pdf->SetX($adr_x);
	$pdf->Cell(47,0, iconv( 'UTF-8','cp874' , FilterShowProvince($address_relatives_2_3)) ,0,0,'L');

$pdf->SetY(252);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , '____  ________________________________  _____  __________________  _____________________   _______________________') ,0,0,'L');

	$pdf->SetX($no_x);
	$pdf->Cell(6,0, iconv( 'UTF-8','cp874' , $no_relatives_2_4) ,0,0,'L');

	$pdf->SetX($name_x);
	$pdf->Cell(41,0, iconv( 'UTF-8','cp874' , $name_and_surname_relatives_2_4) ,0,0,'L');

	$pdf->SetX($age_x);
	$pdf->Cell(7.5,0, iconv( 'UTF-8','cp874' , FilterShowNumber($age_relatives_2_4)) ,0,0,'L');

	$pdf->SetX($occ_x);
	$pdf->Cell(29,0, iconv( 'UTF-8','cp874' , $occupation_relatives_2_4) ,0,0,'L');

	$pdf->SetX($pos_x);
	$pdf->Cell(34,0, iconv( 'UTF-8','cp874' , $position_relatives_2_4) ,0,0,'L');

	$pdf->SetX($adr_x);
	$pdf->Cell(47,0, iconv( 'UTF-8','cp874' , FilterShowProvince($address_relatives_2_4)) ,0,0,'L');

$pdf->SetY(260);
$pdf->SetX(16);
$pdf->Cell(180,0, iconv( 'UTF-8','cp874' , '____  ________________________________  _____  __________________  _____________________   _______________________') ,0,0,'L');

	$pdf->SetX($no_x);
	$pdf->Cell(6,0, iconv( 'UTF-8','cp874' , $no_relatives_2_5) ,0,0,'L');

	$pdf->SetX($name_x);
	$pdf->Cell(41,0, iconv( 'UTF-8','cp874' , $name_and_surname_relatives_2_5) ,0,0,'L');

	$pdf->SetX($age_x);
	$pdf->Cell(7.5,0, iconv( 'UTF-8','cp874' , FilterShowNumber($age_relatives_2_5)) ,0,0,'L');

	$pdf->SetX($occ_x);
	$pdf->Cell(29,0, iconv( 'UTF-8','cp874' , $occupation_relatives_2_5) ,0,0,'L');

	$pdf->SetX($pos_x);
	$pdf->Cell(34,0, iconv( 'UTF-8','cp874' , $position_relatives_2_5) ,0,0,'L');

	$pdf->SetX($adr_x);
	$pdf->Cell(47,0, iconv( 'UTF-8','cp874' , FilterShowProvince($address_relatives_2_5)) ,0,0,'L');

// english sub
$pdf->SetFont('cordia','',12);

$pdf->Text( 18  , 23.5 , 'Address this term');
$pdf->Text( 18  , 44 , 'Tel.');
$pdf->Text( 95  , 44 , 'Mobile');
$pdf->Text( 18  , 52 , 'Fax.');

$pdf->Text( 18  , 71.7 , 'Permanent address');
$pdf->Text( 18  , 86.5 , 'Tel.');
$pdf->Text( 80  , 86.5 , 'Mobile');
$pdf->Text( 157  , 86.5 , 'Fax.');
$pdf->Text( 18  , 103 , 'Name & surname');
$pdf->Text( 100  , 103 , 'Relation');
$pdf->Text( 18  , 111 , 'Occupation');
$pdf->Text( 98  , 111 , 'Place of work');
$pdf->Text( 18  , 119 , 'Address');
$pdf->Text( 18  , 126.5 , 'Tel.');
$pdf->Text( 68  , 126.5 , 'Fax.');

$pdf->Text( 18  , 150.5 , 'Father\'s name');
$pdf->Text( 91  , 150.5 , 'Age');
$pdf->Text( 111  , 150.5 , 'Year');
$pdf->Text( 121  , 150.5 , 'Occupation');
$pdf->Text( 18  , 158 , 'Address');
$pdf->Text( 45  , 158 , 'Moo');
$pdf->Text( 71  , 158 , 'Soi');
$pdf->Text( 123  , 158 , 'Sub District');
$pdf->Text( 18  , 165.5 , 'District');
$pdf->Text( 87  , 165.5 , 'Province');
$pdf->Text( 138  , 165.5 , 'Zip Cord');
$pdf->Text( 18  , 173 , 'Tel.');
$pdf->Text( 68  , 173 , 'Fax');
$pdf->Text( 18  , 181 , 'Mother\'s name');
$pdf->Text( 94  , 181 , 'Age');
$pdf->Text( 114  , 181 , 'Year');
$pdf->Text( 124  , 181 , 'Occupation');
$pdf->Text( 18  , 189.5 , 'Address');
$pdf->Text( 45  , 189.5 , 'Moo');
$pdf->Text( 72  , 189.5 , 'Soi');
$pdf->Text( 123  , 189.5 , 'Sub District');
$pdf->Text( 18  , 197.5 , 'District');
$pdf->Text( 87.5  , 197.5 , 'Province');
$pdf->Text( 138 , 197.5 , 'Zip Cord');
$pdf->Text( 18  , 205.5 , 'Tel.');
$pdf->Text( 68 , 205.5 , 'Fax');
$pdf->Text( 18  , 213 , 'No. of relatives');
$pdf->Text( 61.5  , 213 , 'Persons');
$pdf->Text( 79  , 213 , 'You are the');
$pdf->Text( 138  , 213 , 'as follows:');
$pdf->Text( 18 , 222 , 'No.');
$pdf->Text( 35.6 , 222 , 'Name & surname');
$pdf->Text( 81 , 222 , 'Age');
$pdf->Text( 90.5 , 222 , 'Occupation');
$pdf->Text( 121.2 , 222 , 'Position');
$pdf->Text( 158 , 222 , 'Address');

// end english sub

// ************************************** end page 2

// ************************************** page 3
$pdf->AddPage();

$pdf->setLineWidth(0.1);

// variables
$primary_name_3 = $coop0103->primary_name_3;
$primary_province_3 = $coop0103->primary_province_3;
$primary_year_attended_3 = $coop0103->primary_year_attended_3;
$primary_year_graduated_3 = $coop0103->primary_year_graduated_3;
$primary_major_3 = $coop0103->primary_major_3;

$secondary_name_3 = $coop0103->secondary_name_3;
$secondary_province_3 = $coop0103->secondary_province_3;
$secondary_year_attended_3 = $coop0103->secondary_year_attended_3;
$secondary_year_graduated_3 = $coop0103->secondary_year_graduated_3;
// bug, too long
$secondary_major_3 = $coop0103->secondary_major_3;
//$secondary_major_3 = wordwrap($secondary_major_3, strlen($secondary_major_3)/2, "\n", true);



$high_school_name_3 = $coop0103->high_school_name_3;
$high_school_province_3 = $coop0103->high_school_province_3;
$high_school_year_attended_3 = $coop0103->high_school_year_attended_3;
$high_school_year_graduated_3 = $coop0103->high_school_year_graduated_3;
$high_school_major_3 = $coop0103->high_school_major_3;

$university_name_3 = $coop0103->university_name_3;
$university_province_3 = $coop0103->university_province_3;
$university_year_attended_3 = $coop0103->university_year_attended_3;
$university_year_graduated_3 = $coop0103->university_year_graduated_3;
$university_major_3 = $coop0103->university_major_3;

$previous_training_year_from_3 = $coop0103->previous_training_year_from_3;
$previous_training_year_to_3 = $coop0103->previous_training_year_to_3;
$previous_training_position_topics_jobtitle_jobdescription_3 = $coop0103->previous_training_jobdescription_3;
$previous_training_organization_3 = $coop0103->previous_training_organization_3;
$previous_training_province_3 = $coop0103->previous_training_province_3;

$career_objectives_3_1 = $coop0103->career_objectives_3_1;
$career_objectives_3_2 = $coop0103->career_objectives_3_2;
$career_objectives_3_3 = $coop0103->career_objectives_3_3;
$career_objectives_3_4 = $coop0103->career_objectives_3_4;
// end variables

// table 1
$pdf->SetXY(25, 23);
$pdf->Cell(161,8, '' ,1,0,'L');

$pdf->SetXY(25, 31);
$pdf->Cell(23,23.5, '' ,1,0,'L');
$pdf->Cell(52.5,23.5, '' ,1,0,'L');
$pdf->Cell(22.5,23.5, '' ,1,0,'L');
$pdf->Cell(16,23.5, '' ,1,0,'L');
$pdf->Cell(16,23.5, '' ,1,0,'L');
$pdf->Cell(31,23.5, '' ,1,0,'L');

$pdf->SetXY(25, 54.5);
$pdf->Cell(23,15.5, '' ,1,0,'L');
$pdf->Cell(52.5,15.5, '' ,1,0,'L');
$pdf->Cell(22.5,15.5, '' ,1,0,'L');
$pdf->Cell(16,15.5, '' ,1,0,'L');
$pdf->Cell(16,15.5, '' ,1,0,'L');
$pdf->Cell(31,15.5, '' ,1,0,'L');

$pdf->SetXY(25, 70);
$pdf->Cell(23,15.5, '' ,1,0,'L');
$pdf->Cell(52.5,15.5, '' ,1,0,'L');
$pdf->Cell(22.5,15.5, '' ,1,0,'L');
$pdf->Cell(16,15.5, '' ,1,0,'L');
$pdf->Cell(16,15.5, '' ,1,0,'L');
$pdf->Cell(31,15.5, '' ,1,0,'L');

$pdf->SetXY(25, 85.5);
$pdf->Cell(23,16, '' ,1,0,'L');
$pdf->Cell(52.5,16, '' ,1,0,'L');
$pdf->Cell(22.5,16, '' ,1,0,'L');
$pdf->Cell(16,16, '' ,1,0,'L');
$pdf->Cell(16,16, '' ,1,0,'L');
$pdf->Cell(31,16, '' ,1,0,'L');

$pdf->SetXY(25, 101.5);
$pdf->Cell(23,16, '' ,1,0,'L');
$pdf->Cell(52.5,16, '' ,1,0,'L');
$pdf->Cell(22.5,16, '' ,1,0,'L');
$pdf->Cell(16,16, '' ,1,0,'L');
$pdf->Cell(16,16, '' ,1,0,'L');
$pdf->Cell(31,16, '' ,1,0,'L');

// label
$pdf->SetFont('angsa','B',14);
$pdf->SetXY(25, 23);
$pdf->Cell(161,8, iconv('UTF-8', 'cp874', 'ประวัติการศึกษา (EDUCATION BACKGROUND)') ,0,0,'C');
$pdf->Text(32 , 36, iconv('UTF-8', 'cp874', 'ระดับ'));
$pdf->Text(32 , 43, iconv('UTF-8', 'cp874', 'Level'));

$pdf->Text(66 , 36, iconv('UTF-8', 'cp874', 'สถานศึกษา'));
$pdf->Text(55 , 43, iconv('UTF-8', 'cp874', 'School / College / University'));

$pdf->Text(107 , 36, iconv('UTF-8', 'cp874', 'จังหวัด'));
$pdf->Text(106 , 43, iconv('UTF-8', 'cp874', 'Province'));

$pdf->Text(127 , 36, iconv('UTF-8', 'cp874', 'ปีที่เริ่ม'));
$pdf->Text(128 , 43, iconv('UTF-8', 'cp874', 'Year'));
$pdf->Text(126 , 50, iconv('UTF-8', 'cp874', 'attended'));

$pdf->Text(143 , 36, iconv('UTF-8', 'cp874', 'ปีที่จบ'));
$pdf->Text(144, 43, iconv('UTF-8', 'cp874', 'Year'));
$pdf->Text(140 , 50, iconv('UTF-8', 'cp874', 'graduated'));

$pdf->Text(162 , 36, iconv('UTF-8', 'cp874', 'แผนการเรียน'));
$pdf->Text(163 , 43, iconv('UTF-8', 'cp874', '/ สาขาวิชา'));
$pdf->Text(166 , 50, iconv('UTF-8', 'cp874', 'Major'));

$pdf->SetFont('angsa','',14);
$pdf->Text(31.5 , 60, iconv('UTF-8', 'cp874', 'ประถม'));
$pdf->Text(31.5 , 67, iconv('UTF-8', 'cp874', 'Primary'));

$pdf->Text(31 , 76, iconv('UTF-8', 'cp874', 'มัธยมต้น'));
$pdf->Text(30 , 82, iconv('UTF-8', 'cp874', 'Secondary'));

$pdf->Text(29 , 91, iconv('UTF-8', 'cp874', 'มัธยมปลาย'));
$pdf->Text(28.5 , 98, iconv('UTF-8', 'cp874', 'High School'));

$pdf->Text(28 , 106.5, iconv('UTF-8', 'cp874', 'มหาวิทยาลัย'));
$pdf->Text(29 , 114, iconv('UTF-8', 'cp874', 'University'));
// end label

// data
$pdf->SetFont('angsa','',14);
$pdf->SetXY(49, 55.5);
$pdf->MultiCell(50.5,6.8, iconv( 'UTF-8','cp874' , $primary_name_3) ,0,'L', false);
$pdf->SetXY(101, 55.5);
$pdf->MultiCell(21.5,6.8, iconv( 'UTF-8','cp874' , FilterShowProvince($primary_province_3)) ,0,'L', false);
$pdf->SetXY(124, 55.5);
$pdf->MultiCell(13,6.8, iconv( 'UTF-8','cp874' , FilterShowNumber($primary_year_attended_3)) ,0,'L', false);
$pdf->SetXY(140, 55.5);
$pdf->MultiCell(13,6.8, iconv( 'UTF-8','cp874' , FilterShowNumber($primary_year_graduated_3)) ,0,'L', false);
$pdf->SetXY(155, 55.5);
$pdf->SetFont('angsa','',11);
$pdf->MultiCell(30,6.8, iconv( 'UTF-8','cp874' , $primary_major_3) ,0,'L', false);

$pdf->SetFont('angsa','',14);
$pdf->SetXY(49, 71);
$pdf->MultiCell(50.5,6.8, iconv( 'UTF-8','cp874' , $secondary_name_3) ,0,'L', false);
$pdf->SetXY(101, 71);
$pdf->MultiCell(21.5,6.8, iconv( 'UTF-8','cp874' , FilterShowProvince($secondary_province_3)) ,0,'L', false);
$pdf->SetXY(124, 71);
$pdf->MultiCell(13,6.8, iconv( 'UTF-8','cp874' , FilterShowNumber($secondary_year_attended_3)) ,0,'L', false);
$pdf->SetXY(140, 71);
$pdf->MultiCell(13,6.8, iconv( 'UTF-8','cp874' , FilterShowNumber($secondary_year_graduated_3)) ,0,'L', false);
$pdf->SetXY(155, 71);
$pdf->SetFont('angsa','',11);
if(strlen($secondary_major_3) <= 120) {
	$sm3_width = 30;
} else {
	$sm3_width = strlen($secondary_major_3)/3.6;
}
$pdf->MultiCell($sm3_width,6.8, iconv( 'UTF-8','cp874' , $secondary_major_3) ,0,'L', false);

$pdf->SetFont('angsa','',14);
$pdf->SetXY(49, 86.5);
$pdf->MultiCell(50.5,6.8, iconv( 'UTF-8','cp874' , $high_school_name_3) ,0,'L', false);
$pdf->SetXY(101, 86.5);
$pdf->MultiCell(21.5,6.8, iconv( 'UTF-8','cp874' , FilterShowProvince($high_school_province_3)) ,0,'L', false);
$pdf->SetXY(124, 86.5);
$pdf->MultiCell(13,6.8, iconv( 'UTF-8','cp874' , FilterShowNumber($high_school_year_attended_3)) ,0,'L', false);
$pdf->SetXY(140, 86.5);
$pdf->MultiCell(13,6.8, iconv( 'UTF-8','cp874' , FilterShowNumber($high_school_year_graduated_3)) ,0,'L', false);
$pdf->SetXY(155, 86.5);
$pdf->SetFont('angsa','',11);
$pdf->MultiCell(30,6.8, iconv( 'UTF-8','cp874' , $high_school_major_3) ,0,'L', false);

$pdf->SetFont('angsa','',14);
$pdf->SetXY(49, 102.5);
$pdf->MultiCell(50.5,6.8, iconv( 'UTF-8','cp874' , $university_name_3) ,0,'L', false);
$pdf->SetXY(101, 102.5);
$pdf->MultiCell(21.5,6.8, iconv( 'UTF-8','cp874' , FilterShowProvince($university_province_3)) ,0,'L', false);
$pdf->SetXY(124, 102.5);
$pdf->MultiCell(13,6.8, iconv( 'UTF-8','cp874' , FilterShowNumber($university_year_attended_3)) ,0,'L', false);
$pdf->SetXY(140, 102.5);
$pdf->MultiCell(13,6.8, iconv( 'UTF-8','cp874' , FilterShowNumber($university_year_graduated_3)) ,0,'L', false);
$pdf->SetXY(155, 102.5);
$pdf->SetFont('angsa','',11);
$pdf->MultiCell(30,6.8, iconv( 'UTF-8','cp874' , $university_major_3) ,0,'L', false);
// end data

// end table 1

// table 2
$pdf->SetXY(25, 124.5);
$pdf->Cell(161,8, '' ,1,0,'L');

$pdf->SetXY(25, 132.5);
$pdf->Cell(30.5,15, '' ,1,0,'L');
$pdf->Cell(45,31.5, '' ,1,0,'L');
$pdf->Cell(62.5,31.5, '' ,1,0,'L');
$pdf->Cell(23,31.5, '' ,1,0,'L');

$pdf->SetXY(25, 147.5);
$pdf->Cell(15.5,16.5, '' ,1,0,'L');
$pdf->Cell(15,16.5, '' ,1,0,'L');

$pdf->SetXY(25, 164);
$pdf->Cell(15.5,39, '' ,1,0,'L');
$pdf->Cell(15,39, '' ,1,0,'L');
$pdf->Cell(45,39, '' ,1,0,'L');
$pdf->Cell(62.5,39, '' ,1,0,'L');
$pdf->Cell(23,39, '' ,1,0,'L');

// label
$pdf->SetFont('angsa','B',14);
$pdf->Text(64 , 130, iconv('UTF-8', 'cp874', 'ประวัติการฝึกงานและการฝึกอบรม (PREVIOUS TRAINING)'));

$pdf->Text(29.5 , 138, iconv('UTF-8', 'cp874', 'ระยะเวลาการฝึก'));
$pdf->Text(30.5 , 144, iconv('UTF-8', 'cp874', 'Year Trained'));

$pdf->Text(30 , 153, iconv('UTF-8', 'cp874', 'จาก'));
$pdf->Text(29 , 160.5, iconv('UTF-8', 'cp874', 'From'));

$pdf->Text(46 , 153, iconv('UTF-8', 'cp874', 'ถึง'));
$pdf->Text(46 , 160.5, iconv('UTF-8', 'cp874', 'To'));

$pdf->Text(59 , 142, iconv('UTF-8', 'cp874', 'ตำแหน่ง/หัวข้ออบรม/หน้าที่'));
$pdf->Text(58 , 150, iconv('UTF-8', 'cp874', 'Position/Topics/Job title/ Job'));
$pdf->Text(70 , 157, iconv('UTF-8', 'cp874', 'description'));

$pdf->Text(122.5, 148, iconv('UTF-8', 'cp874', 'สถานที่ฝึก'));
$pdf->Text(121 , 156, iconv('UTF-8', 'cp874', 'Organization'));

$pdf->Text(169.5 , 146, iconv('UTF-8', 'cp874', 'จังหวัด'));
$pdf->Text(168.5 , 154, iconv('UTF-8', 'cp874', 'Province'));
// end label

// data
$pdf->SetFont('angsa','',14);
$pdf->SetXY(26, 165);
$pdf->MultiCell(13.5,6.8, iconv( 'UTF-8','cp874' , FilterShowNumber($previous_training_year_from_3)) ,0,'L', false);
$pdf->SetXY(41.5, 165);
$pdf->MultiCell(13,6.8, iconv( 'UTF-8','cp874' , FilterShowNumber($previous_training_year_to_3)) ,0,'L', false);
$pdf->SetXY(56.5, 165);
$pdf->MultiCell(43,6.8, iconv( 'UTF-8','cp874' , $previous_training_position_topics_jobtitle_jobdescription_3) ,0,'L', false);
$pdf->SetXY(101.5, 165);
$pdf->MultiCell(60.5,6.8, iconv( 'UTF-8','cp874' , $previous_training_organization_3) ,0,'L', false);
$pdf->SetXY(164, 165);
$pdf->MultiCell(21,6.8, iconv( 'UTF-8','cp874' , FilterShowProvince($previous_training_province_3)) ,0,'L', false);
// end data

// end table 2

// table 3
$pdf->SetXY(25, 210);
$pdf->Cell(161,8, '' ,1,0,'L');

$pdf->SetXY(25, 218);
$pdf->Cell(161,46, '' ,1,0,'L');

// label
$pdf->SetFont('angsa','B',14);
$pdf->Text(74 , 215.5, iconv('UTF-8', 'cp874', 'จุดมุ่งหมายงานอาชีพ (CAREER OBJECTIVES)'));
$pdf->SetFont('angsa','',14);
$pdf->SetXY(26, 218);
$pdf->MultiCell(150,6.8, iconv( 'UTF-8','cp874' , 'ระบุสายงานและลักษณะงานอาชีพที่นักศึกษาสนใจ (Indicate your career objectives, fields of interest and job preference)') ,0,'L', false);
// end label

// data
$pdf->SetFont('angsa','',14);
$pdf->Text(26 , 238, iconv('UTF-8', 'cp874', '1.'));
$pdf->SetXY(29, 234.5);
$pdf->Cell(155,4, iconv('UTF-8', 'cp874', $career_objectives_3_1) ,'B',0,'L');
$pdf->Text(26 , 245.5, iconv('UTF-8', 'cp874', '2.'));
$pdf->SetXY(29, 242);
$pdf->Cell(155,4, iconv('UTF-8', 'cp874', $career_objectives_3_2) ,'B',0,'L');
$pdf->Text(26 , 253, iconv('UTF-8', 'cp874', '3.'));
$pdf->SetXY(29, 249.5);
$pdf->Cell(155,4, iconv('UTF-8', 'cp874', $career_objectives_3_3) ,'B',0,'L');
$pdf->Text(26 , 260.5, iconv('UTF-8', 'cp874', '4.'));
$pdf->SetXY(29, 257);
$pdf->Cell(155,4, iconv('UTF-8', 'cp874', $career_objectives_3_4) ,'B',0,'L');
// end data

// end table 3

// ************************************** end page 3

// ************************************** page 4
$pdf->SetLeftMargin( 28 );
$pdf->SetRightMargin( 28 );
$pdf->SetTopMargin( 16 );
$pdf->AddPage();

$pdf->setLineWidth(0.1);

// variables
$student_activities_year_4_1 = $coop0103->student_activities_year_4_1;
$student_activities_position_responsibility_4_1 = $coop0103->student_activities_position_4_1;
$student_activities_year_4_2 = $coop0103->student_activities_year_4_2;
$student_activities_position_responsibility_4_2 = $coop0103->student_activities_position_4_2;
$student_activities_year_4_3 = $coop0103->student_activities_year_4_3;
$student_activities_position_responsibility_4_3 = $coop0103->student_activities_position_4_3;

$english_listening_4 = $coop0103->english_listening_4;
$english_speaking_4 = $coop0103->english_speaking_4;
$english_reading_4 = $coop0103->english_reading_4;
$english_writing_4 = $coop0103->english_writing_4;

$chinese_listening_4 = $coop0103->chinese_listening_4;
$chinese_speaking_4 = $coop0103->chinese_speaking_4;
$chinese_reading_4 = $coop0103->chinese_reading_4;
$chinese_writing_4 = $coop0103->chinese_writing_4;

$other_language_4 = $coop0103->other_language_4;

$other_listening_4 = $coop0103->other_listening_4;
$other_speaking_4 = $coop0103->other_speaking_4;
$other_reading_4 = $coop0103->other_reading_4;
$other_writing_4 = $coop0103->other_writing_4;

$special_ability_and_honor_received_4_1 = $coop0103->special_ability_4_1;
$special_ability_and_honor_received_4_2 = $coop0103->special_ability_4_2;
$special_ability_and_honor_received_4_3 = $coop0103->special_ability_4_3;
$computerized_ability_4_1 = $coop0103->computerized_ability_4_1;
$car_driver_license_no_4_1 = $coop0103->car_license_no_4_1;
$motor_cycle_driver_license_no_4_1 = $coop0103->motorcycle_license_no_4_1;
$sport_4_1 = $coop0103->sport_4_1;
$hobbies_4_1 = $coop0103->hobbies_4_1;
// end variables

// table 1
$pdf->SetXY(25.5, 15);
$pdf->Cell(161,8.5, '' ,1,0,'L');
$pdf->SetXY(25.5, 23.5);
$pdf->Cell(161,34.5, '' ,1,0,'L');
// end table 1

// table 2
$pdf->SetXY(25.5, 65);
$pdf->Cell(161,8, '' ,1,0,'L');
$pdf->SetXY(25.5, 73);
$pdf->Cell(25,15,'' ,1,0,'L');
$pdf->SetXY(50.5, 73);
$pdf->Cell(31.5,8, '' ,1,0,'L');
$pdf->Cell(36,8, '' ,1,0,'L');
$pdf->Cell(35,8, '' ,1,0,'L');
$pdf->Cell(33.5,8, '' ,1,0,'L');
$pdf->SetXY(50.5, 81);
$pdf->Cell(10.5,7, '' ,1,0,'L');
$pdf->Cell(10.5,7, '' ,1,0,'L');
$pdf->Cell(10.5,7, '' ,1,0,'L');
$pdf->Cell(12,7, '' ,1,0,'L');
$pdf->Cell(12,7, '' ,1,0,'L');
$pdf->Cell(12,7, '' ,1,0,'L');
$pdf->Cell(12,7, '' ,1,0,'L');
$pdf->Cell(11.5,7, '' ,1,0,'L');
$pdf->Cell(11.5,7, '' ,1,0,'L');
$pdf->Cell(11.5,7, '' ,1,0,'L');
$pdf->Cell(11,7, '' ,1,0,'L');
$pdf->Cell(11,7, '' ,1,0,'L');

$pdf->SetXY(25.5, 88);
$pdf->Cell(25,15,'' ,1,0,'L');
$pdf->Cell(10.5,15, '' ,1,0,'L');
$pdf->Cell(10.5,15, '' ,1,0,'L');
$pdf->Cell(10.5,15, '' ,1,0,'L');
$pdf->Cell(12,15, '' ,1,0,'L');
$pdf->Cell(12,15, '' ,1,0,'L');
$pdf->Cell(12,15, '' ,1,0,'L');
$pdf->Cell(12,15, '' ,1,0,'L');
$pdf->Cell(11.5,15, '' ,1,0,'L');
$pdf->Cell(11.5,15, '' ,1,0,'L');
$pdf->Cell(11.5,15, '' ,1,0,'L');
$pdf->Cell(11,15, '' ,1,0,'L');
$pdf->Cell(11,15, '' ,1,0,'L');

$pdf->SetXY(25.5, 103);
$pdf->Cell(25,15,'' ,1,0,'L');
$pdf->Cell(10.5,15, '' ,1,0,'L');
$pdf->Cell(10.5,15, '' ,1,0,'L');
$pdf->Cell(10.5,15, '' ,1,0,'L');
$pdf->Cell(12,15, '' ,1,0,'L');
$pdf->Cell(12,15, '' ,1,0,'L');
$pdf->Cell(12,15, '' ,1,0,'L');
$pdf->Cell(12,15, '' ,1,0,'L');
$pdf->Cell(11.5,15, '' ,1,0,'L');
$pdf->Cell(11.5,15, '' ,1,0,'L');
$pdf->Cell(11.5,15, '' ,1,0,'L');
$pdf->Cell(11,15, '' ,1,0,'L');
$pdf->Cell(11,15, '' ,1,0,'L');

$pdf->SetXY(25.5, 118);
$pdf->Cell(25,22,'' ,1,0,'L');
$pdf->Cell(10.5,22, '' ,1,0,'L');
$pdf->Cell(10.5,22, '' ,1,0,'L');
$pdf->Cell(10.5,22, '' ,1,0,'L');
$pdf->Cell(12,22, '' ,1,0,'L');
$pdf->Cell(12,22, '' ,1,0,'L');
$pdf->Cell(12,22, '' ,1,0,'L');
$pdf->Cell(12,22, '' ,1,0,'L');
$pdf->Cell(11.5,22, '' ,1,0,'L');
$pdf->Cell(11.5,22, '' ,1,0,'L');
$pdf->Cell(11.5,22, '' ,1,0,'L');
$pdf->Cell(11,22, '' ,1,0,'L');
$pdf->Cell(11,22, '' ,1,0,'L');
// end table 2

// label table 1 and 2
$pdf->SetFont('angsa','B',14);
$pdf->Text(72 , 20.5, iconv('UTF-8', 'cp874', 'กิจกรรมนอกหลักสูตร (STUDENT ACTIVITIES)'));

$pdf->SetFont('angsa','',14);
$pdf->Text(31.5 , 28.5, iconv('UTF-8', 'cp874', 'ระยะเวลา (Years)'));
$pdf->Text(95 , 28.5, iconv('UTF-8', 'cp874', 'ตำแหน่งและหน้าที่ (Position/Responsibility)'));

$pdf->SetFont('angsa','B',14);
$pdf->Text(73 , 70, iconv('UTF-8', 'cp874', 'ความสามารถทางภาษา (LANGUAGE ABILITY)'));
$pdf->Text(28 , 78, iconv('UTF-8', 'cp874', 'ภาษา'));
$pdf->SetFont('angsa','',14);
$pdf->Text(28 , 84, iconv('UTF-8', 'cp874', '(Language)'));
$pdf->SetFont('angsa','B',14);
$pdf->Text(56 , 78, iconv('UTF-8', 'cp874', 'ฟัง'));
$pdf->SetFont('angsa','',14);
$pdf->Text(61 , 78, iconv('UTF-8', 'cp874', '(Listening)'));
$pdf->SetFont('angsa','B',14);
$pdf->Text(90 , 78, iconv('UTF-8', 'cp874', 'พูด'));
$pdf->SetFont('angsa','',14);
$pdf->Text(96 , 78, iconv('UTF-8', 'cp874', '(Speaking)'));
$pdf->SetFont('angsa','B',14);
$pdf->Text(126 , 78, iconv('UTF-8', 'cp874', 'อ่าน'));
$pdf->SetFont('angsa','',14);
$pdf->Text(132.5 , 78, iconv('UTF-8', 'cp874', '(Reading)'));
$pdf->SetFont('angsa','B',14);
$pdf->Text(158.5 , 78, iconv('UTF-8', 'cp874', 'เขียน'));
$pdf->SetFont('angsa','',14);
$pdf->Text(166.5 , 78, iconv('UTF-8', 'cp874', '(Writing)'));

$pdf->Text(52 , 85.5, iconv('UTF-8', 'cp874', 'Good'));
$pdf->Text(63.5 , 85.5, iconv('UTF-8', 'cp874', 'Fair'));
$pdf->Text(73.5 , 85.5, iconv('UTF-8', 'cp874', 'Poor'));

$pdf->Text(84 , 85.5, iconv('UTF-8', 'cp874', 'Good'));
$pdf->Text(97 , 85.5, iconv('UTF-8', 'cp874', 'Fair'));
$pdf->Text(109 , 85.5, iconv('UTF-8', 'cp874', 'Poor'));

$pdf->Text(120 , 85.5, iconv('UTF-8', 'cp874', 'Good'));
$pdf->Text(133 , 85.5, iconv('UTF-8', 'cp874', 'Fair'));
$pdf->Text(144 , 85.5, iconv('UTF-8', 'cp874', 'Poor'));

$pdf->Text(155 , 85.5, iconv('UTF-8', 'cp874', 'Good'));
$pdf->Text(167.5 , 85.5, iconv('UTF-8', 'cp874', 'Fair'));
$pdf->Text(178 , 85.5, iconv('UTF-8', 'cp874', 'Poor'));

$pdf->SetFont('angsa','B',14);
$pdf->Text(28 , 93.5, iconv('UTF-8', 'cp874', 'อังกฤษ'));
$pdf->SetFont('angsa','',14);
$pdf->Text(28 , 99.5, iconv('UTF-8', 'cp874', '(English)'));
$pdf->SetFont('angsa','B',14);
$pdf->Text(28 , 109, iconv('UTF-8', 'cp874', 'จีน'));
$pdf->SetFont('angsa','',14);
$pdf->Text(28 , 115, iconv('UTF-8', 'cp874', '(Chinese)'));
$pdf->SetFont('angsa','B',14);
$pdf->Text(28 , 124, iconv('UTF-8', 'cp874', 'อื่น ๆ '));
$pdf->Text(28 , 130, iconv('UTF-8', 'cp874', '('.$other_language_4.')'));
$pdf->SetFont('angsa','',14);
$pdf->Text(28 , 136.5, iconv('UTF-8', 'cp874', '(Other)'));
// end label table 1 and 2

// data table 1 and 2
$pdf->SetFont('angsa','',14);
$pdf->Text(27 , 37, iconv('UTF-8', 'cp874', '1.'));
$pdf->SetXY(30.5, 33.5);
$pdf->Cell(25,4, iconv('UTF-8', 'cp874', FilterShowNumber($student_activities_year_4_1)) ,'B',0,'L');
$pdf->SetX(65);
$pdf->Cell(118,4, iconv('UTF-8', 'cp874', $student_activities_position_responsibility_4_1) ,'B',0,'L');

$pdf->Text(27 , 45, iconv('UTF-8', 'cp874', '2.'));
$pdf->SetXY(30, 41.5);
$pdf->Cell(25,4, iconv('UTF-8', 'cp874', FilterShowNumber($student_activities_year_4_2)) ,'B',0,'L');
$pdf->SetX(65);
$pdf->Cell(118,4, iconv('UTF-8', 'cp874', $student_activities_position_responsibility_4_2) ,'B',0,'L');

$pdf->Text(27 , 53, iconv('UTF-8', 'cp874', '3.'));
$pdf->SetXY(30, 49.5);
$pdf->Cell(25,4, iconv('UTF-8', 'cp874', FilterShowNumber($student_activities_year_4_3)) ,'B',0,'L');
$pdf->SetX(65);
$pdf->Cell(118,4, iconv('UTF-8', 'cp874', $student_activities_position_responsibility_4_3) ,'B',0,'L');

$pdf->SetFont('cordia', '', 40);
if ($english_listening_4 == 'g')
	$pdf->Text(55 , 96, iconv('UTF-8', 'cp874', '/'));
else if ($english_listening_4 == 'f')
	$pdf->Text(66 , 96, iconv('UTF-8', 'cp874', '/'));
else if($english_listening_4 == 'p')
	$pdf->Text(76 , 96, iconv('UTF-8', 'cp874', '/'));

if ($english_speaking_4 == 'g')
	$pdf->Text(87 , 96, iconv('UTF-8', 'cp874', '/'));
else if ($english_speaking_4 == 'f')
	$pdf->Text(99.5 , 96, iconv('UTF-8', 'cp874', '/'));
else if($english_speaking_4 == 'p')
	$pdf->Text(111 , 96, iconv('UTF-8', 'cp874', '/'));

if ($english_reading_4 == 'g')
	$pdf->Text(123.5 , 96, iconv('UTF-8', 'cp874', '/'));
else if ($english_reading_4 == 'f')
	$pdf->Text(135 , 96, iconv('UTF-8', 'cp874', '/'));
else if($english_reading_4 == 'p')
	$pdf->Text(146.5 , 96, iconv('UTF-8', 'cp874', '/'));

if ($english_writing_4 == 'g')
	$pdf->Text(158 , 96, iconv('UTF-8', 'cp874', '/'));
else if ($english_writing_4 == 'f')
	$pdf->Text(169.5 , 96, iconv('UTF-8', 'cp874', '/'));
else if($english_writing_4 == 'p')
	$pdf->Text(181 , 96, iconv('UTF-8', 'cp874', '/'));

if ($chinese_listening_4 == 'g')
	$pdf->Text(55 , 112, iconv('UTF-8', 'cp874', '/'));
else if ($chinese_listening_4 == 'f')
	$pdf->Text(66 , 112, iconv('UTF-8', 'cp874', '/'));
else if($chinese_listening_4 == 'p')
	$pdf->Text(76 , 112, iconv('UTF-8', 'cp874', '/'));

if ($chinese_speaking_4 == 'g')
	$pdf->Text(87 , 112, iconv('UTF-8', 'cp874', '/'));
else if ($chinese_speaking_4 == 'f')
	$pdf->Text(99.5 , 112, iconv('UTF-8', 'cp874', '/'));
else if($chinese_speaking_4 == 'p')
	$pdf->Text(111 , 112, iconv('UTF-8', 'cp874', '/'));

if ($chinese_reading_4 == 'g')
	$pdf->Text(123.5 , 112, iconv('UTF-8', 'cp874', '/'));
else if ($chinese_reading_4 == 'f')
	$pdf->Text(135 , 112, iconv('UTF-8', 'cp874', '/'));
else if($chinese_reading_4 == 'p')
	$pdf->Text(146.5 , 112, iconv('UTF-8', 'cp874', '/'));

if ($chinese_writing_4 == 'g')
	$pdf->Text(158 , 112, iconv('UTF-8', 'cp874', '/'));
else if ($chinese_writing_4 == 'f')
	$pdf->Text(169.5 , 112, iconv('UTF-8', 'cp874', '/'));
else if($chinese_writing_4 == 'p')
	$pdf->Text(181 , 112, iconv('UTF-8', 'cp874', '/'));

if ($other_listening_4 == 'g')
	$pdf->Text(55 , 130, iconv('UTF-8', 'cp874', '/'));
else if ($other_listening_4 == 'f')
	$pdf->Text(66 , 130, iconv('UTF-8', 'cp874', '/'));
else if($other_listening_4 == 'p')
	$pdf->Text(76 , 130, iconv('UTF-8', 'cp874', '/'));

if ($other_speaking_4 == 'g')
	$pdf->Text(87 , 130, iconv('UTF-8', 'cp874', '/'));
else if ($other_speaking_4 == 'f')
	$pdf->Text(99.5 , 130, iconv('UTF-8', 'cp874', '/'));
else if($other_speaking_4 == 'p')
	$pdf->Text(111 , 130, iconv('UTF-8', 'cp874', '/'));

if ($other_reading_4 == 'g')
	$pdf->Text(123.5 , 130, iconv('UTF-8', 'cp874', '/'));
else if ($other_reading_4 == 'f')
	$pdf->Text(135 , 130, iconv('UTF-8', 'cp874', '/'));
else if($other_reading_4 == 'p')
	$pdf->Text(146.5 , 130, iconv('UTF-8', 'cp874', '/'));

if ($other_writing_4 == 'g')
	$pdf->Text(158 , 130, iconv('UTF-8', 'cp874', '/'));
else if ($other_writing_4 == 'f')
	$pdf->Text(169.5 , 130, iconv('UTF-8', 'cp874', '/'));
else if($other_writing_4 == 'p')
	$pdf->Text(181 , 130, iconv('UTF-8', 'cp874', '/'));
// end data table 1 and 2

// table 3
$pdf->SetXY(25.5, 156);
$pdf->Cell(161,17, '' ,1,0,'L');
$pdf->SetXY(25.5, 173);
$pdf->Cell(161,30, '' ,1,0,'L');
// end table 3

// table 4
$pdf->SetXY(25.5, 212);
$pdf->Cell(161,8, '' ,1,0,'L');
$pdf->SetXY(25.5, 220);
$pdf->Cell(161,43, '' ,1,0,'L');
// end table 4

// data table 3 and 4
$pdf->SetFont('angsa', 'B', 14);
$pdf->SetY(157);
$pdf->Cell(0, 8, iconv('UTF-8', 'cp874', 'ความสามารถพิเศษและเกียรติคุณที่ได้รับ'), 0, 1, 'C');
$pdf->Cell(0, 8, '(SPECIAL ABILITY AND HONOR RECEIVED)', 0, 1, 'C');
$pdf->SetY(173);
$pdf->Cell(5, 12, '1.', 0, 0);
$pdf->Cell(0, 8, '', 'B', 1);
$pdf->Cell(5, 12, '2.', 0, 0);
$pdf->Cell(0, 8, '', 'B', 1);
$pdf->Cell(5, 12, '3.', 0, 0);
$pdf->Cell(0, 8, '', 'B', 1);

$pdf->SetFont('angsa', '', 14);
$pdf->SetY(175);
$pdf->Cell(5, 12, '', 0, 0);
$pdf->Cell(0, 8, iconv('UTF-8', 'cp874', $special_ability_and_honor_received_4_1), 0, 1);
$pdf->Cell(5, 12, '', 0, 0);
$pdf->Cell(0, 8, iconv('UTF-8', 'cp874', $special_ability_and_honor_received_4_2), 0, 1);
$pdf->Cell(5, 12, '', 0, 0);
$pdf->Cell(0, 8, iconv('UTF-8', 'cp874', $special_ability_and_honor_received_4_3), 0, 1);


$pdf->SetFont('angsa', 'B', 14);
$pdf->SetY(212);
$pdf->Cell(0, 8, iconv('UTF-8', 'cp874', 'ความสามารถอื่นๆ (OTHER SKILLS)'), 0, 1, 'C');
$pdf->SetFont('angsa', '', 14);
$pdf->SetY(225);
$pdf->Cell(41, 4, iconv('UTF-8', 'cp874', 'ความสามารถทางคอมพิวเตอร์'), 0, 0);
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $computerized_ability_4_1), 'B', 1, 'L');
$pdf->SetFont('cordia', '', 12);
$pdf->Cell(0, 2, 'Computerized ability', 0, 1);

$pdf->SetFont('angsa', '', 14);
$pdf->SetY(233);
$pdf->Cell(27, 3, iconv('UTF-8', 'cp874', 'ใบขับขี่'), 0, 0);
$pdf->Cell(3, 3, '', 1, 0);
$pdf->Cell(30, 3, iconv('UTF-8', 'cp874', 'รถยนต์'), 0, 0);
$pdf->Cell(23, 3, iconv('UTF-8', 'cp874', 'ใบอนุญาติเลขที่'), 0, 0);
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $car_driver_license_no_4_1), 'B', 1, 'L');

$pdf->SetFont('cordia', '', 12);
$pdf->Cell(30, 2, iconv('UTF-8', 'cp874', 'Driver License'), 0, 0);
$pdf->Cell(31, 2, iconv('UTF-8', 'cp874', 'Car'), 0, 0);
$pdf->Cell(0, 2, iconv('UTF-8', 'cp874', 'Driver license no.'), 0, 1);

$pdf->SetFont('angsa', '', 14);
$pdf->SetY(243);
$pdf->Cell(27, 3, iconv('UTF-8', 'cp874', ''), 0, 0);
$pdf->Cell(3, 3, '', 1, 0);
$pdf->Cell(30, 3, iconv('UTF-8', 'cp874', 'จักรยานยนต์'), 0, 0);
$pdf->Cell(23, 3, iconv('UTF-8', 'cp874', 'ใบอนุญาติเลขที่'), 0, 0);
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $motor_cycle_driver_license_no_4_1), 'B', 1, 'L');

$pdf->SetFont('cordia', '', 12);
$pdf->Cell(30, 2, iconv('UTF-8', 'cp874', ''), 0, 0);
$pdf->Cell(31, 2, iconv('UTF-8', 'cp874', 'Motor cycle'), 0, 0);
$pdf->Cell(0, 2, iconv('UTF-8', 'cp874', 'Driver license no.'), 0, 1);

$pdf->SetFont('cordia', '', 18);
if($car_driver_license_no_4_1 != "")
{
	$pdf->Text(55.2 , 235.9, iconv('UTF-8', 'cp874', 'X'));
}
if($motor_cycle_driver_license_no_4_1 != "")
{
	$pdf->Text(55.2 , 245.9, iconv('UTF-8', 'cp874', 'X'));
}

$pdf->SetFont('angsa', '', 14);
$pdf->SetY(253);
$pdf->Cell(7, 4, iconv('UTF-8', 'cp874', 'กีฬา'), 0, 0);
$pdf->Cell(66, 4, iconv('UTF-8', 'cp874', $sport_4_1), 'B', 0, 'L');
$pdf->Cell(15, 4, iconv('UTF-8', 'cp874', 'งานอดิเรก'), 0, 0);
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $hobbies_4_1), 'B', 1, 'L');
$pdf->SetFont('cordia', '', 12);
$pdf->Cell(73, 2, 'Sport', 0, 0);
$pdf->Cell(0, 2, 'Hobbies', 0, 1);
// end data table 3 and 4

// ************************************** end page 4

// ************************************** page 5
$pdf->SetLeftMargin( 28 );
$pdf->SetRightMargin( 28 );
$pdf->SetTopMargin( 16 );
$pdf->AddPage();

// variables
$please_explain_about_yourself_to_make_other_people_understand_you_better_5 = $coop0103->explain_about_yourself;
// end variables

//$please_explain_about_yourself_to_make_other_people_understand_you_better_5 = wordwrap($please_explain_about_yourself_to_make_other_people_understand_you_better_5, 330, ";", true);

$pdf->SetXY(25, 16);
$pdf->Cell(161, 116, '', 1, 1 );
$pdf->SetX(25);
$pdf->Cell(161, 52, '', 'LRB', 1 );

$pdf->SetY(18);
$pdf->SetFont('angsa', '', 14);
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', 'โปรดอธิบายให้ผู้อื่นรู้จักท่านดีขึ้น (Please explain about yourself to make other people understand you better.)'), 0, 1);
$pdf->SetXY(25, 18);
$pdf->Cell(161, 6, '', 'B', 1);//line 1
/*
$pdf->Cell(0, 10, '', 'B', 1);//line 1
$pdf->Cell(0, 10, '', 'B', 1);//line 2
$pdf->Cell(0, 10, '', 'B', 1);//line 3
$pdf->Cell(0, 10, '', 'B', 1);//line 4
$pdf->Cell(0, 10, '', 'B', 1);//line 5
$pdf->Cell(0, 10, '', 'B', 1);//line 6
$pdf->Cell(0, 10, '', 'B', 1);//line 7
$pdf->Cell(0, 10, '', 'B', 1);//line 8
$pdf->Cell(0, 10, '', 'B', 1);//line 9
$pdf->Cell(0, 10, '', 'B', 1);//line 10
*/

$pdf->SetY(25);
$pdf->MultiCell(0, 8, iconv('UTF-8', 'cp874', $please_explain_about_yourself_to_make_other_people_understand_you_better_5), '0', 'L');
//$explain_exploded = explode(";", $please_explain_about_yourself_to_make_other_people_understand_you_better_5); //divide string with " "

$pdf->SetY(134);
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', 'ข้าพเจ้าขอรับรองว่าข้อความทั้งหมดเป็นความจริงและถูกต้องทุกประการ'), 0, 1);
$pdf->SetFont('cordia', '', 12);
$pdf->Cell(0, 4, 'I hereby confirm that at the answer and statements given by me in the application are true and correct in every aspect.', 0, 1);

//$pdf->SetTextColor(255, 0, 0);
$pdf->SetFont('angsa', '', 14);
$pdf->Text(100, 155, iconv('UTF-8', 'cp874', 'ลายเซ็นผู้สมัคร_______________________________'));
$pdf->SetFont('cordia', '', 12);
$pdf->Text(100, 158, 'Application signature');
$pdf->SetFont('angsa', '', 14);
$pdf->Text(120, 162, '(_____________________________)');

$pdf->SetTextColor(0, 0, 0);
$pdf->Text(102, 176, iconv('UTF-8', 'cp874', 'วันที่_______________________________________'));
$pdf->SetFont('cordia', '', 12);
$pdf->Text(102, 179, 'Date');
// ************************************** end page 5

// I is show on brownser D is download
$pdf->Output($faculty_1.'_coop0103_'.$student_id_1.'.pdf' , 'I'); // I, D
exit;
?>
