<?php
	include ('config.php');	
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
	<div class="tasks-box">
	<h1>PHP Task Manager</h1>
	<div class="table-responsive">
	<table class="table mx-auto w-auto" id="task-table">
		<?php	
			$sql = "SELECT * FROM `tasks`";
			$result = mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($result) > 0) {
				echo '<tr><th>Name</th><th>Description</th><th>Date</th><th>Status</th><th>Action</th></tr>';
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<tr>';
					echo '<td>' . $row['name'] . '</td>';
					echo '<td>' . $row['description'] . '</td>';
					echo '<td>' . $row['date'] . '</td>';
					echo '<td>' . $row['status'] . '</td>';
					echo '<td><button class="btn btn-primary" onclick="markDone(' . $row['id'] . ')">Done</button> <button class="btn btn-danger" onclick="deleteTask(' . $row['id'] . ')">Delete</button></td></tr>';
				}				
			}
			else {
					echo 'No one task has been found';
			}
			
			mysqli_close($conn);
		?>		
	</table>
	</div>
	<a class="btn btn-secondary" href="index.php" role="button">New Task</a>
	</div>
</div>
</body>
<script src="script.js"></script>
</html>