<?php
  $servername = "localhost";
  $database = "register-bd";
  $username = "root";
  $password = "";

   // створюємо підключення

 $conn = mysqli_connect ($servername, $username, $password, $database);


  // перевіряємо підключення

 if (!$conn) {
 	die("Connection failed : " . mysqli_connect_error());

 }
 	echo "Connection successfuly";
 	mysqli_close ($conn);







?>