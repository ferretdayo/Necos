<?php
    require_once("./exportPicture.php");
    require_once("./common.php");

    $filename = date('Y-m-d_G-i-s').".jpg";
    if(!is_null($_GET["start"])){
        $sconnection = ssh2_connect(ADDRESS, 22);
        ssh2_auth_password($sconnection, USER, PASSWORD);
	//ここで人感センサの値によって写真を撮るようにする
	while(1){
		$command = "raspistill -o /home/pi/public_html/Necos/img/".$filename;
        	$stdio_stream = ssh2_exec($sconnection, $command);
		sleep(10);
		$dropbox = new Dropbox();
		$dropbox-> Upload("./img/".$filename, "/LOCAL/".$filename);
		//出来たらbreak消してください
		break;
	}
    }
?>
