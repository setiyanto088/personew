<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Survey_model extends CI_Model {
	
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
	
	public function get_respondent($data){
		
		$sql 	= "
		SELECT * FROM `PROSPEK_RESPONDEN_SURVEY`
		WHERE CARDNO = '".$data['id']."'
		ORDER BY CAST(RANK_PROGRAM AS SIGNED) ASC,DURASI DESC
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
	
	
	

	
	
			
				
	
}	