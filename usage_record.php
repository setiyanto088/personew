<?php 

include '/var/www/dh/vendor/autoload.php';

	$config = [
		'host' => 'dev-db.u.1elf.net',
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
	 $periode =date_format(date_create($date),"Y-F"); //2018-March
	 $days =date_format(date_create($date),"Y-m-d"); //Daya
	 $n_period =date_format(date_create($date),"Y-m"); //201811	
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
	 	 
	 $StoreSize = $arr_str[19];
	 $StoreUsed = $arr_str[21];
	 $StoreAvail = $arr_str[23];
	 $StoreUseP = $arr_str[25];
	 
	 $db->write("INSERT INTO SERVER_PERF VALUES ('".$date."','".$server_node."','".$mem_Active."','".$mem_MemTotal."','".$mem_MemFree."','".$mem_MemAvailable."','".$arrs[0]."','".$StoreSize."','".$StoreUsed."','".$StoreAvail."','".$StoreUseP."') ");	
	 
	 $db->write("ALTER TABLE SERVER_PERF_SUMMARY DELETE WHERE SERVER_NODE = '".$server_node."' AND PERIODE = 'MONTHLY' AND TIME_PERIODE = '".$periode."' ");	
	 
	 $db->write("ALTER TABLE SERVER_PERF_SUMMARY DELETE WHERE SERVER_NODE = '".$server_node."' AND PERIODE = 'DAILY' AND TIME_PERIODE = '".$days."' ");	
	 
	 $db->write("
	 INSERT INTO SERVER_PERF_SUMMARY
				SELECT SERVER_NODE,'DAILY' as periode,'".$days."' AS DS, MAX(MEM_ACTIVE) AS MAX_MEM_ACTIVE, AVG(MEM_ACTIVE) AS AVG_MEM_ACTIVE ,
				MAX(CPU_USAGE) AS MAX_CPU_USAGE, AVG(CPU_USAGE) AS AVG_CPU_USAGE, '".$StoreSize."' as STORAGE,'".$StoreUsed."' as STORAGE1,'".$StoreAvail."' as STORAGE2,'".$StoreUseP."' as STORAGE3
				FROM inrate.SERVER_PERF WHERE SERVER_NODE = '".$server_node."' AND formatDateTime(`DATETIME`,'%Y-%m-%d') = '".$days."'
				GROUP BY  SERVER_NODE
	");	
	
	$db->write("
				INSERT INTO SERVER_PERF_SUMMARY
				SELECT SERVER_NODE,'MONTHLY' as periode, '".$periode."' AS DS, MAX(MEM_ACTIVE) AS MAX_MEM_ACTIVE, AVG(MEM_ACTIVE) AS AVG_MEM_ACTIVE ,
				MAX(CPU_USAGE) AS MAX_CPU_USAGE, AVG(CPU_USAGE) AS AVG_CPU_USAGE,'".$StoreSize."' as STORAGE,'".$StoreUsed."' as STORAGE1,'".$StoreAvail."' as STORAGE2,'".$StoreUseP."' as STORAGE3
				FROM inrate.SERVER_PERF WHERE SERVER_NODE = '".$server_node."' AND formatDateTime(`DATETIME`,'%Y-%m') = '".$n_period."'
				GROUP BY  SERVER_NODE
	");

?>
		