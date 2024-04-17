<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		
	}
	
	
	public function list_po($params = array()){
		
		$strOrderBy = '`'.$params['order_column'].'` '.$params['order_dir'];
		
			$query = 	'
				SELECT COUNT(*) AS jumlah FROM `t_input` a
				LEFT JOIN t_output2 b ON a.user_id = b.user_id
				WHERE b.user_id IS NULL AND ( 
					nama LIKE "%'.$params['searchtxt'].'%" OR
					nik LIKE "%'.$params['searchtxt'].'%" 
				)
			';
						
			$query2 = 	'
				SELECT z.*, rank() over ( ORDER BY user_id ASC) AS Rangking from ( 
					select a.* FROM `t_input` a
					LEFT JOIN t_output2 b ON a.user_id = b.user_id
					WHERE b.user_id IS NULL  AND ( 
					nama LIKE "%'.$params['searchtxt'].'%" OR
					nik LIKE "%'.$params['searchtxt'].'%" 
				)  order by user_id) z
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
		
		$sql 	= 'SELECT * FROM t_input WHERE user_id = ? ';

		$query_all 	=  $this->db->query($sql,array('user_id' => $data));

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}
	
		public function get_header(){
		
		$sql 	= '
		select * from (		 
		SELECT count(A.user_id) as all_data FROM `t_input` A LEFT JOIN 
		`t_output2` B ON A.user_id = B.user_id
		) A, (		 
		SELECT COUNT(A.user_id) AS process_data FROM `t_input` A LEFT JOIN 
		`t_output2` B ON A.user_id = B.user_id WHERE B.user_id is NOT null
		) B, (		 
		SELECT COUNT(A.user_id) AS not_process_data FROM `t_input` A LEFT JOIN 
		`t_output2` B ON A.user_id = B.user_id WHERE B.user_id is null
		) C
		';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	public function get_data(){
		
		$sql 	= "
		
SELECT * FROM (		 
SELECT COUNT(A.user_id) AS ktp_name_valid FROM 
`t_output2` A WHERE `ktp_name_v` = 'True'
) A, (		 
SELECT COUNT(A.user_id) AS ktp_name_npt_valid FROM 
`t_output2` A WHERE `ktp_name_v` = 'False'
) B, (		 
SELECT COUNT(A.user_id) AS bod_valid FROM 
`t_output2` A WHERE `ktp_date_of_birth_v` = 'True'
) C, (		 
SELECT COUNT(A.user_id) AS bod_npt_valid FROM 
`t_output2` A WHERE `ktp_date_of_birth_v` = 'False'
) D, (		 
SELECT COUNT(A.user_id) AS nik_valid FROM 
`t_output2` A WHERE `ktp_nik_v` = 'True'
) E, (		 
SELECT COUNT(A.user_id) AS nik_npt_valid FROM 
`t_output2` A WHERE `ktp_nik_v` = 'False'
) F, (		 
SELECT COUNT(A.user_id) AS ijasah_valid FROM 
`t_output2` A WHERE `ijazah_institution_v` = 'True'
) A1, (		 
SELECT COUNT(A.user_id) AS ijasah_npt_valid FROM 
`t_output2` A WHERE `ijazah_institution_v` = 'False'
) B1, (		 
SELECT COUNT(A.user_id) AS vac_valid FROM 
`t_output2` A WHERE `ijazah_faculty_v` = 'True'
) C1, (		 
SELECT COUNT(A.user_id) AS vac_npt_valid FROM 
`t_output2` A WHERE `ijazah_faculty_v` = 'False'
) D1, (		 
SELECT COUNT(A.user_id) AS gpa_valid FROM 
`t_output2` A WHERE `ijazah_major_v` = 'True'
) E1, (		 
SELECT COUNT(A.user_id) AS gpa_npt_valid FROM 
`t_output2` A WHERE `ijazah_major_v` = 'False'
) F1, (		 
SELECT COUNT(A.user_id) AS major_valid FROM 
`t_output2` A WHERE `transkrip_gpa_v` = 'True'
) E11, (		 
SELECT COUNT(A.user_id) AS major_npt_valid FROM 
`t_output2` A WHERE `transkrip_gpa_v` = 'False'
) F11


		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}
			
				
	
}	