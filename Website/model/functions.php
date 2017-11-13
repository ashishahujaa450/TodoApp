<?php
	session_start();
	require_once("db.php");

	function login_user() {
		global $conn;

		$email = $_POST['userloginemail'];
		$pass = md5($_POST['userloginpwd']);

		$sql = "SELECT `id`,`name`,`email`,`pic_loc` FROM `users` WHERE `email`='${email}' AND `password`='${pass}' LIMIT 1";

		$res = mysqli_query($conn,$sql);

		if(mysqli_num_rows($res) == 1) {
			$_SESSION['user_d'] = mysqli_fetch_assoc($res);
			header("location: ../views/profile.php");
		} else {
			header("location: ../index.php?error=nt");
		}
	}

	function register_user() {
		global $conn;

		$fn = $_POST['fname'];
		$email = $_POST['email'];
		$pass = md5($_POST['pwd']);
		$mob = $_POST['mob'];

		$sql = "INSERT INTO `users`(`name`,`email`,`password`,`mob`) VALUES('${fn}', '${email}', '${pass}', '${mob}')";

		$res = mysqli_query($conn,$sql);

		$uid = mysqli_insert_id($conn);
		$user_hash = session_id();  

		if($res) {
			header("location: ../views/addpic.php?uid=${uid}&user=${user_hash}");
		} else {
			header("location: ../index.php?error=st");
		}
	}

	function upload_pic() {
		global $conn;

		$uid = $_POST['userid'];
		$name = $uid."_".$_FILES['upic']['name'];
		$path = "../uploads/".$name;

		if(move_uploaded_file($_FILES['upic']['tmp_name'],$path)) {
			try {
				$sql = "UPDATE `users` SET `pic_loc`='${path}' WHERE `id`='${uid}'";

				mysqli_query($conn,$sql);

				header("location: ../index.php?status=ok"); 

			} catch(Exception $ex) {	
				echo $ex->getMessgae();
			}
		} else {
			header("lcoation: ../index.php?error=pt");
		}
	}

	function logout_user() {
		if(!isset($_SESSION['user_d']) || empty($_SESSION['user_d'])) {
        	header("location: ../index.php");
    	}

    	try {
    		
    		$_SESSION['user_d'] = null;
    		session_unset($_SESSION['user_d']);
    		session_destroy();

    	} catch(Exception $ex) {

    		echo $ex->getMessgae();
    		$_SESSION['user_d'] = null;
    		unset($_SESSION['user_d']);

    	} finally {
    		header("location: ../index.php?logout=ok");
    	}
	}

	function add_rem() {
		global $conn;

		$uid = $_SESSION['user_d']['id'];
		$title = $_GET['title'];
		$desc = $_GET['desc'];
		$pri = $_GET['pri'];

		if($pri == "Lowest")
			$pri = 3;
		else if($pri == "Medium")
			$pri = 2;
		else
			$pri = 1;

		$sql = "INSERT INTO `reminders`(`uid`,`title`,`descp`,`prio`) VALUES('${uid}','${title}','${desc}','${pri}')";

		$res = mysqli_query($conn,$sql);

		if($res) {
			echo "1";
		} else {
			echo "2";
		}
	}
?>