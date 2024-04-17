<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Model
 * Model yang berhubungan dengan
 *
 * @author triswansyah.yuliano@gmail.com
 * @copyright (c) 2015 PT. Swamedia Informatika
 */
class Menu_model extends CI_Model {

        public function __construct() {
			parent::__construct();

			$this->load->helper('cookie');
			$prefix = $this->config->item('cookie_prefix');

			$this->user_id = get_cookie($prefix.'user_id');
			$this->token = get_cookie($prefix.'token');
        }

		public function get_all_menu() {
			$url = base_url().'menu_view/get_all_menu';

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$output = curl_exec($ch);
			curl_close($ch);

			return json_decode($output, TRUE);
		}

		public function get_profile_menu($role_id) {
			$url = base_url().'menu_view/get_menu/'.$role_id;

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$output = curl_exec($ch);
			curl_close($ch);

			return json_decode($output, TRUE);
		}

		public function save_menu($data) {
			$url = base_url().'menu_view/save_menu';
			$json_data = json_encode($data);
			//return $url;

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				//'Content-Length: ' . strlen($json_data)
				)
			);
			//curl_setopt($ch, CURLOPT_VERBOSE, true);

			$output = curl_exec($ch);
			//return $output;
			curl_close($ch);

			return json_decode($output, TRUE);
		}

        public function create_menu($data)
    	{
    		$sql 	= 'CALL menu_tambah(?,?,?,?,?)';

    		$query 	=  $this->db->query($sql,
    			array(
    				$data['primary_menu'],
    				$data['nama_menu'],
    				$data['url_menu'],
    				$data['icon_menu'],
    				$data['sequence_menu']
    			));

    		$result	= $this->db->affected_rows();

    		$this->db->close();
    		$this->db->initialize();

    		return $result;
    	}
}
