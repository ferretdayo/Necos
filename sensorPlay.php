<?php
	require_once("./common.php");
	
	$sconnection = ssh2_connect(ADDRESS, 22);
    ssh2_auth_password($sconnection, USER, PASSWORD);
	$sensorCommand = "/usr/bin/sudo /home/pi/public_html/Necos/sensorPin";
	ssh2_exec($sconnection, $sensorCommand);
?>
