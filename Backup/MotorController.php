<?php
define("MC", "/usr/bin/sudo /home/pi/LastReport/MotorController");
define("ADDRESS", "192.168.43.62");

if(!is_null($_GET["num"]) && !is_null($_GET["stat"]) && !is_null($_GET["pwm"])){
	$sconnection = ssh2_connect(ADDRESS, 22);
	ssh2_auth_password($sconnection, USER, PASSWORD);
	$command = MC." ".$_GET["num"]." ".$_GET["stat"]." ".$_GET["pwm"];
	$stdio_stream = ssh2_exec($sconnection, $command);
}
?>
