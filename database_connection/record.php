<?php
$servername = "localhost";
$database = "register-bd";
$username = "root";
$password = "";

	//встановлюємо з'єднаня

$conn = mysqli_connect($servername, $username, $password, $database);

	// перевіряємо з'єднання
if (!$conn){
	die("Connection failed" . mysqli_connect_error());
}
	echo "Connected successfully";

	echo "<br />";

	// виконуємо запис

 $sql = "insert into  users (id, login, pass, name ) VALUE ('', 'raf', '123123', 'rif')";

 if (mysqli_query($conn, $sql)) {
 	echo "New record created successfully";

 } else {

 	echo "Error: " . $sql . "<br>" . mysqli_error($conn);

 }
	mysqli_close($conn);


?>