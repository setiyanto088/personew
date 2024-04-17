<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	function login($params){

		//$sql 	= 'CALL login_auth(?)';
		$sql 	= 'SELECT uu.id as userid
					FROM u_user uu
					LEFT JOIN u_user_group uug ON uug.id_user = uu.id
					WHERE uug.username = ?';
		$query 	= $this->db->query($sql,
					array(
						$params['username']
					));
		$result = $query->row_array();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}		
	
	function get_param_value(){

		//$sql 	= 'CALL login_auth(?)';
		$sql 	= "SELECT param_value FROM t_param WHERE param_name = 'tokenloginID'";
		$query 	= $this->db->query($sql);
		$result = $query->row_array();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}	
	
	function login_step2($params){

		//$sql 	= 'CALL login_auth(?)';
		$sql 	= "
		SELECT
		uu.id AS user_id,
		uu.nama AS nama,
		uu.nokontak AS nokontak,
		IF(uu.image IS NOT NULL,CONCAT('uploads/profile/',uu.image),NULL) AS profile_picture,
		uu.email AS email,
		( SELECT MD5(CONCAT('AgusMerdekoLogin2017_', ?, ? )) ) AS token,
                uug.id_role ,
		ug.group AS name_role,
		uug.username AS username,
		uu.status_akses AS status_akses,
		tp.xs1 AS status_name,
		uug.password AS passwords,
		uu.last_activity AS last_activity,
		uu.last_activity_status AS last_activity_status,
		uu.token AS token_db,
		uu.lokasi AS idlokasi
		FROM u_user uu
		LEFT JOIN u_user_group uug ON uug.id_user = uu.id
		LEFT JOIN u_group ug ON ug.id = uug.id_role
		LEFT JOIN t_param tp ON tp.param_name = 'STATUS' AND tp.param_id = uu.status_akses
		WHERE uug.username = ?;
		";
		$query 	= $this->db->query($sql,
					array(
						$params['param_value'],
						$params['time'],
						$params['username']
					));
		$result = $query->row_array();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}	
	
	function login_step3($params){

		//$sql 	= 'CALL login_auth(?)';
		$sql 	= "
		UPDATE 
		t_param
		SET 
			param_value = param_value + 1 
		WHERE 
		param_name = 'tokenloginID' ;
		";
		$query 	= $this->db->query($sql);
		//$result = $query->row_array();

		$this->db->close();
		$this->db->initialize();

		//return $result;
	}

	function login_menu($idrole){

		$sql 	= 'SELECT um.url_mobile AS component, um.label AS title
					FROM u_menu um
					LEFT JOIN u_menu_group umg ON umg.menu_id = um.id
					WHERE umg.group_id = '.$idrole.' AND umg.status = 1';
		$query 	= $this->db->query($sql);
		$result = $query->result_array();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}

}
