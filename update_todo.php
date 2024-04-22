<?php
$conn = include('config.php');
$todo_id = $_GET["id"];
var_dump($todo_id);
if (isset($todo_id)) {
    $status_update = "UPDATE TODO_LIST 
                SET todo_status = 1 
                WHERE todo_id = ($todo_id)";
    $update_query = mysqli_query($conn, $status_update);
    header("Location: index.php");
}
