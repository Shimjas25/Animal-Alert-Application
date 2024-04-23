<?php
	include("../auth.php");
	include('../../connect/db.php');
	$Log_Id=$_SESSION['SESS_KRISHIBHAVAN_ID'];

	$name=$_POST["name"];
	$oname=$_POST["oname"];
	$cntno=$_POST["cntno"];
	$cntno1=$_POST["cntno1"];
	$wurl=$_POST["wurl"];
	$location=$_POST["location"];
	$addr=$_POST["addr"];
	$descp=$_POST["descp"];
	
$sql = "update user set oname='$oname',name='$name',cntno='$cntno',location='$location',addr='$addr',cntno1='$cntno1',descp='$descp',wurl='$wurl'  where Log_Id='$Log_Id'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

