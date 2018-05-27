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
		$this->setX(15);
		$this->Cell(0,0, iconv( 'UTF-8','cp874' , '') ,1,0,'L');

		//ล่างซ้าย
		$this->SetY( -18 );
		$this->SetFont('angsa','I',12);
		$this->setX(15);
		$this->Cell(0,0, iconv( 'UTF-8','cp874' , 'งานหลักสูตรและสหกิจศึกษา มหาวิทยาลัยสงขลานครินทร์  วิทยาเขตภูเก็ต') ,0,0,'L');
		$this->Ln(6);
		$this->setX(15);
		$this->Cell(0,0, iconv( 'UTF-8','cp874' , 'โทรศัพท์ 0-7627-6177-8   โทรสาร 0-7627-6179') ,0,0,'L');

		//ล่างขวา
		// $this->SetFont('angsa','',12);
		// $this->SetY(-18);
		// $this->Cell(170,0, iconv( 'UTF-8','cp874' , 'หน้าที่ '.$this->PageNo().' /  tp' ),0,0,'R');
	}
}

$pdf= new PDF('P', 'mm', 'A4');

// add font
$pdf->AddFont('angsa', '', 'angsa.php');
$pdf->AddFont('angsa', 'B', 'angsab.php');
$pdf->AddFont('angsa', 'I', 'angsai.php');
$pdf->AddFont('angsa', 'BI', 'angsaz.php');
$pdf->AddFont('cordia', '', 'cordia.php');
$pdf->AddFont('cordia', 'B', 'cordiab.php');
$pdf->AddFont('cordia', 'I', 'cordiai.php');
$pdf->AddFont('cordia', 'BI', 'cordiaz.php');
// end add font

// page amount
$pdf->AliasNbPages( 'tp' );

if(0) {
var_dump($coop0202_2);
return;
}

// variables

$faculty_id = $coop0104->faculty_id;
$lang = $coop0104->lang;
if($lang == 0)
{
	$name_and_surname = $coop0104->name_and_surname_thai_1;
	$major = $coop0104->major_year_1;
	$advisor_name_1 = $coop0104->advisor_name_1;
	$faculty = $coop0104->faculty_1;
}
else
{
	$name_and_surname = $coop0104->name_and_surname_eng_1;
	$major = $coop0104->major_year_eng_1;
	$advisor_name_1 = $coop0104->advisor_name_eng_1;
	$faculty = $coop0104->faculty_eng_1;
}

$semester = "1";
$semester_year = "2559";
$training_date_start = "01-08-2559";
$training_date_end = "31-12-2559";
$student_id = $coop0104->student_id_1;

$phone_number_1 = $coop0104->phone_number_1;
$semester_gpa_1 = $coop0104->semester_1;
$cumulative_gpa_1 = $coop0104->grade_1;

$position_1 = $coop0104->organization_1_position;
$oraganization_name_1 = $coop0104->organization_name_1;
$oraganization_province_1 = $coop0104->organization_1_province;
$subject_id_name_1 = $coop0104->subject_code_1;//$related_1->course;
$study_semester_1 = $coop0104->semester_1;//$related_1->semester;
$gpa_1 = $coop0104->grade_1;//$related_1->grade;
$certificate_1 = $coop0104->certificate_1;//$related_1->cert;
$training_time_1 = $coop0104->certificate_time_1;//$related_1->duration;
$start_date_1 = $coop0104->certificate_start_1;//$related_1->start;
$end_date_1 = $coop0104->certificate_end_1;//$related_1->end;

$position_2 = $coop0104->organization_2_position;
$oraganization_name_2 = $coop0104->organization_name_2;
$oraganization_province_2 =$coop0104->organization_2_province;
if(isset($coop0104->subject_code_2)) {
	$subject_id_name_2 = $coop0104->subject_code_2;
	$study_semester_2 = $coop0104->semester_2;
	$gpa_2 = $coop0104->grade_2;
	$certificate_2 = $coop0104->certificate_2;
	$training_time_2 = $coop0104->certificate_time_2;
	$start_date_2 = $coop0104->certificate_start_2;
	$end_date_2 = $coop0104->certificate_end_2;
} else {
	$subject_id_name_2 = '-';
	$study_semester_2 = '-';
	$gpa_2 = '-';
	$certificate_2 = '-';
	$training_time_2 = '-';
	$start_date_2 = '-';
	$end_date_2 = '-';
}

