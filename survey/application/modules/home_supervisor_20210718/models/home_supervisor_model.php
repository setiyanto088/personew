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

		$sql = '
		SELECT count(*) total_call FROM t_outbond_call a
		join u_user b on a.id_user = b.id
		WHERE b.`lokasi` IN(
				SELECT DISTINCT(id_location) id_location FROM `t_user_hierarcy` a
				JOIN u_user b ON a.id_user = b.id
				JOIN `t_user_location` c ON b.id = c.`id_user`
				WHERE parent = "'.$user_id.'"
			)
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
		WHERE b.`lokasi` IN(
				SELECT DISTINCT(id_location) id_location FROM `t_user_hierarcy` a
				JOIN u_user b ON a.id_user = b.id
				JOIN `t_user_location` c ON b.id = c.`id_user`
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
		SELECT count(*) total_call FROM t_kuisioner a 
		join u_user b on a.interview = b.id
		WHERE b.`lokasi` IN(
				SELECT DISTINCT(id_location) id_location FROM `t_user_hierarcy` a
				JOIN u_user b ON a.id_user = b.id
				JOIN `t_user_location` c ON b.id = c.`id_user`
				WHERE parent = "'.$user_id.'"
			)
		and status_survey = 1
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;

	}

	public function get_location($user_id){

		$sql = '
		SELECT d.* FROM `t_user_hierarcy` a
				JOIN u_user b ON a.id_user = b.id
				JOIN `t_user_location` c ON b.id = c.`id_user`
				JOIN t_location d on c.id_location = d.id_location
				WHERE parent = "'.$user_id.'"
				group by d.id_location
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
		WHERE b.`lokasi` IN(
				SELECT DISTINCT(id_location) id_location FROM `t_user_hierarcy` a
				JOIN u_user b ON a.id_user = b.id
				JOIN `t_user_location` c ON b.id = c.`id_user`
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

	public function table_data($user_id){


		$sql = "
		SELECT a.*,
			if(a.total_call is null,0,a.total_call) total_call,
			if(b.total_bersedia is null,0,b.total_bersedia) total_bersedia, 
			if(c.total_interview is null,0,c.total_interview) total_interview ,
			d.*,e.nama as supervisor
			FROM (
				SELECT b.id,b.nama,COUNT(distinct(cardno)) total_call, SUM(`RESP`) AS all_resp FROM t_outbond_call a 
			JOIN u_user b ON a.id_user = b.id
			LEFT JOIN `mapping_kecamatan` c ON c.`ID_USER` = b.id
			LEFT JOIN `RES_LOCATION` d ON c.kecamatan = d.`KECAMATAN`
			WHERE b.`lokasi` IN(
				SELECT DISTINCT(id_location) id_location FROM `t_user_hierarcy` a
				JOIN u_user b ON a.id_user = b.id
				JOIN `t_user_location` c ON b.id = c.`id_user`
				WHERE parent = '".$user_id."'
			)
			GROUP BY a.id_user
		) a left join (
			SELECT b.id,b.nama,count(a.id_outbound) total_bersedia FROM t_outbond_call a 
			join u_user b on a.id_user = b.id
			where a.respond = 7
			group by id_user
		) b on a.id = b.id
		left join (
			SELECT c.id,c.nama,count(id_kuisioner) total_interview from t_kuisioner a 
			join t_outbond_call b on a.id_outbound = b.id_outbound
			join u_user c on b.id_user = c.id
			group by c.id
		) c on b.id = c.id
		left join  t_user_hierarcy	d on a.id = d.id_user
		left join u_user e on d.parent = e.id
		order by a.total_call desc, nama 
		";

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

		echo $sql;die;

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
		WHERE b.`lokasi` IN(
				SELECT DISTINCT(id_location) id_location FROM `t_user_hierarcy` a
				JOIN u_user b ON a.id_user = b.id
				JOIN `t_user_location` c ON b.id = c.`id_user`
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
			 
		SELECT date_format(start_time,'%Y-%m-%d') as dt,count(*) as cnt FROM t_kuisioner a
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
			 
		SELECT date_format(start_time,'%Y-%m-%d') as dt,count(*) as cnt FROM t_kuisioner a
		join u_user b on a.interview = b.id
		WHERE b.`lokasi` IN(
				SELECT DISTINCT(id_location) id_location FROM `t_user_hierarcy` a
				JOIN u_user b ON a.id_user = b.id
				JOIN `t_user_location` c ON b.id = c.`id_user`
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