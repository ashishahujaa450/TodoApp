<?php 
	$db = "todo";
	$username = "root";
	$pass = "";
	$host = "localhost";

	try {
		$conn = mysqli_connect($host,$username,$pass,$db);
	} catch(Exception $ex) {
		echo $ex->getMessage();
		$conn = null;
	} finally {
		// future todo
	}
?>