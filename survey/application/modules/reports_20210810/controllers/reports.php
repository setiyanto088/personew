<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('reports_model');		
		//$this->load->model('Login_model');
	
	}

	function createDateRangeArray($strDateFrom,$strDateTo)
	{
	// takes two dates formatted as YYYY-MM-DD and creates an
	// inclusive array of the dates between the from and to dates.

	// could test validity of dates here but I'm already doing
	// that in the main script

	$aryRange = [];

	$iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
	$iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));

	if ($iDateTo >= $iDateFrom) {
		array_push($aryRange, date('Y-m-d', $iDateFrom)); // first entry
		while ($iDateFrom<$iDateTo) {
		$iDateFrom += 86400; // add 24 hours
		array_push($aryRange, date('Y-m-d', $iDateFrom));
		}
	}

	return $aryRange;

	}
	
	public function exports() {
		
		
		$array_surveys = $this->reports_model->list_survey();
			$array_data = [];

			foreach($array_surveys as $array_surveys){
				$array_data[$array_surveys['KOTA_KABUPATEN_DAGRI']]['KOTA'] = $array_surveys['KOTA_KABUPATEN_DAGRI'];
				$array_data[$array_surveys['KOTA_KABUPATEN_DAGRI']]['URBAN'] = $array_surveys['URBAN'];
				$array_data[$array_surveys['KOTA_KABUPATEN_DAGRI']]['RURAL'] = $array_surveys['RURAL'];
			}

			//print_r($array_data);die;

			$data['data_survey'] = $array_data;
			
			$data['array_t1'] = [['Medan',66,84,150],['Banda Aceh',19,30,49],['Pemantang Siantar',11,11,22],['Pekanbaru',21,84,105],['Padang',25,52,77],['Palembang',45,60,105],['Jambi',20,51,71],['Bandar Lampung',33,61,94]];
			$data['array_t2'] = [['Jakarta Timur',230,98,328],['Bekasi',257,143,400],['Jakarta Selatan',274,8,282],['Jakarta Barat',195,12,207],['Tangerang',139,99,238],['Jakarta Utara',223,12,235],['Jakarta Pusat',148,26,174],['Bogor',108,140,148],['Tangerang Selatan',123,42,165],['Depok',141,56,197]];
			$data['array_t3'] = [['Bandung',296,113,409],['Tasikmalaya',34,28,62],['Sukabumi',37,29,66]];
			$data['array_t4'] = [['Semarang',137,43,180],['Yogyakarta',33,6,39],['Surakarta / Solo',33,8,41]];
			$data['array_t5'] = [['Surabaya',95,25,120],['Malang',23,48,71],['Sidoarjo',59,46,105],['Denpasar',71,5,76]];
			$data['array_t6'] = [['Balikpapan',95,25,120],['Samarinda',123,31,154],['Banjarmasin',51,11,62],['Pontianak',80,11,91]];
			$data['array_t7'] = [['Makassar',84,40,124],['Manado',70,6,76],['Ambon',41,11,52],['Mataram',30,9,39]];
		
		 $styleArray = array(
		   'font'  => array(
				'bold'  => true,
				'color' => array('rgb' => 'FF0000'),
				'size'  => 15,
				'name'  => 'Verdana'
			)); 
		
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
					->mergeCells('A1:A2')
					->setCellValue('A1', 'Wilayah')
					->mergeCells('B1:B2')
					->setCellValue('B1', 'Kota')
					->mergeCells('C1:E1')
					->setCellValue('C1', 'Urban')
					->mergeCells('F1:H1')
					->setCellValue('F1', 'Rural')
					->mergeCells('I1:K1')
					->setCellValue('I1', 'Total')
					->setCellValue('C2', 'Target')
					->setCellValue('D2', 'Hasil')
					->setCellValue('E2', '%')
					->setCellValue('F2', 'Target')
					->setCellValue('G2', 'Hasil')
					->setCellValue('H2', '%')
					->setCellValue('I2', 'Target')
					->setCellValue('J2', 'Hasil')
					->setCellValue('K2', '%');
					
					$i = 3;
					
					$il = 0;
					$total_urban = 0; 
					$total_rural = 0;
					foreach($data['array_t1'] as $val){
						
						if($il == 0 ){
							$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, "Treg 1");
						}
						
						$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('B'.$i, $val[0])
						->setCellValue('C'.$i, $val[1])
						->setCellValue('D'.$i, $data['data_survey'][$val[0]]['URBAN'])
						->setCellValue('E'.$i, number_format(($data['data_survey'][$val[0]]['URBAN']/$val[1])*100,1,',','.')." %")
						->setCellValue('F'.$i, $val[2])
						->setCellValue('G'.$i, $data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('H'.$i, number_format(($data['data_survey'][$val[0]]['RURAL']/$val[2])*100,1,',','.')." %")
						->setCellValue('I'.$i, $val[3])
						->setCellValue('J'.$i, $data['data_survey'][$val[0]]['URBAN']+$data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('K'.$i, (number_format((($data['data_survey'][$val[0]]['RURAL']+$data['data_survey'][$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.')." %"));
						
						$i++;
						$il++;
						
						$total_urban += $data['data_survey'][$val[0]]['URBAN']; $total_rural += $data['data_survey'][$val[0]]['RURAL']; 
					}
					
					$il = 0;
					foreach($data['array_t2'] as $val){
						
						if($il == 0 ){
							$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, "Treg 2");
						}
						
						$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('B'.$i, $val[0])
						->setCellValue('C'.$i, $val[1])
						->setCellValue('D'.$i, $data['data_survey'][$val[0]]['URBAN'])
						->setCellValue('E'.$i, number_format(($data['data_survey'][$val[0]]['URBAN']/$val[1])*100,1,',','.')." %")
						->setCellValue('F'.$i, $val[2])
						->setCellValue('G'.$i, $data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('H'.$i, number_format(($data['data_survey'][$val[0]]['RURAL']/$val[2])*100,1,',','.')." %")
						->setCellValue('I'.$i, $val[3])
						->setCellValue('J'.$i, $data['data_survey'][$val[0]]['URBAN']+$data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('K'.$i, (number_format((($data['data_survey'][$val[0]]['RURAL']+$data['data_survey'][$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.')." %"));
						
						$i++;
						$il++;
						$total_urban += $data['data_survey'][$val[0]]['URBAN']; $total_rural += $data['data_survey'][$val[0]]['RURAL']; 
					}
					
					$il = 0;
					foreach($data['array_t3'] as $val){
						
						if($il == 0 ){
							$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, "Treg 3");
						}
						
						$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('B'.$i, $val[0])
						->setCellValue('C'.$i, $val[1])
						->setCellValue('D'.$i, $data['data_survey'][$val[0]]['URBAN'])
						->setCellValue('E'.$i, number_format(($data['data_survey'][$val[0]]['URBAN']/$val[1])*100,1,',','.')." %")
						->setCellValue('F'.$i, $val[2])
						->setCellValue('G'.$i, $data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('H'.$i, number_format(($data['data_survey'][$val[0]]['RURAL']/$val[2])*100,1,',','.')." %")
						->setCellValue('I'.$i, $val[3])
						->setCellValue('J'.$i, $data['data_survey'][$val[0]]['URBAN']+$data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('K'.$i, (number_format((($data['data_survey'][$val[0]]['RURAL']+$data['data_survey'][$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.')." %"));
						
						$i++;
						$il++;
						$total_urban += $data['data_survey'][$val[0]]['URBAN']; $total_rural += $data['data_survey'][$val[0]]['RURAL']; 
					}
					
					$il = 0;
					foreach($data['array_t4'] as $val){
						
						if($il == 0 ){
							$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, "Treg 4");
						}
						
						$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('B'.$i, $val[0])
						->setCellValue('C'.$i, $val[1])
						->setCellValue('D'.$i, $data['data_survey'][$val[0]]['URBAN'])
						->setCellValue('E'.$i, number_format(($data['data_survey'][$val[0]]['URBAN']/$val[1])*100,1,',','.')." %")
						->setCellValue('F'.$i, $val[2])
						->setCellValue('G'.$i, $data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('H'.$i, number_format(($data['data_survey'][$val[0]]['RURAL']/$val[2])*100,1,',','.')." %")
						->setCellValue('I'.$i, $val[3])
						->setCellValue('J'.$i, $data['data_survey'][$val[0]]['URBAN']+$data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('K'.$i, (number_format((($data['data_survey'][$val[0]]['RURAL']+$data['data_survey'][$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.')." %"));
						
						$i++;
						$il++;
						$total_urban += $data['data_survey'][$val[0]]['URBAN']; $total_rural += $data['data_survey'][$val[0]]['RURAL']; 
					}
					
					$il = 0;
					foreach($data['array_t5'] as $val){
						
						if($il == 0 ){
							$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, "Treg 5");
						}
						
						$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('B'.$i, $val[0])
						->setCellValue('C'.$i, $val[1])
						->setCellValue('D'.$i, $data['data_survey'][$val[0]]['URBAN'])
						->setCellValue('E'.$i, number_format(($data['data_survey'][$val[0]]['URBAN']/$val[1])*100,1,',','.')." %")
						->setCellValue('F'.$i, $val[2])
						->setCellValue('G'.$i, $data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('H'.$i, number_format(($data['data_survey'][$val[0]]['RURAL']/$val[2])*100,1,',','.')." %")
						->setCellValue('I'.$i, $val[3])
						->setCellValue('J'.$i, $data['data_survey'][$val[0]]['URBAN']+$data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('K'.$i, (number_format((($data['data_survey'][$val[0]]['RURAL']+$data['data_survey'][$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.')." %"));
						
						$i++;
						$il++;
						$total_urban += $data['data_survey'][$val[0]]['URBAN']; $total_rural += $data['data_survey'][$val[0]]['RURAL']; 
					}
					
					$il = 0;
					foreach($data['array_t6'] as $val){
						
						if($il == 0 ){
							$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, "Treg 6");
						}
						
						$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('B'.$i, $val[0])
						->setCellValue('C'.$i, $val[1])
						->setCellValue('D'.$i, $data['data_survey'][$val[0]]['URBAN'])
						->setCellValue('E'.$i, number_format(($data['data_survey'][$val[0]]['URBAN']/$val[1])*100,1,',','.')." %")
						->setCellValue('F'.$i, $val[2])
						->setCellValue('G'.$i, $data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('H'.$i, number_format(($data['data_survey'][$val[0]]['RURAL']/$val[2])*100,1,',','.')." %")
						->setCellValue('I'.$i, $val[3])
						->setCellValue('J'.$i, $data['data_survey'][$val[0]]['URBAN']+$data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('K'.$i, (number_format((($data['data_survey'][$val[0]]['RURAL']+$data['data_survey'][$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.')." %"));
						
						$i++;
						$il++;
						$total_urban += $data['data_survey'][$val[0]]['URBAN']; $total_rural += $data['data_survey'][$val[0]]['RURAL']; 
					}
					
					$il = 0;
					foreach($data['array_t7'] as $val){
						
						if($il == 0 ){
							$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, "Treg 7");
						}
						
						$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('B'.$i, $val[0])
						->setCellValue('C'.$i, $val[1])
						->setCellValue('D'.$i, $data['data_survey'][$val[0]]['URBAN'])
						->setCellValue('E'.$i, number_format(($data['data_survey'][$val[0]]['URBAN']/$val[1])*100,1,',','.')." %")
						->setCellValue('F'.$i, $val[2])
						->setCellValue('G'.$i, $data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('H'.$i, number_format(($data['data_survey'][$val[0]]['RURAL']/$val[2])*100,1,',','.')." %")
						->setCellValue('I'.$i, $val[3])
						->setCellValue('J'.$i, $data['data_survey'][$val[0]]['URBAN']+$data['data_survey'][$val[0]]['RURAL'])
						->setCellValue('K'.$i, (number_format((($data['data_survey'][$val[0]]['RURAL']+$data['data_survey'][$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.')." %"));
						
						$i++;
						$il++;
						$total_urban += $data['data_survey'][$val[0]]['URBAN']; $total_rural += $data['data_survey'][$val[0]]['RURAL']; 
					}
					
					$objPHPExcel->setActiveSheetIndex(0)
					->mergeCells('A'.$i.':B'.$i)
					->setCellValue('A'.$i, 'Total')
					->setCellValue('C'.$i, '3.435')
					->setCellValue('D'.$i, $total_urban)
					->setCellValue('E'.$i, number_format(($total_urban/3435)*100,1,',','.').' %')
					->setCellValue('F'.$i, '1.565')
					->setCellValue('G'.$i, $total_rural)
					->setCellValue('H'.$i, number_format(($total_rural/1565)*100,1,',','.').' %')
					->setCellValue('I'.$i, '5.000')
					->setCellValue('J'.$i, number_format($total_urban+$total_rural,0,',','.'))
					->setCellValue('K'.$i, number_format((($total_urban+$total_rural)/5000)*100,1,',','.').' %');
					
				//	$list = $this->report_excel_model->get_excel(); 
					
					
					// foreach($list as $lists){
						
						 // $objPHPExcel->setActiveSheetIndex(0)
						// ->setCellValue('A'.$i, $lists['kordinator'])
						// ->setCellValue('B'.$i, $lists['supervisor'])
						// ->setCellValue('C'.$i, $lists['surveyor'])
						// ->setCellValue('D'.$i, $lists['PROVINSI_DAGRI'])
						// ->setCellValue('E'.$i, $lists['KOTA_KABUPATEN_DAGRI'])
						// ->setCellValue('F'.$i, $lists['KECAMATAN_DAGRI'])
						// ->setCellValue('G'.$i, $lists['tanggal'])
						// ->setCellValue('H'.$i, $lists['respondent'])
						// ->setCellValue('I'.$i, $lists['no_handphone']);
						
						// $i++;
					// }
					
			$objPHPExcel->getActiveSheet()->setTitle('Audience by Day Summary');
		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		
		$objWriter->save('/var/www/html/tmp_doc/reports_excel_summary.xls');	
		 //ob_end_clean();
		 
		//echo "excel";
		
	}

	public function get_resume(){
		
		$type_data = strtolower($this->Anti_sql_injection($this->input->post('type_data', TRUE)));
		$kota  = strtolower($this->Anti_sql_injection($this->input->post('kota', TRUE)));

		if($type_data == 1){
			$data['get_chart'] = $this->reports_model->get_chart_total($kota); 
		}else if($type_data == 2){
			$data['get_chart'] = $this->reports_model->get_chart_sedia($kota); 
		}else if($type_data == 3){
			$data['get_chart'] = $this->reports_model->get_chart_interview($kota); 
		}

		
		
		$array_data = $this->createDateRangeArray('2021-06-01','2021-08-31');

		//print_r($data['get_chart']);die;

		$array_val = [];
		$ii = 0;
		foreach($array_data as $array_datas){
		
			$array_val[$ii] = 0;
			foreach($data['get_chart'] as $array_datasc){
				if($array_datas == $array_datasc['dt']){
					$array_val[$ii] = $array_datasc['cnt'];
				}
			}

			$ii++;
		}
		
		$html = '';
		
		$data['label'] = $array_data;
		$data['val'] = $array_val; 
		//$data['new_chart'] = $array_chart;
		//print_r($data['get_resume']);die;
		
		$result = array('success' => true, 'message' => '', 'html' => $data , 'chart' => $array_val, 'chart_label' => $array_data);
			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		
	}
	
	public function index()
	{
		
			$session_val = $this->session->userdata['logged_in'];
			$data['session'] = $session_val;
	
		

			$array_surveys = $this->reports_model->list_survey();
			$array_data = [];

			foreach($array_surveys as $array_surveys){
				$array_data[$array_surveys['KOTA_KABUPATEN_DAGRI']]['KOTA'] = $array_surveys['KOTA_KABUPATEN_DAGRI'];
				$array_data[$array_surveys['KOTA_KABUPATEN_DAGRI']]['URBAN'] = $array_surveys['URBAN'];
				$array_data[$array_surveys['KOTA_KABUPATEN_DAGRI']]['RURAL'] = $array_surveys['RURAL'];
			}

			//print_r($array_data);die;

			$data['data_survey'] = $array_data;
			
			$data['array_t1'] = [['Medan',66,84,150],['Banda Aceh',19,30,49],['Pemantang Siantar',11,11,22],['Pekanbaru',21,84,105],['Padang',25,52,77],['Palembang',45,60,105],['Jambi',20,51,71],['Bandar Lampung',33,61,94]];
			$data['array_t2'] = [['Jakarta Timur',230,98,328],['Bekasi',257,143,400],['Jakarta Selatan',274,8,282],['Jakarta Barat',195,12,207],['Tangerang',139,99,238],['Jakarta Utara',223,12,235],['Jakarta Pusat',148,26,174],['Bogor',108,140,148],['Tangerang Selatan',123,42,165],['Depok',141,56,197]];
			$data['array_t3'] = [['Bandung',296,113,409],['Tasikmalaya',34,28,62],['Sukabumi',37,29,66]];
			$data['array_t4'] = [['Semarang',137,43,180],['Yogyakarta',33,6,39],['Surakarta / Solo',33,8,41]];
			$data['array_t5'] = [['Surabaya',95,25,120],['Malang',23,48,71],['Sidoarjo',59,46,105],['Denpasar',71,5,76]];
			$data['array_t6'] = [['Balikpapan',95,25,120],['Samarinda',123,31,154],['Banjarmasin',51,11,62],['Pontianak',80,11,91]];
			$data['array_t7'] = [['Makassar',84,40,124],['Manado',70,6,76],['Ambon',41,11,52],['Mataram',30,9,39]];

			

			//print_r($session_val);die;
	
			//$this->template->load('maintemplate', 'reports/views/detail', $data);
			$this->template->load('maintemplate', 'reports/views/home', $data);
		
	}
	
	function lists() {
		
		 if( !empty($_GET['sess_user_id']) ) {
			  $sess_user_id = $_GET['sess_user_id'];
		  } else {
			  $sess_user_id = NULL;
		  }
		  
		   if( !empty($_GET['sess_token']) ) {
			  $sess_token = $_GET['sess_token'];
		  } else {
			  $sess_token = NULL;
		  }
		  
		    if( $this->input->get_post('draw') != FALSE )   {$draw   = $this->input->get_post('draw');}   else{$draw   = 1;}; 
		  if( $this->input->get_post('length') != FALSE ) {$length = $this->input->get_post('length');} else{$length = 10;}; 
		  if( $this->input->get_post('start') != FALSE )  {$start  = $this->input->get_post('start');}  else{$start  = 0;}; 				
		  $order_fields = array('user_id','user_id','ktp_name','ktp_date_of_birth','ktp_nik','ijazah_institution','ijazah_major','transkrip_gpa','t_val','t_val'); // , 'COST'
		  $order = $this->input->get_post('order');
		  if( ! empty($order[0]['dir']))    {$order_dir    = $order[0]['dir'];}    else{$order_dir    = 'asc';}; 
		  if( ! empty($order[0]['column'])) {$order_column = $order[0]['column'];} else{$order_column = 0;}; 	
		  
		    $params['limit'] 		= (int) $length;
			$params['offset'] 		= (int) $start;
			$params['order_column'] = $order_fields[$order_column];
			$params['order_dir'] 	= $order_dir;
			$params['sess_user_id'] = $sess_user_id;
			$params['sess_token'] 	= $sess_token;
			$params['searchtxt'] 	= $_GET['search']['value'];
		  
		 // print_r($params);die;
		  
			$list = $this->reports_model->list_po($params); 
			//print_r($list['data']);die;
			  $data = array();	
				   foreach ( $list['data'] as $k => $v ) {		

						$action = '<button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
            data-original-title="Detail" onClick="detail('.$v['user_id'].')">Detail </button>';			
						
						$validation = 0;
						
						// if($v['ktp_nik_v'] == 'True'){
							// $validation++; 
						// }
						
						
						// if($v['ktp_date_of_birth_v'] == 'True'){
							// $validation++; 
						// }
						
						
						// if($v['ktp_nik_v'] == 'True'){
							// $validation++; 
						// }
						
						
						// if($v['ijazah_institution_v'] == 'True'){
							// $validation++; 
						// }
						
						
						// if($v['transkrip_gpa_v'] == 'True'){
							// $validation++; 
						// }
						 
						if($v['t_val'] == 0){
							$bval = '<span class="badge badge-round badge-success">Semua Valid</span>';
						}elseif($v['t_val'] < 6){
							$bval = '<span class="badge badge-round badge-warning">Valid Sebagian</span>';
						}else{
							$bval = '<span class="badge badge-round badge-danger">Tidak Valid</span>';
						}
						
						  array_push($data, 
							  array(
								  number_format($v['Rangking'],0,',','.'),
								  $v['user_id'],
								  $v['ktp_name'],
								  $v['ktp_date_of_birth'],
								  $v['ktp_nik'],
								  $v['ijazah_institution'], 
								   $v['ijazah_major'], 
								  $v['transkrip_gpa'],
								 
								  
								  $bval,
								  $action
							  )
							);
							//$idx++;
				   }
		   
			 $result["data"] = $data;
		$result["recordsTotal"] = $list['total'];
		$result["recordsFiltered"] = $list['total_filtered'];
		$result["draw"] = $draw;
		//$result["data"] = $list['data'];
	  
		echo json_encode($result);
	  
				//$this->json_result($result);
		  
	}
	
	public function detail(){
		
			$data = array(
				'id' => $this->Anti_sql_injection($this->input->post('user_id', TRUE)),
			);
			$result = $this->reports_model->get_detail($data['id']);

			//print_r($result);die;

			$data = array(
				'detail' 				=> $result[0]
			);

		$this->template->load('maintemplate', 'reports/views/detail', $data);
		
	}

	public function Anti_sql_injection($string) {
		$string = strip_tags(trim(addslashes(htmlspecialchars(stripslashes($string)))));
		return $string;
	}
	
}
