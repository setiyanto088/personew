<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Api Contact
 * Controller berhubungan dengan data-data profile
 *
 * @author rizalhaibar.rh@gmail.com
 * @copyright (c) 2017 PT. Swamedia Informatika
 */
class Api_profile extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('api_profile/api_profile_model');
	}
	
	
	public function get_user_detail($user_id) {
        echo 123123; die;
//		if ($this->input->get_post('sess_user_id') == $user_id) {
//			$user_detail = $this->api_profile_model->get_user_detail(array('user_id' => $user_id));
//			//var_dump($user_detail);
//			$result['success'] = true;
//			$result['message'] = 'Success';
//			$result['data'] = $user_detail;
//		} 
//		else {
//			$result['success'] = true;
//			$result['message'] = 'Session user id does not match';
//			$result['data'] = array();
//		}
//		
//		$this->output->set_content_type('application/json')->set_output(json_encode($result));
			

	}
}

