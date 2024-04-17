<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kord_supervisor_model extends CI_Model {
	
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
		
		//$sql 	= 'select * from t_location
		//where id_location  = ? ';

		$sql = '
		select b.* from t_user_location a 
		join t_location b on a.id_location = b.id_location
		where a.id_user  = ?
		';

		$query_all 	=  $this->db->query($sql,$data);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}		



	public function get_mapping(){

		$sql = "
		SELECT * FROM (
			SELECT DISTINCT(KECAMATAN_DAGRI) KECAMATAN FROM RESPONDENT_SURVEY_CLEAR
			WHERE KOTA_KABUPATEN_DAGRI = 'BANDUNG'
			) A LEFT JOIN mapping_kecamatan b on A.KECAMATAN = b.KECAMATAN
			AND b.ID_USER = 4
		";

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		

	}
	
	public function get_kecamatan($data){
		
		// $sql 	= 'SELECT DISTINCT(`KECAMATAN_DAGRI`) KECAMATAN_DAGRI FROM `RESPONDENT_SURVEY_CLEAR`
					// WHERE `KOTA_KABUPATEN_DAGRI` = ? 
					// ORDER BY KECAMATAN_DAGRI';
					
					$sql 	= 'SELECT DISTINCT(`KECAMATAN_DAGRI`) KECAMATAN_DAGRI FROM `RESPONDENT_SURVEY_CLEAR`
					WHERE `KOTA_KABUPATEN_DAGRI` = ? 
					ORDER BY KECAMATAN_DAGRI';

		$query_all 	=  $this->db->query($sql,$data['location_name']);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	

	public function get_user($location){
		
		// $sql 	= 'SELECT a.*,b.username, c.group FROM u_user a 
					// join u_user_group b on a.id = b.id_user
					// join u_group c on b.id_role = c.id
					// where b.id_role = 111 and a.lokasi = '.$location; 
					
					
					$sql 	= '
							SELECT a.*,b.username, c.group, `location_name` FROM `t_user_hierarcy` bd
							JOIN u_user a ON a.id = bd.id_user
							JOIN u_user_group b ON a.id = b.id_user
							JOIN u_group c ON b.id_role = c.id
							JOIN `t_location` d ON a.lokasi = d.`id_location`
							WHERE bd.parent = '.$location; 

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
	
	public function get_username($username){
		
		$sql 	= 'select count(id) cnt_user from u_user_group 
		where username = "'.$username.'"';

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
			'id' => $data['last_id']+1,
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
	
	public function mapping_user($data)
	{
		// $sql 	= 'insert into t_eksternal  (kode_eksternal,eksternal_address,name_eksternal,phone_1,fax,bank1,rek1,bank2,rek2,bank3,rek3,type_eksternal) values (?,?,?,?,?,?,?,?,?,?,?,?)';

		$datas = array(
			'id_user' => $data['id_user']+1,
			'parent' => $data['user_id']
		);

		//	print_r($datas);die;

		$this->db->insert('t_user_hierarcy', $datas);


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
	
	public function mapping_kecamatan($data)
	{

		$this->db->insert_batch('t_user_location', $data);


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
	
			
				
	
}	