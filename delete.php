<?php
    // Connect to the database
    require __DIR__ . '/db.php';

    // Get the id from the hidden input
    $task_id = (int)($_POST['id'] ?? 0);

    // If valid id, delete the task
    if($task_id > 0){
        mysqli_query($mysqli, "DELETE from tasks WHERE id = $task_id");
    }

    header('Location: index.php');
    exit;

?>