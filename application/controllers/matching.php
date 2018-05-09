<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class matching extends CI_Controller {
  public function __construct(){
		parent::__construct();
		$this->load->model('student_model');
    $this->load->helper('php-excel');

	}
  public function matching($major)
  {
    $data['data'] = $this->student_model->matching($major);

                    /** Error reporting */
                    error_reporting(E_ALL);
                    ini_set('display_errors', TRUE);
                    ini_set('display_startup_errors', TRUE);
                    date_default_timezone_set('Asia/Bangkok');

                    if (PHP_SAPI == 'cli')
                    	die('This example should only be run from a Web Browser');

                    /** Include PHPExcel */
                    require_once dirname(__FILE__) . '/../helpers/PHPExcel.php';


                    // Create new PHPExcel object
                    $objPHPExcel = new PHPExcel();

                    // Set document properties
                    $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
                    							 ->setLastModifiedBy("Maarten Balliauw")
                    							 ->setTitle("Office 2007 XLSX Test Document")
                    							 ->setSubject("Office 2007 XLSX Test Document")
                    							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                    							 ->setKeywords("office 2007 openxml php")
                    							 ->setCategory("Test result file");


                    // Add some data
                    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:O1')
                    ->setCellValue('A1',"ประกาศแบบเลือกลำดับสถานประกอบการสหกิจศึกษา 2/58")
                    ->getStyle('A1')->getAlignment()->applyFromArray(
                      array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
                    );

                    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:O2')
                    ->setCellValue('A2',"สาขาวิชาเทคโนโลยีและการจัดการสิ่งแวดล้อม")
                    ->getStyle('A2')->getAlignment()->applyFromArray(
                      array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
                    );

                    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:O3')
                    ->setCellValue('A3',"คณะเทคโนโลยีและสิ่งแวดล้อม")
                    ->getStyle('A3')->getAlignment()->applyFromArray(
                      array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
                    );

                    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:A5')
                                ->setCellValue('A4', "ลำดับที่ ");

                    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B4:B5')
                                ->setCellValue('B4', 'รหัสนักศึกษา');

                    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C4:E5')
                    ->setCellValue('C4',"ชื่อ - สกุล")
                    ->getStyle('C4')->getAlignment()->applyFromArray(
                      array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
                    );

                    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('F4:F5')
                                ->setCellValue('F4', "\n"."หมายเลขโทรศัพท์");


                    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('G4:G5')
                                  ->setCellValue('G4', "E-mail");

                    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('H4:K4')
                                ->setCellValue('H4',"ส่งใบสมัครสหกิจศึกษา ครั้งที่ 1")
                                ->getStyle('H4')->getAlignment()->applyFromArray(
                                  array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
                                );

                    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('L4:O4')
                                            ->setCellValue('L4',"ส่งใบสมัครสหกิจศึกษา ครั้งที่ 2")
                                            ->getStyle('L4')->getAlignment()->applyFromArray(
                                              array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
                                            );

                    $objPHPExcel->setActiveSheetIndex(0)
                                  ->setCellValue('H5', "สถานประกอบการ")
                                  ->setCellValue('I5', "จังหวัด")
                                  ->setCellValue('J5', "ตำแหน่ง")
                                  ->setCellValue('K5', "สถานะ")
                                  ->getStyle()->getAlignment()->applyFromArray(
                                    array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
                                  );
                    $objPHPExcel->setActiveSheetIndex(0)
                                  ->setCellValue('L5', "สถานประกอบการ")
                                  ->setCellValue('M5', "จังหวัด")
                                  ->setCellValue('N5', "ตำแหน่ง")
                                  ->setCellValue('O5', "สถานะ")
                                  ->getStyle()->getAlignment()->applyFromArray(
                                    array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
                                    );

                    // Rename worksheet
                    $objPHPExcel->getActiveSheet()->setTitle('Matching');

                    // Set active sheet index to the first sheet, so Excel opens this as the first sheet
                    $objPHPExcel->setActiveSheetIndex(0);

                    $styleArray = array(
                      'borders' => array(
                        'allborders' => array(
                          'style' => PHPExcel_Style_Border::BORDER_THIN
                        )
                      )
                    );

                    $objPHPExcel->getActiveSheet()->getStyle('A4:G5')->applyFromArray($styleArray);
                    $objPHPExcel->getActiveSheet()->getStyle('H4:O5')->applyFromArray($styleArray);
                    unset($styleArray);

                    $j = 6;
                    for ($col = 'A'; $col != 'O'; $col++) {
                      $objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);

                    }
                    
                    foreach($data as $row)
                    {
                      for ($i=0; $i <count($row) ; $i++) {

                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $j, '0'.$i+1);
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $j, $row[$i][0]['STD_ID']);
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $j, '');
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $j, $row[$i][0]['std_name']);
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $j, $row[$i][0]['std_sname']);
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $j, $row[$i][0]['std_tel']);
                        //$objPHPExcel->getActiveSheet()->getStyle('F'.$j)->getNumberFormat()->setFormatCode( PHPExcel_Style_NumberFormat::FORMAT_TEXT );
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $j, $row[$i][0]['std_email']);
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $j, $row[$i][0][1]); // company
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $j, '');//province
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $j, $row[$i][0][0]); //position
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $j, ''); // status
                        if (isset($row[$i][0][2])) {
                          $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $j, $row[$i][0][3]); // company
                          $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $j, '');
                          $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $j, $row[$i][0][2]);
                          $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $j, '');
                        }
                        else {
                          $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $j, ''); // company
                          $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $j, '');
                          $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $j, '');
                          $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $j, '');
                        }

                        $j++;
                      }

                    }





                    //Redirect output to a client’s web browser (Excel2007)
                    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                    header('Content-Disposition: attachment;filename="01simple.xlsx"');
                    header('Cache-Control: max-age=0');
                    // If you're serving to IE 9, then the following may be needed
                    header('Cache-Control: max-age=1');

                    // If you're serving to IE over SSL, then the following may be needed
                    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
                    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
                    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
                    header ('Pragma: public'); // HTTP/1.0

                    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                    $objWriter->save('php://output');
                    exit;

  }
}

?>
