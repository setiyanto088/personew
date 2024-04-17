<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Api_acceptance extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('api_acceptance_model');
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

    function listacceptance_get() {
        // Catch params from datatable
		if( $this->input->get_post('draw') != FALSE )   {$draw   = $this->input->get_post('draw');}   else{$draw   = 1;}; 
		if( $this->input->get_post('length') != FALSE ) {$length = $this->input->get_post('length');} else{$length = 10;}; 
		if( $this->input->get_post('start') != FALSE )  {$start  = $this->input->get_post('start');}  else{$start  = 0;}; 		
		
		$order = $this->input->get_post('order');
		if( ! empty($order[0]['dir']))    {$order_dir    = $order[0]['dir'];}    else{$order_dir    = 'asc';}; 
		if( ! empty($order[0]['column'])) {$order_column = $order[0]['column'];} else{$order_column = 0;}; 
		$order_fields = array('id', 'smu', 'berat', 'volume', 'warehouse', 'flight', 'commundity', 'id', 'id');
		
		$search = $this->input->get_post('search');
		
		if( ! empty($search['value']) ) {
			$search_value = $search['value'];
		} else {
			$search_value = null;
		}
		
		// Build params for calling model 
		$params['limit'] 		= (int) $length;
		$params['offset'] 		= (int) $start;
		$params['order_column'] = $order_fields[$order_column];
		$params['order_dir'] 	= $order_dir;
		$params['filter'] 		= $search_value;
		/* var_dump($params); */
		
		$list = $this->api_acceptance_model->list_datatable_report($params);
				
		//var_dump($list['data']);die;
		$result["recordsTotal"] = $list['total'];
		$result["recordsFiltered"] = $list['total_filtered'];
		$result["draw"] = $draw;
		
		$data = array();			
		foreach ( $list['data'] as $k => $v ) {
			array_push($data, 
				array(
					$v['id'],
					$v['smu'],
					$v['berat']." Kg",
					$v['volume']."m2",
					$v['warehouse'],
					$v['flight'],
					$v['commundity'],
					"action",
					"print",
				)
			);
		}
		
		$result["data"] = $data;
		//var_dump($result);
		// $this->output->set_content_type('application/json')->set_output(json_encode($result));   


        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($result);
    }
    function listacceptance2_get() {
        // Catch params from datatable
		if( $this->input->get_post('draw') != FALSE )   {$draw   = $this->input->get_post('draw');}   else{$draw   = 1;}; 
		if( $this->input->get_post('length') != FALSE ) {$length = $this->input->get_post('length');} else{$length = 10;}; 
		if( $this->input->get_post('start') != FALSE )  {$start  = $this->input->get_post('start');}  else{$start  = 0;}; 		
		
		$order = $this->input->get_post('order');
		if( ! empty($order[0]['dir']))    {$order_dir    = $order[0]['dir'];}    else{$order_dir    = 'asc';}; 
		if( ! empty($order[0]['column'])) {$order_column = $order[0]['column'];} else{$order_column = 0;}; 
		$order_fields = array('id', 'smu', 'berat', 'volume', 'warehouse', 'flight', 'commundity', 'id', 'param_value');
		
		$search = $this->input->get_post('search');
		
		if( ! empty($search['value']) ) {
			$search_value = $search['value'];
		} else {
			$search_value = null;
		}
		
		// Build params for calling model 
		$params['limit'] 		= (int) $length;
		$params['offset'] 		= (int) $start;
		$params['order_column'] = $order_fields[$order_column];
		$params['order_dir'] 	= $order_dir;
		$params['filter'] 		= $search_value;
		/* var_dump($params); */
		
		$list = $this->api_acceptance_model->list_datatable_report($params);
				
		//var_dump($list['data']);die;
		$result["recordsTotal"] = $list['total'];
		$result["recordsFiltered"] = $list['total_filtered'];
		$result["draw"] = $draw;
		
		$data = array();			
		foreach ( $list['data'] as $k => $v ) {
			array_push($data, 
				array(
					$v['id'],
					$v['smu'],
					$v['berat']." Kg",
					$v['volume']."m2",
					$v['warehouse'],
					$v['flight'],
					$v['commundity'],
					"action",
					"<span style='color:".$v['color']."'><i class='".$v['icon']."' style='color: ".$v['color']."'></i> ".$v['status_cek']."</span>",
				)
			);
		}
		
		$result["data"] = $data;
		//var_dump($result);
		// $this->output->set_content_type('application/json')->set_output(json_encode($result));   


        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($result);
    }

    function saveacceptance_post(){
		$data 	= file_get_contents("php://input");
		$params 	= json_decode($data,true);
		$list = $this->api_acceptance_model->saveacceptance($params);
		
		if($list){
			$res = array(
				'status' => 'success',
				'message' => 'Data agent has been saved'
			);
		}else{
			$res = array(
				'status' => 'error',
				'message' => 'Data agent error when saved'
			);
		}
        
		
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
	}
    function editacceptance_post(){
		$data 	= file_get_contents("php://input");
		$params 	= json_decode($data,true);
		$list = $this->api_acceptance_model->editacceptance($params);
		
		if($list){
			$res = array(
				'status' => 'success',
				'message' => 'Data agent has been saved'
			);
		}else{
			$res = array(
				'status' => 'error',
				'message' => 'Data agent error when saved'
			);
		}
        
		
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
	}
	
    function deleteacceptance_post(){
		$data 	= file_get_contents("php://input");
		$params 	= json_decode($data,true);
		$list = $this->api_acceptance_model->deleteacceptance($params);
		
		if($list){
			$res = array(
				'status' => 'success',
				'message' => 'Data agent has been deleted'
			);
		}else{
			$res = array(
				'status' => 'error',
				'message' => 'Data agent error when deleted'
			);
		}
        
		
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
	}

    function detailacceptance_post(){
		$data 	= file_get_contents("php://input");
		$params 	= json_decode($data,true);
		$list = $this->api_acceptance_model->detailacceptance($params);
		
		if($list){
			$res = array(
				'status' => 'success',
				'message' => 'Data agent has been load',
				'data' => $list
			);
		}else{
			$res = array(
				'status' => 'error',
				'message' => 'Data agent error when deleted'
			);
		}
        
		
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
	}
    
	function listwarehouse_get(){
		
		$list = $this->api_acceptance_model->listwarehouse();
		
		if($list){
			$res = array(
				'status' => 'success',
				'message' => 'Data agent has been load',
				'data' => $list
			);
		}else{
			$res = array(
				'status' => 'error',
				'message' => 'Data agent error when deleted'
			);
		}
        
		
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
	}
    
	function listflight_get(){
		
		$list = $this->api_acceptance_model->listflight();
		
		if($list){
			$res = array(
				'status' => 'success',
				'message' => 'Data agent has been load',
				'data' => $list
			);
		}else{
			$res = array(
				'status' => 'error',
				'message' => 'Data agent error when deleted'
			);
		}
        
		
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
	}
	function listcommundity_get(){
		
		$list = $this->api_acceptance_model->listcommundity();
		
		if($list){
			$res = array(
				'status' => 'success',
				'message' => 'Data agent has been load',
				'data' => $list
			);
		}else{
			$res = array(
				'status' => 'error',
				'message' => 'Data agent error when deleted'
			);
		}
        
		
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
	}
	function listagent_get(){
		
		$list = $this->api_acceptance_model->listagent();
		
		if($list){
			$res = array(
				'status' => 'success',
				'message' => 'Data agent has been load',
				'data' => $list
			);
		}else{
			$res = array(
				'status' => 'error',
				'message' => 'Data agent error when deleted'
			);
		}
        
		
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
	}
	function listshipper_get(){
		
		$list = $this->api_acceptance_model->listshipper();
		
		if($list){
			$res = array(
				'status' => 'success',
				'message' => 'Data agent has been load',
				'data' => $list
			);
		}else{
			$res = array(
				'status' => 'error',
				'message' => 'Data agent error when deleted'
			);
		}
        
		
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
	}
	function listdestination_get(){
		
		$list = $this->api_acceptance_model->listdestination();
		
		if($list){
			$res = array(
				'status' => 'success',
				'message' => 'Data agent has been load',
				'data' => $list
			);
		}else{
			$res = array(
				'status' => 'error',
				'message' => 'Data agent error when deleted'
			);
		}
        
		
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header("access-control-allow-origin: *");
        echo json_encode($res);
	}
    

}
