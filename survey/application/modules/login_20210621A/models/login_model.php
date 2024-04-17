<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		
	}
	
	function get_login($nickname,$password,$groupfungsi) {
		// $sql = "select count(*) as jml,id_user
		// from u_user_group a
		// where a.username = '$nickname' and a.password = '".md5($password)."' and a.id_role='$groupfungsi' ";
		
						
		$sql 	= "CALL login_auth('$nickname',$groupfungsi)";
		
 		$hasil = $this->db->query($sql);
		return $hasil->result_array();
		// print_r($hasil->result_array()) ; die();
		
	}
	
			
				
	
}	