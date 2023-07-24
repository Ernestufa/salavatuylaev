<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "salavat";

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if (!$conn){
		die("Connection failed". mysqli_connect_error());
	}

	$login = $_POST['login'];
	$pass = $_POST['password'];
	$repeat = $_POST['repeat'];
	$email = $_POST['email'];


	if ($pass != $repeat){
		echo "Password mismatch";
	}
	else {
		$sql = "INSERT INTO `registration` (login, email, password) VALUES ('$login', '$email', '$pass')";
		if ($conn -> query($sql) === TRUE){
			$content = file_get_contents('login.html');
			echo $content;
		}
		else {
			echo "Error: ". $conn->error;
		}
	}
?>