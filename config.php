<?php
$host = 'localhost';
$password = '';
$db = 'test';
$username = 'root';

$conn = mysqli_connect($host, $username, $password, $db);

if ($conn) {
    echo ("Koneksi berhasil");
}

return $conn;
