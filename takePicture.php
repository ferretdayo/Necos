<?php
    require_once("./exportPicture.php");
    require_once("./common.php");

    $filename = date('Y-m-d_G-i-s').".jpg";
    touch("./img/".$filename);
    if(!is_null($_GET["take"])){
        $sconnection = ssh2_connect(ADDRESS, 22);
        ssh2_auth_password($sconnection, USER, PASSWORD);
        $command = "raspistill -o ./img/".$filename;
        $stdio_stream = ssh2_exec($sconnection, $command);
    }
    $dropbox = new DropBox();
    $dropbox->Upload("./img/".$filename, "/LOCAL/".$filename);
?>
