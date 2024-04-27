<?php
$host = 'localhost';
$password = '';
$db = 'test';
$username = 'root';

$conn = mysqli_connect($host, $username, $password, $db);

return $conn;
