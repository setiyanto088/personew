<?php 

include '/var/www/dh/vendor/autoload.php';

	$config = [
		'host' => 'localhost',
		'port' => '8123',
		'username' => 'inrate',
		'password' => 'a2cd-0c6d851fc9de'
	];
	$db = new ClickHouseDB\Client($config);
	$db->database('inrate');
	//$db->setTimeout(1.5);      // 1500 ms
	$db->setTimeout(1000);       // 10 seconds
	$db->setConnectTimeOut(500); // 5 seconds

	 $date = date('Y-m-d H:i:s');		
	 $server_node = 'Web Service Server';

	 $Active = "echo `cat /proc/meminfo | grep Active: | sed 's/Active: //g'`";
	 $mem_Active = shell_exec($Active);
	 $mem_Active = str_replace(array("\n", "\r\n", "\r", "\t", "    "), "", $mem_Active);
	 $mem_Active = str_replace(" kB", "", $mem_Active);
	 
	 $MemTotal = "echo `cat /proc/meminfo | grep MemTotal: | sed 's/MemTotal: //g'`";
	 $mem_MemTotal = shell_exec($MemTotal);
	 $mem_MemTotal = str_replace(array("\n", "\r\n", "\r", "\t", "    "), "", $mem_MemTotal);
	 $mem_MemTotal = str_replace(" kB", "", $mem_MemTotal);
	 
	 $MemFree = "echo `cat /proc/meminfo | grep MemFree: | sed 's/MemFree: //g'`";
	 $mem_MemFree = shell_exec($MemFree);
	 $mem_MemFree = str_replace(array("\n", "\r\n", "\r", "\t", "    "), "", $mem_MemFree);
	 $mem_MemFree = str_replace(" kB", "", $mem_MemFree);
	 
	 $MemAvailable = "echo `cat /proc/meminfo | grep MemAvailable: | sed 's/MemAvailable: //g'`";
	 $mem_MemAvailable = shell_exec($MemAvailable);
	 $mem_MemAvailable = str_replace(array("\n", "\r\n", "\r", "\t", "    "), "", $mem_MemAvailable);
	 $mem_MemAvailable = str_replace(" kB", "", $mem_MemAvailable);
	 
	 $CpuUsage = "cat /proc/loadavg";
	 $mem_CpuUsage = shell_exec($CpuUsage);
	 $arrs = explode(' ',$mem_CpuUsage);
	 
	 $StoreAvailable = "df -h /";
	 $mem_StoreAvailable = shell_exec($StoreAvailable);
	 
	 $arr_str =  explode(' ',$mem_StoreAvailable);
	 
	 print_r($arr_str);die;
	 
	 $StoreSize = $arr_str[34];
	 $StoreUsed = $arr_str[36];
	 $StoreAvail = $arr_str[38];
	 $StoreUseP = $arr_str[40];
	 
	 $db->write("INSERT INTO SERVER_PERF VALUES ('".$date."','".$server_node."','".$mem_Active."','".$mem_MemTotal."','".$mem_MemFree."','".$mem_MemAvailable."','".$arrs[0]."','".$StoreSize."','".$StoreUsed."','".$StoreAvail."','".$StoreUseP."') ");	
	 
	 echo $date.' '.$mem_Active.' '.$mem_MemTotal.' '.$mem_MemFree.' '.$mem_MemAvailable.' '.$arrs[0].' '.$StoreSize.' '.$StoreUsed.' '.$StoreAvail.' '.$StoreUseP;

?>
		