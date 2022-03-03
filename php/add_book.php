<?php
	session_start();
	$link = mysqli_connect("127.0.0.1", "root", "C916329520412g/");
	$result = mysqli_query($link, 'INSERT into books.books set name = "'.$_POST['book_name'].'", author = "'.$_POST['author_fio'].'", userid = (SELECT userid from users.users where login = "'.$_SESSION['logged_user'].'");');
	if ($result == true) {
		echo("1");
	}
	else {
		echo("0");
	}
?>