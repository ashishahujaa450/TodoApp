<?php
	require_once("../model/functions.php");

	if($_GET['type'] == 'login' && !empty($_GET['type']))
		login_user();
	else if($_GET['type'] == 'reg' && !empty($_GET['type']))
		register_user();
	else if($_GET['type'] == 'picupload' && !empty($_GET['type']))
		upload_pic();
	else if($_GET['type'] == 'logout' && !empty($_GET['type']))
		logout_user();
	else if($_GET['type'] == 'rem' && !empty($_GET['type']))
		add_rem();
	else 
		header("location: ../index.php");
?>