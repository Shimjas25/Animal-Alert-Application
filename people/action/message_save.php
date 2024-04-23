<?php
	include("../auth.php");
	include('../../connect/db.php');
	$Log_Id=$_SESSION['SESS_PEOPLE_ID'];
	
	$name=$_POST["name"];
	$frstry=$_POST["frstry"];
	$cntno=$_POST["cntno"];
	$date=$_POST["date"];
	$descp=$_POST["descp"];
	$subj=$_POST["subj"];

	
	
$sql = "insert into fmessage(Log_Id,name,frstry,cntno,date,descp,subj)values('$Log_Id','$name','$frstry','$cntno','$date','$descp','$subj')";
$q1 = $db->prepare($sql);
$q1->execute();
	
header("location:../message_ferestry.php");

?>						

