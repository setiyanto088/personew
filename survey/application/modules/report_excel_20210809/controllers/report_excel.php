<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Api Contact
 * Controller berhubungan dengan data-data contact
 *
 * @author triswansyah.yuliano@gmail.com
 * @copyright (c) 2015 PT. Swamedia Informatika
 */
class Report_excel extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('report_excel/report_excel_model');
	}
	
	public function export() {
		
		$this->load->library('excel'); 
	   
	   $objPHPExcel = new PHPExcel();
	   
	     
	   $objPHPExcel->getProperties()->setCreator("Unics")
									 ->setLastModifiedBy("Unics")
									 ->setTitle("Postbuy Analytics")
									 ->setSubject("Postbuy Analytics")
									 ->setDescription("Report Postbuy")
									 ->setKeywords("Postbuy Analytics")
									 ->setCategory("Report");
	   
	   $objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1', 'Kordinator Supervisor')
					->setCellValue('B1', 'Supervisor')
					->setCellValue('C1', 'Surveyor')
					->setCellValue('D1', 'Provinsi')
					->setCellValue('E1', 'Kota')
					->setCellValue('F1', 'Kecamatan')
					->setCellValue('G1', 'Tanggal Interview')
					->setCellValue('H1', 'Responden')
					->setCellValue('I1', 'Nomor HP');
					
					$list = $this->report_excel_model->get_excel(); 
					
					$i = 2;
					foreach($list as $lists){
						
						 $objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A'.$i, $lists['kordinator'])
						->setCellValue('B'.$i, $lists['supervisor'])
						->setCellValue('C'.$i, $lists['surveyor'])
						->setCellValue('D'.$i, $lists['PROVINSI_DAGRI'])
						->setCellValue('E'.$i, $lists['KOTA_KABUPATEN_DAGRI'])
						->setCellValue('F'.$i, $lists['KECAMATAN_DAGRI'])
						->setCellValue('G'.$i, $lists['tanggal'])
						->setCellValue('H'.$i, $lists['respondent'])
						->setCellValue('I'.$i, $lists['no_handphone']);
						
						$i++;
					}
					
			$objPHPExcel->getActiveSheet()->setTitle('Audience by Day Summary');
		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		
		$objWriter->save('/var/www/html/tmp_doc/report_excel.xls');	
		 //ob_end_clean();
		 
		//echo "excel";
		
	}
	

}

