<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Api_bulk extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
     
    }

    /** 
     * anti sql injection
     */
    public function Anti_sql_injection($string) { 
        $string = strip_tags(trim(addslashes(htmlspecialchars(stripslashes($string)))));
        return $string;
    }

    public function index() {

        $this->template->load('login_view');
    }

    function login_post() {
		
		// echo 'aaaa';die;
		
        $data = json_decode(file_get_contents("php://input"));

		//print_r($data);die;


        $appkey = $this->Anti_sql_injection($data->appkey) == '' ? null : $this->Anti_sql_injection($data->appkey);
        $dataArray = array(
            'username' => $this->Anti_sql_injection($data->username) == '' ? null : $this->Anti_sql_injection($data->username)
        );
		
		//echo "aaaaa";die;
		
        // if ($appkey !== $this->config->item('app_key')) {

            // $res = array('status' => 'error', 'message' => 'Wrong API key');
        // } else {

            $password = $this->Anti_sql_injection($data->password) == '' ? null : $this->Anti_sql_injection($data->password);
            $data2 = $this->login_model->login($dataArray);
			
			//if($data2['userid'] == 1 || $data2['userid'] == 2){
				
					$param_value = $this->login_model->get_param_value();
					
					
					$dataArray['param_value'] = $param_value['param_value'];
					$dataArray['time'] = date('Y-m-d H:i:s');
					//print_r($param_value);die;
				
				 $data = $this->login_model->login_step2($dataArray);
				 $this->login_model->login_step3($dataArray);
				 
				 
			//}
			
		//print_r($data);die;

			$header = 'HTTP/1.1 400 Bad Request';

            if ($data) {
                $hash = $data['passwords'];
				//print_r($password);
				//echo "<br/>";
				//print_r($hash);die;
                if (password_verify($password, $hash)) {
					// die;
               // if ($password == '123456' || $password == 'telkom' ) {
					//echo "aaaa";die;
					
                    //jika password cocok cek status
                   // if ($data['status_akses'] == 1) {
                        //$set_token = $this->db->query('select set_token(?, ?, ?) as is_token', array($data['user_id'], $data['token'], $data['id_role']));
                        $set_token2 = $this->db->query('UPDATE u_user SET token = ? WHERE id = ? ', array($data['token'], $data['user_id']));
                        $set_token = $this->db->query('INSERT INTO  t_token (id_user,token,id_role,TIMESTAMP,STATUS) VALUES (?,?,?,NOW(),1) ', array($data['user_id'], $data['token'], $data['id_role']));
                        //$row = $set_token->row_array();
						$row	= $this->db->affected_rows();
						
						//echo $row;die;
						
                        $picture = $data['profile_picture'];
                        if (!$picture) {
                            $picture = 'uploads/profile/user.png';
                        }
                        if ($row == 1) {
                            $datauser = array(
                                'user_id' => $data['user_id'],
                                'nama' => $data['nama'],
                                'profile_picture' => base_url() . $picture,
                                'email' => $data['email'],
                                'nokontak' => $data['nokontak'],
                                'token' => $data['token'],
                                'id_role' => $data['id_role'],
                                'name_role' => $data['name_role'],
                                'username' => $data['username'],
                                'idlokasi' => $data['idlokasi']
                            );

                            // $datamenu = $this->login_model->login_menu($data['id_role']);
                            // $this->session->sess_expiration = '604800';// expires in 7 days
                            //set user session
                            $this->session->set_userdata('logged_in', $datauser);
                            
                            $nama = $this->session->userdata['logged_in']['nama'];
                            
//                            print_r($nama);die;
                            log_activity('Login','Nama user '.$nama.'.');
							
							$header = 'HTTP/1.1 200 OK';
								
                            $res = array(
                                'status' => 'success',
                                'message' => 'Success Login',
                                'data' => $datauser
                                    // 'menu'      => $datamenu
                            );
                        } else {
                            //jika user masih aktif login
                            $res = array(
                                'status' => 'error',
                                'message' => 'Tidak bisa menggenerate token.'
                            );
                        }
                 /*   } else {
                        //jika status tidak aktif tampilkan error
                        $res = array(
                            'status' => 'error',
                            'message' => $data['status_name']
                        );
                    } */
                } else {
                    $res = array(
                        'status' => 'error',
                        'message' => 'Password atau Username Salah'
                    );
                }
            } else {
                $res = array(
                    'status' => 'error',
                    'message' => 'Password atau Username Salah'
                );
            }
       // }
		
		//die;
		
		//$header = 'HTTP/1.1 200 OK';
		
		//$list = $this->item_model->get_selling($data);  
		// $res = array(
                // 'status' => 'Success',
                // 'message' => 'Success Request',
                // 'data' => ''
		// );
		
		 header($header);
		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/json');
		header("access-control-allow-origin: *");
		echo json_encode($res);

        // header('Cache-Control: no-cache, must-revalidate');
        // header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        // header('Content-type: application/json');
        // header("access-control-allow-origin: *");
        // echo json_encode($res);
    }
	
	public function respondent_list_post(){
		
		$res = array(
			'status' => 'success',
			'message' => 'Ini Hanya test'
		);
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
		
		//echo "asasasa";die;
		
		// $param = json_decode(file_get_contents("php://input"));	
		
		// print_r($param);die;
		
		// //$data = $this->login_model->get_history($param['id']); 
		// //$data = $this->login_model->get_param_value(); 
		// //print_r($param);die;
		
		// //$result = $this->api_bulk_model->get_respondent($param);
		// //$resulte = $this->api_bulk_model->get_outbound2($param);
		
		// //print_r($param);die;

		// // $rrs = 0;
		// // for($rr =1;$rr<21;$rr++){
			// // $spl_prog = explode('|',$resulte[0]['p'.$rr]);
			// // if($spl_prog[0] == 'Ya'){
				// // $result[$rrs]['screening'] = 1;
			// // }else{
				// // $result[$rrs]['screening'] = 0;
			// // }
			
			// // $rrs++;
		// // }

		// // $res = array(
			// // 'status' => 'success',
			// // 'message' => 'Ini Hanya test',
			// // 'data' => $result
		// // );
		
		// $header = 'HTTP/1.1 200 OK';
		// // header($header);
        // // header('Cache-Control: no-cache, must-revalidate');
        // // header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        // // header('Content-type: application/json');
        // // header("access-control-allow-origin: *");
        // // echo json_encode($res);
		
		
		// // $data = json_decode(file_get_contents("php://input"));
		
		// //print_r($data);die;

        // $res = array(
			// 'status' => 'success',
			// 'data' => ''
		// );
		
		// header($header);
        // header('Cache-Control: no-cache, must-revalidate');
        // header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        // header('Content-type: application/json');
        // header("access-control-allow-origin: *");
        // echo json_encode($res);

		
	}
	
	public function sss_post(){
		
		$param = json_decode(file_get_contents("php://input"));	
		
		//print_r($param);die;
		
		//$result = $this->api_bulk_model->get_respondent($param);
		//$resulte = $this->api_bulk_model->get_outbound2($param);
		
		//print_r($param);die;

		// $rrs = 0;
		// for($rr =1;$rr<21;$rr++){
			// $spl_prog = explode('|',$resulte[0]['p'.$rr]);
			// if($spl_prog[0] == 'Ya'){
				// $result[$rrs]['screening'] = 1;
			// }else{
				// $result[$rrs]['screening'] = 0;
			// }
			
			// $rrs++;
		// }

		// $res = array(
			// 'status' => 'success',
			// 'message' => 'Ini Hanya test',
			// 'data' => $result
		// );
		
		// $header = 'HTTP/1.1 200 OK';
		// header($header);
        // header('Cache-Control: no-cache, must-revalidate');
        // header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        // header('Content-type: application/json');
        // header("access-control-allow-origin: *");
        // echo json_encode($res);
		
		
		// $data = json_decode(file_get_contents("php://input"));
		
		//print_r($data);die;

        $res = array(
			'status' => 'success',
			'message' => 'Ini Hanya test'
		);
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);

		
	}

    function test_get() {
        $data = json_decode(file_get_contents("php://input"));

        $res = array(
			'status' => 'success',
			'message' => 'Ini Hanya test'
		);
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
    }

}
