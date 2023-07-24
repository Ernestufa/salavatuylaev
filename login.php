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


	$sql = "SELECT * FROM `registration` WHERE login = '$login' AND password = '$pass'";
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			$content = file_get_contents('index.html');
			echo $content;
		}
	}
	else {
		echo "User not found";
	}
?>