$copy = "5";
// end variables

$pdf->setMargins(15.4, 15.2, 10);

$pdf->setMargins(15.4, 15.2, 10);
$pdf->AddPage();

$pdf->SetFont('angsa', 'I', 15);
$pdf->setXY(170, 9);
$pdf->Cell(31, 9, 'COOP 01 - 04', 1, 1, 'C');

$pdf->SetFont('angsa', 'B', 18);
$pdf->Cell(0, 5, iconv('UTF-8', 'cp874', 'งานหลักสูตรและสหกิจศึกษา มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ต'), 0, 1, 'L');

$pdf->SetFont('angsa', 'B', 10);
$pdf->Cell(0, 3, iconv('UTF-8', 'cp874', 'ปรับปรุงครั้งที่ 5 วันที่ 7 มิย.53'), 0, 1, 'R');

$pdf->SetFont('angsa', 'B', 22);
$pdf->Cell(0, 1, 'CURRICULUM AND COOPERATIVE EDUCATION SECTION', 0, 1, 'L');

$pdf->SetFont('angsa', 'B', 16);
$pdf->Cell(0, 12, iconv('UTF-8', 'cp874', 'แบบเลือกลำดบสถานประกอบการ (ผู้ให้ข้อมูล:นักศึกษา)'), 0, 1, 'L');

$pdf->SetFont('angsa', '', 16);
$pdf->Cell(154, 5, iconv('UTF-8', 'cp874', 'ภาคการศึกษาที่'), 0, 0, 'R');
$pdf->Cell(1, 5, 	'', 	0, 		0);
$pdf->Cell(5, 5, 	iconv('UTF-8', 'cp874', $semester), 	1, 		0);
$pdf->Cell(5, 2.5, 	'', 	'B', 	0);
$pdf->Cell(5, 5, 	iconv('UTF-8', 'cp874', substr($semester_year, 0, 1)), 	1, 		0);
$pdf->Cell(5, 5, 	iconv('UTF-8', 'cp874', substr($semester_year, 1, 1)), 	1, 		0);
$pdf->Cell(5, 5, 	iconv('UTF-8', 'cp874', substr($semester_year, 2, 1)), 	1, 		0);
$pdf->Cell(5, 5, 	iconv('UTF-8', 'cp874', substr($semester_year, 3, 1)), 	1, 		1);
$pdf->Cell(0, 2, '', 0, 1);

$pdf->Cell(120, 4, iconv('UTF-8', 'cp874', 'ปฎิบัติงานตั้งแต่วันที่'), 0, 0, 'R');
$pdf->Cell(30, 4, iconv('UTF-8', 'cp874', $training_date_start), 'B', 0, 'L');
$pdf->Cell(7, 4, iconv('UTF-8', 'cp874', 'ถึง'), 0, 0, 'R');
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $training_date_end),'B', 1, 'L');

$pdf->SetFont('angsa', 'B', 18);
$pdf->Cell(0, 5, iconv('UTF-8', 'cp874', 'เรียน       หัวหน้าโครงการสหกิจศึกษา'), 0, 1, 'L');
$pdf->Cell(0, 10, '', 0, 1);

$pdf->SetFont('angsa', '', 16);
$pdf->Cell(20, 4, iconv('UTF-8', 'cp874', 'ชื่อ-นามสกุล'), 0, 0, 'L');
$pdf->Cell(95, 4, iconv('UTF-8', 'cp874', $name_and_surname), 'B', 0, 'L');
$pdf->Cell(23, 4, iconv('UTF-8', 'cp874', 'รหัสประจำตัว'), 0, 0, 'L');
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $student_id), 'B', 1, 'L');
$pdf->Cell(0, 3, '', 0, 1);

