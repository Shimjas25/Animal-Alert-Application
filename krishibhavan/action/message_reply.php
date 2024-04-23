<?php
	include("../auth.php");
	include('../../connect/db.php');
	
	$kmsg_id=$_POST["kmsg_id"];
	$reply=$_POST["reply"];
	
	$rdate=date("Y-m-d");

	
$sql = "update kmessage set reply='$reply',rdate='$rdate' where kmsg_id='$kmsg_id'";
$q1 = $db->prepare($sql);
$q1->execute();
	
header("location:../message_farmer.php");

?>						

