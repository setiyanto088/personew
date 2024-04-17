<?php 
class Sequence {
	function get_no($menus) {
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
		
		// $data = array(
		// 	'user_id'=>$user_id,
		// 	'menu'=>$menu,
		// 	'activity'=>$activity,
		// 	'keterangan'=>$keterangan,
		// 	'activity_date'=>$date_now_f,
		// 	'client_ip'=>$ip,
		// 	'client_user_agent'=>$user_agent
		// );

		//$CI->db->insert('u_user_activity',$data);
		//echo "SELECT * from t_ordering where nama_menu = '".$menus."' ";die;
		
		$query =   $CI->db->query("SELECT * from t_ordering where nama_menu = '".$menus."' ");
		
		
		$result = $query->result_array();
		$oos = $result[0];
		$new_seq = $oos['seq_max'] + 1;
		$length_seq = strlen($new_seq);
		
		$prim_o = $oos['length'] - $length_seq;
		
		$no_seq = '';
		for($i=0;$i<$prim_o;$i++) {
			$no_seq = $no_seq."0";
		}
		
		if($oos['end_code'] == 'year') $end_text = '/'.date('y');
		else $end_text = '';
		
		$no_seq = $oos['begin_code']."".$no_seq."".$new_seq."".$end_text;
		$CI->db->query("update t_ordering set seq_max = ".$new_seq." where nama_menu = '".$menus."' ");
		
		return $no_seq;
		
		//return $result;
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

	function get_max_no($menus) {
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
		
		// $data = array(
		// 	'user_id'=>$user_id,
		// 	'menu'=>$menu,
		// 	'activity'=>$activity,
		// 	'keterangan'=>$keterangan,
		// 	'activity_date'=>$date_now_f,
		// 	'client_ip'=>$ip,
		// 	'client_user_agent'=>$user_agent
		// );

		//$CI->db->insert('u_user_activity',$data);
		//echo "SELECT * from t_ordering where nama_menu = '".$menus."' ";die;
		
		$query =   $CI->db->query("SELECT * from t_ordering where nama_menu = '".$menus."' ");
		
		
		$result = $query->result_array();
		$oos = $result[0];
		$new_seq = $oos['seq_max'] + 1;
		$length_seq = strlen($new_seq);
		
		$prim_o = $oos['length'] - $length_seq;
		
		$no_seq = '';
		for($i=0;$i<$prim_o;$i++) {
			$no_seq = $no_seq."0";
		}
		
		if($oos['end_code'] == 'year') $end_text = '/'.date('y');
		else $end_text = '';
		
		$no_seq = $oos['begin_code']."".$no_seq."".$new_seq."".$end_text;

		return $no_seq;
	}

	function save_max_no($menus) {
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
		
		$query =   $CI->db->query("SELECT * from t_ordering where nama_menu = '".$menus."' ");
		
		$result = $query->result_array();
		$oos = $result[0];
		$new_seq = $oos['seq_max'] + 1;
		$length_seq = strlen($new_seq);
		
		$prim_o = $oos['length'] - $length_seq;
		
		$no_seq = '';
		for($i=0;$i<$prim_o;$i++) {
			$no_seq = $no_seq."0";
		}
		
		if($oos['end_code'] == 'year') $end_text = '/'.date('y');
		else $end_text = '';
		
		$no_seq = $oos['begin_code']."".$no_seq."".$new_seq."".$end_text;
		$CI->db->query("update t_ordering set seq_max = ".$new_seq." where nama_menu = '".$menus."' ");
	}
}

?>