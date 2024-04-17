<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Api Auth Model
 * Model yang berhubungan dengan data-data autentikasi user
 *
 * @author triswansyah.yuliano@gmail.com
 * @copyright (c) 2015 PT. Swamedia Informatika
 */
class Api_auth_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
        
        /**
		 * Login
		 *
		 * @param array $params Parameter berupa username, password
		 * @return array Daftar contact berdasarkan parameter yang diberikan
		 */
        public function login($params = array()) {
			
			
			
			
			
			$sql 	= 'SELECT id 
						FROM hrd_profile
						WHERE username = ?
						AND pwd = MD5(?)';
			
			$query 	=  $this->db->query($sql,
				array(
					$params['username'],
					$params['password']
				));
			$result = $query->result_array();
			
			$this->load->helper('db');
			free_result($this->db->conn_id);
			
			
			
            
					if(isset($result[0]['id'])){
						
						
						
						$sqlcek 	= 'SELECT count(id) as totaluser 
										FROM t_curr_user
										WHERE user_id = ?
										AND status_login = 1';
				
						$querycek 	=  $this->db->query($sqlcek,
							array(
								$result[0]['id']
							));
						$resultcek = $querycek->result_array();
						
						$this->load->helper('db');
						free_result($this->db->conn_id);
						
						
						if($resultcek[0]['totaluser'] >= 100){
							$return = array('success' => false, 'message' => 'OVERLIMIT', 'data' => array());
						}else{
									$sql1 	= 'SELECT SUBSTRING(MD5(NOW()), 1, 30) as token';
								
									//$out = array();
									$query1 	=  $this->db->query($sql1,
										array(
											$params['username'],
											$params['password']
										));
									$result1 = $query1->result_array();
									
									$sql2	= 'UPDATE hrd_profile SET token = ? where id = ?';
								
									//$out = array();
									$query2 	=  $this->db->query($sql2,
										array(
										   $result1[0]['token'],
										   $result[0]['id']
										));
										
										
									$sql3	= 'INSERT INTO t_curr_user(user_id, status_login, date_login, token) VALUES(?, 1, NOW(), ?)';
								
									//$out = array();
									$query3 	=  $this->db->query($sql3,
										array(
										   $result[0]['id'],
										   $result1[0]['token']
										));
									
									if($query3){
										$return = array(
										'success' => true,
										'message' => 'Success',
										'data' => array(
											'user_id' => $result[0]['id'],
											'token' => $result1[0]['token'],
											)
										);
									}else{
										$return = array('success' => false, 'message' => 'User Token Error!', 'data' => array());
									}
									
						}


			
					}else{
						$return = array('success' => false, 'message' => 'Username and Password Incorrect', 'data' => array());
					}
		
			//print_r($return); die;
          	
			
			return $return;
		}
		
		public function check_token($params = array()) {
			//print_r($params);
			$sql 	= 'select auth_check_token(?, ?) as is_valid';
			
			$query 	=  $this->db->query( $sql, array($params['user_id'], $param['token']) );
			
			$return = $query->result_array();
			//var_dump($return);
			if ($return['is_valid'] == TRUE) {
				return TRUE; 
			} 
			else {
				return FALSE;
			}
		}
		
		public function get_profile($params = array()) {
            $nickname = $params['username'];

            $sql = 'SELECT a. id AS user_id, a.token, a.username, a.type_role, a.nokontak2, a.nokontak3, a.id_unit, a.username as user_name, a.nama, a.nama as user_full_name, a.id_role,  a.id_role as role_id, b.role as role_name, a.status_pwd as status_pwd
                    FROM hrd_profile a LEFT JOIN pmt_role b   ON a.id_role = b.id
                    WHERE a.username = "'.$nickname.'"
                    AND (a.status_akses = 1 OR a.status_akses = 8 ) 
                    ';
            $hasil = $this->db->query($sql)->result_array();

            return $hasil; 
	    }
		
		
		public function check_user($id) {
			$sqlcek 	= 'SELECT count(id) as totaluser 
							FROM t_curr_user
							WHERE user_id = ?
							AND status_login = 1';
	
			$querycek 	=  $this->db->query($sqlcek,
				array(
					$id
				));
			$resultcek = $querycek->result_array();
			
			return $resultcek;
			
	    }
		public function check_profile($id) {
						
			$id_role = $this->session->userdata['id_role'];
			
			if($id_role == 40){
				$sqlcek 	= 'SELECT * FROM NOTIF_PROFILE WHERE USER_ID = 0 ORDER BY DATE_DONE DESC LIMIT 5 ';
	
				$querycek 	=  $this->db->query($sqlcek,
					array(
						$id
					));
				$resultcek = $querycek->result_array();
			}else{
				$sqlcek 	= 'SELECT * FROM NOTIF_PROFILE WHERE USER_ID = '.$id.' ORDER BY DATE_DONE DESC  LIMIT 5';
	
				$querycek 	=  $this->db->query($sqlcek,
					array(
						$id
					));
				$resultcek = $querycek->result_array();
			}
			
			
			return $resultcek;
			
	    }
		
		public function get_activation($params = array(), $params2) {
            $nickname = $params['username'];
            $user_id = $params2[0]['user_id'];
            $sql = 'SELECT a.*, 
                        TIMESTAMPDIFF(DAY, NOW(),a.expired_date) AS expiredday, 
                        TIMESTAMPDIFF(MINUTE, NOW(),a.expired_date) AS expireddayminute
            
            
                    FROM t_activation a
                    LEFT JOIN hrd_profile b ON a.user_id = b.id
                    WHERE b.username ="'.$nickname.'"';
            $hasil = $this->db->query($sql)->result_array();
            $this->load->helper('db');
			free_result($this->db->conn_id);
           
            
            if($params2[0]['role_id'] == 1 || $params2[0]['role_id'] == 3 || $params2[0]['role_id'] == 6 || $params2[0]['role_id'] == 19){
                
                 $sql = 'SELECT a.*, 
                                TIMESTAMPDIFF(DAY, NOW(),a.expired_date) AS expiredday, 
                                TIMESTAMPDIFF(MINUTE, NOW(),a.expired_date) AS expireddayminute


                            FROM t_activation a
                            LEFT JOIN hrd_profile b ON a.user_id = b.id
                            WHERE b.username ="'.$nickname.'"';
                            $result = $this->db->query($sql)->result_array();
                            $this->load->helper('db');
                    free_result($this->db->conn_id);
            }else{
				
				
                if(isset($hasil[0])){
					
					
					
					if($hasil[0]['expireddayminute'] < 0){
						$sql1 	= 'UPDATE t_activation
									SET activation_id = 3
									WHERE user_id = ?
									';

							$query1 	=  $this->db->query($sql1,
								array(
									$user_id
								));
						$this->load->helper('db');
						 free_result($this->db->conn_id);

						$sql = 'SELECT a.*, 
							TIMESTAMPDIFF(DAY, NOW(),a.expired_date) AS expiredday, 
							TIMESTAMPDIFF(MINUTE, NOW(),a.expired_date) AS expireddayminute


						FROM t_activation a
						LEFT JOIN hrd_profile b ON a.user_id = b.id
						WHERE b.username ="'.$nickname.'"';
						$result = $this->db->query($sql)->result_array();
						$this->load->helper('db');
						 free_result($this->db->conn_id);


					}else{

						$sql = 'SELECT a.*, 
							TIMESTAMPDIFF(DAY, NOW(),a.expired_date) AS expiredday, 
							TIMESTAMPDIFF(MINUTE, NOW(),a.expired_date) AS expireddayminute


						FROM t_activation a
						LEFT JOIN hrd_profile b ON a.user_id = b.id
						WHERE b.username ="'.$nickname.'"';
						$result = $this->db->query($sql)->result_array();
						$this->load->helper('db');
				free_result($this->db->conn_id);

					}

				}else{
					$result = $hasil;
				}
            }
           
            return $result; 
	    }
		
	public function logout(){	
		$user_id = $this->session->userdata['user_id'];
        $token = $this->session->userdata['token'];	
		$sql2	= 'UPDATE t_curr_user SET status_login = 0, date_logout = NOW() where token = ? and user_id = ?';
	
		//$out = array();
		$query2 	=  $this->db->query($sql2,
			array(
			   $token,
			   $user_id
			));
			
		return $query2;
	}
	
	public function update_read($id){	
		$sql2	= 'UPDATE NOTIF_PROFILE SET STATUS_READ = 0 WHERE user_id = ?';
	
		//$out = array();
		$query2 	=  $this->db->query($sql2,
			array(
			    $id
			));
			
		return $query2;
	}
	
	
	public function logoutbak(){		
		$updatedBy = $this->session->userdata('user_id');		
		$sql 	= 'call auth_logout('.$updatedBy.')';			
		$query 	=  $this->db->query($sql);
		return $query;
	}
	
	public function send_email(){


		$sql 	= 'SELECT * FROM t_email WHERE status_kirim = 0';			
		$result = $this->db->query($sql)->result_array();
		
		$this->load->helper('db');
		free_result($this->db->conn_id);
			if(isset($result[0])){
					foreach($result as $ma){
						
					
					$to      = $ma['to']; //change this
					$subject  = $ma['judul']; //change this
					$message  = $ma['isi']; //change this


					
						
				
					$this->load->library('email');
					$config['protocol']    = 'smtp';
					$config['smtp_host']    = 'ssl://smtp.gmail.com';
					$config['smtp_port']    = '465';
					$config['smtp_timeout'] = '7';
					$config['smtp_user'] = 'rmrate.unics@gmail.com'; //change this
					$config['smtp_pass'] = 'telkom135'; //change this
					$config['charset']    = 'utf-8';
					$config['newline']    = "\r\n";
					$config['mailtype'] = 'text'; // or html
					$config['validation'] = FALSE;

					$this->email->initialize($config);
					$this->email->from('rmrate.unics@gmail.com','Unics');
					$this->email->to($to); 
					$this->email->subject($subject);

				    $this->email->message($message);  
					$send = $this->email->send();
						if($send) {
							
							$sql2	= 'UPDATE t_email SET status_kirim = 1, date_kirim = NOW() where id = ?';
						
							$query2 	=  $this->db->query($sql2,
							array(
								$ma['id']
							));
							
							if($query2){
								return 1;
							} else {
								return 0;
							}
						} else {
							// $error = $this->email->print_debugger(array('headers'));
							// echo json_encode($error);
							return 0;
						}


						
						
						
						
					}	
						
			} else {
			  return 0;
			}
		
	
	}
	
	
	
	public function cekuseractivity(){	
		
		$sql = "SELECT session_id, 
				MAX(TIMESTAMPDIFF(MINUTE,FROM_UNIXTIME(`timestamp`),NOW())) AS aktivitas 
				FROM tb_usertracking WHERE session_id != '[unauthenticated]'
				GROUP BY session_id";
		$result = $this->db->query($sql)->result_array();
		$this->load->helper('db');
		free_result($this->db->conn_id);
		
		
		
	
				
			foreach($result as $menit){
				
				
				if (  $menit['aktivitas'] > 30 ) {
					// echo 123;
					// print_r($menit);
					$sql2	= 'UPDATE t_curr_user SET status_login = 0, date_logout = NOW() where token = ? ';
					$query2 	=  $this->db->query($sql2,
						array(
						   $menit['session_id']
						));
						$this->load->helper('db');
						free_result($this->db->conn_id);
				}
				
			}
			// die;
	
		return $result;
		
		
		
		
	}
	
}
