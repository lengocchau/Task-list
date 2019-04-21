<?php
//get task data
$idd = filter_input(INPUT_POST, 'idd',FILTER_VALIDATE_INT);
// $number1 = filter_input(INPUT_POST, 'number1',FILTER_VALIDATE_INT);
$todo_task = filter_input(INPUT_POST, 'todo_task');

//validate input

if ($idd == NULL || $idd == FALSE || $todo_task == NULL) {
	$error = "Invalid input data. Check and try again";
	include('error.php');
} else {
	require('database.php');

	//Adding task code
	$query='INSERT INTO task_list
				(taskID, todo) 
				VALUES 
				(:idd, :todo_task)';
	$stm=$db->prepare($query);
	$stm->bindValue(':idd',$idd);
	$stm->bindValue(':todo_task',$todo_task);
	$stm->execute();
	$stm->closeCursor();

	//Display the task list again
	include('index.php');
}











?>