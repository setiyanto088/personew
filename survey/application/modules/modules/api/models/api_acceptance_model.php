<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Api_acceptance_model extends CI_Model {

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
	

	public function saveacceptance($params = array()) {					
		$sql 	= 'call saveAcceptance(?,?,?,?,?,?,?,?,?)';
        
		if ($sql) {
			return  $this->db->query($sql,array(
														$params['smu'],
														$params['berat'],
														$params['volume'],
														$params['warehouse'],
														$params['flight'],
														$params['commundity'],
														$params['agent'],
														$params['shipper'],
														$params['destination'],
													)
										   );
		} 
		else {
			return false;
		}
	}
	public function editacceptance($params = array()) {					
		$sql 	= 'call editAcceptance(?,?)';
        
		if ($sql) {
			return  $this->db->query($sql,array(
														$params['id'],
														$params['agent']
													)
										   );
		} 
		else {
			return false;
		}
	}
	
	public function deleteacceptance($params = array()) {					
		$sql 	= 'call deleteAcceptance(?)';
        
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
	
	public function detailacceptance($params = array()) {					
		$sql 	= 'call detailAcceptance(?)';
        $query  = $this->db->query($sql,array(
									$params['id']
								)
					   );
		$result = $query->result_array();
		
		$this->db->close();
		$this->db->initialize();
        
        return $result;
	}
			
	public function listwarehouse() {					
		$sql 	= 'SELECT * FROM t_warehouse';
        $query  = $this->db->query($sql);
		$result = $query->result_array();
		
		$this->db->close();
		$this->db->initialize();
        
        return $result;
	}
			
	public function listflight() {					
		$sql 	= 'SELECT * FROM t_flight';
        $query  = $this->db->query($sql);
		$result = $query->result_array();
		
		$this->db->close();
		$this->db->initialize();
        
        return $result;
	}	
	public function listcommundity() {					
		$sql 	= 'SELECT * FROM t_commodity';
        $query  = $this->db->query($sql);
		$result = $query->result_array();
		
		$this->db->close();
		$this->db->initialize();
        
        return $result;
	}
	public function listagent() {					
		$sql 	= 'SELECT * FROM t_agent';
        $query  = $this->db->query($sql);
		$result = $query->result_array();
		
		$this->db->close();
		$this->db->initialize();
        
        return $result;
	}
	public function listshipper() {					
		$sql 	= 'SELECT * FROM t_shipper';
        $query  = $this->db->query($sql);
		$result = $query->result_array();
		
		$this->db->close();
		$this->db->initialize();
        
        return $result;
	}
	public function listdestination() {					
		$sql 	= 'SELECT * FROM t_destination';
        $query  = $this->db->query($sql);
		$result = $query->result_array();
		
		$this->db->close();
		$this->db->initialize();
        
        return $result;
	}
			

}
