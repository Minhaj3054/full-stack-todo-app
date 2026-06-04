<?php
    // Connect to the database
    require __DIR__ . '/db.php';

    // Get the id from the hidden input
    $task_id = (int)($_POST['id'] ?? 0);

    // If valid id flip the is_done from 0 - 1 or 1 - 0
    if($task_id>0){
        mysqli_query(
            $mysqli,
            "UPDATE tasks SET is_done = IF(is_done = 1, 0, 1) WHERE id=$task_id"
        );
    }
    header('Location: index.php');
    exit;
?>