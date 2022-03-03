<?php
	$link = mysqli_connect("127.0.0.1", "root", "C916329520412g/", "Users");
	if ($link == true) {
		if (preg_match('/^[a-zA-Z]{1,}[a-zA-Z0-9]{1,30}@{1}[a-zA-Z0-9]{1,30}\.{1}[a-z]{2,4}$/', $_POST['user']) == 1) {
			$log = $_POST['user'];
			$pas = $_POST['pass'];
			$res = mysqli_query($link, 'INSERT INTO Users set login = "$log", password = "$pas";');
			if ($res == false) {
			echo("0");
		}
		else {
			echo("1");
		}
		}
		else if (preg_match("/^[a-zA-Z]{1,}[a-zA-Z0-9]{1,30}$/", $_POST['user']) == 1) {
		$log = $_POST['user'];
		$pas = $_POST['pass'];
		$res = mysqli_query($link, "INSERT INTO Users set login = '$log', password = '$pas';");
		if ($res == false) {
			echo("0");
		}
		else {
			echo("1");
		}
}
	else {
		$e = $_POST['user'];
		$pas = $_POST['pass'];
		$e = str_replace("-", "", $e);
		$e = str_replace(" ", "", $e); 
		$res = mysqli_query($link, "INSERT INTO Users set number = '$e', password = '$pas';");		
		if ($res == false) {
			echo("0");
		}
		else {
			echo("1");
		}
	}
	}
	else {
		echo("0");
	}
?>