<?php
//get task data
$idd = filter_input(INPUT_GET, 'idd');

$todo_task = filter_input(INPUT_GET, 'todo_task');

//validate input`

if ($todo_task == NULL || $idd == NULL) {
	$error = "Invalid input data. Check and try again";
	include('error.php');
} else {
	require('database.php');


	// get all todo task
	// $queryAlltask='SELECT * FROM task_list'
	// $stm=$db->prepare($queryAlltask);
	// $stm->execute();
	// $alltasks=$stm->fetchAll();
	// $stm->closeCursor();

	//Edit task code
	$query="UPDATE task_list
				SET todo = :todo_task
				WHERE taskID = :idd";
	$stm=$db->prepare($query);	

	$stm->bindValue(':idd',$idd);
	$stm->bindValue(':todo_task',$todo_task);
	$stm->execute();
	$stm->closeCursor();

	//Display the task list again
	include('index.php');
}
?>
