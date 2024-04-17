<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');		
		//$this->load->model('Login_model');
	
	}
	
	public function index()
	{
		
			$session_val = $this->session->userdata['logged_in'];
			$data['session'] = $session_val;
			
			//var_dump($session_val);
			
			$data['user'] = $this->contact_model->get_user(); 
			$data['kota'] = $this->contact_model->get_kota(); 
			$data['kecamatan'] = $this->contact_model->get_kelurahan($session_val);
			$data['contact'] = $this->contact_model->get_contact($session_val); 
			//print_r($data['user']);die;
		
			//$this->template->load('maintemplate', 'contact/views/detail', $data);
			$this->template->load('maintemplate', 'contact/views/home', $data);
		
	}
	
	public function get_top_program(){
		
		$data   = file_get_contents("php://input");
		$param   = json_decode($data, true);
		
		//$kota - explode('|',$param['kota_list'];
		
		//print_r($param);die;
		
		$result = $this->contact_model->get_respondent($param);
		
		$dataf['result'] = $result;
		
		//echo json_encode($data,true); 
		echo json_encode($result,true);
		
	}
	
	public function filter_kota(){
		
		$data   = file_get_contents("php://input");
		$param   = json_decode($data, true);
		$session_val = $this->session->userdata['logged_in'];
		//$dataf['session'] = $session_val;
		//$kota - explode('|',$param['kota_list'];
		
		//print_r($param);die;
	
		$result = $this->contact_model->get_list_contact($param,$session_val );
		$html = '';
		
		
		$int = 0;
		foreach($result as $results){
			
			if($results['SEGMENT'] == "RURAL"){
				$img = 'Status.png';
			}else{
				$img = 'Status2.png';
			}
			
			$html .= "<tr id='rowd_".$int."' class='rowd' onclick=\"select_cont('".$results['NAMA_PELANGGAN']."|".$results['NO_HP']."|".$results['CARDNO']."|".$results['ALAMAT']."|".$int."')\" style='cursor: pointer;' >
			<td><img src='https://inrate.id/survey_new_dev/uploads/".$img."' class='mr-2' alt='logo' style=''/></td>
			<td>".$results['NAMA_PELANGGAN']."<br>+62".$results['NO_HP']."</td>
			<td>></td></tr>";
			$int++;
		}
		
		//print_r($html);die;
		
		$dataf['html'] = $html;
		$dataf['count'] = count($result);
		
		//echo json_encode($data,true); 
		echo json_encode($dataf,true);
		//print_r($result);
		
	}
		
		
		public function filter_kota_sort(){
		
		$data   = file_get_contents("php://input");
		$param   = json_decode($data, true);
		$session_val = $this->session->userdata['logged_in'];
		
		//$kota - explode('|',$param['kota_list'];
		
		//print_r($param);die;
		
		$result = $this->contact_model->get_list_contact_sort($param,$session_val);
		$html = '';
		
		
		
		foreach($result as $results){
			
			$html .= "<tr onclick=\"select_cont('".$results['NAMA_PELANGGAN']."|".$results['NO_HP']."|".$results['CARDNO']."|".$results['ALAMAT']."')\" style='cursor: pointer;' ><td>".$results['NAMA_PELANGGAN']."</td><td>+62".$results['NO_HP']."</td><td>".$results['SEGMENT']."</td></tr>";
			
		}
		
		//print_r($html);die;
		
		$dataf['html'] = $html;
		$dataf['count'] = count($result);
		
		//echo json_encode($data,true); 
		echo json_encode($dataf,true);
		//print_r($result);
		
	}
	
	public function save_respond(){
		
		$data   = file_get_contents("php://input");
		$param   = json_decode($data, true);
		
		//print_r($param);die;
		
		$user_id = $this->session->userdata['logged_in']['user_id'];
		//$data['session'] = $session_val;
		//$kota - explode('|',$param['kota_list'];
		
		//print_r($param);die;
		
		$result = $this->contact_model->delete_data_b($param,$user_id);
		$result = $this->contact_model->save_respond($param,$user_id);
		$result = $this->contact_model->add_header_survey($param,$user_id,$result);
		$html = '';
		
		
		$dataf['html'] = $html;
		$dataf['count'] = count($result);
		
		//echo json_encode($data,true); 
		echo json_encode($dataf,true);
		//print_r($result);
		
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
		  
			$list = $this->contact_model->list_po($params); 
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
			$result = $this->contact_model->get_detail($data['id']);

			//print_r($result);die;

			$data = array(
				'detail' 				=> $result[0]
			);

		$this->template->load('maintemplate', 'contact/views/detail', $data);
		
	}

	public function Anti_sql_injection($string) {
		$string = strip_tags(trim(addslashes(htmlspecialchars(stripslashes($string)))));
		return $string;
	}
	
}
