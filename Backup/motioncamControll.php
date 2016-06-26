<?php
define("STARTMOTION", "/home/pi/LastReport/start_motion.sh");
define("STOPMOTION", "/home/pi/LastReport/stop_motion.sh");
define("ADDRESS", "192.168.43.62");

	$sconnection = ssh2_connect(ADDRESS, 22);
	ssh2_auth_password($sconnection, USER, PASSWORD);
	
	if ($_GET["state"] == 1) {
		$command = STARTMOTION;
	}
	else {
		$command = STOPMOTION;
	}

	ssh2_exec($sconnection, $command);
?>
