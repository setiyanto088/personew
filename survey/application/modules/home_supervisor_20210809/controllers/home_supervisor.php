<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_supervisor extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('home_supervisor_model');		
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

	public function get_resume(){
		$session_val = $this->session->userdata['logged_in'];
		$data['session'] = $session_val;

		$type_data = strtolower($this->Anti_sql_injection($this->input->post('type_data', TRUE)));
		$kota  = strtolower($this->Anti_sql_injection($this->input->post('kota', TRUE)));

		//echo $kota;die;

		if($kota == 0){
			if($type_data == 1){
				$data['get_chart'] = $this->home_supervisor_model->get_chart($session_val['user_id']); 
			}else if($type_data == 2){
				$data['get_chart'] = $this->home_supervisor_model->get_chart_sedia_all($session_val['user_id']); 
			}else if($type_data == 3){
				$data['get_chart'] = $this->home_supervisor_model->get_chart_interview_all($session_val['user_id']); 
			}
		}else{
			if($type_data == 1){
				$data['get_chart'] = $this->home_supervisor_model->get_chart_total($kota,$session_val['user_id']); 
			}else if($type_data == 2){
				$data['get_chart'] = $this->home_supervisor_model->get_chart_sedia($kota,$session_val['user_id']); 
			}else if($type_data == 3){
				$data['get_chart'] = $this->home_supervisor_model->get_chart_interview($kota,$session_val['user_id']); 
			}
		}

		

	
		
		$array_data = $this->createDateRangeArray('2021-06-01',date('Y-m-d'));

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
			
			//print_r($session_val);die;
	
			$data['total_call'] = $this->home_supervisor_model->get_total_call($session_val['user_id']);
			$data['total_call_bersedia'] = $this->home_supervisor_model->get_total_call_bersedia($session_val['user_id']);
			$data['total_interview'] = $this->home_supervisor_model->get_total_interview($session_val['user_id']);
			$data['get_chart'] = $this->home_supervisor_model->get_chart($session_val['user_id']); 
			$data['get_location'] = $this->home_supervisor_model->get_location($session_val['user_id']); 
			$data['table_data'] = $this->home_supervisor_model->table_data($session_val['user_id']);

			$array_surveys = $this->home_supervisor_model->list_survey($session_val['user_id']);
			$array_data = [];

			foreach($array_surveys as $array_surveys){
				$array_data[$array_surveys['KOTA_KABUPATEN_DAGRI']]['KOTA'] = $array_surveys['KOTA_KABUPATEN_DAGRI'];
				$array_data[$array_surveys['KOTA_KABUPATEN_DAGRI']]['URBAN'] = $array_surveys['URBAN'];
				$array_data[$array_surveys['KOTA_KABUPATEN_DAGRI']]['RURAL'] = $array_surveys['RURAL'];
			}

			//print_r($data['get_location']);die;

			$data['data_survey'] = $array_data;

			$array_target = [['Medan',66,84,150],['Banda Aceh',19,30,49],['Pemantang Siantar',11,11,22],['Pekanbaru',21,84,105],['Padang',25,52,77],['Palembang',45,60,105],['Jambi',20,51,71],['Bandar Lampung',33,61,94],
			['Jakarta Timur',230,98,328],['Bekasi',257,143,400],['Jakarta Selatan',274,8,282],['Jakarta Barat',195,12,207],['Tangerang',139,99,238],['Jakarta Utara',223,12,235],['Jakarta Pusat',148,26,174],
			['Bogor',108,140,148],['Tangerang Selatan',123,42,165],['Depok',141,56,197],['Bandung',296,113,409],['Tasikmalaya',34,28,62],['Sukabumi',37,29,66],['Semarang',137,43,180],['Yogyakarta',33,6,39],['Surakarta / Solo',33,8,41],
			['Surabaya',95,25,120],['Malang',23,48,71],['Sidoarjo',59,46,105],['Denpasar',71,5,76],['Balikpapan',95,25,120],['Samarinda',123,31,154],['Banjarmasin',51,11,62],['Pontianak',80,11,91],
			['Makassar',84,40,124],['Manado',70,6,76],['Ambon',41,11,52],['Mataram',30,9,39]];

			$array_targets = [];

			foreach($array_target as $array_targetx){

				$array_targets[$array_targetx[0]] = $array_targetx;

			}

			//print_r($array_targets);die;

			/*$data['array_t1'] = [['Medan',66,84,150],['Banda Aceh',19,30,49],['Pemantang Siantar',11,11,22],['Pekanbaru',21,84,105],['Padang',25,52,77],['Palembang',45,60,105],['Jambi',20,51,71],['Bandar Lampung',33,61,94]];
			$data['array_t2'] = [['Jakarta Timur',230,98,328],['Bekasi',257,143,400],['Jakarta Selatan',274,8,282],['Jakarta Barat',195,12,207],['Tangerang',139,99,238],['Jakarta Utara',223,12,235],['Jakarta Pusat',148,26,174],['Bogor',108,140,148],['Tangerang Selatan',123,42,165],['Depok',141,56,197]];
			$data['array_t3'] = [['Bandung',296,113,409],['Tasikmalaya',34,28,62],['Sukabumi',37,29,66]];
			$data['array_t4'] = [['Semarang',137,43,180],['Yogyakarta',33,6,39],['Surakarta / Solo',33,8,41]];
			$data['array_t5'] = [['Surabaya',95,25,120],['Malang',23,48,71],['Sidoarjo',59,46,105],['Denpasar',71,5,76]];
			$data['array_t6'] = [['Balikpapan',60,26,86],['Samarinda',123,31,154],['Banjarmasin',51,11,62],['Pontianak',80,11,91]];
			$data['array_t7'] = [['Makassar',84,40,124],['Manado',70,6,76],['Ambon',41,11,52],['Mataram',30,9,39]];*/

			$ii = 0;
			foreach($data['get_location'] as $location){

				$data['array_t1'][$ii] = $array_targets[$location['location_name']];
				$data['array_t1'][$ii]['header'] = 1;
				$ii++;
				
				$array_surveys = $this->home_supervisor_model->list_survey_detail($session_val['user_id'],$location['location_name']);
				
				foreach($array_surveys as $array_surveysds){
					
					$data['array_t1'][$ii][0] = $array_surveysds['nama_s'];
					$data['array_t1'][$ii][4] = $array_surveysds['nama_spv'];
					$data['array_t1'][$ii][1] = $array_surveysds['survey_urban'];
					$data['array_t1'][$ii][2] = $array_surveysds['survey_rural'];
					$data['array_t1'][$ii][3] = $array_surveysds['survey_urban']+$array_surveysds['survey_rural'];
					$data['array_t1'][$ii]['header'] = 0;
					$ii++;
				}
				
				
			}

			// echo "<pre>";
			// print_r($data['array_t1']);die;
			// echo "</pre";

			$array_data = $this->createDateRangeArray('2021-06-01',date('Y-m-d'));

			$array_val = [];

			$array_date_str = '';
			$array_val_str = '';

			$ii = 0;
			foreach($array_data as $array_datas){
				$array_date_str .= "'".$array_datas."',";
				//$array_val[$ii] = 0
				$temp_val = '';
				foreach($data['get_chart'] as $array_datasc){
					if($array_datas == $array_datasc['dt']){
						$temp_val = "'".$array_datasc['cnt']."',";
					}
				}

				if($temp_val == ''){
					$array_val_str .= "'0',";
				}else{
					$array_val_str .= $temp_val;
				}
				
				$ii++;
			}

			$data['date_da'] = substr($array_date_str,0,-1);
			$data['chart_data'] = substr($array_val_str,0,-1);
			//print_r($session_val);die;
	
			//$this->template->load('maintemplate', 'home_supervisor/views/detail', $data);
			$this->template->load('maintemplate', 'home_supervisor/views/home', $data);
		
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
		  
			$list = $this->home_supervisor_model->list_po($params); 
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
			$result = $this->home_supervisor_model->get_detail($data['id']);

			//print_r($result);die;

			$data = array(
				'detail' 				=> $result[0]
			);

		$this->template->load('maintemplate', 'home_supervisor/views/detail', $data);
		
	}

	public function Anti_sql_injection($string) {
		$string = strip_tags(trim(addslashes(htmlspecialchars(stripslashes($string)))));
		return $string;
	}
	
}
