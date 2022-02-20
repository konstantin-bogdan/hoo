<?php
$host = 'localhost';
$dbname = 'register-bd';
$username = 'root';
$password = '';

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
	die("Could not connect to the database $dbname :" . $pe->getMessage());
}


//var_dump($conn);



?>