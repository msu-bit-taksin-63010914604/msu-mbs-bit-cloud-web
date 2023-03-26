<?php
@session_start();
if(empty($_SESSION['ses_aid'])){
	echo "Acess Denied";
	exit;
	}
echo "ยินดีต้อนรับ ".$_SESSION['ses_aname']." !!!"."<hr>";
?>