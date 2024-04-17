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
		
		
		$user_id = $this->session->userdata['logged_in']['user_id'];
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
					->setCellValue('G1', 'Alamat')
					->setCellValue('H1', 'Tanggal Interview')
					->setCellValue('I1', 'Responden')
					->setCellValue('J1', 'Nomor HP')
					->setCellValue('K1', 'Segment')
					->setCellValue('L1', 'Status')
					->setCellValue('M1', 'no Whatsupp');
					
					$list = $this->report_excel_model->get_excel($user_id); 
					
					$i = 2;
					foreach($list as $lists){
						
						 $objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A'.$i, $lists['kordinator'])
						->setCellValue('B'.$i, $lists['supervisor'])
						->setCellValue('C'.$i, $lists['surveyor'])
						->setCellValue('D'.$i, $lists['PROVINSI_DAGRI'])
						->setCellValue('E'.$i, $lists['KOTA_X'])
						->setCellValue('F'.$i, $lists['KECAMATAN_DAGRI'])
						->setCellValue('G'.$i, $lists['ALAMAT'])
						->setCellValue('H'.$i, $lists['date_survey'])
						->setCellValue('I'.$i, $lists['NAMA_PELANGGAN'])
						->setCellValue('J'.$i, $lists['NO_HP'])
						->setCellValue('K'.$i, $lists['SES_SEGMENT'])
						->setCellValue('L'.$i, $lists['status_surveyf'])
						->setCellValue('M'.$i, $lists['no_whatsupp']);
						
						$i++;
					}
					
			$objPHPExcel->getActiveSheet()->setTitle('Summary Seurvey');
		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		
		$objWriter->save('/var/www/html/tmp_doc/report_excel.xls');	
		 //ob_end_clean();
		 
		echo "excel";
		
	}
	

}

