<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Api_tariff_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}
	
	
	public function list_datatable_report($params = array()) {					
		$sql		= "call tariff_list( ?, ?, ?, ?, ?, @total_filtered, @total)";
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
	
	public function save($params = array()) {					
		$sql 	= 'call saveTariff(?)';
        
		if ($sql) {
			return  $this->db->query($sql,array(
														$params['tariff']
													)
										   );
		} 
		else {
			return false;
		}
	}
	public function edit($params = array()) {					
		$sql 	= 'call editTariff(?,?)';
        
		if ($sql) {
			return  $this->db->query($sql,array(
														$params['id'],
														$params['tariff']
													)
										   );
		} 
		else {
			return false;
		}
	}
	
	public function deletes($params = array()) {					
		$sql 	= 'call deleteTariff(?)';
        
		if ($sql) {
			return  $this->db->query($sql,array(
														$params['id']
													)
										   );
		} 
		else {
			return false;
		}
	}
	public function detail($params = array()) {					
		$sql 	= 'call detailTariff(?)';
        $query  = $this->db->query($sql,array(
									$params['id']
								)
					   );
		$result = $query->result_array();
		
		$this->db->close();
		$this->db->initialize();
        
        return $result;
	}
		

}
