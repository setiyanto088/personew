<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_surveyor_model extends CI_Model {
	
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
	
	public function get_summ($data){
		
		$sql 	= '
		SELECT 
					SUM(IF(respond = 7, 1, 0)) konfirmasi ,
					SUM(IF(respond IN (3,5), 1, 0)) menolak ,
					SUM(IF(respond IN (1,2,4), 1, 0)) tidak_mejawab,
					count(*) as total
					FROM `t_outbond_call` a
					JOIN u_user u ON a.id_user = u.id
					WHERE u.lokasi = ?
		';

		$query_all 	=  $this->db->query($sql,array('user_id' => $data['idlokasi']));

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	public function get_history($data){
		
		$sql 	= '
					SELECT c.status_survey, a.*,DATE_FORMAT(time_call,"%d %M %Y") AS dd,DATEDIFF(date_survey, NOW()) sa, `KOTA_KABUPATEN_DAGRI` `KOTA_X`,b.`NO_HP`,`ALAMAT_NOSS` `ALAMAT`,b.`NAMA` NAMA_PELANGGAN, b.KECAMATAN_DAGRI, b.KELURAHAN_DESA_DAGRI 
					FROM `t_outbond_call` a JOIN `RESPONDENT_SURVEY_CLEAR` b ON a.cardno = b.`NOTEL_INET`
					JOIN u_user u ON a.id_user = u.id
					LEFT JOIN `t_kuisioner` c ON a.id_outbound = c.id_outbound
					
					WHERE lokasi = ?
					
					GROUP BY a.cardno
					ORDER BY time_call DESC
					LIMIT 5
					
		';

		$query_all 	=  $this->db->query($sql,array('user_id' => $data['idlokasi']));

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function get_chart($data){
		
		$sql 	= "
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
					FROM `t_outbond_call`a
					JOIN u_user u ON a.id_user = u.id
					WHERE u.lokasi = ?
		";

		$query_all 	=  $this->db->query($sql,array('user_id' => $data['idlokasi']));

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	

	
	
			
				
	
}	