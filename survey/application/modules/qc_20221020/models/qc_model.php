<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Qc_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		
	}
	
	
	public function list_po($params = array()){
		
		$strOrderBy = '`'.$params['order_column'].'` '.$params['order_dir'];
		
			$query = 	'
				SELECT COUNT(*) AS jumlah FROM t_output a where 1 = 1
				AND ( 
					ktp_name LIKE "%'.$params['searchtxt'].'%" OR
					ktp_nik LIKE "%'.$params['searchtxt'].'%" 
				)
			';
						
			$query2 = 	'
				SELECT OP.*, rank() over ( ORDER BY user_id ASC) AS Rangking from ( 
					SELECT *, val_1+val_2+val_3+val_4+val_5+val_6 AS t_val  FROM 
					(
						select *,
						IF(ktp_name_v = "True",0,1) AS val_1,
						IF(`ktp_date_of_birth_v` = "True",0,1) AS val_2,
						IF(`ktp_nik_v` = "True",0,1) AS val_3,
						IF(`ijazah_institution_v` = "True",0,1) AS val_4,
						IF(`ijazah_major_v` = "True",0,1) AS val_5,
						IF(`transkrip_gpa_v` = "True",0,1) AS val_6
						FROM t_output2 a 
						where 1 = 1  AND ( 
						ktp_name LIKE "%'.$params['searchtxt'].'%" OR
						ktp_nik LIKE "%'.$params['searchtxt'].'%" 
					)  order by user_id) z
				) OP
				ORDER BY '.$strOrderBy.'
				
				LIMIT '.$params['limit'].' 
				OFFSET '.$params['offset'].' 
			';
		
			//echo $query2;die;
		
			 $out		= array();
			  $querys		= $this->db->query($query);
			  $result = $querys->row();
			  
			  $total_filtered = $result->jumlah;
			  $total 			= $result->jumlah;
		  
				if(($params['offset']+10) > $total_filtered){
				$limit_data = $total_filtered - $params['offset'];
			  }else{
				$limit_data = $params['limit'] ;
			  }
		  
		
		  
		  //echo $query;die;
			//echo $query;die;
			 $query2s		= $this->db->query($query2);
		  $result2 = $query2s->result_array();						
		  $return = array(
			  'data' => $result2,
			  'total_filtered' => $total_filtered,
			  'total' => $total,
		  );
		  return $return;
		
		
	}
	
	public function add_new_qc($data) {
		$sql 	= 'insert into t_qc_history SELECT * FROM t_qc WHERE id_outbound = '.$data['id_outbound_valid'].'';
		$query_all 	=  $this->db->query($sql);
		$this->db->close();
		$this->db->initialize();
		
		
		$sql 	= 'delete from t_qc WHERE id_outbound = '.$data['id_outbound_valid'].'';
		$query_all 	=  $this->db->query($sql); 
		$this->db->close();
		$this->db->initialize();
		
		
		$sql 	= 'insert into t_qc (id_user,id_outbound,info_note,date_check,valid,valid_stat) values 
		('.$data['id_user'].','.$data['id_outbound_valid'].',"'.$data['note_validasi'].'","'.$data['date_check'].'",'.$data['status_valid'].','.$data['status_valid'].') ';
		$query_all 	=  $this->db->query($sql);
		$this->db->close();
		$this->db->initialize();
		//$this->db->insert('t_qc',$data);

			
		//$query 	= $this->db->query($sql,$data);
		
		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid = $row['LAST_INSERT_ID()'];

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;

		return $arr_result;
	}
	
	public function add_new_item($data) {
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'FIELD' => $data['field'],
			'VALUE' => str_replace(" ","",$data['value']),
			'LABEL' => $data['label']
		);

	//	print_r($datas);die;


		$this->db->insert('TREE_PROFILING_RES',$datas);

			
		//$query 	= $this->db->query($sql,$data);
		
		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid = $row['LAST_INSERT_ID()'];

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;

		return $arr_result;
	}
	
	public function add_header_survey($data) {
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'interview' => $data['interview'],
			'start_time' => $data['start_time'],
			'curr_page' => 2,
			'id_outbound' => $data['id_outbound'],
			'status_survey' => $data['status_survey']
		);

	//	print_r($datas);die;


		$this->db->insert('t_kuisioner',$datas);

			
		//$query 	= $this->db->query($sql,$data);
		
		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid = $row['LAST_INSERT_ID()'];

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;

		return $arr_result;
	}
	
	public function get_kelurahan($SES){
		
		$sql 	= 'SELECT *,KOTA_KABUPATEN_DAGRI AS KOTA_X from RESPONDENT_SURVEY_CLEAR A 
		JOIN mapping_kecamatan B on A.KECAMATAN_DAGRI = B.KECAMATAN
		WHERE KOTA_KABUPATEN_DAGRI <> ""
		AND B.ID_USER = '.$SES['user_id'].'
		group by KECAMATAN_DAGRI 
		order by KECAMATAN_DAGRI';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	public function get_kota_s($SES){
		
		$sql 	= 'SELECT *,KOTA_KABUPATEN_DAGRI AS KOTA_X from RESPONDENT_SURVEY_CLEAR A 
		JOIN mapping_kecamatan B on A.KECAMATAN_DAGRI = B.KECAMATAN
		WHERE KOTA_KABUPATEN_DAGRI <> ""
		AND B.ID_USER = '.$SES['user_id'].'
		group by KECAMATAN_DAGRI 
		order by KECAMATAN_DAGRI';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function check_inbound($data){
		
		$sql 	= 'SELECT COUNT(*) CNT FROM t_kuisioner where id_outbound = '.$data['id_outbound'];

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}

	public function get_supervisor($id_user){

		$sql = '
		
		SELECT c.id_user,nama FROM  u_user b 
		JOIN u_user_group c ON b.id = c.id_user
		JOIN `t_user_hierarcy` d ON c.id_user = d.`id_user`
		WHERE c.id_role IN (127,126)
		AND b.status_akses = 1
		AND `parent` = '.$id_user.'
		ORDER BY nama
	
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;

	}
	
	public function get_outbound($data){
		
		$sql 	= 'SELECT *  FROM t_outbond_call where id_outbound = '.$data;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	public function get_data($cat,$kuis){
		
		$sql 	= 'SELECT a.`field_raw`,a.`type_input`,a.`code_question`,a.`sub_question`,b.* FROM `t_question_value` a
					JOIN `t_form_value` b ON a.`id_question` = b.`id_question`
					WHERE id_category = '.$cat.'
					AND id_kuisioner = '.$kuis.'';

	//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function get_kuisioner_old($data){
		
		$sql 	= 'SELECT *  FROM t_kuisioner where id_outbound = '.$data;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function get_kuisioner($data){
		
		$sql 	= 'SELECT A.*, `valid` FROM DATA_SURVEY_RAW A 
					LEFT JOIN `t_qc` B ON A.`ID_SURVEY` = B.`id_outbound` WHERE ID_SURVEY  = '.$data;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}
	
		public function get_user(){
		
		$sql 	= 'SELECT a.*,b.username, c.group FROM u_user a 
					join u_user_group b on a.id = b.id_user
					join u_group c on b.id_role = c.id
					where b.id_role in(125,100)';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
		public function get_history($data){
	
		$sql 	= '
					SELECT g.id_qc,g.`valid`,GROUP_CONCAT(f.nama) AS supervisor,d.nama AS surveyor,h.parent,
					IF(id_qc IS NULL,c.status_survey,IF(valid_stat = 1,3,4)) status_survey , a.*,
					IF(respond = 7,IF(c.`status_survey` = 1,8,7 ),IF(respond IS NULL,1,respond)) respond_res,DATE_FORMAT(time_call,"%d %M %Y") AS dd,
					DATEDIFF(date_survey, NOW()) sa, `KOTA_KABUPATEN_DAGRI` `KOTA_X`,b.`NO_HP`,`ALAMAT_NOSS` `ALAMAT`,b.`NAMA` NAMA_PELANGGAN,
					 b.KECAMATAN_DAGRI, b.KELURAHAN_DESA_DAGRI FROM `t_outbond_call` a
					LEFT JOIN `RESPONDENT_SURVEY_CLEAR` b ON a.cardno = b.`NOTEL_INET`
					LEFT JOIN `t_kuisioner` c ON a.id_outbound = c.id_outbound
					LEFT JOIN `u_user` d ON a.id_user = d.id
					LEFT JOIN `t_user_hierarcy` e ON d.id = e.id_user
					LEFT JOIN `u_user` f ON e.`parent` = f.id
					LEFT JOIN `t_user_hierarcy` h ON f.id = h.id_user
					LEFT JOIN `t_qc` g ON a.id_outbound = g.id_outbound
					WHERE c.status_survey = 1
					AND h.`parent` = '.$data.'
					GROUP BY a.cardno
					ORDER BY c.status_survey ASC,time_call DESC,a.cardno
					
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}
	
	public function get_history_summ($data){
	
		// $sql 	= '
					
					// SELECT supervisor,KOTA_X, sum(valid_sum) as valid_sum,sum(invalid_sum) as invalid_sum, sum(unvalidate_sum) as unvalidate_sum from (
						// SELECT supervisor,KOTA_X,
						// if(valid = 1,1,0) as valid_sum,
						// IF(valid = 2,1,0) AS invalid_sum,
						// IF(valid = 0 or valid = "" or valid is null,1,0) AS unvalidate_sum from (
						
						// SELECT g.id_qc,g.`valid`,GROUP_CONCAT(f.nama) AS supervisor,d.nama AS surveyor,h.parent,
						// IF(id_qc IS NULL,c.status_survey,IF(valid_stat = 1,3,4)) status_survey , a.*,
						// IF(respond = 7,IF(c.`status_survey` = 1,8,7 ),IF(respond IS NULL,1,respond)) respond_res,DATE_FORMAT(time_call,"%d %M %Y") AS dd,
						// DATEDIFF(date_survey, NOW()) sa, `KOTA_KABUPATEN_DAGRI` `KOTA_X`,b.`NO_HP`,`ALAMAT_NOSS` `ALAMAT`,b.`NAMA` NAMA_PELANGGAN,
						 // b.KECAMATAN_DAGRI, b.KELURAHAN_DESA_DAGRI FROM `t_outbond_call` a
						// LEFT JOIN `RESPONDENT_SURVEY_CLEAR` b ON a.cardno = b.`NOTEL_INET`
						// LEFT JOIN `t_kuisioner` c ON a.id_outbound = c.id_outbound
						// LEFT JOIN `u_user` d ON a.id_user = d.id
						// LEFT JOIN `t_user_hierarcy` e ON d.id = e.id_user
						// LEFT JOIN `u_user` f ON e.`parent` = f.id
						// LEFT JOIN `t_user_hierarcy` h ON f.id = h.id_user
						// LEFT JOIN `t_qc` g ON a.id_outbound = g.id_outbound
						// WHERE c.status_survey = 1
						// AND h.`parent` = '.$data.'
						// GROUP BY a.cardno
						// ORDER BY c.status_survey ASC,time_call DESC,a.cardno
						
						// ) a
					
					// ) a group by supervisor,KOTA_X
					// order by supervisor,KOTA_X
					
		// ';
		
		$sql = '
		
			SELECT c.nama AS supervisor,GROUP_CONCAT(e.location_name) AS KOTA_X,
				if(valid_sum is null,0,valid_sum) valid_sum,
				if(invalid_sum is null,0,invalid_sum) invalid_sum,
				if(unvalidate_sum is null,0,unvalidate_sum) unvalidate_sum
				 FROM t_user_hierarcy a LEFT JOIN (
					SELECT supervisor,KOTA_X,id, SUM(valid_sum) AS valid_sum,SUM(invalid_sum) AS invalid_sum,SUM(unvalidate_sum) AS unvalidate_sum FROM (
						SELECT supervisor,KOTA_X,id,
						IF(valid = 1,1,0) AS valid_sum,
						IF(valid = 2,1,0) AS invalid_sum,
						IF(valid = 0 OR valid = "" OR valid IS NULL,1,0) AS unvalidate_sum FROM (
						
						SELECT g.id_qc,g.`valid`,GROUP_CONCAT(f.nama) AS supervisor,d.nama AS surveyor,h.parent,f.id,
						IF(id_qc IS NULL,c.status_survey,IF(valid_stat = 1,3,4)) status_survey , a.*,
						IF(respond = 7,IF(c.`status_survey` = 1,8,7 ),IF(respond IS NULL,1,respond)) respond_res,DATE_FORMAT(time_call,"%d %M %Y") AS dd,
						DATEDIFF(date_survey, NOW()) sa, `KOTA_KABUPATEN_DAGRI` `KOTA_X`,b.`NO_HP`,`ALAMAT_NOSS` `ALAMAT`,b.`NAMA` NAMA_PELANGGAN,
						 b.KECAMATAN_DAGRI, b.KELURAHAN_DESA_DAGRI FROM `t_outbond_call` a
						LEFT JOIN `RESPONDENT_SURVEY_CLEAR` b ON a.cardno = b.`NOTEL_INET`
						LEFT JOIN `t_kuisioner` c ON a.id_outbound = c.id_outbound
						LEFT JOIN `u_user` d ON a.id_user = d.id
						LEFT JOIN `t_user_hierarcy` e ON d.id = e.id_user
						LEFT JOIN `u_user` f ON e.`parent` = f.id
						LEFT JOIN `t_user_hierarcy` h ON f.id = h.id_user
						LEFT JOIN `t_qc` g ON a.id_outbound = g.id_outbound
						WHERE c.status_survey = 1
						AND h.`parent` = '.$data.'
						GROUP BY a.cardno
						ORDER BY c.status_survey ASC,time_call DESC,a.cardno
						
						) a
					
					) a GROUP BY supervisor,KOTA_X
					ORDER BY supervisor,KOTA_X
					) b ON a.`id_user` = b.id
					LEFT JOIN u_user c ON a.id_user = c.id
					LEFT JOIN `t_user_location` d ON d.`id_user` = c.id
					LEFT JOIN `t_location` e ON d.`id_location` = e.`id_location`
					WHERE a.`parent` = '.$data.'
					GROUP BY d.`id_user`
		
		';
		
		
		
		//echo $sql ;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}			

	public function get_data_qc($user_id){
		
		$sql 	= '
		
					SELECT COUNT(id_qc) AS cnt,SUM(valids) valid,SUM(valid_supervisor) valid_supervisor, SUM(tidak_valid) AS tidak_valid, SUM(belum_validasi) AS belum_validasi FROM (
					SELECT a.*,k.id_qc,
						IF(valid IN (1),1,0) AS valids,
						IF(valid IN (3),1,0) AS valid_supervisor,
						IF(valid = 2,1,0) AS tidak_valid,
						IF(valid = 0 OR valid = "" OR valid IS NULL,1,0) AS belum_validasi FROM t_outbond_call a 
					JOIN `t_kuisioner` c ON a.id_outbound = c.id_outbound 
					JOIN `t_user_hierarcy` h ON c.interview = h.id_user
					JOIN `t_user_hierarcy` l ON h.parent = l.id_user
					LEFT JOIN t_qc k ON c.id_outbound = k.id_outbound
					WHERE status_survey = 1 AND l.parent = '.$user_id.'
					) a
					
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function get_data_qc_tot($user_id){
		
		$sql 	= '
		
						select count(*) as total_survey from t_outbond_call a 
					JOIN `t_kuisioner` c ON a.id_outbound = c.id_outbound 
					JOIN `t_user_hierarcy` h ON c.interview = h.id_user
					JOIN `t_user_hierarcy` l ON h.parent = l.id_user
					WHERE status_survey = 1 and l.parent = '.$user_id.'
					
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}			
	
	public function get_history_filter($data){
		

		
		// if($data['surveyor'] <> ''){
			// $where_kotas = "AND supervisor LIKE '%".$data['surveyor']."%'";
			
		// }else{
			// $where_kotas = "";
		// }	
		
		// if($data['texts'] <> ''){
			// $where_haris = "AND ( NAMA_PELANGGAN LIKE '%".$data['texts']."%' OR cardno LIKE '%".$data['texts']."%' OR surveyor LIKE '%".$data['texts']."%' 
			// OR supervisor LIKE '%".$data['texts']."%' )";
			
		// }else{
			// $where_haris = "";
		// }
		
		if($data['respond'] <> ''){
			
			if($data['respond'] == 0){
				$where_date = " AND (`valid` = 0 OR `valid` IS NULL )";
			}else{
				$where_date = " AND `valid` = '".$data['respond']."'";
			}
			
			
		}else{
			$where_date = "";
		}
		
		if($data['list_location'] <> ''){
			$where_kota = " AND KOTA_X = '".strtoupper($data['list_location'])."'";
			
		}else{
			$where_kota = "";
		}
		
		if($data['start_date'] <> '' && $data['end_date'] ){
			$where_haris = " AND `date_survey` BETWEEN '".$data['start_date']."' AND '".$data['end_date']."'";
			
		}else{
			$where_haris = "";
		}
		
		
		
		//$where_kotas = substr($where_kota,0,-1);
		
		$sql 	= '
		SELECT * FROM (
						SELECT g.id_qc,g.`valid`,GROUP_CONCAT(f.nama) AS supervisor,d.nama AS surveyor,
					IF(id_qc IS NULL,c.status_survey,IF(valid = 9,3,4)) status_survey , a.*,
					IF(respond = 7,IF(c.`status_survey` = 1,8,7 ),IF(respond IS NULL,1,respond)) respond_res,DATE_FORMAT(time_call,"%d %M %Y") AS dd,
					DATEDIFF(date_survey, NOW()) sa, `KOTA_KABUPATEN_DAGRI` `KOTA_X`,b.`NO_HP`,`ALAMAT_NOSS` `ALAMAT`,b.`NAMA` NAMA_PELANGGAN,
					 b.KECAMATAN_DAGRI, b.KELURAHAN_DESA_DAGRI FROM `t_outbond_call` a
					LEFT JOIN `RESPONDENT_SURVEY_CLEAR` b ON a.cardno = b.`NOTEL_INET`
					LEFT JOIN `t_kuisioner` c ON a.id_outbound = c.id_outbound
					LEFT JOIN `u_user` d ON a.id_user = d.id
					LEFT JOIN `t_user_hierarcy` e ON d.id = e.id_user
					LEFT JOIN `u_user` f ON e.`parent` = f.id
					LEFT JOIN `t_user_hierarcy` h ON f.id = h.id_user
					LEFT JOIN `t_qc` g ON a.id_outbound = g.id_outbound
					WHERE c.status_survey = 1
					AND h.`parent` = '.$data['user_id'].'
					GROUP BY a.cardno
					ORDER BY c.status_survey ASC,time_call DESC,a.cardno
					) A
					WHERE 1=1 
					'.$where_kota.'
					'.$where_haris.'
					'.$where_date.'
					ORDER BY time_call DESC, cardno
				
		';
		
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function add_quesioner($data) {
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'telkom_regional' => $data['telkom_regional'],
			'kota_survey' => $data['kota_survey'],
			'no_entri' => $data['id_pelanggan'],
			'nama_respondent' => $data['nama_respondent'],
			'alamat_respondent' => $data['alamat_rumah'],
			'kelurahan' => $data['kelurahan'],
			'kecamatan' => $data['kecamatan'],
			'no_telp' => $data['no_tel'],
			'no_hp' => $data['no_hp'],
			'email' => $data['email'],
			'interview' => $data['interview']
		);

	//	print_r($datas);die;


		$this->db->insert('t_kuisioner',$datas);

			
		//$query 	= $this->db->query($sql,$data);
		
		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid = $row['LAST_INSERT_ID()'];

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;

		return $arr_result;
	}

	public function edit_schedule($data) {
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'note' => $data['note'],
			'date_survey' => $data['tgl'],
			'day_survey' => $data['values_hari_rel'],
			'hours_survey' => $data['values_jam_rel'],
			'seq' => 1,
			'date_hours_survey' => $data['jam_tgl_awal'].'-'.$data['jam_tgl_akhir']
		);

	//	print_r($datas);die;


		//$this->db->insert('t_kuisioner',$datas);
		$this->db->where('id_outbound', $data['id_outbound']);
		//$this->db->where('status_survey', 2);
		$this->db->update('t_outbond_call', $datas);
			
		//$query 	= $this->db->query($sql,$data);
		
		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid = $row['LAST_INSERT_ID()'];

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;

		return $arr_result;
	}

	public function edit_quesioner($data) {
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'telkom_regional' => $data['telkom_regional'],
			'kota_survey' => $data['kota_survey'],
			'no_entri' => $data['id_pelanggan'],
			'nama_respondent' => $data['nama_respondent'],
			'alamat_respondent' => $data['alamat_rumah'],
			'kelurahan' => $data['kelurahan'],
			'kecamatan' => $data['kecamatan'],
			'no_telp' => $data['no_tel'],
			'no_hp' => $data['no_hp'],
			'curr_page' => $data['curr_page'],
			'end_time' => date('Y-m-d H:i:s'),
			'status_survey' => $data['status_k'],
			'email' => $data['email']
		);

	//	print_r($datas);die;


		//$this->db->insert('t_kuisioner',$datas);
		$this->db->where('id_kuisioner', $data['id_kuisioner']);
		//$this->db->where('status_survey', 2);
		$this->db->update('t_kuisioner', $datas);
			
		//$query 	= $this->db->query($sql,$data);
		
		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid = $row['LAST_INSERT_ID()'];

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;

		return $arr_result;
	}
	
	public function add_quesioner_part($data) {
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'id_kuisioner' => $data['id_kuisioner'],
			'id_form' => $data['id_form'],
			'id_question' => $data['id_question'],
			'value' => $data['value']
		);

	//	print_r($datas);die;


		$this->db->insert('t_form_value',$datas);

			
		//$query 	= $this->db->query($sql,$data);
		
		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid = $row['LAST_INSERT_ID()'];

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;

		return $arr_result;
	}
	
	public function get_detail($data){
		
		$sql 	= 'SELECT * FROM t_output2 WHERE user_id = ? ';

		$query_all 	=  $this->db->query($sql,array('user_id' => $data));

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function get_cardno($user_id){
		
		// $sql 	= 'SELECT * FROM `PROSPEK_RESPONDEN_SURVEY`
		// WHERE CARDNO = "'.$CARDNO.'"
		// GROUP BY CARDNO
		// ORDER BY CARDNO
		// ';
		
		$sql 	= 'SELECT b.*,b.NOTEL_INET as CARDNO FROM `t_outbond_call` a JOIN
		RESPONDENT_SURVEY_CLEAR b ON a.cardno = b.NOTEL_INET
		WHERE a.id_user = "'.$user_id.'"
		AND a.respond = 7
		GROUP BY b.NOTEL_INET
		ORDER BY b.NOTEL_INET
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	
	public function get_merk(){
		
		$sql 	= "
		SELECT * FROM `TREE_PROFILING_RES`
		WHERE `FIELD` LIKE '%merk%'
		AND `FIELD` <> `VALUE`
		ORDER BY ID,`FIELD`,`VALUE`,LABEL,SEQUENCE
		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	public function get_location($id){
		
		$sql 	= "
		SELECT a.*,b.`location_name` FROM `t_user_location` a
		JOIN `t_location` b ON a.`id_location` = b.`id_location`
		WHERE `id_user` = ".$id."
		ORDER BY location_name
		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}			
	
	public function get_merk_car(){
		
		$sql 	= "
		SELECT `FIELD`, SUBSTRING_INDEX(`FIELD`,'_',-1)AS MERK_CAR FROM `TREE_PROFILING_RES`
		WHERE `FIELD` LIKE '%merk_car%'
		AND `FIELD` <> `VALUE`
		GROUP BY `FIELD`
		ORDER BY `FIELD`,`VALUE`,LABEL,SEQUENCE
		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	public function get_merk_mb(){
		
		$sql 	= "
		SELECT `FIELD`, SUBSTRING_INDEX(`FIELD`,'_',-1)AS MERK_MB FROM `TREE_PROFILING_RES`
		WHERE `FIELD` LIKE '%merk_mb%'
		AND `FIELD` <> `VALUE`
		GROUP BY `FIELD`
		ORDER BY `FIELD`,`VALUE`,LABEL,SEQUENCE
		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	public function get_respondent($data){
		
		$sql 	= "
		SELECT *,KOTA_KABUPATEN_DAGRI AS KOTA_X, NAMA AS NAMA_PELANGGAN, NOTEL_INET AS CARDNO, ALAMAT_NOSS AS ALAMAT FROM RESPONDENT_SURVEY_CLEAR A
		JOIN `TOP_20_PROGRAM_SURVEY_CLEAN` B ON A.NOTEL_INET = B.CARDNO
		WHERE NOTEL_INET = '".$data['id']."'
		ORDER BY `RANK` ASC,DURATION DESC
		";
		
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function get_outbound2($data){
		
		$sql 	= "
		SELECT * FROM t_outbond_call 
		WHERE CARDNO = '".$data['id']."'
		";
		
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
		
		
	public function get_field($data){
		
		$sql 	= "
		SELECT * FROM t_question_value
		WHERE `id_category` = ".$data."
		ORDER BY seq ASC
		";
		
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	public function get_kuss($data){
		
		$sql 	= "
		SELECT * FROM t_kuisioner
		WHERE `id_outbound` = ".$data."
		";
		
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}			
	
	public function get_field_val($data){
		
		$sql 	= "
		SELECT * FROM t_question_value
		WHERE `id_category` = ".$data."
		and mandatory = 1 
		ORDER BY seq ASC
		";
		
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
		
		
	public function delete_curr_answ($cat,$id_qus){
		
		
		$sql 	= "
		
		DELETE FROM t_form_value 
					WHERE id_question IN ( SELECT id_question FROM t_question_value WHERE 
					id_category = ".$cat." ) AND id_kuisioner = ".$id_qus."
		
		";
		
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		//$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		//return $result;
		
	}				
	
	public function delete_outbound($id_qus){
		
		$sql 	= "
		
		INSERT INTO t_outbond_call_history
		SELECT * FROM t_outbond_call WHERE id_outbound = ".$id_qus['id_outbound']."
		
		";
		
		$query_all 	=  $this->db->query($sql);

		//$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		$sql 	= "
		
		DELETE FROM t_outbond_call WHERE id_outbound = ".$id_qus['id_outbound']."
		
		";
		
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		//$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		//return $result;
		
	}		
	
	public function edit_stat($data){
		
		$datas = array(
			'status_survey' => 2
		);
		
		//	print_r($datas);die;
		$this->db->where('id_outbound', $data['id_outbound']);
		$this->db->update('t_kuisioner', $datas);


		//$query 	= $this->db->query($sql,$data);

		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid = $row['LAST_INSERT_ID()'];

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;

		return $arr_result;
		
	}	
	
	
	
	
	

	
	
			
				
	
}	