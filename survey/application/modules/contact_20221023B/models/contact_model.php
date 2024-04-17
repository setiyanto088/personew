<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact_model extends CI_Model {
	
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
	
	public function get_detail($data){
		
		$sql 	= 'SELECT * FROM t_output2 WHERE user_id = ? ';

		$query_all 	=  $this->db->query($sql,array('user_id' => $data));

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	

	public function get_user(){
		
		$sql 	= 'SELECT a.*,b.username, c.group FROM u_user a 
					join u_user_group b on a.id = b.id_user
					join u_group c on b.id_role = c.id
					where b.id_role in(98,100)';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function get_kota(){
		
		$sql 	= 'SELECT *,KOTA_KABUPATEN_DAGRI AS KOTA_X from RESPONDENT_SURVEY_CLEAR
		WHERE KOTA_KABUPATEN_DAGRI <> ""
		group by KOTA_KABUPATEN_DAGRI
		order by KOTA_KABUPATEN_DAGRI';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
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
	
	public function get_contact($SES){
		
		$sql 	= 'SELECT *,KOTA_KABUPATEN_DAGRI as KOTA_X, NAMA AS NAMA_PELANGGAN, NOTEL_INET as CARDNO, ALAMAT_NOSS AS ALAMAT from RESPONDENT_SURVEY_CLEAR A 
		JOIN mapping_kecamatan B on A.KECAMATAN_DAGRI = B.KECAMATAN
		WHERE KOTA_KABUPATEN_DAGRI <> ""
		AND B.ID_USER = '.$SES['user_id'].'
		group by NOTEL_INET
		order by KOTA_KABUPATEN_DAGRI,NAMA
		LIMIT 1000';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}			
	
	public function get_summ(){
		
		$sql 	= '
		SELECT 
					SUM(IF(respond = 6, 1, 0)) konfirmasi ,
					SUM(IF(respond IN (3,5), 1, 0)) menolak ,
					SUM(IF(respond IN (1,2,4), 1, 0)) tidak_mejawab 
					FROM `t_outbond_call`
					WHERE id_user = 5
					';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		

	public function get_list_contact($param,$SES){
		
		
		IF($param['int_SS'] == 0){
			if($param['kota_list'] == '' || $param['segment'] == ''){
				$sql 	= 'SELECT *,KOTA_KABUPATEN_DAGRI as KOTA_X, NAMA AS NAMA_PELANGGAN, NOTEL_INET as CARDNO, ALAMAT_NOSS AS ALAMAT, SES_SEGMENT SEGMENT from RESPONDENT_SURVEY_CLEAR A 
				
				JOIN mapping_kecamatan B on A.KECAMATAN_DAGRI = B.KECAMATAN
				WHERE KOTA_KABUPATEN_DAGRI <> ""
				AND B.ID_USER = '.$SES['user_id'].'
				AND `ALAMAT_NOSS` LIKE CONCAT("%", `KOTA_KABUPATEN_DAGRI` ,"%")
				group by NOTEL_INET
				order by KOTA_KABUPATEN_DAGRI,NAMA
				LIMIT 0';
			}else{
				
				$sql 	= 'SELECT A.*,KOTA_KABUPATEN_DAGRI as KOTA_X, NAMA AS NAMA_PELANGGAN, NOTEL_INET as CARDNO, ALAMAT_NOSS AS ALAMAT,SES_SEGMENT SEGMENT from RESPONDENT_SURVEY_CLEAR A
				
				LEFT JOIN t_outbond_call B on A.NOTEL_INET = B.cardno	
				where KECAMATAN_DAGRI IN ('.(substr($param['kota_list'], 0, -1)).')
				AND SES_SEGMENT IN ('.(substr($param['segment'], 0, -1)).')
				AND `ALAMAT_NOSS` LIKE CONCAT("%", `KOTA_KABUPATEN_DAGRI` ,"%")
				AND B.id_outbound is null
				group by NOTEL_INET
				order by KOTA_X,NAMA_PELANGGAN';
			}
		
		}ELSE{
		
			if($param['kota_list'] == '' || $param['segment'] == ''){
				$sql 	= 'SELECT *,KOTA_KABUPATEN_DAGRI as KOTA_X, NAMA AS NAMA_PELANGGAN, NOTEL_INET as CARDNO, ALAMAT_NOSS AS ALAMAT, SES_SEGMENT SEGMENT from RESPONDENT_SURVEY_CLEAR A 
				join (select LOCATION_NAME from `t_location` a join u_user b on a.id_location = b.lokasi WHERE b.id = '.$SES['user_id'].') L ON UPPER(A.`KOTA_KABUPATEN_DAGRI`) = UPPER(L.LOCATION_NAME)
				JOIN mapping_kecamatan B on A.KECAMATAN_DAGRI = B.KECAMATAN
				WHERE KOTA_KABUPATEN_DAGRI <> ""
				AND B.ID_USER = '.$SES['user_id'].'
				AND `ALAMAT_NOSS` LIKE CONCAT("%", `KOTA_KABUPATEN_DAGRI` ,"%")
			group by NOTEL_INET
			order by KOTA_KABUPATEN_DAGRI,NAMA
			LIMIT 0';
		}else{
			
				$sql 	= 'SELECT A.*,KOTA_KABUPATEN_DAGRI as KOTA_X, NAMA AS NAMA_PELANGGAN, NOTEL_INET as CARDNO, ALAMAT_NOSS AS ALAMAT,SES_SEGMENT SEGMENT from RESPONDENT_SURVEY_CLEAR A
				join (select LOCATION_NAME from `t_location` a join u_user b on a.id_location = b.lokasi WHERE b.id = '.$SES['user_id'].') L ON UPPER(A.`KOTA_KABUPATEN_DAGRI`) = UPPER(L.LOCATION_NAME)
				LEFT JOIN t_outbond_call B on A.NOTEL_INET = B.cardno	
				where KECAMATAN_DAGRI IN ('.(substr($param['kota_list'], 0, -1)).')
				AND SES_SEGMENT IN ('.(substr($param['segment'], 0, -1)).')
				AND `ALAMAT_NOSS` LIKE CONCAT("%", `KOTA_KABUPATEN_DAGRI` ,"%")
				AND B.id_outbound is null
				group by NOTEL_INET
				order by KOTA_X,NAMA_PELANGGAN';
			}
			
		}
		
		//echo $sql;die;
		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function get_list_contact_sort($param,$SES){
		
		if($param['kota_list'] == '' || $param['segment'] == ''){
			$sql 	= 'SELECT *,KOTA_KABUPATEN_DAGRI as KOTA_X, NAMA AS NAMA_PELANGGAN, NOTEL_INET as CARDNO, ALAMAT_NOSS AS ALAMAT,SES_SEGMENT SEGMENT from RESPONDENT_SURVEY_CLEAR A 
			JOIN mapping_kecamatan B on A.KECAMATAN_DAGRI = B.KECAMATAN
			WHERE KOTA_KABUPATEN_DAGRI <> ""
			AND B.ID_USER = '.$SES['user_id'].'
		group by NOTEL_INET
		order by '.$param['sort'].' '.$param['cnd'].'
		LIMIT 0';
		}else{
			$sql 	= 'SELECT A.*,KOTA_KABUPATEN_DAGRI as KOTA_X, NAMA AS NAMA_PELANGGAN, NOTEL_INET as CARDNO, ALAMAT_NOSS AS ALAMAT,SES_SEGMENT SEGMENT from RESPONDENT_SURVEY_CLEAR A
			LEFT JOIN t_outbond_call B on A.NOTEL_INET = B.cardno	
			where KECAMATAN_DAGRI IN ('.(substr($param['kota_list'], 0, -1)).')
			AND SES_SEGMENT IN ('.(substr($param['segment'], 0, -1)).')
			AND B.id_outbound is null
			group by NOTEL_INET
			order by '.$param['sort'].' '.$param['cnd'].'';
		}
		
		// if($param['kota_list'] == ''){
			// $sql 	= 'SELECT * from PROSPEK_RESPONDEN_SURVEY
			// group by CARDNO
			// order by '.$param['sort'].' '.$param['cnd'].'';
		// }else{
			// $sql 	= 'SELECT * from PROSPEK_RESPONDEN_SURVEY
			// where KOTA_X IN ('.(substr($param['kota_list'], 0, -1)).')
			// group by CARDNO
			// order by '.$param['sort'].' '.$param['cnd'].'';
		// }
		
		

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function save_respond($data,$user_id)
	{
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'id_user' => $user_id,
			'cardno' => $data['no_cardno'],
			'respond' => $data['respond'],
			'no_whatsupp' => $data['no_whats'],
			'note' => $data['ket'],
			'time_call' => date('Y-m-d H:i:s'),
			'date_survey' => $data['tgl'],
			'date_hours_survey' => $data['jam_tgl_awal'].'-'.$data['jam_tgl_akhir'],
			'day_survey' => $data['values_hari_rel'],
			'hours_survey' => $data['values_jam_rel'],
			'usia' => $data['usia'],
			'p1' => $data['p1'].'|'. $data['ps1'],
			'p2' => $data['p2'].'|'. $data['ps2'],
			'p3' => $data['p3'].'|'. $data['ps3'],
			'p4' => $data['p4'].'|'. $data['ps4'],
			'p5' => $data['p5'].'|'. $data['ps5'],
			'p6' => $data['p6'].'|'. $data['ps6'],
			'p7' => $data['p7'].'|'. $data['ps7'],
			'p8' => $data['p8'].'|'. $data['ps8'],
			'p9' => $data['p9'].'|'. $data['ps9'],
			'p10' => $data['p10'].'|'. $data['ps10'],
			'p11' => $data['p11'].'|'. $data['ps11'],
			'p12' => $data['p12'].'|'. $data['ps12'],
			'p13' => $data['p13'].'|'. $data['ps13'],
			'p14' => $data['p14'].'|'. $data['ps14'],
			'p15' => $data['p15'].'|'. $data['ps15'],
			'p16' => $data['p16'].'|'. $data['ps16'],
			'p17' => $data['p17'].'|'. $data['ps17'],
			'p18' => $data['p18'].'|'. $data['ps18'],
			'p19' => $data['p19'].'|'. $data['ps19'],
			'p20' => $data['p20'].'|'. $data['ps20']
		);

		//	print_r($datas);die;

		$this->db->insert('t_outbond_call', $datas);


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
	
	
	public function add_header_survey($data,$user_id,$save_data) {
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'interview' => $user_id,
			'id_outbound' => $save_data['lastid'],
			'status_survey' => 0
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
	
	public function get_respondent($data){
		
		$sql 	= "
		SELECT `CARDNO`,if(`CHANNEL` = '','-',CHANNEL) AS CHANNEL,`PROGRAM`,`BEGIN_PROGRAM`,`END_PROGRAM`,`GENRE_PROGRAM`,`SESSIONS`,`DURATION`,`RANK` FROM `TOP_20_PROGRAM_SURVEY_CLEAN`
		WHERE CARDNO = '".$data['cardno']."'
		ORDER BY `RANK`
		";
		
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	
	public function delete_data_b($data,$user_id){
		
		$sql 	= "
			DELETE FROM `t_kuisioner` WHERE `id_outbound` = (						
						SELECT `id_outbound` FROM `t_outbond_call`
						WHERE `id_user` = ".$user_id."
						AND CARDNO = '".$data['no_cardno']."'
					)
		";

		$query_all 	=  $this->db->query($sql);
		
		
				$sql2 	= "
				DELETE FROM `t_outbond_call`
						WHERE `id_user` = ".$user_id."
						AND CARDNO = '".$data['no_cardno']."'
		";

		$query_all2 	=  $this->db->query($sql2);
		
		
		
		$this->db->close();
		$this->db->initialize();
		
		//return $result;
		
	}	
	
	
			
				
	
}	