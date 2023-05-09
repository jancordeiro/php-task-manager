<?php
	include('config.php');
	
	if(isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$description = $_POST['description'];
		$date = $_POST['date'];
		$status = $_POST['status'];
		
		$sql = mysqli_query($conn, "INSERT INTO `tasks` (name, description, date, status) VALUES ('$name', '$description', '$date', '$status')");
		
		header('Location: tasks.php');		
	}	
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=devide-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>PHP Task Manager</title>
</head>
<body>
<div class="main">
	<div class="container">
	<h1>PHP Task Manager</h1>
	<form action="" method="POST">
		<label>Task Name:</label>
		<input type="text" placeholder="Task Name" name="name" required>
		<label>Description:</label>
		<input type="text" placeholder="Description" name="description" required>
		<label>Date:</label>		
		<input type="date" name="date" required><br><br>				
		<input type="submit" name="submit" class="btn btn-primary" value="Submit"><br><br>
		<a class="btn btn-secondary btn-sm btn-block" href="tasks.php" role="button">My Tasks</a>
		<input type="hidden" name="status" value="open">
	</form>	
	</div>
	<div id="github>"><a href="https://github.com/jancordeiro" target="_blank"><i class="fa-brands fa-github"></i></a></div>
</div>
</body>
</html>