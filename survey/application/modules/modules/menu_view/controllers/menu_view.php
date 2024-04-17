<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Controller berhubungan dengan menu
 *
 * @author agus.merdeko@gmail.com
 * @copyright (c) 2017 PT. Swamedia Informatika
 */
class Menu_view extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('menu_view/menu_view_model');
	}

	public function get_menu($profile_id) {
		// echo 'ok';die;
		$list = $this->menu_view_model->getMenu($profile_id);
		// print_r($list);die;
		if ( ! empty($list) ) {
			$result["success"] = true;
			$result["message"] = 'Success';
			$result["data"] = $list;
		} else {
			$result["success"] = false;
			$result["message"] = 'No menu for this profile';
			$result["data"] = $list;
		}
		$this->output->set_content_type('Application/json')->set_output(json_encode($result,JSON_FORCE_OBJECT));
	}

	public function get_all_menu() {
		// echo 'ok';exit;
		$list = $this->menu_view_model->get_all_menu();
		if ( ! empty($list) ) {
			$result["success"] = true;
			$result["message"] = 'Success';
			$result["data"] = $list;
		} else {
			$result["success"] = false;
			$result["message"] = 'No Data';
			$result["data"] = $list;
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($result,JSON_FORCE_OBJECT));
	}

	public function save_menu() {
		log_message('info', 'Menu_view->save_menu() called');
		$_POST = json_decode(file_get_contents("php://input"), true);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('role_id', 'Role', 'required|integer');

		if ($this->form_validation->run() == FALSE)  {
			$result = array( 'success' => false, 'message' => validation_errors() );
			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		} else if ($this->form_validation->run() == TRUE)  {
			if ($this->input->post('role_id') == 99) {
				$result = array( 'success' => false, 'message' => 'Can\'t edit Super Admin menu' );
				$this->output->set_content_type('application/json')->set_output(json_encode($result));
			} else {

				$menu_id = $this->input->post('menu_id', true);
				$role_id = $this->input->post('role_id', true);
				$save_result = $this->menu_view_model->save_menu($menu_id, $role_id);

				if ( $save_result ) {
					$result = array( 'success' => true, 'message' => 'Succes', 'data' => array());
					$this->output->set_content_type('application/json')->set_output(json_encode($result));
				} else {
					$result = array( 'success' => false, 'message' => 'Error when inserting to database' );
					$this->output->set_content_type('application/json')->set_output(json_encode($result));
				}
			}
		}
	}
}
