<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('survey_model');		
		//$this->load->model('Login_model');
	
	}
	
	
	
	public function insert_survey()
	{
	
		$session = $this->session->userdata;
		
			
		$data_respondent = array(
			'id_pelanggan' => $this->Anti_sql_injection($this->input->post('id_pelanggan', TRUE)),
			'kota_survey' => $this->Anti_sql_injection($this->input->post('kota_survey', TRUE)),
			'telkom_regional' => $this->Anti_sql_injection($this->input->post('telkom_regional', TRUE)),
			'nama_respondent' => $this->Anti_sql_injection($this->input->post('nama_respondent', TRUE)),
			'alamat_rumah' => $this->Anti_sql_injection($this->input->post('alamat_rumah', TRUE)),
			'kecamatan' => $this->Anti_sql_injection($this->input->post('kecamatan', TRUE)),
			'kelurahan' => $this->Anti_sql_injection($this->input->post('kelurahan', TRUE)),
			'no_tel' => $this->Anti_sql_injection($this->input->post('no_tel', TRUE)),
			'no_hp' => $this->Anti_sql_injection($this->input->post('no_hp', TRUE)),
			'email' => $this->Anti_sql_injection($this->input->post('email', TRUE)),
			'interview' => $this->session->userdata['logged_in']['user_id']
		);
		
		$add_prin_result = $this->survey_model->add_quesioner($data_respondent);
		
		$array_part = [1,2,3,4,5,6,7,8];
		
		foreach($array_part as $part){
		
			$r1 = $this->survey_model->get_field($part);
		
			foreach($r1 as $r1s){
				
				$data_r1 = array(
					'id_kuisioner' => $add_prin_result['lastid'],
					'id_form' => 1,
					'id_question' => $r1s['id_question'],
					'value' => $this->Anti_sql_injection($this->input->post($r1s['code_question'], TRUE))
				);
				$this->survey_model->add_quesioner_part($data_r1);
				
			}
		
		}
		
		
		//print_r($add_prin_result);die;
		
	}
	
	public function insert_new_item()
	{
	
		$session = $this->session->userdata;
		
			
		$data_respondent = array(
			'field' => $this->Anti_sql_injection($this->input->post('field', TRUE)),
			'value' => $this->Anti_sql_injection($this->input->post('value', TRUE)),
			'label' => $this->Anti_sql_injection($this->input->post('label', TRUE)),
			'interview' => $this->session->userdata['logged_in']['user_id']
		);
		
		$add_prin_result = $this->survey_model->add_new_item($data_respondent);		
		//print_r($add_prin_result);die;
		
	}
	
	public function get_respondent(){
		
		$data   = file_get_contents("php://input");
		$param   = json_decode($data, true);
		
		
		$result = $this->survey_model->get_respondent($param);
		
		//echo json_encode($data,true); 
		echo json_encode($result,true);
		//print_r($result);
		
	}
	
	public function new_survey(){
		
		$session_val = $this->session->userdata['logged_in'];
			$data['session'] = $session_val;
			
			$data['array_genre'] = ['Movies','TV Series','News','Religi','Entertainment','Kids','Sport','Lifestyle','Music','Knowledge','Documentary','Local'];
			$data['array_channel'] = ['RCTI','MNC TV','GTV','iNews','Metro TV','SCTV','ANTV','Indosiar','Trans 7','Trans TV','TV One','NET TV ','CNN Indonesia','Kompas TV']; 
			$data['array_channel_h'] = ['ANTV','GTV','Indosiar','Kompas TV','MetroTV','Net TV','MNC TV','TV One','RCTI','SCTV','Trans TV','Trans 7','HBO','FOX Family Movies','Bioskop Indonesia','CNN','MTV','FOX  Sport 1','BEIN Sport','Nat Geo Wild','National Geographic','Disney Channel'];
			
			$data['array_ragam_media'] = ['Radio','Tabloid','Televisi','Buletin Komunitas','Koran','Infligth Magz','Majalah'];
			$data['array_social_media'] = ['Facebook','Twitter','Youtube','Instagram','Pinterest','Tumblr','Linkedln','Snapchat'];
			$data['array_ragam_media2'] = ['Radio','Tabloid','Televisi','Situs / Website','Koran','Sosial Media','Majalah'];
			$data['array_jenis_tayangan'] = ['Music / Dance','Movies','Gaming','Entertainment','Olahraga','Berita & Politik','Kecantikan','Traveling','Mistik','Kuliner / Memasak','Science & Teknologi ','Prank / Challenges','DIY/Tips','Daily Vlog','Familiy / Parenting','Kesehatan '];
			
			$data['array_family'] = [['Kepala Keluarga','kk'],['Istri KK','ik'],['Anak Pertama','ak1'],['Anak Kedua','ak2'],['Anak Ketiga','ak3'],['Orang tua KK','oki'],['Saudara KK','ski']];
			$result_merk = $this->survey_model->get_merk();
			$data['data_cardno'] = $this->survey_model->get_cardno();
			$data['data_car'] = $this->survey_model->get_merk_car();
			$data['data_mb'] = $this->survey_model->get_merk_mb();
			
			$array_merk = [];
			foreach($result_merk as $result_merks){
				
				$array_merk[$result_merks['FIELD']]['MERK'] = $result_merks['FIELD'];
				$array_merk[$result_merks['FIELD']]['VALUE'][] = ARRAY('FIELD' => $result_merks['VALUE'],'LABEL' => $result_merks['LABEL']);
				
				
			}
		
			
			$data['array_merk'] = $array_merk;
			
			$data['field_r1'] = $this->survey_model->get_field(1);
			$data['field_r2'] = $this->survey_model->get_field(2);
			$data['field_r3'] = $this->survey_model->get_field(3);
			$data['field_r4'] = $this->survey_model->get_field(4);
			$data['field_r5'] = $this->survey_model->get_field(5);
			$data['field_r6'] = $this->survey_model->get_field(6);
			$data['field_r7'] = $this->survey_model->get_field(7);
			$data['field_r8'] = $this->survey_model->get_field(8);
			
			// ECHO '<pre>';
			// print_r($array_merk);
			// ECHO '</pre>';die;
			//$this->template->load('maintemplate', 'survey/views/detail', $data);
			$this->template->load('maintemplate', 'survey/views/survey_new', $data);
		
	}
	
	public function index()
	{
		
			$session_val = $this->session->userdata['logged_in'];
			$data['session'] = $session_val;
			
			//print_r($session_val);die;
		
			//$this->template->load('maintemplate', 'survey/views/detail', $data);
			$this->template->load('maintemplate', 'survey/views/home', $data);
		
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
		  
			$list = $this->home_model->list_po($params); 
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
			$result = $this->home_model->get_detail($data['id']);

			//print_r($result);die;

			$data = array(
				'detail' 				=> $result[0]
			);

		$this->template->load('maintemplate', 'survey/views/detail', $data);
		
	}

	public function Anti_sql_injection($string) {
		$string = strip_tags(trim(addslashes(htmlspecialchars(stripslashes($string)))));
		return $string;
	}
	
}
