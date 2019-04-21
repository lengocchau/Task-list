<?php

//get ID task
 $idd = filter_input(INPUT_GET, 'idd',FILTER_VALIDATE_INT);


if ($idd==NULL || $idd==FALSE) {
	$error = "Invalid input data. Please check again";
	include('error.php');
} else {
	require('database.php');
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Task list</title>
	<link rel="stylesheet" type="text/css" href="makeup_again.css">
	
</head>

<body>
		
	
	<main id="border">
		<header><h1>Edit task</h1></header>
		<form action="update_task.php" method="get" >
			<div id="data">
				<!-- <label>Number:</label>
				<input type="number" name="idd"><br>
				 -->
				 <p>Task number: <?php echo $idd ?></p>


				<label>Todo task:</label>
				<input type="text" name="todo_task"><br>
			</div>		
			<div id="buttons">	
				<label>&nbsp;</label>
				<input type="hidden" name="idd" value='<?php echo $idd ;?>'>
				<input type="submit" value="Update"><br>
			</div>
			
		</form>
		<p><a href="index.php">View task list</a></p>
	</main>

	<footer></footer>


</body>
</html>