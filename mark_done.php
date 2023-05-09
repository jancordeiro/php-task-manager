<?php
	include('config.php');
	
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	
	$sql = "UPDATE tasks SET status = 'done' WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
	
	mysqli_close($conn);
?>