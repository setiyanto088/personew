<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class FromatNumbering {
	public function __construct()
	{
		$this->CI =& get_instance();
	}
	public function format_qty($number){
		return number_format($number,2,'.',',');
	}
	public function format_amount($number){
		return number_format($number,2,'.',',');
	}
	public function format_unit_price($number,$id_valas){
		if($id_valas==1)
			return number_format($number,2,'.',',');
		return number_format($number,5,'.',',');
	}
}
