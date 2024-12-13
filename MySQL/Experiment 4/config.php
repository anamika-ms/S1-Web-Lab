<?php
$conn = mysqli_connect('localhost', 'root', '', 'studentsdb');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
