<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);

	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$pass = md5($pass . "gkjdfkgj/dkfgj"); // кеширование пароля

	var_dump($_POST);

	$mysql = new mysqli('localhost', 'root', '', 'register-bd');

	$query = "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'";

	var_dump($query);

	$result = $mysql->query($query);

	$user = $result->fetch_assoc();

	$mysql->close();

	var_dump($user);

	if (!$user) {
		echo "Такого користувача не знайдено";
		exit();

	}

	setcookie('user', $user['name'], time() + 3600, "/");


	//print_r($user); // перевірка на виконання
	//exit();



	//header('Location: index.html ');





?>
