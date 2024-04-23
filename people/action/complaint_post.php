<?php
	include("../auth.php");
	include('../../connect/db.php');
	$Log_Id=$_SESSION['SESS_PEOPLE_ID'];
	
	
	$name=$_POST["name"];
	$sex=$_POST["sex"];
	$age=$_POST["age"];
	$aadharno=$_POST["aadharno"];
	$addr=$_POST["addr"];
	$hospt=$_POST["hospt"];
	$cntno=$_POST["cntno"];
	$cdate=$_POST["cdate"];
	$pdate=$_POST["pdate"];
	$frstry=$_POST["frstry"];
	$panchayath=$_POST["panchayath"];
	$cname=$_POST["cname"];
	$descp=$_POST["descp"];
	$photo=$_POST["photo"];
	$kst="Pending";
	$fsat="Pending";

	

	$image = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
	$image_name = addslashes($_FILES['photo1']['name']);
	$image_size = getimagesize($_FILES['photo1']['tmp_name']);
	move_uploaded_file($_FILES["photo1"]["tmp_name"], "../../photo/" . $_FILES["photo1"]["name"]);
	$photo1 = $_FILES["photo1"]["name"];
	
	$image = addslashes(file_get_contents($_FILES['photo2']['tmp_name']));
	$image_name = addslashes($_FILES['photo2']['name']);
	$image_size = getimagesize($_FILES['photo2']['tmp_name']);
	move_uploaded_file($_FILES["photo2"]["tmp_name"], "../../photo/" . $_FILES["photo2"]["name"]);
	$photo2 = $_FILES["photo2"]["name"];
	
	$sql = "insert into poplecomplaintpost(Log_Id,name,sex,age,aadharno,addr,hospt,cntno,cdate,pdate,frstry,panchayath,cname,descp,photo,photo1,photo2,kst,fsat)values('$Log_Id','$name','$sex','$age','$aadharno','$addr','$hospt','$cntno','$cdate','$pdate','$frstry','$panchayath','$cname','$descp','$photo','$photo1','$photo2','$kst','$fsat')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	header("location:../people_claims_request.php");

?>						

