<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model {
	
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
	
	public function get_total_call(){

		$sql = '
		SELECT count(*) total_call FROM t_outbond_call a
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;

	}
	
	public function get_total_call_bersedia(){

		$sql = '
		SELECT count(*) total_call FROM t_outbond_call a
		where respond = 7
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;

	}
			
	public function get_total_interview(){

		$sql = '
		SELECT count(*) total_call FROM t_kuisioner a
		where status_survey = 1
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;

	}

	public function get_location(){

		$sql = '
		SELECT * FROM t_location a
		order by location_name
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;

	}

	public function get_chart(){
		
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
			 
		SELECT date_format(time_call,'%Y-%m-%d') as dt,count(*) as cnt FROM t_outbond_call
		group by date_format(time_call,'%Y-%m-%d')

		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		

	public function get_chart_total($data){
	
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
		join RESPONDENT_SURVEY_CLEAR b on  b.notel_inet = a.cardno
		where KOTA_KABUPATEN_DAGRI = '".$data."'
		group by date_format(time_call,'%Y-%m-%d')

		";

		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
		
	public function get_chart_sedia($data){
	
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
		join RESPONDENT_SURVEY_CLEAR b on  b.notel_inet = a.cardno
		where respond = 7 AND KOTA_KABUPATEN_DAGRI = '".$data."' 
		group by date_format(time_call,'%Y-%m-%d')

		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	

	public function get_chart_interview($data){
	
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
			 
		SELECT date_format(start_time,'%Y-%m-%d') as dt,count(*) as cnt FROM t_kuisioner a
		join RESPONDENT_SURVEY_CLEAR b on  b.notel_inet = a.no_entri
		where status_survey = 1 AND KOTA_KABUPATEN_DAGRI = '".$data."' 
		group by date_format(start_time,'%Y-%m-%d')

		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
}	