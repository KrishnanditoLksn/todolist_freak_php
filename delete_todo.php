<?php
$conn = include('config.php');
$todo_id = $_GET["id"];
$delete_todo = "DELETE FROM 
                TODO_LIST 
                WHERE todo_id = $todo_id;";
$delete_query = mysqli_query($conn, $delete_todo);
if ($delete_query) {
    header("Location: todo.php");
}
