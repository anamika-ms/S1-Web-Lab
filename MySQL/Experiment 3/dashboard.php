<?php
session_start();
require 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM students WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<body>
<center>
    <h2><marquee>Welcome, <?php echo htmlspecialchars($user['name']); ?></marquee></h2>
    
    <h3>Your Profile</h3>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>Department: <?php echo htmlspecialchars($user['dept']); ?></p>
    <p>Mobile No: <?php echo htmlspecialchars($user['mobile']); ?></p>
    <p>DOB: <?php echo htmlspecialchars($user['dob']); ?></p>
    <a href="login.php">Logout</a>
</body>
</html>
