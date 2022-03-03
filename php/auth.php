<?php
	session_start();
	$flag = 0;
	$link = mysqli_connect("127.0.0.1", "root", "C916329520412g/", "Users");
	if ($link == true) 
		{
	if (preg_match('/^[a-zA-Z]{1,}[a-zA-Z0-9]{1,30}@{1}[a-zA-Z0-9]{1,30}\.{1}[a-z]{2,4}$/', $_POST['user']) == 1) {
			$result = mysqli_query($link, "SELECT login FROM Users WHERE (e_mail = \"{$_POST['user']}\" AND password = \"{$_POST['pass']}\")");
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		}
		else if (preg_match("/^[a-zA-Z]{1,}[a-zA-Z0-9]{1,30}$/", $_POST['user']) == 1) {
		$result = mysqli_query($link, "SELECT login FROM Users WHERE (login = \"{$_POST['user']}\" AND password = \"{$_POST['pass']}\")");
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
}
	else {
		$e = $_POST['user'];
		$e = str_replace("-", "", $e);
		$e = str_replace(" ", "", $e);
		$result = mysqli_query($link, "SELECT login FROM Users WHERE (number = \"{$e}\" AND password = \"{$_POST['pass']}\")");
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	}
     if (count($data) > 0) {
        setcookie('count_try', '');
		$_SESSION['logged_user'] = $data[0]['login'];
         echo json_encode(array('success' => 1));
     }
     else {
		if (isset($_COOKIE['count_try'])) {
	             $value = $_COOKIE['count_try'] + 1;
	             setcookie('count_try', $value);
	             if ($_COOKIE['count_try'] == 2) {    
	                 setcookie('count_try', -1, time() - 3600);   
	                 session_destroy();
	                 echo json_encode(array('success' => 2));
	             }
	             else {
	             	echo json_encode(array('success' => 0));
	             }
	    } 
	    else {
	             setcookie('count_try', 1);
	             echo json_encode(array('success' => 0));
	         }
	}
	} 	
 ?>