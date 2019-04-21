<!DOCTYPE html>
<html>
<head>
	<title>Task list</title>
	<link rel="stylesheet" type="text/css" href="makeup.css">
	
</head>

<body>
		
	
	<main id="border">
		<header><h1>Adding new task</h1></header>
		<form action="add_task.php" method="post" id="add_task_form">
			<div id="data">
				<label>Number:</label>
				<input type="number" name="idd"><br>

				<label>Todo task:</label>
				<input type="text" name="todo_task"><br>
			</div>		
			<div id="buttons">	
				<label>&nbsp;</label>
				<input type="submit" value="ADD TASK"><br>
			</div>
			
		</form>
		<p><a href="index.php">View task list</a></p>
	</main>

	<footer></footer>


</body>
</html>