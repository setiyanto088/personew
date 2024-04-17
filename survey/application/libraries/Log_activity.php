<?php 
class Log_activity {

  function insert_activity($activity,$keterangan)
  {
		$CI =& get_instance();
        $CI->load->helper('url');
		$CI->load->library('session');
		$ip = $_SERVER['REMOTE_ADDR'];
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		$menu = $CI->uri->segment(1);
		$user_id = $CI->session->userdata['logged_in']['user_id'];
		
		
		
		$tz = 'Asia/Jakarta';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
		$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
		$date_now =  $dt->format('Y_d_m_H_i_s');
		$date_now_f =  $dt->format('Y-m-d H:i:s');
		
		$data = array(
        'user_id'=>$user_id,
        'menu'=>$menu,
		 'activity'=>$activity,
        'keterangan'=>$keterangan,
		 'activity_date'=>$date_now_f,
        'client_ip'=>$ip,
		 'client_user_agent'=>$user_agent
		);

		$CI->db->insert('u_user_activity',$data);
		
		// $sql 	= 'CALL user_activity_add(?,?,?,?,?,?,?)';

		// $query 	=  $CI->db->query($sql,
			// array(
				// $user_id,
				// $menu,
				// $activity,
				// $keterangan,
				// $date_now_f,
				// $ip,
				// $user_agent
			// )
		// );

		// $result	= $CI->db->affected_rows();

		// $CI->db->close();
		// $CI->db->initialize();
		
		// //return $arr_result;
		
		// print_r($arr_result);
		
		//print_r($ip.' '.$user_agent.' '.$menu.' '.$sas);die;
		
   
  }
}

?>