<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Agentperformance_model extends CI_Model {
	
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
	
	public function get_location($data){
		
		$sql 	= 'select * from t_location
		where id_location  = ? ';

		$query_all 	=  $this->db->query($sql,$data);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	

	public function get_user_stat($id){
		
		$sql 	= '
		
		select id,nama,sum(bersedia) as bersedia, sum(`interview`) as interview,sum(call_resp) as total_call from (
			select a.id,a.nama,if(e.respond = 7,1,0 ) as bersedia,if(f.status_survey = 1,1,0) as interview,
			if(e.id_outbound is null,0,1) as call_resp from u_user a
			join t_user_location b on a.id = b.id_user
			join  (select a.* from t_user_location a 
					join t_location b on a.id_location = b.id_location
					where a.id_user  = '.$id.'
			 ) c on b.id_location = c.id_location
			 join u_user_group d on a.id = d.id_user 
			 left join t_outbond_call e on a.id = e.`id_user`
			 left join t_kuisioner f on e.id_outbound = f.id_outbound
			 where d.id_role in (111,127) 
			 ) a group by a.id
			 order by nama
			 

		'; 

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	

	public function get_user($location){
		
		$sql 	= 'SELECT a.*,b.username, c.group FROM u_user a 
					join u_user_group b on a.id = b.id_user
					join u_group c on b.id_role = c.id
					where b.id_role = 111 and a.lokasi = '.$location; 

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	public function get_last_user(){
		
		$sql 	= 'select MAX(id) last_id from u_user ';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	public function get_last_group(){
		
		$sql 	= 'select MAX(id) last_id from u_user_group ';

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function add_user($data)
	{
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'nama' => $data['nama'],
			'tmplahir' => $data['tmplahir'],
			'tgllahir' => $data['tgllahir'],
			'gender' => $data['gender'],
			'id' => $data['last_id']+1,
			'image' => $data['picture'],
			'nokontak' => $data['notelp'],
			'email' => $data['email'],
			'created_at' => date('Y-m-d H:i:s'),
			'created_by' => $data['user_id'],
			'last_activity_status' => 1,
			'lokasi' => $data['lokasi']
		);

		//	print_r($datas);die;

		$this->db->insert('u_user', $datas);


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
	
	public function add_user_group($data)
	{
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'id_user' => $data['id_user']+1,
			'id_role' => $data['role_id'],
			'id' => $data['id_user']+1,
			'password' => $data['password_hash'],
			'username' => $data['username'],
			'created_at' => date('Y-m-d H:i:s')
		);

		//	print_r($datas);die;

		$this->db->insert('u_user_group', $datas);


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
	
	public function edit_user($data)
	{
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'nama' => $data['nama'],
			'nokontak' => $data['notelp'],
			'email' => $data['email']
		);

		//	print_r($datas);die;
		$this->db->where('id', $data['user_id']);
		$this->db->update('u_user', $datas);


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
	
	public function edit_group_wp($data)
	{
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'username' => $data['username'],
			'password' => $data['password_hash']
		);

		//	print_r($datas);die;
		$this->db->where('id_user', $data['user_id']);
		$this->db->update('u_user_group', $datas);


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
	
	public function edit_group_wop($data)
	{
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'username' => $data['username']
		);

		//	print_r($datas);die;
		$this->db->where('id_user', $data['user_id']);
		$this->db->update('u_user_group', $datas);


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
	
		
	public function get_chart($data){
		
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
		where id_user = ?
		group by date_format(time_call,'%Y-%m-%d')

		";

		$query_all 	=  $this->db->query($sql,array('user_id' => $data));

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		
	
	public function get_resume($data){
		
		$sql 	= "
				SELECT nama,
						SUM(IF(IF(respond = 7,1,1) IS NULL,0,IF(respond = 7,1,1)) ) AS semua,
						SUM(IF(IF(respond = 7,1,0) IS NULL,0,IF(respond = 7,1,0)) ) AS bersedia, 
						SUM(IF(IF(respond <> 7,1,0) IS NULL,0,IF(respond <> 7,1,0)) ) AS tidak_bersedia FROM u_user B
					LEFT JOIN `t_outbond_call` A ON A.id_user = B.id
					WHERE B.id = ?
					AND A.respond IS NOT NULL
		";

		$query_all 	=  $this->db->query($sql,array('id_user' => $data));

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function get_history($data){
		
		$sql 	= '
					SELECT c.status_survey, a.*,DATE_FORMAT(time_call,"%d %M %Y") AS dd,DATEDIFF(date_survey, NOW()) sa, `KOTA_KABUPATEN_DAGRI` `KOTA_X`,b.`NO_HP`,`ALAMAT_NOSS` `ALAMAT`,`NAMA` NAMA_PELANGGAN, b.KECAMATAN_DAGRI, b.KELURAHAN_DESA_DAGRI FROM `t_outbond_call` a
					JOIN `RESPONDENT_SURVEY_CLEAR` b ON a.cardno = b.`NOTEL_INET`
					LEFT JOIN `t_kuisioner` c ON a.id_outbound = c.id_outbound
					WHERE id_user = ?
					
					GROUP BY a.cardno
					ORDER BY time_call DESC
					LIMIT 5
					
		';

		$query_all 	=  $this->db->query($sql,array('user_id' => $data));

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
			
				
	
}	