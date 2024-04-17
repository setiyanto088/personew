<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Hooks untuk cek token setiap akses controller
 * @author 		rizal haibar
 * @email		rizalhaibar.rh@gmail.com
 * @copyright	2017
 */
class Auth {

    function check_user() {

         $this->ci = & get_instance();
        // $current_controller = $this->ci->router->fetch_class();

        $router = & load_class('Router', 'core');
        $current_controller = $router->fetch_class();

        $exceptions = array(
            'api_agent' => 1, // doesn't need auth
            'api_acceptance' => 1, // doesn't need auth
            'api_csd' => 1, // doesn't need auth
            'api_commodity' => 1, // doesn't need auth
            'api_flight' => 1, // doesn't need auth
            'api_truck' => 1, // doesn't need auth
            'api_driver' => 1, // doesn't need auth
            'api_warehouse' => 1, // doesn't need auth
            'api_tariff' => 1, // doesn't need auth
            'api_shipper' => 1, // doesn't need auth
            'login' => 1, // doesn't need auth
            'logout' => 1, // doesn't need auth
            'menu_view' => 1, // doesn't need auth
            'menu' => 1
        );
		
        if (!isset($exceptions[$current_controller])) { // if controller is not in exception list, then do check auth
            //echo $current_controller;
            $user_id = isset($this->ci->session->userdata['logged_in']['user_id'])?$this->ci->session->userdata['logged_in']['user_id']:'';
            $id_role = isset($this->ci->session->userdata['logged_in']['id_role'])?$this->ci->session->userdata['logged_in']['id_role']:'';
            $token = isset($this->ci->session->userdata['logged_in']['token'])?$this->ci->session->userdata['logged_in']['token']:'';
            
            if (!empty($user_id) && $user_id != 'undefined') {
                //$query = $this->ci->db->query('select login_check_user(?, ?, ?) as is_valid', array($user_id, $token, $id_role));
                $query = $this->ci->db->query('SELECT COUNT(id) as l_count FROM t_token WHERE id_user = ? AND	id_role = ? AND 	token = ? AND	STATUS = 1', array($user_id,  $id_role, $token));
                $row = $query->row_array();
                if ($row['l_count'] <> 1) {
                    
                    log_message('error', "Invalid Token. User ID: $user_id, Token: $token");
                    $this->ci->session->unset_userdata('logged_in');
                    $data['message'] = 'User menggunakan Token yang tidak terdaftar';
                    $data['data'] = array('user_id' => $user_id, 'token' => $token);
                    $this->show_error($data);
                } else {
                    
                    
                    $exceptions_role = $this->ci->config->item('page_exceptions_role');
                    if (!isset($exceptions_role[$current_controller])) {
                        
                   
                        //cek url
                       // $query = $this->ci->db->query('CALL menu_list(?)', array($id_role));
                        $query = $this->ci->db->query('
						SELECT
						b.id,
						b.url,
						b.label,
						b.parent_id,
						b.icon,
						b.sequence
					FROM
						u_menu_group a, 
						u_menu b 
					WHERE
						a.status = 1 
						AND b.status = 1 	
						AND a.menu_id = b.id 
						AND a.group_id = ? 
					ORDER BY 
						b.parent_id, 
						b.sequence,
						b.label;
						', array($id_role));
                        $result = $query->result_array();
                        //close db, error kalau tidak di close
                        $this->ci->db->close();
                        $this->ci->db->initialize();
                        
                        $key = array_search($current_controller, array_column($result, 'url'));
                        if ($key !== False) {
                            //Jika terdaftar boleh akses halaman
                        } else {
                            //Tidak terdaftar lempar ke home
                            $data['message'] = 'User tidak mempunyai akses untuk membuka halaman ini.';
                            $data['data'] = array('user_id' => $user_id, 'token' => $token);
                            $this->show_dashboard($data);
                        }
                    }
                }
            } else {
                $data['message'] = 'User belum login, harap login';
                $data['data'] = array('user_id' => $user_id, 'token' => $token);
                $this->show_error($data);
            }
        }
        
        
    }

    function show_error($params) {

        $this->ci->session->set_flashdata('msg', array(
            'status' => 'error',
            'message' => $params['message']));

        redirect(base_url('login'), 'refresh');
    }

    function show_dashboard($params) {

        $this->ci->session->set_flashdata('msg', array(
            'status' => 'error',
            'message' => $params['message']));
			
		 $id_role = $this->ci->session->userdata['logged_in']['id_role'];
		 if($id_role == 99){
			
        redirect(base_url('login')); 
		 }else{
			 
        redirect(base_url('login'));
		 }
    }

}

?>
