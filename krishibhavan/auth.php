<?php
session_start();
if(!isset($_SESSION['SESS_KRISHIBHAVAN_ID']) || (trim($_SESSION['SESS_KRISHIBHAVAN_ID']) == '')) {
	header("location:../");
	exit();
}

?>
