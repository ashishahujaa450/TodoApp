<?php 
	require_once('../model/db.php');

	if($_GET['type'] == 'login' && !empty($_GET['type']) && isset($_GET['type']))
		check_login();
	else if($_GET['type'] == 'reg' && !empty($_GET['type']) && isset($_GET['type']))
		check_reg();


	function check_login() {
		global $conn;

		$email = $_POST['pemail'];
		$pass = md5($_POST['ppass']);

		$sql = "SELECT `id`,`name`,`email` FROM `users` WHERE `email`='${email}' AND `password`='${pass}' LIMIT 1";

		$res = mysqli_query($conn,$sql);

		if(mysqli_num_rows($res) == 1) {
			$array = array();

			$row = mysqli_fetch_assoc($res);
			array_push($array,$row);

			echo json_encode($array); // all data
		} else {
			echo json_encode(array()); // blank data
		}
	}

	function check_reg() {
		global $conn;

		$name = $_POST['pname'];
		$email = $_POST['pemail'];
		$pass = md5($_POST['ppass']);
		$mob = $_POST['pmob'];

		$sql = "INSERT INTO `users`(`name`,`email`,`password`,`mob`) VALUES('${name}','${email}','${pass}','${mob}')";

		try{
			$res = mysqli_query($conn,$sql);
		} catch(Exception $x) {
			echo $x->getMessage();
		}
		

		if($res) {
			$uid = mysqli_insert_id($conn);
			$array = array($uid,$name,$email,$mob);

			echo json_encode($array);
		} else {
			echo json_encode(array());
		}
	}

	function list_tasks() {
		//
	}

?>