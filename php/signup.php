<?php
	require_once('connect.php');

	$full_name = $_POST['full_name'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$password_confirm = $_POST['passwor_confirm'];

	if($password === password_confirm){
		$password = md5($password);
		mysqli_query($connect, query:"INSERT INTO `users` (`id`, `fullname`, `login`, `password`) VALUES (NULL, '$full_name', '$login', '$password')");
	} else {
		die('Пароли не совпадают!');
	}
?>