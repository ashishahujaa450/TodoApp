<?php
	require_once("../model/functions.php");

	if($_GET['type'] == 'login' && !empty($_GET['type']) == 'login')
		login_user();
	else if($_GET['type'] == 'reg' && !empty($_GET['type']) == 'reg')
		register_user();
	else if($_GET['type'] == 'picupload' && !empty($_GET['type']) == 'picupload')
		upload_pic();
	else if($_GET['type'] == 'logout' && !empty($_GET['type']) == 'logout')
		logout_user();
	else 
		header("location: ../index.php");
?>