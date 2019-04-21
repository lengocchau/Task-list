<?php 

require('database.php');

// get task ID
if (!isset($task_id)) {
	$task_id = filter_input(INPUT_GET,'task_id',FILTER_VALIDATE_INT);
	if ($task_id == NULL || $task_id == FALSE) {
		$task_id = 1;
	}
}

// get all tasks from task_list
$queryTasklist = 'SELECT * FROM task_list
					ORDER BY taskID';
$stm=$db->prepare($queryTasklist);

$stm->execute();
$tasklist=$stm->fetchAll();
$stm->closeCursor();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Task list</title>
	<link rel="stylesheet" type="text/css" href="makeup_again.css">
</head>
<body>



	
	<main>
		<h1>Task list</h1>
		<table>
            <tr>
                <th>Number</th>
                <th>Content</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
               <!--  <th>&nbsp;</th> -->
            </tr>

            <?php foreach ($tasklist as $task) : ?>
            <tr>
                <td><?php echo $task['taskID']; ?></td>
                <td><?php echo $task['todo']; ?></td>
                
                <td><form action="delete_task.php" method="post">
                    <input type="hidden" name="task_id"
                           value="<?php echo $task['taskID']; ?>">
                  
                    <input type="submit" value="Delete">
                </form></td>

                <td>
                     <form action="update_task_form.php" method='get'>
                       <input type="hidden" name="idd" value="<?php echo $task['taskID'] ; ?>"> 
                       <input type="submit" value="Edit">
                   </form>
              
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <p><a href="add_task_form.php">Add new task</a></p>
	</main>

<footer></footer>
</body>
</html>

