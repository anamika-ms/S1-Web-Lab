<?php
$host = 'localhost';
$db   = 'studentdatabase';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
