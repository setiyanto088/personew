<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_kordinator extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('home_kordinator_model');		
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
				$data['get_chart'] = $this->home_kordinator_model->get_chart($session_val['user_id']); 
			}else if($type_data == 2){
				$data['get_chart'] = $this->home_kordinator_model->get_chart_sedia_all($session_val['user_id']); 
			}else if($type_data == 3){
				$data['get_chart'] = $this->home_kordinator_model->get_chart_interview_all($session_val['user_id']); 
			}
		}else{
			if($type_data == 1){
				$data['get_chart'] = $this->home_kordinator_model->get_chart_total($kota,$session_val['user_id']); 
			}else if($type_data == 2){
				$data['get_chart'] = $this->home_kordinator_model->get_chart_sedia($kota,$session_val['user_id']); 
			}else if($type_data == 3){
				$data['get_chart'] = $this->home_kordinator_model->get_chart_interview($kota,$session_val['user_id']); 
			}
		}

		

	
		
		$array_data = $this->createDateRangeArray('2021-06-01','2021-10-01');

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
	
			$data['total_call'] = $this->home_kordinator_model->get_total_call($session_val['user_id']);
			$data['total_call_bersedia'] = $this->home_kordinator_model->get_total_call_bersedia($session_val['user_id']);
			$data['total_interview'] = $this->home_kordinator_model->get_total_interview($session_val['user_id']);
			$data['get_chart'] = $this->home_kordinator_model->get_chart($session_val['user_id']); 
			$data['get_location'] = $this->home_kordinator_model->get_location($session_val['user_id']); 
			$data['table_data'] = $this->home_kordinator_model->table_data($session_val['user_id']);

			//print_r($data['table_data']);die;

			$array_data = $this->createDateRangeArray('2021-06-15','2021-10-01');

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
	
			//$this->template->load('maintemplate', 'home_kordinator/views/detail', $data);
			$this->template->load('maintemplate', 'home_kordinator/views/home', $data);
		
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
		  
			$list = $this->home_kordinator_model->list_po($params); 
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
			$result = $this->home_kordinator_model->get_detail($data['id']);

			//print_r($result);die;

			$data = array(
				'detail' 				=> $result[0]
			);

		$this->template->load('maintemplate', 'home_kordinator/views/detail', $data);
		
	}

	public function Anti_sql_injection($string) {
		$string = strip_tags(trim(addslashes(htmlspecialchars(stripslashes($string)))));
		return $string;
	}
	
}
