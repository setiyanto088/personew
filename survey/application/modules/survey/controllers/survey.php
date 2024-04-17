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
		
		$form = $this->Anti_sql_injection($this->input->post('form_part', TRUE));
		
		if($this->Anti_sql_injection($this->input->post('curr_page', TRUE)) == 9){
			$status_k = 1;
		}else{
			$status_k = 2;
		}  

		//echo "aaaa";
		//echo $this->input->post('merk_hometht_kk');die;
	
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
			'id_kuisioner' => $this->Anti_sql_injection($this->input->post('id_kuisioner', TRUE)),
			'curr_page' => $this->Anti_sql_injection($this->input->post('curr_page', TRUE)),
			'status_k' => $status_k,
			'interview' => $this->session->userdata['logged_in']['user_id']
		);
		
		$add_prin_result = $this->survey_model->edit_quesioner($data_respondent);
		
		$array_form_part = [[1,2],[3],[4],[5],[6],[7],[8]];
		
		//$array_part = [1,2,3,4,5,6,7,8];
		$array_part = $array_form_part[$form];
		
		foreach($array_part as $part){
			
			$this->survey_model->delete_curr_answ($part,$data_respondent['id_kuisioner']);
		
			$r1 = $this->survey_model->get_field($part);
			//print_r($r1);die;			


			foreach($r1 as $r1s){
				
				$data_r1 = array(
					'id_kuisioner' => $data_respondent['id_kuisioner'],
					'id_form' => 1,
					'id_question' => $r1s['id_question'],
					'cat' => $part,
					'value' => $this->Anti_sql_injection($this->input->post($r1s['code_question'], TRUE))
				);
				
				
				
				$this->survey_model->add_quesioner_part($data_r1);
				
			}
		
		}
		
		
		//print_r($add_prin_result);die;
		
	}
	
	public function insert_survey_f()
	{
	
		$session = $this->session->userdata;
		
		$form = $this->Anti_sql_injection($this->input->post('form_part', TRUE));
		$sub_cat = $this->Anti_sql_injection($this->input->post('sub_cat', TRUE));
		
		//if($this->Anti_sql_injection($this->input->post('curr_page', TRUE)) == 9){
		//	$status_k = 1;
		//}else{
		$status_k = 2;
		//}
		
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
			'id_kuisioner' => $this->Anti_sql_injection($this->input->post('id_kuisioner', TRUE)),
			'curr_page' => $this->Anti_sql_injection($this->input->post('curr_page', TRUE)),
			'status_k' => $status_k,
			'interview' => $this->session->userdata['logged_in']['user_id']
		);
		
		$add_prin_result = $this->survey_model->edit_quesioner($data_respondent);
		
		$array_form_part = [[1,2],[3],[4],[5],[6],[7],[8],[9]];
		
		//$array_part = [1,2,3,4,5,6,7,8];
		$array_part = $array_form_part[$form];
		
		foreach($array_part as $part){
			
			$this->survey_model->delete_curr_answ_f($part,$data_respondent['id_kuisioner'],$sub_cat);
		
			$r1 = $this->survey_model->get_field_f($sub_cat);
		
			foreach($r1 as $r1s){
				
				$data_r1 = array(
					'id_kuisioner' => $data_respondent['id_kuisioner'],
					'id_form' => 1,
					'id_question' => $r1s['id_question'],
					'cat' => $part,
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
	
	public function insert_header_survey()
	{
	
		$session = $this->session->userdata;
		
			
		$data_respondent = array(
			'interview' => $this->session->userdata['logged_in']['user_id'],
			'start_time' => date("Y-m-d H:i:s"),
			'id_outbound' => $this->Anti_sql_injection($this->input->post('id_outbound', TRUE)),
			'status_survey' => 0
		);
		
		$sss = $this->survey_model->check_inbound($data_respondent);	
		$this->survey_model->edit_stat($data_respondent);
		
		if($sss[0]['CNT'] == 0){
			
			$add_prin_result = $this->survey_model->add_header_survey($data_respondent);	
		}		
		//print_r($add_prin_result);die;
		
	}

	public function edit_schedule(){

		$data   = file_get_contents("php://input");
		$param   = json_decode($data, true);
	
		//print_r($param);die;

		$datas = array(
			'id_outbound' => $this->Anti_sql_injection($this->input->post('id_outbound', TRUE)),
			'tgl' => $this->Anti_sql_injection($this->input->post('tgl', TRUE)),
			'note' => $this->Anti_sql_injection($this->input->post('note', TRUE)),
			'jam_tgl_awal' => $this->Anti_sql_injection($this->input->post('jam_tgl_awal', TRUE)),
			'jam_tgl_akhir' => $this->Anti_sql_injection($this->input->post('jam_tgl_akhir', TRUE)),
			'values_hari_rel' => $this->Anti_sql_injection($this->input->post('values_hari_rel', TRUE)),
			'values_jam_rel' => $this->Anti_sql_injection($this->input->post('values_jam_rel', TRUE))
		);

		$this->survey_model->edit_schedule($param);	
		
			//$this->log_activity->insert_activity('insert', 'Insert User');
		$result = array('success' => true, 'message' => 'Berhasil Merubah Schedule');

		$this->output->set_content_type('application/json')->set_output(json_encode($result));
		
	}


	public function filter_jadwal(){
		
		// $data   = file_get_contents("php://input");
		// $param   = json_decode($data, true);
		
		$data = array(
			'date' => $this->Anti_sql_injection($this->input->post('date', TRUE)),
			'kota_list' => $this->Anti_sql_injection($this->input->post('kota_list', TRUE)),
			'hari_list' => $this->Anti_sql_injection($this->input->post('hari_list', TRUE)),
			'interview' => $this->session->userdata['logged_in']['user_id']
		);
		
		$kota = substr($data['kota_list'],0,-1);
		$data['array_kota'] = explode('|',$kota);
		
		$hari = substr($data['hari_list'],0,-1);
		$data['array_hari'] = explode('|',$hari);
		//print_r(count($data['array_hari']));die;
		
		$get_history = $this->survey_model->get_history_filter($data); 
		
		$htmls = '';
		
		foreach($get_history as $users){
			
			if($users['status_survey'] == null ){
												$html = '<button type="button" class="btn btn-danger btn-md" onClick="start_survey('.$users['id_outbound'].')">Mulai Survey</button>';
											}elseif($users['status_survey'] == 2){
												$html = '<button type="button" class="btn btn-danger btn-md" onClick="start_survey('.$users['id_outbound'].')">Lanjut Survey</button>';
											}else{
												$html = '<Span>Survey Telah Selesai</span>';
											}
											
											if($users['sa'] == 0 ){
												$clr = "background-color:#FF6666";
												$clr_txt = "Hari Ini";
											}else{
												$clr = "";
												$clr_txt = "";
											}
											
											
											//$html = '<button type="button" class="btn btn-danger btn-md" onClick="start_survey('.$users['id_outbound'].')">Mulai Survey</button>';
											
											$array_akses = ['<span style="color:red">Not Active</span>','<span style="color:green">Active</span>']; 
			
			$htmls .= "<div class='row' style='border-top: thin solid #009;margin-top:5px;p-top:5px;' >";
			$htmls .= "<div class='col-md-9 grid-margin'>";
			$htmls .= "<div class='row'>";
			$htmls .= "<div class='col-md-12'><br><h4>".$clr_txt."</h4></div>";
			$htmls .= "<div class='col-md-4'><br><h4>".$users['NAMA_PELANGGAN']."</h4>".$users['cardno']."</div>";
			$htmls .= "<div class='col-md-6'><br>".$users['KOTA_X']." ".$users['KECAMATAN_DAGRI']."<br>".$users['ALAMAT']."</div>";
			$htmls .= "<div class='col-md-2'><br>".(date_format(date_create($users['date_survey']),'Y/m/d'))."<br>".$users['day_survey']."<br>".$users['hours_survey']."<br>".$users['date_hours_survey']."</div>";
			$htmls .= "</div></div><div class='col-md-3 grid-margin ' style='text-align: center;'><div class='row'>";
			$htmls .= "<div class='col-md-12' style='text-align: center;margin:auto'><br><br><br>".$html."</div></div></div></div>";
			
			
		}
		
		$htmls .= "<div class='row' style='border-top: thin solid #009;margin-top:5px;p-top:5px'></div>";
		
		//echo $htmls;
		
		$dataf['html'] = $htmls;
		
		//echo json_encode($data,true); 
		echo json_encode($dataf,true);
		
	}
	
	public function get_respondent(){
		
		$data   = file_get_contents("php://input");
		$param   = json_decode($data, true);
		
		
		$result = $this->survey_model->get_respondent($param);
		$resulte = $this->survey_model->get_outbound2($param);
		
		
		
		$rrs = 0;
		for($rr =1;$rr<21;$rr++){
			$spl_prog = explode('|',$resulte[0]['p'.$rr]);
			if($spl_prog[0] == 'Ya'){
				$result[$rrs]['screening'] = 1;
			}else{
				$result[$rrs]['screening'] = 0;
			}
			
			$rrs++;
		}
		
		//print_r($result);die;
		
		//echo json_encode($data,true); 
		echo json_encode($result,true);
		//print_r($result);
		
	}
	
	public function new_survey(){
	//public function index(){
		
			$session_val = $this->session->userdata['logged_in'];
			$id_outbound =  $this->uri->segment('3');
			//print_r($id_outbound);die;
			
			$data['session'] = $session_val;
			
			$data['array_genre'] = ['Movies','TV Series','News','Religi','Entertainment','Kids','Sport','Lifestyle','Music','Knowledge','Documentary','Local'];
			$data['array_channel'] = ['RCTI','MNC TV','GTV','iNews','Metro TV','SCTV','ANTV','Indosiar','Trans 7','Trans TV','TV One','NET TV ','CNN Indonesia','Kompas TV']; 
			$data['array_channel_h'] = ['ANTV','GTV','Indosiar','Kompas TV','MetroTV','Net TV','MNC TV','TV One','RCTI','SCTV','Trans TV','Trans 7','HBO','FOX Family Movies','Bioskop Indonesia','CNN','MTV','FOX  Sport 1','BEIN Sport','Nat Geo Wild','National Geographic','Disney Channel'];
			
			$data['array_ragam_media'] = ['Radio','Tabloid','Televisi','Buletin Komunitas','Koran','Infligth Magz','Majalah'];
			$data['array_ragam_media_val'] = ['Radio','Tabloid','Televisi','Buletin_Komunitas','Koran','Infligth_Magz','Majalah'];
			$data['array_social_media'] = ['Facebook','Twitter','Youtube','Instagram','Pinterest','Tumblr','Linkedln','Snapchat'];
			$data['array_ragam_media2'] = ['Radio','Tabloid','Televisi','Situs / Website','Koran','Sosial Media','Majalah'];
			$data['array_ragam_media2_val'] = ['Radio','Tabloid','Televisi','Situs_Website','Koran','Sosial_Media','Majalah'];
			$data['array_jenis_tayangan'] = ['Music / Dance','Movies','Gaming','Entertainment','Olahraga','Berita & Politik','Kecantikan','Traveling','Mistik','Kuliner / Memasak','Science & Teknologi ','Prank / Challenges','DIY/Tips','Daily Vlog','Familiy / Parenting','Kesehatan '];
			$data['array_jenis_tayangan_val'] = ['Music Dance','Movies','Gaming','Entertainment','Olahraga','Berita Politik','Kecantikan','Traveling','Mistik','Kuliner Memasak','Science Teknologi ','Prank Challenges','DIY Tips','Daily Vlog','Familiy Parenting','Kesehatan '];
			
			$data['array_family'] = [['Kepala Keluarga','kk'],['Istri KK','ik'],['Anak Pertama','ak1'],['Anak Kedua','ak2'],['Anak Ketiga','ak3'],['Orang tua KK','oki'],['Saudara KK','ski']];
			$result_merk = $this->survey_model->get_merk();
			$data['data_cardno'] = $this->survey_model->get_cardno($session_val['user_id']);
			$data['data_car'] = $this->survey_model->get_merk_car();
			$data['data_mb'] = $this->survey_model->get_merk_mb();
			$data['outbound'] = $this->survey_model->get_outbound($id_outbound);
			$data['kuisioner'] = $this->survey_model->get_kuisioner($id_outbound);
			
			$array_mand = '';
			$array_mand_po = '';
			for($rr = 1;$rr < 21; $rr++){
				
				$mo = explode('|',$data['outbound'][0]['p'.$rr]);
				if($mo[0] == 'Ya'){
					$array_mand .= '"p'.$rr.'",';
					$array_mand_po .= '"'.$mo[1].'",';
				}
			}
			
			$data['pom'] = substr($array_mand, 0, -1);
			$data['pom_po'] = substr($array_mand_po, 0, -1);
			
			
			$get_kuss = $this->survey_model->get_kuss($id_outbound);
			$data['kuis_id'] = $get_kuss[0]['id_kuisioner'];
			
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
			$data['field_r8'] = $this->survey_model->get_field_88(8);
			
			// echo "<pre>";
			// print_r($data['field_r8']);die;
			// echo "</pre>";
			
		
			$data['field_r1v'] = $this->survey_model->get_field_val(1);
			$data['field_r2v'] = $this->survey_model->get_field_val(2);
			$data['field_r3v'] = $this->survey_model->get_field_val(3);
			$data['field_r4v'] = $this->survey_model->get_field_val(4);
			$data['field_r5v'] = $this->survey_model->get_field_val(5);
			$data['field_r6v'] = $this->survey_model->get_field_val(6);
			$data['field_r7v'] = $this->survey_model->get_field_val(7);
			$data['field_r8v'] = $this->survey_model->get_field_val(8);
			// ECHO '<pre>';
			// print_r($array_merk);
			// ECHO '</pre>';die;
			
			//if($data['kuisioner'][0]['status_survey'] == 2){
				
				$data['data_r1'] = $this->survey_model->get_data(1,$data['kuisioner'][0]['id_kuisioner']);
				$data['data_r2'] = $this->survey_model->get_data(2,$data['kuisioner'][0]['id_kuisioner']);
				$data['data_r3'] = $this->survey_model->get_data(3,$data['kuisioner'][0]['id_kuisioner']);
				$data['data_r4'] = $this->survey_model->get_data(4,$data['kuisioner'][0]['id_kuisioner']);
				$data['data_r5'] = $this->survey_model->get_data(5,$data['kuisioner'][0]['id_kuisioner']);
				$data['data_r6'] = $this->survey_model->get_data(6,$data['kuisioner'][0]['id_kuisioner']);
				$data['data_r7'] = $this->survey_model->get_data(7,$data['kuisioner'][0]['id_kuisioner']);
				$data['data_r8'] = $this->survey_model->get_data(8,$data['kuisioner'][0]['id_kuisioner']);
				
				// ECHO '<pre>';
			// print_r($data['data_r8']);
			// ECHO '</pre>';die;
				
				$data['field_r7v_f1'] = $this->survey_model->get_field_val_f(1);
				$data['field_r7_f1'] = $this->survey_model->get_field_f(1);
				
				$data['field_r7v_f2'] = $this->survey_model->get_field_val_f(2);
				$data['field_r7_f2'] = $this->survey_model->get_field_f(2);
				
				$data['field_r7v_f3'] = $this->survey_model->get_field_val_f(3);
				$data['field_r7_f3'] = $this->survey_model->get_field_f(3);
				
				$data['field_r7v_f4'] = $this->survey_model->get_field_val_f(4);
				$data['field_r7_f4'] = $this->survey_model->get_field_f(4);
				
				$data['field_r7v_f5'] = $this->survey_model->get_field_val_f(5);
				$data['field_r7_f5'] = $this->survey_model->get_field_f(5);
				
				$data['field_r7v_f6'] = $this->survey_model->get_field_val_f(6);
				$data['field_r7_f6'] = $this->survey_model->get_field_f(6);
			
				$data['field_r7v_f7'] = $this->survey_model->get_field_val_f(7);
			//	$data['field_r7_f7'] = $this->survey_model->get_field_f(7);
				$data['field_r7_f7'] = $this->survey_model->get_field_f_s7(7);

				$data['field_r7v_f8'] = $this->survey_model->get_field_val_f(8);
				//$data['field_r7_f8'] = $this->survey_model->get_field_f(8);
				$data['field_r7_f8'] = $this->survey_model->get_field_f_s8(8);
				
				$data['field_r7v_f9'] = $this->survey_model->get_field_val_f(9);
				//$data['field_r7_f9'] = $this->survey_model->get_field_f(9);

				$data['field_r7_f9'] = $this->survey_model->get_field_f(9);
				// echo "<pre>";
				// print_r($data['field_r7v_f9']);die;
				// echo "</pre>";
		
				$this->template->load('maintemplate', 'survey/views/survey_new_resume', $data);
				//echo 'resume';
			// }else{
				
				
			
				// $this->template->load('maintemplate', 'survey/views/survey_new_resume', $data);
			// }
			
			//$this->template->load('maintemplate', 'survey/views/detail', $data);
			
			//$this->template->load('maintemplate', 'survey/views/survey_new_resume', $data);
		
	}
	
	public function index()
	{
		
			$session_val = $this->session->userdata['logged_in'];
			$user_id = $this->session->userdata['logged_in']['user_id'];
			$data['session'] = $session_val;
			$data['user'] = $this->survey_model->get_user(); 
			$data['get_history'] = $this->survey_model->get_history($user_id); 
			$data['kecamatan'] = $this->survey_model->get_kelurahan($session_val);
			
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