$pdf->SetFont('angsa', '', 16);
$pdf->Cell(15, 4, iconv('UTF-8', 'cp874', 'สาขาวิชา'), 0, 0, 'L');
$pdf->Cell(95, 4, iconv('UTF-8', 'cp874', $major), 'B', 0, 'L');
$pdf->Cell(8, 4, iconv('UTF-8', 'cp874', 'คณะ'), 0, 0, 'L');
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', $faculty), 'B', 1, 'L');
$pdf->Cell(0, 3, '', 0, 1);

$pdf->SetFont('angsa', '', 16);
$pdf->Cell(15, 4, iconv('UTF-8', 'cp874', 'ขอแจ้งผลการเลือกสถานประกอบการที่ประสงค์จะไปปฎิบัติงานสหกิจศึกษาตามลำดับดังนี้'), 0, 1, 'L');
$pdf->Cell(0, 8, '', 0, 1);

$pdf->SetFont('angsa', 'B', 16);
$pdf->Cell(14.6, 8, iconv('UTF-8', 'cp874', 'ลำดับ'), 'LTB', 0, 'C');
$pdf->Cell(80, 8, iconv('UTF-8', 'cp874', 'ชื่อสถานประกอบการ'), 'LTB', 0, 'C');
$pdf->Cell(30, 8, iconv('UTF-8', 'cp874', 'จังหวัด'), 'LTB', 0, 'C');
$pdf->Cell(0, 8, iconv('UTF-8', 'cp874', 'ตำแหน่งงานที่สมัคร'), 'LTBR', 1, 'C');

$pdf->AddFont('angsa','');
$pdf->SetFont('angsa', '', 16);
$pdf->Cell(14.6, 8, iconv('UTF-8', 'cp874', '1'), 'LB', 0, 'C');

// if($source_lang[0] != "en" && $source_lang[0] != "th") {
// 	$pdf->SetFont('angsa', '', 8);
// 	$pdf->Cell(80, 8, iconv('UTF-8', 'cp1252', $oraganization_name_1), 'LB', 0, 'L');
// 	$pdf->SetFont('angsa', '', 14);
// } else {
	$pdf->Cell(80, 8, iconv('UTF-8', 'cp874', $oraganization_name_1), 'LB', 0, 'L');
//}

$pdf->Cell(30, 8, iconv('UTF-8', 'cp874', $oraganization_province_1), 'LB', 0, 'L');
$pdf->Cell(0, 8, iconv('UTF-8', 'cp874', $position_1), 'LBR', 1, 'L');

$pdf->SetFont('angsa', 'B', 16);
$pdf->Cell(0, 8, iconv('UTF-8', 'cp874', 'ข้อมูลผลการเรียนที่เกี่ยวข้องกับตำแหน่ง'), 'LR', 1, 'L');
$pdf->Cell(0, 3, '', 'LR', 1);

$pdf->SetFont('angsa', '', 16);
$pdf->Cell(25, 4, iconv('UTF-8', 'cp874', 'รหัส-ชื่อรายวิชา'), 'L', 0, 'L');
$pdf->Cell(60, 4, iconv('UTF-8', 'cp874', $subject_id_name_1), 'B', 0, 'L');
$pdf->Cell(32, 4, iconv('UTF-8', 'cp874', 'ภาคการศึกษาที่เรียน'), 0, 0, 'L');
$pdf->Cell(25, 4, iconv('UTF-8', 'cp874', $study_semester_1), 'B', 0, 'L');
$pdf->Cell(16, 4, iconv('UTF-8', 'cp874', 'เกรดที่ได้'), 0, 0, 'L');
$pdf->Cell(25, 4, iconv('UTF-8', 'cp874', $gpa_1), 'B', 0, 'L');
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', ''), 'R', 1, 'L');
$pdf->Cell(0, 4, '', 'LR', 1);

