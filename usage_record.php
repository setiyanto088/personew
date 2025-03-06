<?php 

include '/var/www/dh/vendor/autoload.php';
	
	include 'database.php';   

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
	//$con = mysqli_connect('master.u.1elf.net:3306','root','aJxTF5XsTDSQ');
  //mysqli_select_db($con,'prod_unics');

  //die;
  
  
										
										// $db->write("
										
										// INSERT INTO CDR_EPG_ALL_SESSION_HARIAN_WEEK_N
										// SELECT * FROM `CDR_EPG_ALL_SESSION_HARIAN_".$array_dates."_N`
										// WHERE (`USER_BEGIN_SESSION` BETWEEN '".$check_progress[0]["START_DATE"]." 00:00:00' AND '".$check_progress[0]["EMD_DATE"]." 23:59:59' OR
										// `USER_END_SESSION` BETWEEN '".$check_progress[0]["START_DATE"]." 00:00:00' AND '".$check_progress[0]["EMD_DATE"]." 23:59:59' )
										// GROUP BY `CARDNO`,`CHANNEL`,`USER_BEGIN_SESSION`,`USER_END_SESSION`,`PROGRAM`,`KATEGORI_CHANNEL`,`BEGIN_PROGRAM`,`END_PROGRAM`,`GENRE_PROGRAM`,`DURASI`,`DURASI_PROGRAM`,`DATE`
										
										// ");	
	 $date = date('Y-m-d H:i:s');		
	 $server_node = 'Main Server';

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
	 $StoreSize = $arr_str[34];
	 $StoreUsed = $arr_str[36];
	 $StoreAvail = $arr_str[38];
	 $StoreUseP = $arr_str[40];
	 
	 $db->write("INSERT INTO SERVER_PERF VALUES ('".$date."','".$server_node."','".$mem_Active."','".$mem_MemTotal."','".$mem_MemFree."','".$mem_MemAvailable."','".$arrs[0]."','".$StoreSize."','".$StoreUsed."','".$StoreAvail."','".$StoreUseP."') ");	
	 
	 echo $date.' '.$mem_Active.' '.$mem_MemTotal.' '.$mem_MemFree.' '.$mem_MemAvailable.' '.$arrs[0].' '.$StoreSize.' '.$StoreUsed.' '.$StoreAvail.' '.$StoreUseP;

?>
		