<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *	Hooks untuk set timezone
 *	agus.merdeko@gmail.com
 */

class Timezone
{
	
    function set_timezone() {
		$this->ci =& get_instance();
		$this->ci->db->query("SET time_zone='+7:00'");
		date_default_timezone_set('Asia/Jakarta');		
	}
	
}

?>
