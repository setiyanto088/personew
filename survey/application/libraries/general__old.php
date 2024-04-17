<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class General {

	public function session_check()
	{
		$CI =& get_instance();
		$CI->user_id	= $CI->session->userdata('id_user');
		$CI->user_name	= $CI->session->userdata('nickname');
		$CI->user_kode	= $CI->session->userdata('kode');
		$CI->user_nama	= $CI->session->userdata('nama_user');
		$CI->user_group	= $CI->session->userdata('profile_user');
		$CI->user_waktu	= $CI->session->userdata('waktu_login');
		$CI->user_ip		= $CI->session->userdata('user_ip'); 
		
		if ($CI->user_id=="") {
			redirect(site_url("login/logout")); 
		}
	}

	public function session_check2()
	{
		$CI =& get_instance();
		$CI->user_id	= $CI->session->userdata('id_user');
		$url = "yahoo.com";
		if ($CI->user_id=="") {
			return $url; 
		}else{
			return $url='';
		}
	}				
	public function Anti_sql_injection($string)
	{
			$string = strip_tags(trim(addslashes(htmlspecialchars(stripslashes($string)))));
			return $string;
	}
	public function cleanPost($pin){
		$wasta 			= 	mysql_real_escape_string($this->Anti_sql_injection($pin)); 
		return $wasta;
	}
	
}
