<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_supervisor_model extends CI_Model {
	
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

	public function get_total_call($user_id){

		// $sql = '
		// SELECT count(*) total_call FROM t_outbond_call a
		// join u_user b on a.id_user = b.id
		// WHERE b.`lokasi` IN(
				// SELECT DISTINCT(id_location) id_location FROM `t_user_hierarcy` a
				// JOIN u_user b ON a.id_user = b.id
				// JOIN `t_user_location` c ON b.id = c.`id_user`
				// WHERE parent = "'.$user_id.'"
			// )
		// ';
		
		
	$sql = '
		SELECT count(*) total_call FROM t_outbond_call a
		join u_user b on a.id_user = b.id
		WHERE a.id_user IN(
						SELECT `id_user` FROM `t_user_hierarcy` a
						WHERE parent = "'.$user_id.'"
					)
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;

	}

	public function respondent_data($user_id){
		
	$sql = '
		SELECT SUM(RESP) AS DATA_RESP FROM t_user_location a
		join `t_location` b on a.id_location = b.id_location
		join RES_LOCATION c on b.location_name = c.KOTA
		where a.id_user = '.$user_id.'
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;

	}

	public function get_total_call_bersedia($user_id){

		$sql = '
		SELECT count(*) total_call FROM t_outbond_call a 
		join u_user b on a.id_user = b.id
		WHERE a.id_user IN(
						SELECT `id_user` FROM `t_user_hierarcy` a
						WHERE parent = "'.$user_id.'"
					)
		and respond = 7
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;

	}
		
	public function get_total_interview($user_id){

		$sql = '
		SELECT count(*) total_call FROM ( SELECT * FROM ( SELECT RANK() OVER (PARTITION BY no_entri ORDER BY start_time) rr ,* FROM t_kuisioner ) s WHERE rr = 1 ) a 
		join u_user b on a.interview = b.id
		WHERE a.interview IN(
						SELECT `id_user` FROM `t_user_hierarcy` a
						WHERE parent = "'.$user_id.'"
					)
		and status_survey <> 0
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;

	}

	public function get_location($user_id){

		$sql = '
		SELECT d.* FROM `t_user_location` c 
				JOIN t_location d on c.id_location = d.id_location
				WHERE c.id_user = "'.$user_id.'"
				group by d.id_location
				order by location_name
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;

	}

	public function get_chart($user_id){
		
		/*$sql 	= "
		SELECT 
					SUM(IF(DATE_FORMAT(time_call,'%m') = 1, 1, 0)) Jan,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 2, 1, 0)) Feb,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 3, 1, 0)) Mar,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 4, 1, 0)) Apr,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 5, 1, 0)) May,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 6, 1, 0)) Jun,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 7, 1, 0)) Jul,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 8, 1, 0)) Aug,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 9, 1, 0)) Sep,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 10, 1, 0)) `Oct`,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 11, 1, 0)) Nov,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 12, 1, 0)) `Dec`
					FROM `t_outbond_call`
					WHERE id_user = ?
		"; */

		$sql = "
			
		SELECT date_format(time_call,'%Y-%m-%d') as dt,count(distinct(cardno)) as cnt FROM t_outbond_call a
		join u_user b on a.id_user = b.id
		WHERE a.id_user IN(
			SELECT `id_user` FROM `t_user_hierarcy` a
			WHERE parent = '".$user_id."'
		)
		group by date_format(time_call,'%Y-%m-%d')

		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		

	public function list_survey($user_id){

		$query = "
		SELECT A.* FROM (
		
			SELECT A.KOTA_KABUPATEN_DAGRI, IF(URBAN IS NULL, 0, URBAN) URBAN, IF(RURAL IS NULL,0,RURAL) RURAL FROM (
				SELECT DISTINCT(KOTA_KABUPATEN_DAGRI) KOTA_KABUPATEN_DAGRI FROM RESPONDENT_SURVEY_CLEAR
				GROUP BY KOTA_KABUPATEN_DAGRI
				) A LEFT JOIN (
				
				SELECT KOTA_KABUPATEN_DAGRI, SUM(URBAN) URBAN, SUM(RURAL) RURAL FROM (
				SELECT KOTA_KABUPATEN_DAGRI, IF(SES_SEGMENT = 'RURAL', 1, 0) RURAL, IF(SES_SEGMENT = 'URBAN', 1, 0) URBAN FROM ( SELECT * FROM ( SELECT RANK() OVER (PARTITION BY no_entri ORDER BY start_time) rr ,b.*,status_survey FROM t_kuisioner a 
				join `t_outbond_call` b on a.`id_outbound` = b.`id_outbound` ) s WHERE rr = 1 ) a 
				JOIN RESPONDENT_SURVEY_CLEAR b ON a.cardno = b.NOTEL_INET
				WHERE a.id_user IN(
						SELECT `id_user` FROM `t_user_hierarcy` a
						WHERE parent = '".$user_id."'
					)
		#AND (status_survey = 1 OR curr_page = 9)
		AND (status_survey <> 0)
	) F
	GROUP BY KOTA_KABUPATEN_DAGRI
	
	) B ON A.KOTA_KABUPATEN_DAGRI = B.KOTA_KABUPATEN_DAGRI
	
	) A JOIN (
		SELECT d.* FROM `t_user_location` c
					JOIN t_location d ON c.id_location = d.id_location
					WHERE c.id_user = '".$user_id."'
					GROUP BY d.id_location
	) B ON A.KOTA_KABUPATEN_DAGRI = B.location_name
		";

		/*$query = "
		SELECT A.KOTA_KABUPATEN_DAGRI, IF(URBAN IS NULL, 0, URBAN) URBAN, IF(RURAL IS NULL,0,RURAL) RURAL FROM (
			SELECT DISTINCT(KOTA_KABUPATEN_DAGRI) KOTA_KABUPATEN_DAGRI FROM RESPONDENT_SURVEY_CLEAR
			GROUP BY KOTA_KABUPATEN_DAGRI
			) A LEFT JOIN (
			
			SELECT KOTA_KABUPATEN_DAGRI, SUM(URBAN) URBAN, SUM(RURAL) RURAL FROM (
SELECT KOTA_KABUPATEN_DAGRI, IF(SES_SEGMENT = 'RURAL', 1, 0) RURAL, IF(SES_SEGMENT = 'URBAN', 1, 0) URBAN FROM t_kuisioner a 
JOIN RESPONDENT_SURVEY_CLEAR b ON a.no_entri = b.NOTEL_INET
) F
GROUP BY KOTA_KABUPATEN_DAGRI

) B ON A.KOTA_KABUPATEN_DAGRI = B.KOTA_KABUPATEN_DAGRI
		";*/

		$query_all 	=  $this->db->query($query);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;


	}
	
	public function list_survey_detail($user_id,$location){

		$query = "
		SELECT a.*,b.id,b.nama,IF(b.survey_urban IS NULL,0,survey_urban) survey_urban,IF(b.survey_rural IS NULL,0,survey_rural) survey_rural FROM (
		SELECT a.`id_user`,b.nama AS nama_s,c.nama AS nama_spv FROM `t_user_hierarcy` a
		JOIN u_user b ON a.id_user = b.id
		JOIN u_user c ON a.parent = c.id
		JOIN `t_user_location` d ON d.`id_user` = a.id_user
		JOIN `t_location` e ON d.`id_location` = e.`id_location`
		WHERE parent = '".$user_id."' AND `location_name` = '".$location."'
	) a LEFT JOIN (
		SELECT id,nama,SUM(survey_urban) survey_urban, SUM(survey_rural) survey_rural FROM (
			SELECT c.nama,c.id,
			IF(SES_SEGMENT = 'URBAN',COUNT(id_kuisioner),0) AS survey_urban,
			IF(SES_SEGMENT = 'RURAL',COUNT(id_kuisioner),0) AS survey_rural,
			SES_SEGMENT FROM ( SELECT * FROM ( SELECT RANK() OVER (PARTITION BY no_entri ORDER BY start_time) rr ,* FROM t_kuisioner ) s WHERE rr = 1 ) a 
			JOIN u_user c ON a.interview = c.id
			JOIN RESPONDENT_SURVEY_CLEAR b ON a.no_entri = b.NOTEL_INET
			WHERE a.interview IN(
						SELECT `id_user` FROM `t_user_hierarcy` a
						WHERE parent = '".$user_id."'
					)
			AND kota_survey = '".$location."'	
			#AND (status_survey = 1 OR curr_page = 9)
			AND (status_survey <> 0)
			GROUP BY c.id,SES_SEGMENT
		 ) k GROUP BY id
		 ORDER BY SUM(survey_urban) DESC
		) b ON a.id_user = b.id
		ORDER BY survey_urban DESC, nama_s 
		";
		
		//ECHO $query;die;

		/*$query = "
		SELECT A.KOTA_KABUPATEN_DAGRI, IF(URBAN IS NULL, 0, URBAN) URBAN, IF(RURAL IS NULL,0,RURAL) RURAL FROM (
			SELECT DISTINCT(KOTA_KABUPATEN_DAGRI) KOTA_KABUPATEN_DAGRI FROM RESPONDENT_SURVEY_CLEAR
			GROUP BY KOTA_KABUPATEN_DAGRI
			) A LEFT JOIN (
			
			SELECT KOTA_KABUPATEN_DAGRI, SUM(URBAN) URBAN, SUM(RURAL) RURAL FROM (
SELECT KOTA_KABUPATEN_DAGRI, IF(SES_SEGMENT = 'RURAL', 1, 0) RURAL, IF(SES_SEGMENT = 'URBAN', 1, 0) URBAN FROM t_kuisioner a 
JOIN RESPONDENT_SURVEY_CLEAR b ON a.no_entri = b.NOTEL_INET
) F
GROUP BY KOTA_KABUPATEN_DAGRI

) B ON A.KOTA_KABUPATEN_DAGRI = B.KOTA_KABUPATEN_DAGRI
		";*/

		$query_all 	=  $this->db->query($query);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;


	}

	public function table_data($user_id){


		$sql = "
		SELECT a.*,b.*,c.RESPOND FROM (
	SELECT `id_user`,b.nama AS nama_s,c.nama AS nama_spv FROM `t_user_hierarcy` a
	JOIN u_user b ON a.id_user = b.id
	JOIN u_user c ON a.parent = c.id
	WHERE parent = '".$user_id."'
	) a LEFT JOIN (
	SELECT a.*,
			IF(a.total_calls IS NULL,0,a.total_calls) total_call,
			IF(b.total_bersedia IS NULL,0,b.total_bersedia) total_bersedia, 
			IF(c.total_interview IS NULL,0,c.total_interview) total_interview ,
			d.*,e.nama AS supervisor
			FROM (
				SELECT b.id,b.nama,COUNT(DISTINCT(cardno)) total_calls, SUM(`RESP`) AS all_resp FROM u_user b
				LEFT JOIN t_outbond_call a  ON a.id_user = b.id
				LEFT JOIN `mapping_kecamatan` c ON c.`ID_USER` = b.id
				LEFT JOIN `RES_LOCATION` d ON c.kecamatan = d.`KECAMATAN`
				WHERE a.id_user IN(
					SELECT `id_user` FROM `t_user_hierarcy` a
					WHERE parent = '".$user_id."'
				)
				GROUP BY a.id_user
		) a LEFT JOIN (
			SELECT b.id,b.nama,COUNT(a.id_outbound) total_bersedia FROM t_outbond_call a 
			JOIN u_user b ON a.id_user = b.id
			WHERE a.respond = 7
			GROUP BY id_user
		) b ON a.id = b.id
		LEFT JOIN (
			SELECT c.id,c.nama,COUNT(id_kuisioner) total_interview FROM ( SELECT * FROM ( SELECT RANK() OVER (PARTITION BY no_entri ORDER BY start_time) rr ,* FROM t_kuisioner ) s WHERE rr = 1 ) a 
			JOIN t_outbond_call b ON a.id_outbound = b.id_outbound
			JOIN u_user c ON b.id_user = c.id
			#AND (status_survey = 1 OR curr_page = 9)
			AND (status_survey <> 0)
			GROUP BY c.id
		) c ON b.id = c.id
		LEFT JOIN  t_user_hierarcy	d ON a.id = d.id_user
		LEFT JOIN u_user e ON d.parent = e.id
		#order by a.total_calls desc, nama 
		
		) b ON a.id_user = b.id
		left join (
			SELECT id_user,SUM(RESP) RESPOND FROM mapping_kecamatan a
					JOIN `RES_LOCATION` d ON a.kecamatan = d.`KECAMATAN`
					WHERE a.id_user IN(
						SELECT `id_user` FROM `t_user_hierarcy` a
						WHERE parent = '".$user_id."'
					)
					GROUP BY a.id_user
			) c on a.id_user = c.id_user
		ORDER BY total_calls DESC, nama_s
		";

		//echo '<pre>';
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
	}

	public function get_chart_total($data,$user_id){
	
		/*$sql 	= "
		SELECT 
					SUM(IF(DATE_FORMAT(time_call,'%m') = 1, 1, 0)) Jan,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 2, 1, 0)) Feb,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 3, 1, 0)) Mar,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 4, 1, 0)) Apr,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 5, 1, 0)) May,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 6, 1, 0)) Jun,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 7, 1, 0)) Jul,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 8, 1, 0)) Aug,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 9, 1, 0)) Sep,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 10, 1, 0)) `Oct`,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 11, 1, 0)) Nov,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 12, 1, 0)) `Dec`
					FROM `t_outbond_call`
					WHERE id_user = ?
		"; */

		$sql = "
			
		SELECT date_format(time_call,'%Y-%m-%d') as dt,count(*) as cnt FROM t_outbond_call a
		join u_user b on a.id_user = b.id
		WHERE b.`lokasi` IN(
				SELECT DISTINCT(id_location) id_location FROM `t_user_hierarcy` a
				JOIN u_user b ON a.id_user = b.id
				JOIN `t_user_location` c ON b.id = c.`id_user`
				WHERE parent = '".$user_id."'
				AND id_location = ".$data." 
		)
		group by date_format(time_call,'%Y-%m-%d')

		";

		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
		
	public function get_chart_sedia($data,$user_id){
	
		/*$sql 	= "
		SELECT 
					SUM(IF(DATE_FORMAT(time_call,'%m') = 1, 1, 0)) Jan,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 2, 1, 0)) Feb,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 3, 1, 0)) Mar,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 4, 1, 0)) Apr,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 5, 1, 0)) May,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 6, 1, 0)) Jun,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 7, 1, 0)) Jul,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 8, 1, 0)) Aug,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 9, 1, 0)) Sep,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 10, 1, 0)) `Oct`,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 11, 1, 0)) Nov,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 12, 1, 0)) `Dec`
					FROM `t_outbond_call`
					WHERE id_user = ?
		"; */

		$sql = "
			
		SELECT date_format(time_call,'%Y-%m-%d') as dt,count(*) as cnt FROM t_outbond_call a
		join u_user b on a.id_user = b.id
		WHERE b.`lokasi` IN(
				SELECT DISTINCT(id_location) id_location FROM `t_user_hierarcy` a
				JOIN u_user b ON a.id_user = b.id
				JOIN `t_user_location` c ON b.id = c.`id_user`
				WHERE parent = '".$user_id."'
				AND id_location = ".$data." 
		)
		group by date_format(time_call,'%Y-%m-%d')

		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	

	public function get_chart_sedia_all($user_id){
	
		/*$sql 	= "
		SELECT 
					SUM(IF(DATE_FORMAT(time_call,'%m') = 1, 1, 0)) Jan,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 2, 1, 0)) Feb,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 3, 1, 0)) Mar,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 4, 1, 0)) Apr,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 5, 1, 0)) May,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 6, 1, 0)) Jun,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 7, 1, 0)) Jul,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 8, 1, 0)) Aug,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 9, 1, 0)) Sep,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 10, 1, 0)) `Oct`,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 11, 1, 0)) Nov,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 12, 1, 0)) `Dec`
					FROM `t_outbond_call`
					WHERE id_user = ?
		"; */

		$sql = "
			
		SELECT date_format(time_call,'%Y-%m-%d') as dt,count(*) as cnt FROM t_outbond_call a
		join u_user b on a.id_user = b.id
		WHERE a.id_user IN(
			SELECT `id_user` FROM `t_user_hierarcy` a
			WHERE parent = '".$user_id."'
		)
		and respond = 7
		group by date_format(time_call,'%Y-%m-%d')

		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}

	public function get_chart_interview($data,$user_id){
	
		/*$sql 	= "
		SELECT 
					SUM(IF(DATE_FORMAT(time_call,'%m') = 1, 1, 0)) Jan,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 2, 1, 0)) Feb,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 3, 1, 0)) Mar,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 4, 1, 0)) Apr,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 5, 1, 0)) May,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 6, 1, 0)) Jun,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 7, 1, 0)) Jul,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 8, 1, 0)) Aug,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 9, 1, 0)) Sep,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 10, 1, 0)) `Oct`,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 11, 1, 0)) Nov,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 12, 1, 0)) `Dec`
					FROM `t_outbond_call`
					WHERE id_user = ?
		"; */

		$sql = "
			 
		SELECT date_format(start_time,'%Y-%m-%d') as dt,count(*) as cnt FROM ( SELECT * FROM ( SELECT RANK() OVER (PARTITION BY no_entri ORDER BY start_time) rr ,* FROM t_kuisioner ) s WHERE rr = 1 ) a
		join u_user b on a.interview = b.id
		WHERE b.`lokasi` IN(
				SELECT DISTINCT(id_location) id_location FROM `t_user_hierarcy` a
				JOIN u_user b ON a.id_user = b.id
				JOIN `t_user_location` c ON b.id = c.`id_user`
				WHERE parent = '".$user_id."'
				AND id_location = ".$data." 
		)
		group by date_format(start_time,'%Y-%m-%d')

		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		

	public function get_chart_interview_all($user_id){
	
		/*$sql 	= "
		SELECT 
					SUM(IF(DATE_FORMAT(time_call,'%m') = 1, 1, 0)) Jan,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 2, 1, 0)) Feb,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 3, 1, 0)) Mar,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 4, 1, 0)) Apr,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 5, 1, 0)) May,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 6, 1, 0)) Jun,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 7, 1, 0)) Jul,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 8, 1, 0)) Aug,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 9, 1, 0)) Sep,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 10, 1, 0)) `Oct`,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 11, 1, 0)) Nov,
					SUM(IF(DATE_FORMAT(time_call,'%m') = 12, 1, 0)) `Dec`
					FROM `t_outbond_call`
					WHERE id_user = ?
		"; */

		$sql = "
			 
		SELECT date_format(start_time,'%Y-%m-%d') as dt,count(*) as cnt FROM ( SELECT * FROM ( SELECT RANK() OVER (PARTITION BY no_entri ORDER BY start_time) rr ,* FROM t_kuisioner ) s WHERE rr = 1 ) a
		join u_user b on a.interview = b.id
		WHERE b.id IN(
			SELECT `id_user` FROM `t_user_hierarcy` a
			WHERE parent = '".$user_id."'
		)
		group by date_format(start_time,'%Y-%m-%d')

		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}
}	