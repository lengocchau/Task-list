<?php
require('database.php');

//get IDs
$task_id = filter_input(INPUT_POST,'task_id',FILTER_VALIDATE_INT);

if ($task_id != FALSE) {
	$query='DELETE FROM task_list
			WHERE taskID=:task_id';
	$stm=$db->prepare($query);
	$stm->bindValue(':task_id', $task_id);
	$success=$stm->execute();
	$stm->closeCursor();
}

//display the todo task
include('index.php');


?>