<?php
session_start();
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (name, dept, dob, email, mobile, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $dept, $dob, $email, $mobile, $password);

    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        $error = "Registration failed";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<center>
    <h2>Student Registration</h2>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="name" placeholder="Full Name" required><br><br>
        <input type="text" name="dept" placeholder="Department" required><br><br>
        <input type="date" name="dob" placeholder="Date of Birth" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="mobile" placeholder="Mobile No" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>
<!-- cookies -->
