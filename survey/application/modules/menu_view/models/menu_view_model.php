<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Api Auth Model
 * Model yang berhubungan dengan menu
 *
 * @author agus.merdeko@gmail.com
 * @copyright (c) 2017 PT. Swamedia Informatika
 */
class Menu_view_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

		function getMenu($profile_id) {
			$sql 	=	'CALL menu_list(?)';
			$query 	=	$this->db->query($sql, array($profile_id));
			$result =	$query->result_array();

			$menu = array(
				'items' => array(),
				'parents' => array()
			);

			// Builds the array lists with data from the menu table
			foreach ($result as $items)
			{
				// Creates entry into items array with current menu item id ie. $menu['items'][1]
				$menu['items'][$items['id']] = $items;
				// Creates entry into parents array. Parents array contains a list of all items with children
				$menu['parents'][$items['parent_id']][] = $items['id'];
			}
			// echo 'menu: ';		print_r($result);die;
			return $menu;
		}

		function get_all_menu() {
			$sql 	=	'CALL menu_list_all()';
			$query 	=	$this->db->query($sql);
			$result =	$query->result_array();

			$menu = array(
				'items' => array(),
				'parents' => array()
			);

			// Builds the array lists with data from the menu table
			foreach ($result as $items)
			{
				// Creates entry into items array with current menu item id ie. $menu['items'][1]
				$menu['items'][$items['id']] = $items;
				// Creates entry into parents array. Parents array contains a list of all items with children
				$menu['parents'][$items['parent_id']][] = $items['id'];
			}
			//echo 'menu: ';		var_dump($menu);
			return $menu;

		}

		function save_menu($data, $role_id) {
			//var_dump($data);
			$this->db->trans_begin();

			// delete
			$sql 	=	'CALL menu_delete(?)';
			$query 	=	$this->db->query($sql, array($role_id));

			// insert
			$sql 	=	'CALL menu_create(?, ?)';
			foreach ($data as $id) {
				$query 	=	$this->db->query($sql, array($role_id, $id));
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === FALSE) {
				log_message('error', 'Save menu transaction failed : ' . $this->db->_error_message());
				return false;
			}
			else {
				return true;
			}

		}

}