$pdf->SetFont('angsa', '', 16);
$pdf->Cell(52, 4, iconv('UTF-8', 'cp874', 'ใบประกาศนียบัตร-หัวข้อที่อบรม'), 'L', 0, 'L');
$pdf->Cell(35, 4, iconv('UTF-8', 'cp874', $certificate_1), 'B', 0, 'L');
$pdf->Cell(23, 4, iconv('UTF-8', 'cp874', 'ช่วงเวลาอบรม'), 0, 0, 'L');
$pdf->Cell(13, 4, iconv('UTF-8', 'cp874', $training_time_1), 'B', 0, 'L');
$pdf->Cell(35, 4, iconv('UTF-8', 'cp874', '(ชั่วโมง/วัน/เดือน) เริ่ม'), 0, 0, 'L');
$pdf->Cell(10, 4, iconv('UTF-8', 'cp874', $start_date_1), 'B', 0, 'L');
$pdf->Cell(5, 4, iconv('UTF-8', 'cp874', 'ถึง'), 0, 0, 'L');
$pdf->Cell(10, 4, iconv('UTF-8', 'cp874', $end_date_1), 'B', 0, 'L');
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', ''), 'R', 1, 'C');
$pdf->Cell(0, 8, '', 'LRB', 1);

$pdf->SetFont('angsa', '', 16);
$pdf->Cell(14.6, 8, iconv('UTF-8', 'cp874', '2'), 'LB', 0, 'C');

// if($source_lang[1] != "en" && $source_lang[1] != "th") {
// 	$pdf->SetFont('angsa', '', 8);
// 	$pdf->Cell(80, 8, iconv('UTF-8', 'cp1252', $oraganization_name_2), 'LB', 0, 'L');
// 	$pdf->SetFont('angsa', '', 14);
// } else {
	$pdf->Cell(80, 8, iconv('UTF-8', 'cp874', $oraganization_name_2), 'LB', 0, 'L');
//}

$pdf->Cell(30, 8, iconv('UTF-8', 'cp874', $oraganization_province_2), 'LB', 0, 'L');
$pdf->Cell(0, 8, iconv('UTF-8', 'cp874', $position_2), 'LBR', 1, 'L');

$pdf->SetFont('angsa', 'B', 16);
$pdf->Cell(0, 8, iconv('UTF-8', 'cp874', 'ข้อมูลผลการเรียนที่เกี่ยวข้องกับตำแหน่ง'), 'LR', 1, 'L');
$pdf->Cell(0, 3, '', 'LR', 1);

$pdf->SetFont('angsa', '', 16);
$pdf->Cell(25, 4, iconv('UTF-8', 'cp874', 'รหัส-ชื่อรายวิชา'), 'L', 0, 'L');
$pdf->Cell(60, 4, iconv('UTF-8', 'cp874', $subject_id_name_2), 'B', 0, 'L');
$pdf->Cell(32, 4, iconv('UTF-8', 'cp874', 'ภาคการศึกษาที่เรียน'), 0, 0, 'L');
$pdf->Cell(25, 4, iconv('UTF-8', 'cp874', $study_semester_2), 'B', 0, 'L');
$pdf->Cell(16, 4, iconv('UTF-8', 'cp874', 'เกรดที่ได้'), 0, 0, 'L');
$pdf->Cell(25, 4, iconv('UTF-8', 'cp874', $gpa_2), 'B', 0, 'L');
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', ''), 'R', 1, 'C');
$pdf->Cell(0, 4, '', 'LR', 1);

$pdf->SetFont('angsa', '', 16);
$pdf->Cell(52, 4, iconv('UTF-8', 'cp874', 'ใบประกาศนียบัตร-หัวข้อที่อบรม'), 'L', 0, 'L');
$pdf->Cell(35, 4, iconv('UTF-8', 'cp874', $certificate_2), 'B', 0, 'L');
$pdf->Cell(23, 4, iconv('UTF-8', 'cp874', 'ช่วงเวลาอบรม'), 0, 0, 'L');
$pdf->Cell(13, 4, iconv('UTF-8', 'cp874', $training_time_2), 'B', 0, 'L');
$pdf->Cell(35, 4, iconv('UTF-8', 'cp874', '(ชั่วโมง/วัน/เดือน) เริ่ม'), 0, 0, 'L');
$pdf->Cell(10, 4, iconv('UTF-8', 'cp874', $start_date_2), 'B', 0, 'L');
$pdf->Cell(5, 4, iconv('UTF-8', 'cp874', 'ถึง'), 0, 0, 'L');
$pdf->Cell(10, 4, iconv('UTF-8', 'cp874', $end_date_2), 'B', 0, 'L');
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', ''), 'R', 1, 'C');
$pdf->Cell(0, 8, '', 'LRB', 1);
$pdf->Cell(0, 8, '', 0, 1);

