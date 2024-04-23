<?php
include("connect/db.php");
	
	$name=$_POST["name"];
	$cntno=$_POST["cntno"];
	$email=$_POST["email"];
	$location=$_POST["location"];
	$password=$_POST["password"];
	$utype=$_POST["utype"];
	
	$Log_Id="LOG".rand(10000000785,0);	
	
	$date=date("Y-m-d");
	

$sql = "insert into user(Log_Id,name,cntno,password,email,location,utype,date)values('$Log_Id','$name','$cntno','$password','$email','$location','$utype','$date')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:index.php");
?>

