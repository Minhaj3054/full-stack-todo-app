<?php
    // Connect to the database
    require __DIR__ . '/db.php';

    // Delete all tasks from database and UI

    // If valid id, delete the task
    mysqli_query($mysqli, "DELETE from tasks");

    header('Location: index.php');
    exit;

?>