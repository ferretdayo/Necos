<?php
    require_once("common.php");
    if(!is_null($_GET["watch"])){
        $sconnection = ssh2_connect(ADDRESS, 22);
        ssh2_auth_password($sconnection, USER, PASSWORD);
        $command = LEDTEST." ".$_GET["watch"];
        $stdio_stream = ssh2_exec($sconnection, $command);
    }
?>
