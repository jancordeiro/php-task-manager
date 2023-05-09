<?php
	
	// PHP file to connect to the database
	// Sample created by Jan Cordeiro
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "loginsys";
	
	$conn = new mysqli($servername,$username,$password,$database);
	
	// if ($conn->connect_errno)
	// {
	//	echo "Failed to connect to the database" . mysqli->error;
	// }
	// else
	// {
	//	echo "The connection was successful";
	// }
	
?>