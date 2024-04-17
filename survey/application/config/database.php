<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$active_group = 'default';
$active_record = TRUE;

include("cfg.php");

$db['default']['hostname'] = $config_db_maria['hostname'];
$db['default']['port'] = '3306';
$db['default']['username'] =  $config_db_maria['username'];
$db['default']['password'] = $config_db_maria['password'];
$db['default']['database'] = 'survey'; 
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;
$db['default']['db_debug'] = TRUE;

/* End of file database.php */
/* Location: ./application/config/database.php */
//If there is a local config file, override the settings with that..
if (is_readable(APPPATH . 'config/database.local.php')) 
{
	include(APPPATH . 'config/database.local.php');	
}