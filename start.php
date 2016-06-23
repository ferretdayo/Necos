<?php
    require_once("common.php");
    if(!is_null($_GET["start"])){
        $sconnection = ssh2_connect(ADDRESS, 22);
        ssh2_auth_password($sconnection, USER, PASSWORD);
	if($_GET["start"] === 1){
            $command = "";
	}else if($_GET["start"] === 0){
	    $command = "";
	}
        $stdio_stream = ssh2_exec($sconnection, $command);
    }
?>
