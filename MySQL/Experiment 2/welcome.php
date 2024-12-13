<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['student_id'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

$student_id = $_SESSION['student_id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($student_id); ?>!</h1>
    <p>You have successfully logged in.</p>
    <a href="login.php">Logout</a>
</body>
</html>
