<?php
	require_once "./vendor/autoload.php";
	require_once "common.php";
	class DropBox{
		private $dropbox;
		function __construct(){
			define("YOUR_USER_AGENT","chrome");
			$this->dropbox = new \Dropbox\Client(ACCESSTOKEN, YOUR_USER_AGENT);
		}
		function Upload($localpath, $destpath){
			try{
				$fp = fopen($localpath, 'rb');
				$res = $this->dropbox->uploadFile($destpath, \Dropbox\WriteMode::add(), $fp);
				fclose($fp);
			}catch(Exception $e){
				echo "upload error";
				exit;
			}
			var_dump($res);
		}
	}
?>
