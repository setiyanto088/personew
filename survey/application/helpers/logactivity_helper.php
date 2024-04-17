<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('log_activity')){
	
	/** 
	* Log user activity
	* @param {String} type (Login, Logout, Insert, Update, Delete)
	* @param {Text} desc (Activity Description)
	* 
	*/
	function log_activity($type, $desc){
		$ci =& get_instance();
		// $ci->load->database();
		// $ci->load->library('session');
		$router =& load_class('Router', 'core');
		
		$user_id = $ci->session->userdata['logged_in']['user_id'];
		$user_role = $ci->session->userdata['logged_in']['id_role'];
		$current_controller = $router->class;
		$current_method = $router->method;
		$query = $_SERVER['QUERY_STRING'];
		if($query != ""){
			$query = "?".$query;
		}
		$current_url = current_url().$query;
		
		$data = array(
			'user_id' => $user_id,
			'user_role' => $user_role,
			'object_name' => $current_controller."/".$current_method,
			'object_url' => $current_url,
			'activity_type' => strtolower($type),
			'activity_desc'	=> $desc,
			'activity_date'	=> date('Y-m-d H:i:s')
		);

		$ci->db->insert('u_activity_log', $data);
	}
}
