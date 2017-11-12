<?php 
	require_once('../model/db.php');

	if($_GET['type'] == 'login' && !empty($_GET['type']) && isset($_GET['type']))
		check_login();
	else if($_GET['type'] == 'reg' && !empty($_GET['type']) && isset($_GET['type']))
		check_reg();
	else if($_GET['type'] == 'addrem' && !empty($_GET['type']) && isset($_GET['type']))
		add_rem();
	else if($_GET['type'] == 'list' && !empty($_GET['type']) && isset($_GET['type']))
		list_rem();


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

	function add_rem() {
		global $conn;

		$uid = $_POST['id'];
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$pri = $_POST['pri'];

		$sql = "INSERT INTO `reminders`(`uid`,`title`,`descp`,`prio`) VALUES('${uid}','${title}','${desc}','${pri}')";

		$res = mysqli_query($conn,$sql);

		if($res) {
			echo "1";
		} else {
			echo "2";
		}
	}

	function list_rem() {
		global $conn;

		$uid = $_POST['id'];

		$sql = "SELECT `title`,`descp`,`prio` FROM `reminders` WHERE `uid`= '${uid}'";
		$array = array();

		$rs = mysqli_query($conn,$sql);

		if($rs) {
			while(($row = mysqli_fetch_assoc($rs))) {
				array_push($array,$row);
			}	

			echo json_encode($array);
		} else {
			echo json_encode($array);
		}
		
	}

?>