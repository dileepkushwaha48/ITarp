<?php
$servername = "localhost";
	$database = "photography_project";
	$username = "root";
	$password = "";

	//Create Connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	//Check Connection
	if(!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

?>