/*
$pdf->SetFont('angsa', '', 16);
$pdf->Cell(0, 4, iconv('UTF-8', 'cp874', 'ทั้งนี้ข้าพเจ้าได้แนบชุดใบสมัครงานสหกิจศึกษา(COOP 01 - 03 และเอกสารหลักฐานสำหรับส่งโครงการสหกิจศึกษา)'), 0, 1, 'R');
$pdf::Cell(0, 4, '', 0, 1);

$pdf::SetFont('angsa', '', 16);
$pdf::Cell(32, 4, iconv('UTF-8', 'cp874', 'มาพร้อมแล้วจำนวน'), 0, 0, 'L');
$pdf::Cell(20, 4, iconv('UTF-8', 'cp874', $copy), 'B', 0, 'C');
$pdf::Cell(0, 4, iconv('UTF-8', 'cp874', 'ชุด'), 0, 0, 'L');
$pdf::Cell(0, 16, '', 0, 1);

$pdf::SetFont('angsa', '', 16);
$pdf::Cell(110, 4, iconv('UTF-8', 'cp874', '(ลงชื่อ)'), 0, 0, 'R');
$pdf::Cell(50, 4, iconv('UTF-8', 'cp874', ''), 'B', 0, 'C');
$pdf::Cell(0, 4, iconv('UTF-8', 'cp874', 'นักศึกษา'), 0, 0, 'L');
$pdf::Cell(0, 8, '', 0, 1);

$pdf::SetFont('angsa', '', 16);
$pdf::Cell(105, 4, iconv('UTF-8', 'cp874', '('), 0, 0, 'R');
$pdf::Cell(60, 4, iconv('UTF-8', 'cp874', ''), 'B', 0, 'C');
$pdf::Cell(0, 4, iconv('UTF-8', 'cp874', ')'), 0, 0, 'L');
$pdf::Cell(0, 8, '', 0, 1);

$pdf::SetFont('angsa', '', 16);
$pdf::Cell(115, 4, iconv('UTF-8', 'cp874', 'วันที่'), 0, 0, 'R');
$pdf::Cell(45, 4, iconv('UTF-8', 'cp874', ''), 'B', 1, 'C');
$pdf::Cell(0, 4, '', 0, 1);

$pdf::SetFont('angsa', 'B', 16);
$pdf::Cell(17, 4, iconv('UTF-8', 'cp874', 'หมายเหตุ'), 'B', 0, 'L');
$pdf::Cell(0, 4, '', 0, 1);
$pdf::Cell(0, 4, '', 0, 1);

$pdf::SetFont('angsa', '', 16);
$pdf::Cell(0, 4, iconv('UTF-8', 'cp874', '1.ให้เลือกตำแหน่งที่ต้องการมากที่สุดเป็นอันดับที่ 1 '), 0, 1, 'L');
$pdf::Cell(0, 4, '', 0, 1);

$pdf::SetFont('angsa', '', 16);
$pdf::Cell(0, 4, iconv('UTF-8', 'cp874', '2.สามารถเลือกตำแหน่งได้สูงสุด 2 ลำดับ'), 0, 1, 'L');
$pdf::Cell(0, 4, '', 0, 1);

$pdf::SetFont('angsa', '', 16);
$pdf::Cell(0, 4, iconv('UTF-8', 'cp874', '3.ให้แนบใบสมัครงานสหกิจ(COOP 01 - 03) และเอกสารหลักฐานได้แก่ สำเนาบัตรนักศึกษา สำเนาทะเบียนบ้าน'), 0, 1, 'L');
$pdf::Cell(0, 4, '', 0, 1);

$pdf::SetFont('angsa', '', 16);
$pdf::Cell(0, 4, iconv('UTF-8', 'cp874', '   และสำเนา Transcript จำนวนชุดตามจำนวนตำแหน่งงานที่สมัคร'), 0, 1, 'L');
$pdf::Cell(0, 4, '', 0, 1);

*/




// I is show on brownser D is download
$pdf->Output(/*$fac_short.*/'_coop0104_'.$student_id.'.pdf' , 'I'); // I, D

exit;
?>
