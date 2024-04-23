<?php
	include("../auth.php");
	include('../../connect/db.php');
	$Log_Id=$_SESSION['SESS_PEOPLE_ID'];
	
	$name=$_POST["name"];
	$hospt=$_POST["hospt"];
	$cntno=$_POST["cntno"];
	$date=$_POST["date"];
	$descp=$_POST["descp"];
	$subj=$_POST["subj"];

	
	
$sql = "insert into hmessage(Log_Id,name,hospt,cntno,date,descp,subj)values('$Log_Id','$name','$hospt','$cntno','$date','$descp','$subj')";
$q1 = $db->prepare($sql);
$q1->execute();
	
header("location:../message_hospital.php");

?>						

