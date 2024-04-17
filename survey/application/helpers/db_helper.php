<?php  defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('next_result'))
{
	
	function free_result($conn_id)
	{
		/*
		TODO: cek driver, sesuaikan fungsi nya dengan drive yang digunakan
		$ci =& get_instance();
		$db = $ci->load->config('database');
		$default = $ci->config->item('default');
		
		if ($default['driver'] == 'mysqli') {
		*/
			while (mysqli_more_results($conn_id) && mysqli_next_result($conn_id)){
			if($l_result = mysqli_store_result($conn_id)){
				  mysqli_free_result($l_result);
				}
			}
		//}
	}
}
