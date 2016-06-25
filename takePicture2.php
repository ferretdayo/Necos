<?php
    require_once("./exportPicture.php");
    require_once("./common.php");

    $filename = date('Y-m-d_G-i-s').".jpg";
    $sconnection = ssh2_connect(ADDRESS, 22);
    ssh2_auth_password($sconnection, USER, PASSWORD);
    $command = "raspistill -o /home/pi/public_html/Necos/img/".$filename;
    $stdio_stream = ssh2_exec($sconnection, $command);
    sleep(10);
    $dropbox = new Dropbox();
    $dropbox-> Upload("./img/".$filename, "/LOCAL/".$filename);	       



?>
