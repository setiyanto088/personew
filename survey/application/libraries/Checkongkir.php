<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Checkongkir extends Curl{
		protected $checker_host = '';
		protected $api_key = '';
		
		public function __construct()
		{
			parent::__construct();
			$this->api_host = 'http://pro.rajaongkir.com/api/';
			$this->api_key = '010a16f23cc26fe6e088f896d49fa41e';
		}
	
		public function province($id = '')
		{
			return $this->simple_get($this->api_host.'province?id='.$id, FALSE, array(CURLOPT_HTTPHEADER => array('key: '.$this->api_key)));
		}
		
		public function city($id = '', $province = '')
		{
			return $this->simple_get($this->api_host.'city?id='.$id.'&province='.$province, FALSE, array(CURLOPT_HTTPHEADER => array('key: '.$this->api_key)));
		}
		
		public function subdistrict($city = '')
		{
			return $this->simple_get($this->api_host.'subdistrict?city='.$city, FALSE, array(CURLOPT_HTTPHEADER => array('key: '.$this->api_key)));
		}
		
		public function cost($origin = '', $originType = '', $destination = '', $destinationType = '', $weight = '', $courier = '')
		{
			return $this->simple_post($this->api_host.'cost', FALSE, array(CURLOPT_POSTFIELDS => 'origin='.$origin.'&originType='.$originType.'&destination='.$destination.'&destinationType='.$destinationType.'&weight='.$weight.'&courier='.$courier,CURLOPT_HTTPHEADER => array('content-type: application/x-www-form-urlencoded', 'key: '.$this->api_key)));
		}
		
		public function internationalOrigin($id, $province)
		{
			return $this->simple_get($this->api_host.'internationalOrigin?id='.$id.'&province='.$province, FALSE, array(CURLOPT_HTTPHEADER => array('key: '.$this->api_key)));
		}
		
		public function internationalDestination($id)
		{
			return $this->simple_get($this->api_host.'internationalDestination?id='.$id, FALSE, array(CURLOPT_HTTPHEADER => array('key: '.$this->api_key)));
		}
		
		public function internationalCost($origin = '', $destination = '', $weight = '', $courier = '')
		{
			return $this->simple_post($this->api_host.'internationalCost', FALSE, array(CURLOPT_POSTFIELDS => 'origin='.$origin.'&destination='.$destination.'&weight='.$weight.'&courier='.$courier,CURLOPT_HTTPHEADER => array('content-type: application/x-www-form-urlencoded', 'key: '.$this->api_key)));
		}
		
		public function currency()
		{
			return $this->simple_get($this->api_host.'currency', FALSE, array(CURLOPT_HTTPHEADER => array('key: '.$this->api_key)));
		}
		
		public function waybill($waybill = '', $courier = '')
		{
			return $this->simple_post($this->api_host.'waybill', FALSE, array(CURLOPT_POSTFIELDS => 'waybill='.$waybill.'&courier='.$courier,CURLOPT_HTTPHEADER => array('content-type: application/x-www-form-urlencoded', 'key: '.$this->api_key)));
		}
		
	}
	
?>