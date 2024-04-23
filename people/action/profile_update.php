<?php
	include("../auth.php");
	include('../../connect/db.php');
	$Log_Id=$_SESSION['SESS_PEOPLE_ID'];
	
	$name=$_POST["name"];
	$sex=$_POST["sex"];
	$age=$_POST["age"];
	
	$dob=$_POST["dob"];
	
	$aadharno=$_POST["aadharno"];
	
	$cntno=$_POST["cntno"];
	$password=$_POST["password"];
	
	$addr=$_POST["addr"];
	$panchayath=$_POST["panchayath"];
	$descp=$_POST["descp"];
	
	$frstry=$_POST["frstry"];
	$hospt=$_POST["hospt"];
	
	
$sql = "update user set frstry='$frstry',hospt='$hospt',name='$name',sex='$sex',age='$age',dob='$dob',aadharno='$aadharno',cntno='$cntno',password='$password',addr='$addr',panchayath='$panchayath',descp='$descp' where Log_Id='$Log_Id'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

