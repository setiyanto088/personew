<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Api_csd_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}
	
	
	public function list_datatable_report($params = array()) {					
		$sql		= "call cargo_list( ?, ?, ?, ?, ?, @total_filtered, @total)";
		$out		= array();
		$query		= $this->db->query($sql,
			array(
				$params['limit'],
				$params['offset'],
				$params['order_column'],
				$params['order_dir'],
				$params['filter']
			));
		//var_dump($this->db->last_query());
		$result = $query->result_array();
		
		while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id)){
		if($l_result = mysqli_store_result($this->db->conn_id)){
			  mysqli_free_result($l_result);
			}
		}
		$total_filtered = $this->db->query('select @total_filtered')->row_array();
		$total 			= $this->db->query('select @total')->row_array();
		
		$return = array(
			'data' => $result,
			'total_filtered' => $total_filtered['@total_filtered'],
			'total' => $total['@total'],
		);
		
		return $return;
	}
		

}
