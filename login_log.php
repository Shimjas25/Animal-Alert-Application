<?php
	//Start session
	session_start();
	include("connect/db.php");
	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
	//Create query
	$qrykrsh = $db->prepare("SELECT * FROM user WHERE email='$email' and password='$password' and utype='Krishibhavan'");
	$qrykrsh->execute();
	$countkrsh = $qrykrsh->rowcount();
	
	$qryhst = $db->prepare("SELECT * FROM user WHERE email='$email' and password='$password' and utype='Hospital'");
	$qryhst->execute();
	$counthst = $qryhst->rowcount();
	
	$qryfrmr = $db->prepare("SELECT * FROM user WHERE email='$email' and password='$password' and utype='Farmer'");
	$qryfrmr->execute();
	$countfrmr = $qryfrmr->rowcount();
	
	$qrypeople = $db->prepare("SELECT * FROM user WHERE email='$email' and password='$password' and utype='People'");
	$qrypeople->execute();
	$countpeople = $qrypeople->rowcount();
	
	$qryadmin = $db->prepare("SELECT * FROM user WHERE email='$email' and password='$password' and utype='Forestry'");
	$qryadmin->execute();
	$countadmin = $qryadmin->rowcount();
	
	//Check whether the query was successful or not
	if($countkrsh > 0) {
		//Login Successful
		session_regenerate_id();
		$rowkrsh = $qrykrsh->fetch();
		$_SESSION['SESS_KRISHIBHAVAN_ID'] = $rowkrsh['Log_Id'];
		session_write_close();
		header("location:krishibhavan/index.php");
		exit();
	}
	else if($counthst > 0) {
		//Login Successful
		session_regenerate_id();
		$rowhst = $qryhst->fetch();
		$_SESSION['SESS_HOSPITAL_ID'] = $rowhst['Log_Id'];
		session_write_close();
		header("location:hospital/index.php");
		exit();
	}
	else if($countfrmr > 0) {
		//Login Successful
		session_regenerate_id();
		$rowfrmr = $qryfrmr->fetch();
		$_SESSION['SESS_FARMER_ID'] = $rowfrmr['Log_Id'];
		session_write_close();
		header("location:farmer/index.php");
		exit();
	}
	else if($countpeople > 0) {
		//Login Successful
		session_regenerate_id();
		$rowpeople = $qrypeople->fetch();
		$_SESSION['SESS_PEOPLE_ID'] = $rowpeople['Log_Id'];
		session_write_close();
		header("location:people/index.php");
		exit();
	}
	else if($countadmin > 0) {
		//Login Successful
		session_regenerate_id();
		$rowadmin = $qryadmin->fetch();
		$_SESSION['SESS_FORESTRY_ID'] = $rowadmin['Log_Id'];
		session_write_close();
		header("location:forestry/index.php");
		exit();
	}
	else 
	{
		//Login failed
		echo "<script>alert('Check Username And Password.'); window.location='login.php'</script>";
		exit();
	}
?>
